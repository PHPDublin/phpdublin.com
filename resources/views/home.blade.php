@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-3 page-left">
            <h3>Recent Posts</h3>
            @foreach($posts as $post)
                @include('entities.post.list-item')
            @endforeach
        </div>
        <div class="col-sm-9 page-content">
            <h2>Next Meetup</h2>

            @if ($nextEvent)
                <div class="col-md-6">
                    <p><strong>What?</strong> <a href="{{ $nextMeetup->rsvp_link }}">{{ $nextMeetup->title }}</a></p>
                    <p><strong>When?</strong>  {{ $nextMeetup->start_at->humanReadable() }}</p>
                    <p><strong>Where?</strong>
                        <a href="{{ $nextMeetup->location_link }}" target="_blank">{{ $nextMeetup->location }}</a>
                    </p>
                    <div class="sponsors">
                        <h2>Sponsors</h2>
                        <p>
                            @foreach($nextMeetup->sponsors as $value)
                                <a href="{{ $sponsor->link }}"><img class="sponsor" src="{{ $sponsor->image }}" alt="{{ $sponsor->name }}"></a>
                            @endforeach
                        </p>
                    </div>
                </div>
            @else
                <p>Coming Soon!</p>
            @endif

            <hr />
        </div>
    </div>

@endsection
