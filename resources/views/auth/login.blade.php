@extends('layouts.app')

@section('content')
@if (session('error'))
    <div class="alert alert-success error-admin">
        <div class="flex max-w-sm w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="flex justify-center items-center w-12 bg-red-500">
                <svg class="h-6 w-6 fill-current text-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z"/>
                </svg>
            </div>

            <div class="-mx-3 py-2 px-4">
                <div class="mx-3">
                    <span class="text-red-500 font-semibold">Er is een fout opgetreden!</span>
                    <p class="text-gray-600 text-sm">{{ session('error') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

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
