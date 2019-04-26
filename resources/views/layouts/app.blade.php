<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <meta id="appName" name="appName" content="{{ config('app.name') }}">
    <meta id="appUrl" name="appUrl" content="{{ config('app.url') }}">
    <meta id="storageUrl" name="storageUrl" content="{{ config('app.storageUrl') }}">
    <meta id="appVersion" name="appVersion" content="{{ config('app.version') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Theme Css -->
    <link href="{{ asset('theme/adminbsb-materialdesign/plugins/node-waves/waves.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/adminbsb-materialdesign/plugins/animate-css/animate.css') }}" rel="stylesheet">

    <!-- User define stylesheets -->
    @yield('stylesheets')

    <link href="{{ asset('theme/adminbsb-materialdesign/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/adminbsb-materialdesign/css/themes/theme-green.min.css') }}" rel="stylesheet">

    <!-- App Css-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>
<body class="theme-green">
<div id="app">
    @include("layouts.includes.header")
    @if(Auth::check())
        @include("layouts.includes.loader")
        @include("layouts.includes.overlays")
        @include("layouts.includes.sidebar")
    @endif
    <main>
        @yield('content')
    </main>
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap/js/bootstrap.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/plugins/node-waves/waves.js') }}"></script>

@if(Auth::check())
<!-- Theme Js -->
<script src="{{ asset('theme/adminbsb-materialdesign/js/admin.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
@endif
<!-- User Define -->
@yield('scripts')

</body>
</html>
