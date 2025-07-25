@extends('layouts.app')
@section('title', 'Cadastro')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
  <div class="max-w-md w-full bg-white rounded-xl shadow-xl p-8 border border-blue-100">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Cadastrar Administradora</h1>
    <form method="POST" action="{{ route('admin.register') }}">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-sm font-semibold text-blue-800 mb-1">Nome</label>
        <input type="text" name="name" id="name" required autofocus class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-sm font-semibold text-blue-800 mb-1">E-mail</label>
        <input type="email" name="email" id="email" required class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-sm font-semibold text-blue-800 mb-1">Senha</label>
        <input type="password" name="password" id="password" required class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <button type="submit" class="w-full py-2 rounded-lg bg-blue-900 text-white font-semibold shadow hover:bg-blue-700 transition">Cadastrar</button>
      <div class="mt-4 text-center">
        <a href="{{ route('admin.login') }}" class="text-blue-700 underline hover:text-blue-900 text-sm">Já possui cadastro? Entrar</a>
      </div>
    </form>
  </div>
</div>
@endsection
