@extends('layouts.default')

@section('content')

<?php
$pageId = 'home';
$meetupUrl = 'http://www.meetup.com/PHP-Dublin/events/225356604/';
?>

    <div class="row">
        <div class="col-sm-3 page-left">
            <h3>Recent Posts</h3>
            @foreach($blogs as $blog)
                @include('assets.blog.view-short')
            @endforeach
        </div>
        <div class="col-sm-9 page-content">
            <h2>Next Meetup</h2>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>What?</strong> <a href="http://www.meetup.com/PHP-Dublin/events/227885595/">January 2016: Rasmus Lerdorf</a></p>
                    <p><strong>When?</strong>  January 12th @ 7:00pm</p>
                    <p><strong>Where?</strong>
                        <a href="httpsphp://www.google.com/maps/place/The+Gresham+Hotel/@53.3517039,-6.2627294,17z/data=!3m1!4b1!4m2!3m1!1s0x48670e8690f70c1d:0x168b8a93c5deffe?hl=en" target="_blank">Gresham Hotel, O'Connell Street, Dublin (next to Savoy Cinema)</a>
                    </p>
                    <div class="sponsors">
                        <h2>Sponsors</h2>
                        <p>
                            <a href="http://etsy.com/"><img class="sponsor sponsor-etsy" src="/img/etsy.png" alt="Etsy Dublin"></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <p><b>Etsy Dublin </b><span>is delighted to invite engineers in Dublin to a talk on "php7, whats new, and the future of php" with </span><b><a href="https://en.wikipedia.org/wiki/Rasmus_Lerdorf">Rasmus Leodorf</a></b><span>.</span> <br></p>
                    <p>Rasmus has asked for plenty of Q&amp;A time as he wants to hear from you and is looking forward to hearing your questions.</p>
                    <p> <br></p>
                    <p>Details: <b>Gresham hotel, 7pm, refreshments will be available.</b> <br>Spaces are limited, so please RSVP only if you are sure you can attend. <br></p>
                    <p><span> <br></span></p>
                    <p><span>Thanks, see you Tuesday</span> <br></p>
                    <p><span>Andrew White (Etsy Dublin) + Michael Flanagan &amp; Barry O'Sullivan (PHP Dublin)</span> <br></p>
                </div>
            </div>

            <hr />

            <h2>Previous Meetup</h2>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>What?</strong> <a href="{{$meetupUrl}}">PHP Dublin &mdash; September 2015</a></p>
                    <p><strong>When?</strong>  September 22nd 2015 @ 7:00pm</p>
                    <p><strong>Where?</strong>
                        <a href="http://maps.google.com/maps?f=q&hl=en&q=Block+B%2C+Joyce%E2%80%99s+Court%2C+Joyce%E2%80%99s+Walk%2C+Talbot+Street%2C+Dublin%2C+ie" target="_blank">Kitman Labs Ltd, Block B, Joyce's Court, Joyce's Walk, Talbot Street, Dublin</a>
                    </p>
                    <div class="sponsors">
                        <h2>Sponsors</h2>
                        <p>
                            <a href="http://kitmanlabs.com/"><img class="sponsor sponsor-kitman" src="/img/sponsor-kitman.png" alt="Kitman Labs"></a>
                            <a href="http://hostelworld.com/"><img class="sponsor sponsor-engine-yard" src="/img/sponsor-hostelworld.png" alt="Hostelworld"></a>
                            <a href="http://statcounter.com/"><img class="sponsor sponsor-statcounter" src="/img/sponsor-statcounter.png" alt="StatCounter"></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <p><strong>September Talks</strong></p>
                    <p>We have two talks taking place this month. <br>The first is from <b>Nexus Point Ltd</b>, they're going to take us through a new system that they're developing, a light talk with some design discussion, should be interesting.
                    <br>Our second talk is from <b>Barry O Sullivan</b> and it's about Laravel 5.1, and how we used it to make the site/blog easy to use and update.</p>
                    <p>Let's not forget the food, drinks and networking after the talks!</p>
                    <h3>The Venue</h3>
                    <p>Many thanks to <a href="http://kitmanlabs.com">Kitman Labs</a> (<a href="http://careers.kitmanlabs.com">they're hiring</a> !) we've got a new city-centre venue on Joyce’s Walk, just off Talbot Street.</p>

                    <h3>I wanna talk!</h3>
                    <p>Great! We'd love to hear from you. If you have a talk you would like to give, please <a href="/contact-us">send us details</a>. Don't be shy!</p>
                    <p>In fact, if you need a template for your talk, feel free to <a href="./templates/PHPDublinSlideTemplate.otp">use ours</a>!</p>

                    <h3>Doors open 7pm</h3>
                </div>
            </div>
        </div>
    </div>

@endsection
