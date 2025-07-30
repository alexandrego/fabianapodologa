@extends('layouts.admin')

@section('title', 'Gerenciamento de Pacientes')

@section('content')
<div class="max-w-7xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-3xl font-semibold mb-6">Pacientes</h1>

    <a href="{{ route('admin.patients.create') }}" class="mb-6 inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Novo Paciente</a>

    @if(session('success'))
        <div class="mb-6 p-3 bg-green-200 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full border border-gray-300 rounded overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-3 px-6 text-left">Nome</th>
                <th class="py-3 px-6 text-left">Email</th>
                <th class="py-3 px-6 text-left">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-6">{{ $patient->name }}</td>
                <td class="py-3 px-6">{{ $patient->email }}</td>
                <td class="py-3 px-6">
                    <a href="{{ route('admin.patients.edit', $patient) }}" class="text-blue-600 hover:underline mr-4">Editar</a>
                    <form action="{{ route('admin.patients.destroy', $patient) }}" method="POST" class="inline" onsubmit="return confirm('Tem certeza que deseja excluir este paciente?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        {{ $patients->links() }}
    </div>
</div>
@endsection
