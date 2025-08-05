@extends('layouts.admin')

@section('title', 'Editar Paciente')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-semibold mb-6">Editar Paciente</h1>

    <a href="{{ route('admin.patients.index') }}" class="mb-6 inline-block text-blue-600 hover:underline">&larr; Voltar para lista de pacientes</a>

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
            <h4 class="font-semibold mb-2">Por favor, corrija os seguintes erros:</h4>
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.patients.update', $patient) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Nome <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   name="name" 
                   id="name" 
                   value="{{ old('name', $patient->name) }}" 
                   required
                   class="w-full px-3 py-2 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                E-mail <span class="text-red-500">*</span>
            </label>
            <input type="email" 
                   name="email" 
                   id="email" 
                   value="{{ old('email', $patient->email) }}" 
                   required
                   class="w-full px-3 py-2 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="border-t pt-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Alterar Senha (Opcional)</h3>
            <p class="text-sm text-gray-600 mb-4">Deixe os campos de senha em branco se não quiser alterar a senha atual.</p>
            
            <div class="space-y-4">
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Nova Senha</label>
                    <input type="password" 
                           name="password" 
                           id="password" 
                           class="w-full px-3 py-2 border @error('password') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <p class="mt-1 text-sm text-gray-500">Mínimo de 6 caracteres</p>
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmar Nova Senha</label>
                    <input type="password" 
                           name="password_confirmation" 
                           id="password_confirmation" 
                           class="w-full px-3 py-2 border @error('password_confirmation') border-red-500 @else border-gray-300 @enderror rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="flex justify-between items-center pt-6 border-t border-gray-200">
            <a href="{{ route('admin.patients.index') }}" 
               class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-700 font-medium rounded-md hover:bg-gray-400 transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Cancelar
            </a>
            <button type="submit" 
                    class="inline-flex items-center px-6 py-3 bg-blue-600 border border-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 hover:border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 shadow-md">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Atualizar Paciente
            </button>
        </div>
    </form>
</div>
@endsection
