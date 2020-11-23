@extends('layouts.app')

@section('content')
<div class="flex max-w-sm mx-auto bg-white rounded-lg shadow-lg overflow-hidden lg:max-w-4xl" style="margin-top: 13vh">
    <div class="hidden lg:block lg:w-1/2 bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
    </div>

    <div class="w-full py-8 px-6 md:px-8 lg:w-1/2">
        <h2 class="text-2xl font-semibold text-gray-700 text-center">Ben je nieuw?</h2>

        <p class="text-xl text-gray-600 text-center">Registreer je hier!</p>
        </a>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mt-4">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="name">{{ __('Je naam') }}</label>
                <input id="name"
                    class="bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full focus:border-blue-500 focus:outline-none focus:shadow-outline  @error('name') is-invalid @enderror"
                    type="text" value="{{ old('name') }}" name="name" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-4">
                <label class="block text-gray-600 text-sm font-medium mb-2" for="email">{{ __('E-Mailaddres') }}</label>
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
                </div>
                <input id="password"
                    class="bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full focus:border-blue-500 focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                    type="password" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mt-4">
                <div class="flex justify-between">
                    <label class="block text-gray-600 text-sm font-medium mb-2"
                        for="password-confirm">{{__('Herhaal wachtwoord')}}</label>
                </div>
                <input id="password-confirm"
                    class="bg-white text-gray-700 border border-gray-300 rounded py-2 px-4 block w-full focus:border-blue-500 focus:outline-none focus:shadow-outline form-control"
                    type="password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="mt-8">
                <button
                    class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
                    type="submit">
                    {{ __('Registreren') }}
                </button>


            </div>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>

                <a href="{{ route('login') }}" class="text-xs text-gray-500 uppercase hover:underline">terug naar
                    inloggen</a>

                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
    </div>
</div>
@endsection
