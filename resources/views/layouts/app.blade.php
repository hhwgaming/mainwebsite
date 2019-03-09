<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'HHW Gaming') }}</title>
        <link href="{{asset('css')}}/app.css" rel="stylesheet">
        <link href="{{asset('css')}}/login_main_style.css" rel="stylesheet">
        <link href="{{asset('css')}}/Registration-Form-with-Photo.css" rel="stylesheet">
        
    </head>
    <body>
        @include('include.topnav')
        @yield('content')
        <script src="{{asset('js')}}/app.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
    </body>
</html>
