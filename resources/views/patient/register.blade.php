@extends('layouts.app')
@section('title', 'Cadastro')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
  <div class="max-w-md w-full bg-white rounded-xl shadow-xl p-8 border border-blue-100">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Cadastrar Paciente</h1>
    <form method="POST" action="{{ route('patient.register') }}" x-data="{ loading: false }" @submit="loading = true">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-sm font-semibold text-blue-800 mb-1">Nome</label>
        <input type="text" name="name" id="name" required autofocus class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-semibold text-blue-800 mb-1">E-mail</label>
        <input type="email" name="email" id="email" required class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-semibold text-blue-800 mb-1">Senha</label>
        <input type="password" name="password" id="password" required class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div class="mb-6">
        <label for="password_confirmation" class="block text-sm font-semibold text-blue-800 mb-1">Confirme a Senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <button type="submit" class="w-full py-2 rounded-lg bg-blue-900 text-white font-semibold shadow hover:bg-blue-700 transition flex items-center justify-center" :disabled="loading">
        <span x-show="!loading">Cadastrar</span>
        <svg x-show="loading" class="animate-spin h-5 w-5 ml-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path></svg>
      </button>
      @if($errors->any())
        <div class="mt-4 text-red-600 text-sm text-center">
          @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
        </div>
      @endif
      <div class="mt-4 text-center space-y-2">
        <a href="{{ route('patient.login') }}" class="text-blue-700 underline hover:text-blue-900 text-sm">Já possui cadastro? Entrar</a><br>
        <a href="/" class="text-gray-500 underline hover:text-blue-700 text-sm">Voltar para Home</a>
      </div>
    </form>
  </div>
</div>
@endsection
