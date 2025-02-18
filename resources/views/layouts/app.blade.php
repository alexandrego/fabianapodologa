<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/img/nova-logo.svg') }}">

    <title>Podologia Dra. Fabiana</title>

    @vite('resources/css/app.css')
    @livewireStyles

    <!-- Google Tag para conversão -->
    <script>
        function gtag_report_conversion(url) {
        gtag('event', 'conversion', {
            'send_to': 'AW-687125838/R69nCI_d9Z8aEM7q0scC',
            'event_callback': function() {
                window.location.href = url;
            }
        });
        // Retorna true para permitir que o link funcione mesmo se o evento não for registrado
        return true;
        }
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W64ZGD8KZB">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W64ZGD8KZB');
    </script>
</head>
<body class="bg-[#D9D9D9]">
    <div>
        @yield('content')
    </div>
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
