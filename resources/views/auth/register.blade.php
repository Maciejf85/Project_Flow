<x-guest-layout>
    <div class="auth-card__header flex flex-column flex-align-center">
        <a class="col col-sm-6 col-lg-7 col-xl-6"><a class="mb-4" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" width="58" />
            </a>
    </div>
    <div class="text-center mb-7 mt-3">
        <h3 class="text-body-highlight">{{ __('Register') }}</h3>
        <p class="text-tertiary-color">{{ __('Create your account') }}</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')"
                :placeholder="__('Name')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Surname -->
        <div class="mt-3">
            <x-input-label for="surname" :value="__('Surname')" />
            <x-text-input id="surname" class="form-control" type="text" name="surname" :value="old('surname')"
                :placeholder="__('Surname')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('surname')" />
        </div>

        <!-- Email Address -->
        <div class="mt-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                :placeholder="__('E-mail')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" :value="__('Password')" />
            <div class="form-icon-container">
                <x-text-input id="password" class="form-control" type="password" name="password" :placeholder="__('Password')"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" />
            </div>
        </div>
        <!-- Comfirmed Password -->
        <div class="mt-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="form-icon-container">
                <x-text-input id="password_confirmation" class="form-control" type="password"
                    name="password_confirmation" :placeholder="__('Confirm password')" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>
        </div>

        <x-primary-button class="btn btn-primary mt-5 fw-700">
            {{ __('Register') }}
        </x-primary-button>

    </form>

    @if (Route::has('login'))
        <div class="flex flex-center mt-3 text-small fw-600">
            <a class="auth-card__register" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
        </div>
    @endif
</x-guest-layout>
