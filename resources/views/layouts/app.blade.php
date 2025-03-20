<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tag conversão --}}
    <meta name="google-site-verification" content="LgIl8u4HE7U7TCeINaCTHtoxpnf6OT0vq0U4WZOmrBc" />

    <link rel="icon" href="{{ asset('assets/img/logo-705-x-1023.png') }}">

    <title>Podóloga - Fabiana Gonçalves</title>

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

    <!-- Google tag (gtag.js) Alexandre Conta Suspensa -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-W64ZGD8KZB">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-W64ZGD8KZB');
    </script> --}}

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16942256011">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16942256011');
    </script>
</head>
<body class="bg-[#ffffff]">
    <div>
        @yield('content')
    </div>
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
