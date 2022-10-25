@extends('layouts.app')

@section('content')
    @if ($posts->count() > 0)
        @foreach($posts as $post)
        <div class="box">
            <h2><a href="{{ route('offres', ['id' => $post -> id])}}" class="abasic">{{$post->title}}</a></h2>
            <p style="margin: 0 1vh">{{$post->content}}</p>
            <a href="javascript:void();" class="learnmore-btn">Learn more</a>
            <br>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(".learnmore-btn").on('click', function(){
                $(this).parent().toggleClass("showContent");
            });
        </script>
        @endforeach
    @else
        <span>Aucune offre pour le moment</span>
    @endif
@endsection

