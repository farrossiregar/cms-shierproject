<!DOCTYPE html>

<!--
  Name: Con - Admin Dashboard with Material Design
  Version: 3.0.0
  Author: _nK
  Website: http://nkdev.info
  Purchase: http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=_nK
  Support: http://nk.ticksy.com
  License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
  Copyright 2016.
-->

<html lang="en">

<head>
    @include('layout.header')
</head>

<!--
  Body
    Options:
      .boxed - boxed layout for content
-->

<body>

    <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
    <nav class="navbar-top">
        <div class="nav-wrapper">

            <!-- Sidebar toggle -->
            <a href="#" class="yay-toggle">
                <div class="burg1"></div>
                <div class="burg2"></div>
                <div class="burg3"></div>
            </a>
            <!-- Sidebar toggle -->

            <!-- Logo -->
            <a href="" class="brand-logo">
                <img src="{{ asset('image/shierproject-logo.jpeg') }}" alt="Con">
            </a>
            <!-- /Logo -->

            <!-- Menu -->
            @include('layout.notif-bar')
            <!-- /Menu -->

        </div>
    </nav>
    <!-- /Top Navbar -->

    <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
    <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures yay-light yay-static">

        <div class="top">
            <div>
                <!-- Sidebar toggle -->
                <a href="#" class="yay-toggle">
                    <div class="burg1"></div>
                    <div class="burg2"></div>
                    <div class="burg3"></div>
                </a>
                <!-- Sidebar toggle -->

                <!-- Logo -->
                <a href="" class="brand-logo">
                    <!-- <img src="{{ asset('assets/_con/images/logo-white.png') }}" alt="Con"> -->
                    <img src="{{ asset('image/shierproject-logo.jpeg') }}" alt="Con">
        
                </a>
                <!-- /Logo -->
            </div>
        </div>

        <div class="nano">
            <div class="nano-content">

                @include('layout.menu')
                

            </div>
        </div>
    </aside>
    <!-- /Yay Sidebar -->

    <!-- Main Content -->
    <section class="content-wrap">

        @yield('content')

    </section>
    <!-- /Main Content -->

    <!-- Search Bar -->
    <div class="search-bar">
        <div class="layer-overlay"></div>
        <div class="layer-content">
            @include('layout.search-form')
        </div>
    </div>
    <!-- /Search Bar -->

    <!--
  Chat
    .chat-light - light color scheme
-->
    <div class="chat">
        <div class="layer-overlay"></div>

        <div class="layer-content">

            <!-- Contacts -->

                @include('layout.chat')
            <!-- /Contacts -->

            <!-- Messages -->
            <div class="messages">

                <!-- Top Bar with back link -->
                <div class="topbar">
                    <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
                    <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Back</a>
                </div>
                <!-- /Top Bar with back link -->

                <!-- All messages list -->
                <div class="list">
                    <div class="nano scroll-bottom">
                        <div class="nano-content">

                            <div class="date">Monday, Feb 23, 8:23 pm</div>

                            <div class="from-me">
                                Hi, Felicia.
                                <br> How are you?
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> Hi! I am good!
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                Glad to see you :)
                                <br> This long text is intended to show how the chat will display it.
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> Also, we will send the longest word to show how it will fit in the chat window:
                                <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
                            </div>

                            <div class="date">Friday, Mar 10, 5:07 pm</div>

                            <div class="from-me">
                                Hi again!
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> Hi! Glad to see you.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                I want to add you in my Facebook.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                Can you give me your page?
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> I do not use Facebook. But you can follow me in Twitter.
                            </div>

                            <div class="clear"></div>

                            <div class="from-me">
                                It's good idea!
                            </div>

                            <div class="clear"></div>

                            <div class="from-them">
                                <img src="{{ asset('assets/_con/images/user2.jpg') }}" alt="John Doe" class="circle photo"> You can find me here - <a href="https://twitter.com/nkdevv">https://twitter.com/nkdevv</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /All messages list -->

                <!-- Send message -->
                <div class="send">
                    <form action="#!">
                        <div class="input-field">
                            <input id="chat-message" type="text" name="chat-message">
                        </div>

                        <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i></button>
                    </form>
                </div>
                <!-- /Send message -->

            </div>
            <!-- /Messages -->
        </div>

    </div>
    <!-- /Chat -->
    <footer>&copy; 2015
        <strong>nK</strong>. All rights reserved. <a href="http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=_nK">Purchase</a></footer>

    <!-- DEMO [REMOVE IT ON PRODUCTION] -->
    <script type="text/javascript" src="{{ asset('assets/_con/js/_demo.js') }}"></script>

    @include('layout.footer-script')



</body>

</html>