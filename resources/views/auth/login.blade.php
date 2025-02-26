<x-guest-layout>
    <!-- Session Status -->


    <div class="auth-card__header flex flex-column flex-align-center">
        <a class="col col-sm-6 col-lg-7 col-xl-6"><a class="mb-4" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" width="58" />
            </a>
    </div>
    <div class="text-center mb-7 mt-3">
        <h3 class="text-body-highlight">{{ __('Sign In') }}</h3>
        <p class="text-tertiary-color">{{ __('Get access to your account') }}</p>
    </div>

    <x-auth-session-status class="" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                :placeholder="__('E-mail')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" :value="__('Password')" />
            <div class="form-icon-container">
                <x-text-input id="password" class="form-control" type="password" name="password" :placeholder="__('Password')"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="" />
            </div>
        </div>

        <!-- Remember Me -->
        <div class="flex flex-align-center justify-space-between mt-3 w-100">
            <div class="form-check">
                <input class="form-check-input" id="remember_me" type="checkbox" name="remember" />
                <label class="form-check-label mb-0" for="remember_me">{{ __('Remember me') }}</label>
            </div>

            @if (Route::has('password.request'))
                <a class="auth-card__forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <x-primary-button class="btn btn-primary mt-5 fw-700">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
    @if (Route::has('register'))
        <div class="flex flex-center mt-3 text-small fw-600">
            <a class="auth-card__register" href="{{ route('register') }}">
                {{ __('Create an account') }}
            </a>
        </div>
    @endif
</x-guest-layout>
