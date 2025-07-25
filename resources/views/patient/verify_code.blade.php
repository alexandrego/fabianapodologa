@extends('layouts.app')
@section('title', 'Verificação 2FA')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
  <div class="max-w-md w-full bg-white rounded-xl shadow-xl p-8 border border-blue-100">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Confirme seu acesso</h1>
    <form method="POST" action="{{ route('patient.verify_code') }}">
      @csrf
      <div class="mb-4">
        <label for="code" class="block text-sm font-semibold text-blue-800 mb-1">Código de 6 dígitos</label>
        <input type="text" name="code" id="code" maxlength="6" required autofocus class="w-full px-4 py-2 rounded-lg border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 text-center tracking-widest">
      </div>
      <button type="submit" class="w-full py-2 rounded-lg bg-green-700 text-white font-semibold shadow hover:bg-green-800 transition flex items-center justify-center" x-data="{ loading: false }" @submit="loading = true" :disabled="loading">
        <span x-show="!loading">Confirmar</span>
        <svg x-show="loading" class="animate-spin h-5 w-5 ml-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path></svg>
      </button>
      @if($errors->any())
        <div class="mt-4 text-red-600 text-sm text-center">
          @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
        </div>
      @endif
      <div class="mt-4 text-center">
        <a href="/" class="text-gray-500 underline hover:text-blue-700 text-sm">Voltar para Home</a>
      </div>
    </form>
  </div>
</div>
@endsection
