<!DOCTYPE html>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
</head>
<body>
<h1 class="text-2xl font-bold underline">
    @yield('content')
</h1>
</body>
</html>
