



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="css/tailwind/styl.css"> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @yield('head')

    <title>Muarambaduk</title>
</head>
<body>
    @yield('conten')

    <x-parts.footer/>

    @vite('resources/js/app.js')
    @yield('js')

</body>
</html>
