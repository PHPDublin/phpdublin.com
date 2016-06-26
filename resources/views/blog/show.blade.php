@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-sm-3 page-left">
            <h3>Recent Posts</h3>
            @foreach($blogs as $blog)
                @include('assets.blog.view-short')
            @endforeach
        </div>
        <div class="col-sm-9 page-content">
            @include('assets.blog.view')
        </div>
    </div>

@endsection
