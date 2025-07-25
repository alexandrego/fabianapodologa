@extends('layouts.app')
@section('title', 'Verificação 2FA')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
  <div class="max-w-md w-full bg-white rounded-xl shadow-xl p-8 border border-blue-100">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Confirme seu acesso</h1>
    <form method="POST" action="{{ route('admin.verify_code') }}">
      @csrf
      <div class="mb-4">
        <label for="code" class="block text-sm font-semibold text-blue-800 mb-1">Código de 6 dígitos</label>
        <input type="text" name="code" id="code" maxlength="6" required autofocus class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center tracking-widest">
      </div>
      <button type="submit" class="w-full py-2 rounded-lg bg-blue-900 text-white font-semibold shadow hover:bg-blue-700 transition">Confirmar</button>
      <div class="mt-4 text-center">
        <a href="/" class="text-gray-500 underline hover:text-blue-700 text-sm">Voltar para Home</a>
      </div>
    </form>
  </div>
</div>
@endsection
