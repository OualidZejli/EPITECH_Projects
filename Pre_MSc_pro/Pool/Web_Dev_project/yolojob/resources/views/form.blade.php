@extends('layouts.app')

@section('content')
    <h1>Créer une nouvelle annonce :</h1>

    <form method="POST" action="{{ route('offres.enregistrer') }}">
        <label>Poste : </label>
        @csrf       
        <input type="text" name="title">
        <label>Description : </label>
        <textarea name="content" cols="30" rows="10"></textarea>
        <label>Localisation : </label>
        <input type="text" name="location">
        <button type="submit">Créer</button>
    </form>
@endsection