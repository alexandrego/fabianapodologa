@extends('layouts.app')
@section('title', 'Dashboard do Paciente')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-10">
  <div class="max-w-2xl w-full bg-white rounded-xl shadow-xl p-8 border border-blue-100">
    <h1 class="text-2xl font-bold text-blue-900 mb-6">Bem-vindo ao seu painel de paciente!</h1>
    <p class="mb-4 text-blue-800">Aqui você poderá acompanhar seus agendamentos, histórico e dados pessoais.</p>
    <a href="{{ route('patient.logout') }}" class="px-4 py-2 rounded-lg bg-blue-900 text-white font-semibold shadow hover:bg-blue-700 transition">Sair</a>
  </div>
</div>
@endsection
