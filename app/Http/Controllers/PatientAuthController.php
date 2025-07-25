<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use App\Models\PatientTwoFactorCode;
use App\Mail\PatientTwoFactorCodeMail;

class PatientAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('patient.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('patient')->attempt($credentials)) {
            $patient = Auth::guard('patient')->user();
            // Gerar código 2FA
            $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            PatientTwoFactorCode::updateOrCreate([
                'patient_id' => $patient->id
            ], [
                'code' => $code,
                'expires_at' => now()->addMinutes(10)
            ]);
            \Mail::to($patient->email)->send(new PatientTwoFactorCodeMail($patient, $code));
            session(['2fa_patient_id' => $patient->id]);
            Auth::guard('patient')->logout();
            return redirect()->route('patient.verify_code');
        }
        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    public function showRegisterForm()
    {
        return view('patient.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $patient = Patient::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('patient')->login($patient);
        // Gerar código 2FA
        $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        PatientTwoFactorCode::updateOrCreate([
            'patient_id' => $patient->id
        ], [
            'code' => $code,
            'expires_at' => now()->addMinutes(10)
        ]);
        \Mail::to($patient->email)->send(new PatientTwoFactorCodeMail($patient, $code));
        session(['2fa_patient_id' => $patient->id]);
        Auth::guard('patient')->logout();
        return redirect()->route('patient.verify_code');
    }
    public function showVerifyCodeForm()
    {
        return view('patient.verify_code');
    }

    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required|string|size:6']);
        $patientId = session('2fa_patient_id');
        $code = PatientTwoFactorCode::where('patient_id', $patientId)
            ->where('code', $request->code)
            ->where('expires_at', '>', now())
            ->first();
        if ($code) {
            $patient = \App\Models\Patient::find($patientId);
            Auth::guard('patient')->login($patient);
            $code->delete();
            session()->forget('2fa_patient_id');
            return redirect()->route('patient.dashboard');
        }
        return back()->withErrors(['code' => 'Código inválido ou expirado']);
    }
}
