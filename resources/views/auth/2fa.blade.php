@extends('layouts.master')

@section('main')
<form action="/google2fa/authenticate" method="POST">
    <input name="one_time_password" type="text">

    <button type="submit">Authenticate</button>
</form>
@endsection
