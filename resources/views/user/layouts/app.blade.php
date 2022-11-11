<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Custom fonts for this template-->
        <link href="{{ url('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <!--<link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">-->
        <link
            href="https://fonts.googleapis.com/css?family=Inter:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="{{ url('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/login.css') }}" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">


        <main class="py-4">
            @yield('content')
        </main>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ url('assets/js/sb-admin-2.min.js') }}"></script>

    </body>

    </html>
