@extends('layouts.master')
@section('main')
<div class="card-header text-center text-5xl my-8 font-bold">Two Factor Authentication</div>
<div class="container mx-auto">
    <p class="text-center mb-5">Two Factor Authentication (2FA) versterkt de toegangsbeveiliging door
        twee methoden (ook
        wel factoren genoemd) te vereisen om uw identiteit te verifiëren. Tweefactorauthenticatie
        beschermt tegen
        phishing, social engineering en brute force-aanvallen met wachtwoorden en beveiligt uw logins
        tegen aanvallers
        die misbruik maken van zwakke of gestolen inloggegevens.</p>

    @if ($errors->any())
    <div class="alert alert-danger bg-gray-100 p-5 rounded w-max m-auto mt-5 mb-5">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <p class="text-center font-bold">Voer de code in van de Google Authenticator app<br /><br /></p>
    <form class="form-horizontal" action="{{ route('2faVerify') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('one_time_password-code') ? ' has-error' : '' }}">
            <label for="one_time_password" class="text-gray-700">Wachtwoord</label>
            <input id="one_time_password" name="one_time_password" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring" type="text" required />
        </div>
        <button class="flex items-center py-2 px-4 mt-3 capitalize tracking-wide bg-blue-600 dark:bg-gray-800 text-white font-medium rounded hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700" type="submit">Authenticeer</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
