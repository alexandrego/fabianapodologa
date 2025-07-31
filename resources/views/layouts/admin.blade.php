<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Administrativa - @yield('title')</title>
    <link href="{{ asset('build/assets/app-VESlwILE.css') }}" rel="stylesheet" />
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-gray-800">Dashboard Administrativa</h1>
        <div class="flex items-center space-x-4">
            @php
                use Illuminate\Support\Facades\Auth;
            @endphp

            @if(Auth::guard('web')->check())
                <span class="text-gray-700 font-semibold">Olá, {{ Auth::user()->name ?? 'Usuário' }}</span>
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-gray-900 p-2 rounded hover:bg-gray-200" title="Dashboard Administrativa">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4H9v4a2 2 0 0 1-2 2H3z"/>
                    </svg>
                </a>
                <button class="p-2 rounded-full hover:bg-gray-200" title="Notificações">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/></svg>
                </button>
            @elseif(Auth::guard('patient')->check())
                <a href="{{ route('patient.dashboard') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700" title="Dashboard do Paciente">Área do Paciente</a>
            @endif

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="bg-white text-red-600 px-4 py-2 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Sair</button>
            </form>
        </div>
    </header>

    <div class="flex flex-1 overflow-hidden">
        <nav class="w-64 bg-blue-900 text-white flex flex-col p-6 space-y-6">
            <div class="text-2xl font-bold border-b border-blue-800 pb-4">
                <!-- Título removido conforme solicitado -->
            </div>
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l2-2 4 4 8-8 4 4v6H3z"/></svg>
                <span>Início</span>
            </a>
            <a href="{{ route('admin.accesses.index') }}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12" y2="8"/></svg>
                <span>Monitoramento de Acessos</span>
            </a>
            <a href="{{ route('admin.patients.index') }}" class="flex items-center space-x-3 px-3 py-2 rounded hover:bg-blue-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-3-3.87"/><path d="M4 21v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/></svg>
                <span>Gerenciamento de Pacientes</span>
            </a>
        </nav>

        <main class="flex-1 overflow-auto p-6 bg-gray-50">
            @yield('content')
        </main>
    </div>

</body>
</html>
