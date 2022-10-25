@extends('layouts.app')

@section('content')
    <h1 style="text-transform: uppercase; margin: 0 1vh">{{$post->title}}</h1>
    <br>
    <p style="margin: 0 1vh">{{$post->content}}</p>
    <br>
    <p style="margin: 0 1vh">{{$post->location}}</p>
@endsection