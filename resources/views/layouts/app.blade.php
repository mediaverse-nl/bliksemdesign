<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Start Bootstrap">
    <meta name="google-site-verification" content="37Tru9bxB3NrqXCt6JT5Vx8wz2AJQ0G4TkC-j8WL3kw">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('meta_title')</title>

    <meta name="description" content="@yield('meta_description')">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            padding-top: 100px;
        }
        .navbar-fixed-top{
            padding-top: 10px;
            height: 70px;
        }
        .navbar-fixed-top.scrolled {
            background-color: #fff !important;
            transition: background-color 200ms linear;
        }
    </style>

    @stack('css')
</head>
<body>
    <div id="app">
        @include('includes.menu')

        @yield('content')
    </div>

    @include('includes.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(function () {
            var $nav = $(".navbar-fixed-top");

            if ($(this).scrollTop() > 0){
                $nav.addClass('scrolled');
            }

            $(document).scroll(function () {
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>

    @stack('js')
</body>
</html>
