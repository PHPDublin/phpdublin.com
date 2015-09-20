@extends('layout.master')

@section('content')

    @foreach($posts as $post) 
        <h2>{{$post->title()->value()}}</h2>
        <h4><a taget="__blank" href="http://github.com/{{$post->author()->value()}}">{{$post->author()->value()}}</a></h4><br>
        {!!$renderer->convertToHtml($post->content()->value())!!}
    @endforeach

@endsection
