@extends('layouts.admin')

@section('title', 'Monitoramento de Acessos')

@section('content')
<div class="max-w-7xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-semibold mb-6">Monitoramento de Acessos</h1>

    <table class="min-w-full border border-gray-300 rounded overflow-hidden">
        <thead class="bg-blue-600 text-white">
            <tr>
                <th class="py-3 px-6 text-left">Data/Hora</th>
                <th class="py-3 px-6 text-left">Origem</th>
                <th class="py-3 px-6 text-left">IP</th>
                <th class="py-3 px-6 text-left">Dispositivo</th>
                <th class="py-3 px-6 text-left">User Agent</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acessos as $acesso)
            <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-6">{{ $acesso->created_at->format('d/m/Y H:i:s') }}</td>
                <td class="py-3 px-6">{{ $acesso->origem ?? 'direto' }}</td>
                <td class="py-3 px-6">{{ $acesso->ip }}</td>
                <td class="py-3 px-6">{{ $acesso->device_type }}</td>
                <td class="py-3 px-6 break-words">{{ $acesso->user_agent }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        {{ $acessos->links() }}
    </div>
</div>
@endsection
