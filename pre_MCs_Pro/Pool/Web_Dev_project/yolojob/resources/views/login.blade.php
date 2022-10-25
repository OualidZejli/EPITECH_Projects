@extends('layouts.app')

@section('content')
    <h1>Connexion :</h1>

    <form method="POST" action="{{ route('login') }}">
        <label>Mail : </label>
        @csrf       
        <input type="text" name="email">
        <label>Mot de passe : </label>
        <input type="password" name="password">
        <button type="submit">Connexion</button>
    </form>
@endsection