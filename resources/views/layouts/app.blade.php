<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta author="Wladimir Kaminski">
    @stack('meta')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased min-h-screen flex items-center justify-center">
    @include('components.header')
    @yield('content')
    @include('components.footer')
    @stack('js')
</body>

</html>
