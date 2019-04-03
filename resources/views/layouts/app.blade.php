<!doctype html 5.0>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','Mall Directory')}}</title>
    <style>

          </style>
    </head>
    <body>
    @include ('inc.navbar')

    @yield('content')
        </div>
    </body>
</html>
