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
            <h1>Contact</h1>
            <p><strong>You can find PHPDublin on:</strong></p>
            <ul>
                <li><a href="http://twitter.com/phpdublin">Twitter (@PHPDublin)</a></li>
                <li><a href="http://meetup.com/php-dublin">Meetup.com</a></li>
                <li><a href="http://github.com/phpdublin">GitHub</a></li>
            </ul>

            <p><strong>Current organising staff at PHPDublin include:</strong></p>
            <ul>
                <li>Michael Flanagan (<a href="mailto:michael@flanagan.ie">michael@flanagan.ie</a>, <a href="http://twitter.com/micflan">@micflan</a>)</li>
                <li>Barry O'Sullivan (<a href="http://twitter.com/barryosull">@barryosull</a>)</li>
            </ul>

            <hr />

            <p><strong>Irish Tech Community on Slack</strong></p>
            <p>Some of us also like to hang out and chat on the Irish Tech Community Slack group, in the #php channel.</p>
            <p>If that sounds good to you, you can join in or find out more at <a href="http://irishtechcommunity.com">IrishTechCommunity.com</a></p>
        </div>
    </div>

@endsection
