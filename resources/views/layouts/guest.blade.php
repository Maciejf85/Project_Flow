<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/main.scss', 'resources/js/app.js'])
    @endif
</head>

<body>
    <main class="o-main">
        <div class="container">
            <div class="row flex-center py-5">
                <div class="col-11 col-sm-10 col-xl-5">
                    <div class="auth-card">
                        <div class="auth-card__form">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>
