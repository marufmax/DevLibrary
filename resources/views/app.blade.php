<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Maruf Alom">
        <meta name="description" content="Laravel Vue SPA">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DevLibrary.io</title>

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
                'siteName'  => config('app.name'),
                'apiDomain' => config('app.url').'/api'
            ]) !!}
        </script>
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
