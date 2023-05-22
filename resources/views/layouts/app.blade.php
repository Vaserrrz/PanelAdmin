<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ 'CloudSat' }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        {{--     Fonts and icons     --}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        {{-- CSS Files --}}
        <link href="{{ asset('light-bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('light-bootstrap/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
        {{-- CSS Just for demo purpose, dont include it in your project --}}
        <link href="{{ asset('light-bootstrap/css/demo.css') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper @if (!auth()->check() || request()->route()->getName() == "") wrapper-full-page @endif">

            @if (auth()->check() && request()->route()->getName() != "")
                @include('layouts.navbars.sidebar')
                @include('pages/sidebarstyle')
            @endif

            <div class="@if (auth()->check() && request()->route()->getName() != "") main-panel @endif">
                @yield('content')
            </div>
        </div>

    </body>
       {{--   Core JS Files   --}}
    <script src="{{ asset('light-bootstrap/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('light-bootstrap/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('light-bootstrap/js/plugins/jquery.sharrre.js') }}"></script>
    {{--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ --}}
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-switch.js') }}"></script>
    {{--  Google Maps Plugin    --}}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    {{--  Chartist Plugin  --}}
    <script src="{{ asset('light-bootstrap/js/plugins/chartist.min.js') }}"></script>
    {{--  Notifications Plugin    --}}
    <script src="{{ asset('light-bootstrap/js/plugins/bootstrap-notify.js') }}"></script>
    {{-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc --}}
    <script src="{{ asset('light-bootstrap/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
    {{-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! --}}
    <script src="{{ asset('light-bootstrap/js/demo.js') }}"></script>
    @stack('js')

</html>
