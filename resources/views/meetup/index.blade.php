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
            <h2>Next Meetup</h2>
            <p>Coming Soon!</p>

            <hr />

            <h2>Previous Meetup</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>What?</strong> <a href="{{ $meetup->meetup_link()->value() }}">{{ $meetup->title()->value() }}</a></p>
                    <p><strong>When?</strong>  {{ $meetup->time()->humanReadable() }}</p>
                    <p><strong>Where?</strong>
                        <a href="{{ $meetup->map_link()->value() }}" target="_blank">{{ $meetup->place()->value() }}</a>
                    </p>
                    <div class="sponsors">
                        <h2>Sponsors</h2>
                        <p>
                            @foreach($meetup->sponsors()->value() as $sponsor)
                                <a href="{{ $sponsor->link }}"><img class="sponsor" src="{{ $sponsor->image }}" alt="{{ $sponsor->name }}"></a>
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <p>{!! $renderer->convertToHtml($meetup->content()->value()) !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
