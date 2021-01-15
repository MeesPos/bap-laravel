@extends('layouts.master')

@section('main')
<p>Tijdelijk wachtwoord: {{$twofactor->generateSecretKey()}}</p>

<form action="{{view('2fa-authenticate')}}" method="POST" style="margin-top: 10vh">
    <input name="one_time_password" type="text">

    <button type="submit">Authenticate</button>
</form>
@endsection
