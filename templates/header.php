<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dublin's PHP Community Meetup</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body id="<?=$pageId ?>">

        <div id="container">

            <div class="row" id="title">
                <div class="col-md-3">
                    <h1>PHPDublin</h1>
                    <p class="intro">Dublin's PHP Community Meetup</p>
                </div>
                <div class="col-md-7">
                    <ul class="menu">
                        <li class="<?=$pageId === 'home' ? 'active' : 'inactive'; ?>"><a href="/">Next Meetup</a></li>
                        <li class="<?=$pageId === 'codeOfConduct' ? 'active' : 'inactive'; ?>"><a href="/code-of-conduct">Code of Conduct</a></li>
                        <li class="<?=$pageId === 'contact' ? 'active' : 'inactive'; ?>"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <p class="social">
                        <a href="https://github.com/phpdublin" class="github">github</a>
                        <a href="https://twitter.com/phpdublin" class="twitter">twitter</a>
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3">
                    <a class="rsvp" href="<?php echo $meetupUrl;?>">
                        <img src="img/rsvp-meetup.png" alt="RSVP on meetup.com" />
                    </a>
                </div>

                <div class="col-md-9">

                    <div class="content">

                        <div class="row">
                            <div class="col-md-8">
