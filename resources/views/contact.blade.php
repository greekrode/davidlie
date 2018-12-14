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
<body class="subpage-background">
<div class="nav-bar w-nav" data-animation="default" data-collapse="medium" data-contain="1" data-duration="400">
    <div class="w-container">
        <a class="brand-link w-nav-brand" href="/">
            <h1 class="logo"><img src="{{ asset('images/djdavid_logo.png') }}" width="100px" height="10%"></h1>
        </a>
        <nav class="nav-menu w-nav-menu" role="navigation">
            <a class="nav-link w-nav-link" href="/music">Music</a>
            <a class="nav-link w-nav-link" href="#gallery">Gallery</a>
            <a class="nav-link w-nav-link" href="/contact">Contact</a>
        </nav>
        <div class="menu-button w-clearfix w-nav-button">
            <div class="menu-text">MENU</div>
            <div class="menu-icon w-icon-nav-menu"></div>
        </div>
    </div>
    <div class="hero-container w-container" style="margin-top: 0px !important;">
        <div class="content-wrapper w-container">
            {{--<h1 class="page-title">Get in touch</h1>--}}
            <div class="contact-row w-row">
                <div class="w-col w-col-12">
                    <div class="contact-h3"><img src="{{ asset('images/djdavid_logo.png') }}" width="200"></div>
                    <div class="contact-desc-row">
                        <div class="contact-desc"><a href="http://line.me/ti/p/~daviddlieee" class="contact-link" target="_blank"><img src="{{ asset('images/line-logo.svg') }}" width="40" style="margin-right: 20px;"> daviddlieee</a></div>
                        <div class="contact-desc"><a href="https://instagram.com/daviddlieee" target="_blank" class="contact-link"><img src="{{ asset('images/instagram-logo.svg') }}" width="40" style="margin-right: 20px;"> daviddlieee</a></div>
                        <div class="contact-desc"><a href="https://wa.me/6287726727997" target="_blank" class="contact-link"><img src="{{ asset('images/phone.svg') }}" width="40" style="margin-right: 20px;"> +62877 - 2672 - 7997</a></div>
                        <div class="contact-desc"><a href="https://wa.me/6287726727997" target="_blank" class="contact-link"><img src="{{ asset('images/whatsapp-logo.svg') }}" width="40" style="margin-right: 20px;"> +62877 - 2672 - 7997</a></div>
                        <div class="contact-desc"><a href="mailto:daviddlieee@gmail.com?Subject=Contact" target="_blank" class="contact-link"><img src="{{ asset('images/email-logo.svg') }}" width="40" style="margin-right: 20px;"> daviddlieee@gmail.com</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer" style="margin-top: -40px !important;">
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

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/placeholders.min.js') }}"></script>
