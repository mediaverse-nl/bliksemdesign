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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            padding-top: 100px;
        }
    </style>

    @stack('css')
</head>
<body>
    <div id="app">
        @include('includes.menu')

        @yield('content')
    </div>

    <!-- Footer -->
    {{--<footer class="page-footer font-small blue pt-4">--}}

        {{--<!-- Footer Links -->--}}
        {{--<div class="container-fluid text-center text-md-left">--}}

            {{--<!-- Grid row -->--}}
            {{--<div class="row">--}}

                {{--<!-- Grid column -->--}}
                {{--<div class="col-md-6 mt-md-0 mt-3">--}}

                    {{--<!-- Content -->--}}
                    {{--<h5 class="text-uppercase">Footer Content</h5>--}}
                    {{--<p>Here you can use rows and columns here to organize your footer content.</p>--}}

                {{--</div>--}}
                {{--<!-- Grid column -->--}}

                {{--<hr class="clearfix w-100 d-md-none pb-3">--}}

                {{--<!-- Grid column -->--}}
                {{--<div class="col-md-3 mb-md-0 mb-3">--}}

                    {{--<!-- Links -->--}}
                    {{--<h5 class="text-uppercase">Links</h5>--}}

                    {{--<ul class="list-unstyled">--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 1</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 2</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 3</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 4</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                {{--</div>--}}
                {{--<!-- Grid column -->--}}

                {{--<!-- Grid column -->--}}
                {{--<div class="col-md-3 mb-md-0 mb-3">--}}

                    {{--<!-- Links -->--}}
                    {{--<h5 class="text-uppercase">Links</h5>--}}

                    {{--<ul class="list-unstyled">--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 1</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 2</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 3</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="#!">Link 4</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                {{--</div>--}}
                {{--<!-- Grid column -->--}}

            {{--</div>--}}
            {{--<!-- Grid row -->--}}

        {{--</div>--}}
        {{--<!-- Footer Links -->--}}

        {{--<!-- Copyright -->--}}
        {{--<div class="footer-copyright text-center py-3">© 2018 Copyright:--}}
            {{--<a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>--}}
        {{--</div>--}}
        {{--<!-- Copyright -->--}}

    {{--</footer>--}}
    <!-- Footer -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('js')
</body>
</html>
