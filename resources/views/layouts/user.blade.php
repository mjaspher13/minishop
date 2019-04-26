<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name') }} | Sign In</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Theme Css -->
    <link href="{{ asset('theme/adminbsb-materialdesign/plugins/node-waves/waves.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/adminbsb-materialdesign/plugins/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/adminbsb-materialdesign/css/style.min.css') }}" rel="stylesheet">

    <!-- App Css-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    @yield('content')

    <!-- Jquery Core Js -->
    <script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('theme/adminbsb-materialdesign/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('theme/adminbsb-materialdesign/plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ asset('theme/adminbsb-materialdesign/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Theme Js -->
    <script src="{{ asset('theme/adminbsb-materialdesign/js/admin.js') }}"></script>

</body>
</html>
