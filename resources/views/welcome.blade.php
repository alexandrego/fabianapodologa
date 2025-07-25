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
    <livewire:banner />

    <livewire:minhas-especialidades />

    <livewire:patologias />

    <livewire:sobre-mim />

    <livewire:depoimentos />

    <livewire:onde-atendo />

    <livewire:footer />

    <!-- Menu de login/entrar -->
    <div class="absolute top-4 right-4 z-50">
        <a href="{{ route('admin.login') }}" class="px-4 py-2 rounded-lg bg-blue-900 text-white text-sm font-semibold shadow hover:bg-blue-700 transition">Área Administrativa</a>
        <a href="{{ route('patient.login') }}" class="px-4 py-2 rounded-lg bg-green-700 text-white text-sm font-semibold shadow hover:bg-green-800 transition ml-2">Área do Paciente</a>
    </div>
@endsection
