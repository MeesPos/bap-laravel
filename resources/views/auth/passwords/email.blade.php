@extends('layouts.app')

@section('content')
<div class="flex max-w-sm mx-auto bg-white rounded-lg shadow-lg overflow-hidden lg:max-w-4xl" style="margin-top: 25vh">
    <div class="hidden lg:block lg:w-1/2 bg-cover"
        style="background-image:url('https://images.unsplash.com/photo-1520006403909-838d6b92c22e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80')">
    </div>

    <div class="w-full py-8 px-6 md:px-8 lg:w-1/2">
        <h2 class="text-2xl font-semibold text-gray-700 text-center">{{ __('Wachtwoord resetten') }}</h2>

        <p class="text-xl text-gray-600 text-center">Reset hier je wachtwoord!</p>
        </a>

        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

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

            <div class="mt-8">
                <button
                    class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
                    type="submit">
                    {{ __('Wachtwoord resetten') }}
                </button>


            </div>

            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>

                <a href="{{ route('login') }}" class="text-xs text-gray-500 uppercase hover:underline">terug naar inloggen</a>

                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
    </div>
</div>

@endsection
