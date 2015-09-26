@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-sm-3 left-side">
            <div class="well">
                <h1>The Blog</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">Next Event</a></li>
                    <li role="presentation"><a href="#">Past Events</a></li>
                    <li role="presentation"><a href="#">Resources</a></li>
                    <li role="presentation"><a href="#">Code of Conduct</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 main-content">
            @foreach($posts as $post) 
                @include('assets.blog.view-short')
            @endforeach
        </div>
    </div>
    
@endsection
