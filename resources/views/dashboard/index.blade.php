@extends('layouts.app')
@section('title', 'Dashboard de Acessos')
@section('content')
<div class="max-w-4xl mx-auto py-10">
  <h1 class="text-2xl font-bold mb-6">Monitoramento de Acessos</h1>
  <table class="w-full bg-white rounded-xl shadow p-4">
    <thead>
      <tr class="bg-blue-100 text-blue-900">
        <th class="p-2">Data/Hora</th>
        <th class="p-2">Origem</th>
        <th class="p-2">IP</th>
        <th class="p-2">User Agent</th>
      </tr>
    </thead>
    <tbody>
      @foreach($acessos as $acesso)
      <tr class="border-b">
        <td class="p-2">{{ $acesso->created_at }}</td>
        <td class="p-2">{{ $acesso->origem }}</td>
        <td class="p-2">{{ $acesso->ip }}</td>
        <td class="p-2">{{ $acesso->user_agent }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
