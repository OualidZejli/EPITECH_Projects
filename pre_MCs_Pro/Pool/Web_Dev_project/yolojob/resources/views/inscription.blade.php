@extends('layouts.app')

@section('content')
    <h1>Inscription :</h1>

    <form method="POST" action="{{ route('inscription.store') }}">
        <label>Nom : </label>
        @csrf       
        <input type="text" name="name">
        <label>Mail : </label>
        <input type="text" name="email">
        <label>Mot de passe : </label>
        <input type="password" name="password">
        <label>Confirmation du mot de passe : </label>
        <input type="password" name="password_confirmation">
        <button type="submit">Créer</button>
    </form>
@endsection