@if ($events->count() >= 1)
    @foreach($events as $event)
        @include('entities.meetupEvent')
    @endforeach
@else
    <article class="box post post-excerpt">
        <header>
            <p>More Soon!</p>
        </header>
    </article>
@endif

