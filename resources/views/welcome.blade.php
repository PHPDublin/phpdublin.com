@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-3 page-left">
        </div>
        <div class="col-sm-9 page-content">
            <h2>Upcoming Events</h2>

            @if ($upcoming->count() >= 1)
                @foreach($upcoming as $event)
                    <div class="well well-sm">
                        <h3><a href="{{ $event->get('link') }}">{{ $event->get('name') }}</a></h3>
                        <p><strong>When?</strong>  {{ $event->get('start_at') }}</p>
                        <p><strong>Where?</strong>
                            {{ $event->get('venue')->get('name') }}, 
                            {{ $event->get('venue')->get('address_1') }}, 
                            {{ $event->get('venue')->get('address_2') }}, 
                        </p>
                        <p>{!! $event->get('description') !!}</p>
                    </div>
                @endforeach
            @else
                <p>Coming Soon!</p>
            @endif

            <hr />

            <h2>Previous Events</h2>

            @if ($previous->count() >= 1)
                @foreach($previous as $event)
                    <div class="well well-sm">
                        <h3><a href="{{ $event->get('link') }}">{{ $event->get('name') }}</a></h3>
                        <p><strong>When?</strong>  {{ $event->get('start_at') }}</p>
                        <p><strong>Where?</strong>
                            {{ $event->get('venue')->get('name') }}, 
                            {{ $event->get('venue')->get('address_1') }}, 
                            {{ $event->get('venue')->get('address_2') }}, 
                        </p>
                        <p>{!! $event->get('description') !!}</p>
                    </div>
                @endforeach
            @else
                <p>Coming Soon!</p>
            @endif

            <hr />
        </div>
    </div>

@endsection
