@extends('layouts.app')

@section('content')

<div class="flex max-w-sm mx-auto bg-white rounded-lg shadow-lg overflow-hidden lg:max-w-4xl" style="margin-top: 20vh">
    <div class="hidden lg:block lg:w-1/2 bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1542060748-10c28b62716f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
    </div>

    <div class="w-full py-8 px-6 md:px-8 lg:w-1/2">
        <h2 class="text-2xl font-semibold text-gray-700 text-center">Welkom terug!</h2>

        <p class="text-xl text-gray-600 text-center">Log hier in!</p>
        </a>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                <label class="block text-gray-600 text-sm font-medium mb-2"
                    for="email">{{ __('E-Mailaddres') }}</label>
                <input id="email"
                    class="bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full focus:border-blue-500 focus:outline-none focus:shadow-outline  @error('email') is-invalid @enderror"
                    type="email" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 text-sm font-medium mb-2"
                        for="password">{{__('Wachtwoord')}}</label>

                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-xs text-gray-500 hover:underline">{{ __('Wachtwoord vergeten?') }}</a>
                    @endif
                </div>
                <input id="password"
                    class="bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full focus:border-blue-500 focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                    type="password" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Onthoud me') }}
                </label>
            </div>

            <div class="mt-8">
                <button
                    class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
                    type="submit">
                    {{ __('Inloggen') }}
                </button>


            </div>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>

                <a href="{{ route('register') }}" class="text-xs text-gray-500 uppercase hover:underline">of registreer</a>

                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
    </div>
</div>

@endsection
