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
            <div class="row">
                <div class="col-md-6">
                    <p><strong>What?</strong> <a href="http://www.meetup.com/PHP-Dublin/events/229508512/">March 2016: Docker and optimisation</a></p>
                    <p><strong>When?</strong>  March 22nd @ 7:00pm</p>
                    <p><strong>Where?</strong>
                        <a href=https://maps.google.com/maps?f=q&hl=en&q=http%3A%2F%2Fdogpatchlabs.com%2F%2C+Dublin%2C+ie">Dogpatch Labs, CHQ Building</a>
                    </p>
                    <div class="sponsors">
                        <h2>Sponsors</h2>
                        <p>
                            <a href="http://hostelworld.com/"><img class="sponsor sponsor-hostelworld" src="/img/sponsor-hostelworld.png" alt="Hostel World"></a>
                            <a href="http://statcounter.com/"><img class="sponsor sponsor-statcounter" src="/img/sponsor-statcounter.png" alt="StatCounter"></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <p>We have two excellent speakers this month, both from the Smartbox Group.</p>

                    <p><a href="https://www.linkedin.com/in/ricardomelo">Ricardo Melo</a> is a systems architect, and he'll be giving a talk on PHP and Docker. A must for any PHP developer that has to do cloud devops as part of their day to day.</p>

                    <p>Next we have <a href="https://www.linkedin.com/in/lucianomammino">Luciano Mammino</a>, a Senior PHP Engineer. He's going to give us his top tips for making blazing fast web applications. If you want fast response times, then this talk is for you. </p>
                </div>
            </div>
<!--
            <hr /><hr />

            <h2>Previous Meetup</h2>
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
                    <h2>Rasmus Lerdorf!</h2>
                    <p><b>Etsy Dublin </b><span>is delighted to invite engineers in Dublin to a talk on "php7, whats new, and the future of php" with </span><b><a href="https://en.wikipedia.org/wiki/Rasmus_Lerdorf">Rasmus Lerdorf</a></b><span>.</span> <br></p>
                    <p>Rasmus has asked for plenty of Q&amp;A time as he wants to hear from you and is looking forward to hearing your questions.</p>
                    <p> <br></p>
                    <p>Details: <b>Gresham hotel, 7pm, refreshments will be available.</b> <br>Spaces are limited, so please RSVP only if you are sure you can attend. <br></p>
                    <p><span> <br></span></p>
                    <p><span>Thanks, see you Tuesday</span> <br></p>
                    <p><span>Andrew White (Etsy Dublin) + Michael Flanagan &amp; Barry O'Sullivan (PHP Dublin)</span> <br></p>
                </div>
            </div>

            <hr />

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

            -->
        </div>
    </div>

@endsection
