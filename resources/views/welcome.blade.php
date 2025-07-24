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
@endsection
