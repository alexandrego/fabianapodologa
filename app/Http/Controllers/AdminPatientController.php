<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class AdminPatientController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('name')->paginate(20);
        return view('admin.patients.index', compact('patients'));
    }

    public function create()
    {
        return view('admin.patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'email.unique' => 'Este e-mail já está sendo usado por outro paciente.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'password.confirmed' => 'A confirmação da senha não confere.',
        ]);

        Patient::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.patients.index')->with('success', 'Paciente criado com sucesso.');
    }

    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email,' . $patient->id,
            'password' => 'nullable|string|min:6|confirmed',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'name.max' => 'O nome não pode ter mais de 255 caracteres.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, informe um e-mail válido.',
            'email.unique' => 'Este e-mail já está sendo usado por outro paciente.',
            'password.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'password.confirmed' => 'A confirmação da senha não confere.',
        ]);

        $patient->name = $request->name;
        $patient->email = $request->email;
        if ($request->filled('password')) {
            $patient->password = bcrypt($request->password);
        }
        $patient->save();

        return redirect()->route('admin.patients.index')->with('success', 'Paciente atualizado com sucesso.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('admin.patients.index')->with('success', 'Paciente excluído com sucesso.');
    }
}
