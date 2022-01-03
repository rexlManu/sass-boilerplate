<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/central/app.css') }}">
    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/central/app.js') }}" defer></script>
</head>
<body class="antialiased h-full bg-gray-50">
{{ $slot }}
</body>
</html>
