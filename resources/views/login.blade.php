@extends('layouts.user')

@section('content')

<form action="/login" method="POST">
    @csrf
    <label for="email">Emaile</label>
    <input name="email">
    <label for="password">Password</label>
    <input name="password">

    <button type="submit" value="login">Send</button>
</form>

 <h1>{{ $name }}</h1>
@endsection
