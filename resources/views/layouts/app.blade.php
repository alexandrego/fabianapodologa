<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/img/nova-logo.svg') }}">

    <title>Podologia Dra. Fabiana</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-[#D9D9D9]">
    <div>
        @yield('content')
    </div>
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
