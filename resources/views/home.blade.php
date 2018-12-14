<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"><title>DJ David</title><meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/webfont.js') }}"></script>
    <script type="text/javascript">WebFont.load({
            google: {
                families: ["Roboto:300,regular,500","Roboto Slab:regular"]
            }
        });</script>
    <script src="{{ asset('js/modernizr-2.7.1.js') }}" type="text/javascript"></script>
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/apple.png') }}" rel="apple-touch-icon">
</head>
<body>
<div class="hero">
    <div class="nav-bar w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
        <div class="w-container">
            <a class="brand-link w-nav-brand" href="/">
                <h1 class="logo"><img src="{{ asset('images/djdavid_logo.png') }}" width="100px" height="10%"></h1>
            </a>
            <nav class="nav-menu w-nav-menu" role="navigation">
                <a class="nav-link w-nav-link" href="/music">Music</a>
                <a class="nav-link w-nav-link" href="/gallery">Gallery</a>
                <a class="nav-link w-nav-link" href="/contact">Contact</a>
            </nav>
            <div class="menu-button w-clearfix w-nav-button">
                <div class="menu-text">MENU</div>
                <div class="menu-icon w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="hero-container w-container">
        <div class="content-wrapper w-container tour-container">
            <h1 class="page-title">My Schedule</h1>
            <div class="w-dyn-list">
                <div class="w-dyn-items">
                    @foreach($schedules as $schedule)
                    <div class="venue-list-item w-dyn-item">
                        <div class="tour-date-row w-row">
                            <div class="w-col w-col-3">
                                {{--<div>{{ date_format(date_create($schedule->date), 'M d, Y') }}</div>--}}
                                <div class="date">
                                    {{ date_format(date_create($schedule->date), 'd') }} <span class="date-month">{{ date_format(date_create($schedule->date), 'M') }}</span>
                                </div>
                            </div>
                            <div class="w-col w-col-9">
                               <div class="name">
                                    {{ $schedule->name }}
                               </div>
                                <div class="location">
                                   {{ $schedule->location }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="w-container">
            <a class="footer-link w-inline-block" href="https://open.spotify.com/user/daviddlieeee?si=sqXOyBQuQ-egleRMkWaJ_g">
                <img src="{{ asset('images/spotify-logo.svg') }}" width="23">
            </a>
            <a class="footer-link w-inline-block" href="https://soundcloud.com/daviddlieee">
                <img src="{{ asset('images/soundcloud-logo.svg') }}" width="23">
            </a>
            <a class="footer-link w-inline-block" href="https://instagram.com/daviddlieee">
                <img src="{{ asset('images/instagram-logo.svg') }}" width="23">
            </a>
            <a class="footer-link w-inline-block" href="https://wa.me/6287726727997">
                <img src="{{ asset('images/whatsapp-logo.svg') }}" width="23">
            </a>
            <a class="footer-link w-inline-block" href="http://line.me/ti/p/~daviddlieee">
               <img src="{{ asset('images/line-logo.svg') }}" width="23">
            </a>
            <div class="footer-text">Copyrighted 2018 &copy; David Lie&nbsp;</div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/placeholders.min.js') }}"></script>
