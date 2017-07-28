<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Laravel Blog')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <body>
        @include('inc.navbar')
    <div class="container">
        @yield('content')
        </div>
    </body>
</html>
