<x-login-layout>

    @section('title') Login @endsection

    @section('content')
        <div id="login-page" class="row">
            <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                <form class="login-form"  method="POST" action="/login">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <h5 class="ml-4">Iniciar Sesi&oacute;n</h5>
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12 ">
                            <i class="material-icons prefix pt-2">person_outline</i>
                            <input id="email" type="email" data-error=".errorEmail" name="email">
                            <label for="email" class="center-align">Correo Electr&oacute;nico</label>
                            @error('email')
                            <small class="errorEmail">
                                <div id="email-error" class="error">{{ $message }}</div>
                            </small>
                            @enderror
                        </div>
                    </div>
                    <div class="row margin">
                        <div class="input-field col s12">
                            <i class="material-icons prefix pt-2">lock_outline</i>
                            <input id="password" type="password" data-error=".errorPassword" name="password">
                            <label for="password">Contrase&ntilde;a</label>
                            @error('password')
                            <small class="errorPassword">
                                <div id="password-error" class="error">{{ $message }}</div>
                            </small>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m12 l12 ml-2 mt-1">
                            <p>
                                <label>
                                    <input type="checkbox" />
                                    <span>{{ __('Remember me') }}</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type ="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small">
                                <a href="/register">
                                    {{ __('Register') }}
                                </a>
                            </p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="user-forgot-password.html">
                                {{ __('Forgot Your Password?') }}</a>
                            </p>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    @endsection
</x-login-layout>
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
