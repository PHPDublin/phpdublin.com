<article class="box post post-excerpt">
    <header>
        <h3><a href="{{ $event->get('link') }}">{{ $event->get('name') }}</a></h3>
    </header>
    <div class="info">
        <span class="date">
        <span class="month">{{ $event->get('start_at')->format('M') }}</span>
            <span class="day">{{ $event->get('start_at')->format('j') }}</span>
            <span class="year"><span>, </span>{{ $event->get('start_at')->format('Y') }}</span>
        </span>
        <ul class="stats">
            <li><a href="#" class="icon fa-users">{{ $event->get('yes_rsvp_count') }}</a></li>
            <!-- <li><a href="#" class="icon fa-heart">32</a></li>
            <li><a href="#" class="icon fa-twitter">64</a></li>
            <li><a href="#" class="icon fa-facebook">128</a></li> -->
        </ul>
    </div>
    <p>
        <strong>Where?</strong>
        <a href="http://www.google.com/maps/place/{{ $event->get('venue')->get('lat') }},{{ $event->get('venue')->get('lng') }}">{{ $event->get('venue')->get('name') }}</a><br />
        <strong>When?</strong>
        {{ $event->get('start_at')->toDayDateTimeString() }}
    </p>
    <hr />
    <div class="description">
        {!! $event->get('description') !!}
    </div>
</article>

