<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Slabo+27px">
        <link rel="stylesheet" href="{{ mix('css/frontend/main.css') }}">
        @yield('assets.css')

        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>

        @yield('body')

        <script type="text/javascript" src="{{ mix('js/frontend/main.js') }}"></script>
        @yield('assets.js')
    </body>
</html>
