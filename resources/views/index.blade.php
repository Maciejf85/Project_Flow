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
    <main class="o-main">
        <div class="o-main__header">
            <h1>Laravel</h1>
            <h2 style="padding-left: 1rem;">is awsome</h2>
        </div>
        <div class="o-main__links">
            @if (Route::has('login'))
                <div class="flex flex-center mt-3 text-regular fw-600">
                    <a class="auth-card__register" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
            @endif
            @if (Route::has('register'))
                <div class="flex flex-center mt-3 text-regular fw-600">
                    <a class="auth-card__register" href="{{ route('register') }}">
                        {{ __('Register') }}
                    </a>
                </div>
            @endif
        </div>

    </main>


</body>

</html>
