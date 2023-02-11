<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Ifakara Catholic Diocese' }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}">> --}}

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./site/css/style.css">
    <link rel="stylesheet" href="site/css/bootstrap.min.css">
    <link rel="stylesheet" href="site/css/animate.css">
    <link rel="stylesheet" href="site/css/classy-nav.css">
    <link rel="stylesheet" href="site/css/magnific-popup.css">
    <link rel="stylesheet" href="site/css/owl.carousel.min.css">
    <link rel="stylesheet" href="site/css/font-awesome.min.css">
    <link rel="stylesheet" href="site/css/custom.css">


    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    @inertia


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="site/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="site/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="site/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="site/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="site/js/active.js"></script>
</body>

</html>
