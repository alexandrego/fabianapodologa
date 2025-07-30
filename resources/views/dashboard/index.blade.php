@extends('layouts.admin')

@section('title', 'Dashboard Administrativa')

@section('content')
<div class="p-6 bg-white rounded shadow">
    <!-- Título removido conforme solicitado -->

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="p-6 bg-blue-100 rounded shadow">
            <h2 class="text-xl font-semibold mb-2">Monitoramento de Acessos</h2>
            <p>Total de acessos registrados: {{ $acessos->count() }}</p>
            <a href="{{ route('admin.accesses.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver detalhes</a>
        </div>

        <div class="p-6 bg-green-100 rounded shadow">
            <h2 class="text-xl font-semibold mb-2">Gerenciamento de Pacientes</h2>
            <p>Gerencie os pacientes cadastrados no sistema.</p>
            <a href="{{ route('admin.patients.index') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Gerenciar Pacientes</a>
        </div>

        <div class="p-6 bg-gray-100 rounded shadow">
            <h2 class="text-xl font-semibold mb-2">Próximos Pacientes</h2>
            <ul class="divide-y divide-gray-300 max-h-96 overflow-y-auto">
                @foreach($pacientes as $paciente)
                <li class="flex items-center py-3 space-x-4">
                    <img src="{{ asset('assets/img/avatar-placeholder.png') }}" alt="Avatar" class="w-12 h-12 rounded-full object-cover" />
                    <div>
                        <p class="font-semibold text-gray-900">{{ $paciente->name }}</p>
                        <!-- Dia e horário removidos pois não existem na tabela patients -->
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
