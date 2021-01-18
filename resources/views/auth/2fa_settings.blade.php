@extends('layouts.master')
@section('main')
<div class="card-header text-center text-5xl my-8 font-bold">Two Factor Authentication</div>
<div class="container mx-auto">
    <p class="text-center mb-5">Two Factor Authentication (2FA) versterkt de toegangsbeveiliging door twee methoden (ook
        wel factoren genoemd) te vereisen om uw identiteit te verifiëren. Tweefactorauthenticatie beschermt tegen
        phishing, social engineering en brute force-aanvallen met wachtwoorden en beveiligt uw logins tegen aanvallers
        die misbruik maken van zwakke of gestolen inloggegevens.</p>

    @if (session('error'))
    <div class="alert alert-danger bg-gray-100 p-5 rounded w-max m-auto mt-5 mb-5">
        {{ session('error') }}
    </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success bg-gray-100 p-5 rounded w-max m-auto mt-5 mb-5">
        {{ session('success') }}
    </div>
    @endif

    @if($data['user']->loginSecurity == null)
    <form class="form-horizontal" method="POST" action="{{ route('generate2faSecret') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <button type="submit" class="flex items-center py-2 px-4 mt-3 capitalize tracking-wide bg-blue-600 dark:bg-gray-800 text-white font-medium rounded hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">
                2FA Key aanmaken
            </button>
        </div>
    </form>
    @elseif(!$data['user']->loginSecurity->google2fa_enable)
    <p class="text-center font-bold">Scan deze code met de Google Authenticator App. Als dat niet werkt, kan je deze code gebruiken:
    <code>{{ $data['secret'] }}</code><br /></p>
    <img src="{{$data['google2fa_url'] }}" class="m-auto">
    <br /><br />
    <p class="text-center font-bold">Voer de code in van de Google Authenticator app<br /><br /></p>
    <form class="form-horizontal" method="POST" action="{{ route('enable2fa') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('verify-code') ? ' has-error' : '' }}">
            <label for="secret" class="text-gray-700">Authenticator Code</label>
            <input id="secret" type="password" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring" name="secret" required>
            @if ($errors->has('verify-code'))
            <span class="help-block">
                <strong>{{ $errors->first('verify-code') }}</strong>
            </span>
            @endif
        </div>
        <button type="submit" class="flex items-center py-2 px-4 mt-3 capitalize tracking-wide bg-blue-600 dark:bg-gray-800 text-white font-medium rounded hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">
            Activeer 2FA
        </button>
    </form>
    @elseif($data['user']->loginSecurity->google2fa_enable)
    <div class="bg-gray-100 p-5 rounded w-max m-auto">
        2FA is op dit moment <strong>geactiveerd</strong> op je account.
    </div>

    <p class="text-center font-bold mt-5">Als je Two Factor Authentication uit wilt zetten, klik op de deactiveer knop.</p>

    <form class="form-horizontal mt-5" method="POST" action="{{ route('disable2fa') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
            <label for="change-password" class="text-gray-700">Huidig wachtwoord</label>
            <input id="current-password" type="password" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-blue-500 focus:outline-none focus:ring" name="current-password" required>
            @if ($errors->has('current-password'))
            <span class="help-block">
                <strong>{{ $errors->first('current-password') }}</strong>
            </span>
            @endif
        </div>
        <button type="submit" class="flex items-center py-2 px-4 mt-3 capitalize tracking-wide bg-blue-600 dark:bg-gray-800 text-white font-medium rounded hover:bg-blue-500 dark:hover:bg-gray-700 focus:outline-none focus:bg-blue-500 dark:focus:bg-gray-700">Deactiveer 2FA</button>
    </form>
    @endif
</div>
@endsection
