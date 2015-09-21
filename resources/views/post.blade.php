@extends('layout.master')

@section('content')

    <h2>{{$post->title()->value()}}</h2>
    <h4>
        <a target="__blank" href="http://github.com/{{$post->author()->value()}}">
            <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$post->author()->value()}}"/>
            <span class="author">{{$post->author()->value()}}</span>
        </a>
    </h4>
    <div class="blog-content">
        {!!$renderer->convertToHtml($post->content()->value())!!}
    </div>

@endsection


