@extends('layout.master')

@section('content')

    @foreach($posts as $post) 
        <a href="/blog/post/{{$post->id()->value()}}/{{str_slug($post->title()->value(), '-')}}">
            <h2>{{$post->title()->value()}}</h2>
        </a>
        <h4>
            <a target="__blank" href="http://github.com/{{$post->author()->value()}}">
                <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$post->author()->value()}}"/>
                <span class="author">{{$post->author()->value()}}</span>
            </a>
        </h4>
        <div class="blog-content">
            {!!substr(strip_tags($renderer->convertToHtml($post->content()->value())), 0, 350)!!} ...
            <a href="/blog/post/{{$post->id()->value()}}/{{str_slug($post->title()->value(), '-')}}">Read more</a>
        </div>
        <hr>
    @endforeach
    
@endsection
