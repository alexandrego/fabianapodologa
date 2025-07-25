<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Gerar código 2FA
            $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            \App\Models\TwoFactorCode::updateOrCreate([
                'user_id' => Auth::id()
            ], [
                'code' => $code,
                'expires_at' => now()->addMinutes(10)
            ]);
            \Mail::to(Auth::user()->email)->send(new \App\Mail\TwoFactorCodeMail(Auth::user(), $code));
            session(['2fa_user_id' => Auth::id()]);
            Auth::logout();
            return redirect()->route('admin.verify_code');
        }
        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }
    public function showVerifyCodeForm()
    {
        return view('auth.verify_code');
    }

    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required|string|size:6']);
        $userId = session('2fa_user_id');
        $code = \App\Models\TwoFactorCode::where('user_id', $userId)
            ->where('code', $request->code)
            ->where('expires_at', '>', now())
            ->first();
        if ($code) {
            $user = \App\Models\User::find($userId);
            Auth::login($user);
            // Registrar acesso
            \DB::table('acessos')->insert([
                'user_id' => $user->id,
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'origem' => $request->session()->get('origem', 'direto'),
                'created_at' => now(),
            ]);
            // Enviar notificação de acesso por e-mail
            \Mail::to($user->email)->send(new \App\Mail\AdminAccessNotification($user, $request->ip(), now()->format('d/m/Y H:i')));
            $code->delete();
            session()->forget('2fa_user_id');
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors(['code' => 'Código inválido ou expirado']);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        // Registrar acesso
        \DB::table('acessos')->insert([
            'user_id' => $user->id,
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'origem' => $request->session()->get('origem', 'direto'),
            'created_at' => now(),
        ]);
        // Enviar notificação de cadastro por e-mail
        \Mail::to($user->email)->send(new \App\Mail\AdminRegisterNotification($user));
        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
