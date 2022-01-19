<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>DC Comics @yield('pag-title', 'Welcome')</title>
</head>
<body>
    @include('partials.header')
    <main>@yield('content')</main>
    @include('partials.footer')
</body>
</html>