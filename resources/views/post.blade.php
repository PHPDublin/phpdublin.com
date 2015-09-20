@extends('layout.master')

@section('content')

<h2>{{$post->title()->value()}}</h2>
<h4><a taget="__blank" href="http://github.com/{{$post->author()->value()}}">{{$post->author()->value()}}</a></</h4><br>
{!!$renderer->convertToHtml($blog->content()->value())!!}

@endsection


