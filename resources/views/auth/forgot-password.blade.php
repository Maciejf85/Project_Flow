<x-guest-layout>
    <div class="auth-card__header flex flex-column flex-align-center">
        <div class="col col-sm-6 col-lg-7 col-xl-6 text-center">
            <a class="mb-4" href="{{ route('welcome') }}">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" width="58" />
            </a>
        </div>
        <div class="text-center mb-7 mt-3">
            <h3 class="text-body-highlight">{{ __('Forgot your password?') }}</h3>
            <p class="text-tertiary-color mt-2">
                {{ __('Enter your email below and we will send you
                                                                                                                                                                                                                                a reset link') }}
            </p>
        </div>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="w-100">
            @csrf

            <!-- Email Address -->
            <div class="mt-3 ">
                <div class="flex flex-align-center">
                    <div class="col-9 me-2">
                        <x-text-input id="email" class="form-control" type="email" name="email"
                            :value="old('email')" :placeholder="__('E-mail')" required />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>
                    <x-primary-button class="btn btn-primary fw-700">
                        {{ __('Send') }}
                    </x-primary-button>
                </div>

            </div>
        </form>
        @if (Route::has('login'))
            <div class="flex flex-center mt-3">
                <a class="auth-card__register text-small fw-700" href="{{ route('login') }}">
                    {{ __('Back to login') }}
                </a>
            </div>
        @endif
</x-guest-layout>
