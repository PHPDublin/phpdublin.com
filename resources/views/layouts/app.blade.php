<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title', 'PHP Dublin')</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        @section('styles')
            <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
        @show
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>

        <!-- Content -->
            <div id="content">
                <div class="inner">

                    @yield('content')

                </div>
            </div>

        <!-- Sidebar -->
            <div id="sidebar">

                <!-- Logo -->
                    <h1 id="logo"><a href="#">PHP Dublin</a></h1>

                <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li {!! $activePage === 'events' ? 'class="current"' : '' !!}><a href="/">Events</a></li>
                            <li {!! $activePage === 'code-of-conduct' ? 'class="current"' : '' !!}><a href="/code-of-conduct">Code of Conduct</a></li>
                            <li {!! $activePage === 'contact' ? 'class="current"' : '' !!}><a href="/contact">Contact Us</a></li>
                        </ul>
                    </nav>

                {{--
                <!-- Search -->
                    <section class="box search">
                        <form method="post" action="#">
                            <input type="text" class="text" name="search" placeholder="Search" />
                        </form>
                    </section>

                <!-- Recent Posts -->
                    <section class="box recent-posts">
                        <header>
                            <h2>Recent Posts</h2>
                        </header>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Feugiat nisl aliquam</a></li>
                            <li><a href="#">Sed dolore magna</a></li>
                            <li><a href="#">Malesuada commodo</a></li>
                            <li><a href="#">Ipsum metus nullam</a></li>
                        </ul>
                    </section>

                <!-- Recent Comments -->
                    <section class="box recent-comments">
                        <header>
                            <h2>Recent Comments</h2>
                        </header>
                        <ul>
                            <li>case on <a href="#">Lorem ipsum dolor</a></li>
                            <li>molly on <a href="#">Sed dolore magna</a></li>
                            <li>case on <a href="#">Sed dolore magna</a></li>
                        </ul>
                    </section>

                <!-- Calendar -->
                    <section class="box calendar">
                        <div class="inner">
                            <table>
                                <caption>July 2014</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" title="Monday">M</th>
                                        <th scope="col" title="Tuesday">T</th>
                                        <th scope="col" title="Wednesday">W</th>
                                        <th scope="col" title="Thursday">T</th>
                                        <th scope="col" title="Friday">F</th>
                                        <th scope="col" title="Saturday">S</th>
                                        <th scope="col" title="Sunday">S</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="pad"><span>&nbsp;</span></td>
                                        <td><span>1</span></td>
                                        <td><span>2</span></td>
                                        <td><span>3</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>4</span></td>
                                        <td><span>5</span></td>
                                        <td><a href="#">6</a></td>
                                        <td><span>7</span></td>
                                        <td><span>8</span></td>
                                        <td><span>9</span></td>
                                        <td><a href="#">10</a></td>
                                    </tr>
                                    <tr>
                                        <td><span>11</span></td>
                                        <td><span>12</span></td>
                                        <td><span>13</span></td>
                                        <td class="today"><a href="#">14</a></td>
                                        <td><span>15</span></td>
                                        <td><span>16</span></td>
                                        <td><span>17</span></td>
                                    </tr>
                                    <tr>
                                        <td><span>18</span></td>
                                        <td><span>19</span></td>
                                        <td><span>20</span></td>
                                        <td><span>21</span></td>
                                        <td><span>22</span></td>
                                        <td><a href="#">23</a></td>
                                        <td><span>24</span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">25</a></td>
                                        <td><span>26</span></td>
                                        <td><span>27</span></td>
                                        <td><span>28</span></td>
                                        <td class="pad" colspan="3"><span>&nbsp;</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section> --}}

            </div>

        <!-- Scripts -->
            <script src="/assets/js/jquery.min.js"></script>
            <script src="/assets/js/skel.min.js"></script>
            <script src="/assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            @section('scripts')
                <script src="{{ elixir('js/app.js') }}"></script>
            @show

    </body>
</html>
