@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-sm-3 page-left">
            <h3>Recent Posts</h3>
            @foreach($posts as $post)
                @include('assets.blog.view-short')
            @endforeach
        </div>
        <div class="col-sm-9 page-content">
            @foreach($posts as $post)
                @include('assets.blog.view-short')
            @endforeach
        </div>
    </div>

@endsection
