<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/images/favicons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/images/favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/images/favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('frontend/images/favicons/manifest.json')}}">
        <link rel="mask-icon" href="{{asset('frontend/images/favicons/safari-pinned-tab.svg')}}" color="#006eb9">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Slabo+27px">
        <link rel="stylesheet" href="{{ mix('frontend/css/main.css') }}">
        @yield('assets.css')

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        @include('frontend.layouts.parts.header')
        <main>
            @yield('main')
        </main>
        @include('frontend.layouts.parts.footer')

        <script type="text/javascript" src="{{ mix('frontend/js/main.js') }}"></script>
        @yield('assets.js')
    </body>
</html>
