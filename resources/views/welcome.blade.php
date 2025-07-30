@extends('layouts.app')

@section('title', 'Podóloga Fabiana Gonçalves | Podologia em Balneário Camboriú')
@section('description', 'Agende sua consulta com a Podóloga Fabiana Gonçalves em Balneário Camboriú. Especialista em cuidados com os pés, tratamentos de patologias, atendimento personalizado e informações sobre podologia.')
@section('meta')
    <meta name="description" content="Agende sua consulta com a Podóloga Fabiana Gonçalves em Balneário Camboriú. Especialista em cuidados com os pés, tratamentos de patologias, atendimento personalizado e informações sobre podologia.">
    <meta property="og:title" content="Podóloga Fabiana Gonçalves | Podologia em Balneário Camboriú">
    <meta property="og:description" content="Agende sua consulta com a Podóloga Fabiana Gonçalves em Balneário Camboriú. Especialista em cuidados com os pés, tratamentos de patologias, atendimento personalizado e informações sobre podologia.">
    <meta property="og:image" content="{{ asset('assets/img/banner-podologia.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <link rel="canonical" href="{{ url('/') }}">
@endsection

@section('content')

    <div id="main-content">
        <livewire:banner />
        <livewire:minhas-especialidades />
        <livewire:patologias />
        <livewire:sobre-mim />
        <livewire:depoimentos />
        <livewire:onde-atendo />
        <livewire:footer />
    </div>

    <!-- Menu de login/entrar fixo no bottom para mobile -->
    <!-- Desktop: menu superior -->
    <div class="hidden sm:block absolute top-4 right-4 z-50">
        @php
            use Illuminate\Support\Facades\Auth;
        @endphp

        @if(Auth::guard('web')->check())
            <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg bg-blue-900 text-white text-sm font-semibold shadow hover:bg-blue-700 transition">Área Administrativa</a>
        @elseif(Auth::guard('patient')->check())
            <a href="{{ route('patient.dashboard') }}" class="px-4 py-2 rounded-lg bg-green-700 text-white text-sm font-semibold shadow hover:bg-green-800 transition ml-2">Área do Paciente</a>
        @else
            <a href="{{ route('admin.login') }}" class="px-4 py-2 rounded-lg bg-blue-900 text-white text-sm font-semibold shadow hover:bg-blue-700 transition">Área Administrativa</a>
            <a href="{{ route('patient.login') }}" class="px-4 py-2 rounded-lg bg-green-700 text-white text-sm font-semibold shadow hover:bg-green-800 transition ml-2">Área do Paciente</a>
        @endif
    </div>

    <!-- Mobile: menu fixo no bottom -->
    <div class="sm:hidden fixed bottom-0 left-0 w-full z-40 bg-white border-t border-gray-200 shadow-lg flex justify-center py-2 gap-2">
        @if(Auth::guard('web')->check())
            <a href="{{ route('admin.dashboard') }}" class="flex-1 mx-2 px-0 py-3 rounded-lg bg-blue-900 text-white text-base font-semibold shadow hover:bg-blue-700 transition text-center">Área Administrativa</a>
        @elseif(Auth::guard('patient')->check())
            <a href="{{ route('patient.dashboard') }}" class="flex-1 mx-2 px-0 py-3 rounded-lg bg-green-700 text-white text-base font-semibold shadow hover:bg-green-800 transition text-center">Área do Paciente</a>
        @else
            <a href="{{ route('admin.login') }}" class="flex-1 mx-2 px-0 py-3 rounded-lg bg-blue-900 text-white text-base font-semibold shadow hover:bg-blue-700 transition text-center">Área Administrativa</a>
            <a href="{{ route('patient.login') }}" class="flex-1 mx-2 px-0 py-3 rounded-lg bg-green-700 text-white text-base font-semibold shadow hover:bg-green-800 transition text-center">Área do Paciente</a>
        @endif
    </div>

    <!-- Script: adicionar padding-bottom ao conteúdo principal em mobile -->
    <script>
        function adjustPaddingForMobileMenu() {
            const mainContent = document.getElementById('main-content');
            if (window.innerWidth < 640) {
                mainContent.style.paddingBottom = '70px'; // altura do menu + espaçamento
            } else {
                mainContent.style.paddingBottom = '0';
            }
        }
        window.addEventListener('resize', adjustPaddingForMobileMenu);
        window.addEventListener('DOMContentLoaded', adjustPaddingForMobileMenu);
    </script>
@endsection
