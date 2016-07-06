@extends('layouts.app')

@section('content')
    <section class="contentWrap pageHeader">
        <header>
            <h1>PHP Dublin</h1>
            <h2>Dublin's PHP community and meetup group.</h2>
            <p> We offer a place for passionate PHP developers to meet, make connections, talk shop (or not), enjoy speakers and presentations, and learn about software development.</p>
        </header>
        <footer style="text-align: center">
            <!-- <a class="button" href="#">Propose a Talk</a> -->
            <a class="button" href="http://www.meetup.com/PHP-Dublin/">Join the Meetup.com Group</a>
        </footer>
    </section>

    <section id="upcomingEvents" class="contentWrap event-list">
        <header>
            <h2>Upcoming Events</h2>
        </header>
        @include('entities.meetupEventList', ['events' => $upcoming])
    </section>

    <section id="previousEvents" class="contentWrap event-list">
        <header>
            <h2>Previous Events</h2>
        </header>
        @include('entities.meetupEventList', ['events' => $previous])
    </section>

@endsection
