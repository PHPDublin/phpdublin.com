<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dublin's PHP Community</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body id="<?=$page_id ?>">

        <div id="container">

            <div class="row" id="title">
                <div class="col-xs-1">
                    <a  href="/">
                        <img class="img img-responsive" src="img/logo-sm.png" alt="PHPDublin" />
                    </a>
                </div>
                <div class="col-md-3">
                    <h1>PHPDublin</h1>
                    <p class="intro">Dublin's PHP Community</p>
                </div>
                <div class="col-md-6">
                    <ul class="menu">
                        <li class="<?=$page_id === 'home' ? 'active' : 'inactive'; ?>"><a href="/">Next Meetup</a></li>
                        <li class="<?=$page_id === 'blog' ? 'active' : 'inactive'; ?>"><a href="/blog">Blog</a></li>
                
                        <li class="<?=$page_id === 'code-of-conduct' ? 'active' : 'inactive'; ?>"><a href="/code-of-conduct">Code of Conduct</a></li>
                        <li class="<?=$page_id === 'contact-us' ? 'active' : 'inactive'; ?>"><a href="/contact-us">Contact</a></li>
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

                <div class="col-md-12">

                    <div class="content">

                        <div class="row">
                            <div class="col-md-9">
                                @yield('content')
                            </div>
                            <div class="col-md-3">
                                <a class="rsvp" href="<?php echo $meetup_url;?>">
                                    <img src="img/rsvp-meetup.png" alt="RSVP on meetup.com" />
                                </a>
                                <div class="sponsors">
                                    <h2>Sponsors</h2>
                                    <p>
                                        <a href="http://kitmanlabs.com/"><img class="sponsor sponsor-kitman" src="img/sponsor-kitman.png" alt="Kitman Labs" /></a>
                                        <a href="http://hostelworld.com/"><img class="sponsor sponsor-engine-yard" src="img/sponsor-hostelworld.png" alt="Hostelworld" /></a>
                                        <a href="http://statcounter.com/"><img class="sponsor sponsor-statcounter" src="img/sponsor-statcounter.png" alt="StatCounter" /></a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /content -->

                </div> <!-- /col-md-9 -->

            </div> <!-- /row -->
        </div>

        <div id="footer">
            <p>Code for this website is <a href="https://github.com/phpdublin/phpdublin.com">available on GitHub</a>.<br />If you feel you can improve upon the current design, we encourage you to do so :-)</p>
            <p>PHPDublin logo by <a href="https://twitter.com/duggan">@duggan</a></p>
        </div>

    </body>
</html>