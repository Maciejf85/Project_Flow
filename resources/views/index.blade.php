<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/main.scss', 'resources/js/app.js'])
    @endif
</head>

<body>
    <h1>Laravel</h1>
    <h2 style="padding-left: 1rem;">is awsome</h2>
</body>

</html>
