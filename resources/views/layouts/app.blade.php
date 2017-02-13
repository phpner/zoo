<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>

</head>
<body>
<div id="app">
    @include('layouts.header')
    @yield('slider')
      {{--sidebar--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-xs-9">
                @yield('content')
            </div>
            <div class="col-md-3 col-xs-3">
                <div class="col-md-12">
                @yield('sidebar_bottom')
                   @include('layouts.sidebar')
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>