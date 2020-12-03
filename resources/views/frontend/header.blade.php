<!doctype html>
<html class=no-js lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>DTV</title>
    <link rel="shortcut icon" href=favicon.ico>
    <link rel=stylesheet href=vendor.css>
    <link rel=stylesheet href=style.css>
    <link rel=stylesheet type=text/css href=css/layerslider.css>
    <link rel=stylesheet type=text/css href=/css/frontend.css>
    <script src=js/vendor/modernizr.js></script>
</head>
<body>
<div class=wrapper>
    <header class=header-main>
        <div class=header-upper>
            <div class=container>
                <div class=row>
                    <ul>
                        @auth 
                            <li><a href="/account">Account</a></li>
                        @endauth
                        @guest 
                            <li><a href="/login">Inloggen</a></li>
                            <li><a href="/register">Registreren</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-lower clearfix">
            <div class=container>
                <div class=row><h1 class=logo><a href=/><img src="images/logo-wit.png" alt="DTV logo" style="max-width:180%"></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>

                                <div class=nav-menu>
                                    <ul class="nav navbar-nav menu-bar" id="nav">
                                        <li><a href=/ class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a></li>
                                        @auth
                                        <li><a href=reserveren class="{{ Request::path() === 'reserveren' ? 'active' : '' }}">Banen Reserveren</a></li>
                                        <li><a href=toernooien class="{{ Request::path() === 'toernooien' ? 'active' : '' }}">Toernooien</a></li>
                                        @endauth
                                        <li><a href=kantine class="{{ Request::path() === 'kantine' ? 'active' : '' }}">Kantine</a></li>
                                        <li><a href=about class="{{ Request::path() === 'about' ? 'active' : '' }}">Over</a></li>
                                        <li><a href=contact class="{{ Request::path() === 'contact' ? 'active' : '' }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
