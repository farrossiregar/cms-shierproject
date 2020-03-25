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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="_nK">
    <link rel="icon" href="assets/_con/images/icon.png">

    <title>Con - Admin Dashboard with Material Design</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

    <!-- nanoScroller -->
    <link rel="stylesheet" type="text/css" href="bower_components/nanoscroller/bin/css/nanoscroller.css" />

    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="bower_components/fontawesome/css/font-awesome.min.css" />

    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="assets/material-design-icons/css/material-design-icons.min.css" />

    <!-- IonIcons -->
    <link rel="stylesheet" type="text/css" href="bower_components/ionicons/css/ionicons.min.css" />

    <!-- WeatherIcons -->
    <link rel="stylesheet" type="text/css" href="bower_components/weather-icons/css/weather-icons.min.css" />










    <!-- Main -->
    <link rel="stylesheet" type="text/css" href="assets/_con/css/con-base.css" />

    <!--[if lt IE 9]>
        <script src="bower_components/html5shiv/dist/html5shiv.min.js"></script>
    <![endif]-->


</head>

<body>

    <section id="sign-up">

        <!-- Background Bubbles -->
        <canvas id="bubble-canvas"></canvas>
        <!-- /Background Bubbles -->

        <!-- Sign Up Form -->
        <form action="{{ route('/registerPost') }}" method="post">
            {{csrf_field()}}
            <div class="row links">
                <div class="col s6 logo">
                    <img src="assets/_con/images/logo-white.png" alt="">
                </div>
                <div class="col s6 right-align"><a href="page-sign-in.html">Sign In</a> /
                    <strong>Sign Up</strong>
                </div>
            </div>

            <div class="card-panel clearfix">

                <!-- Social Sign Up -->
                <!-- <div class="row socials">
                    <div class="col s4">
                        <a class="btn blue darken-2 z-depth-0 z-depth-1-hover" href="#"><i class="fa fa-2x fa-facebook"></i></a>
                    </div>
                    <div class="col s4">
                        <a class="btn blue lighten-2 z-depth-0 z-depth-1-hover" href="#"><i class="fa fa-2x fa-twitter"></i></a>
                    </div>
                    <div class="col s4">
                        <a class="btn red z-depth-0 z-depth-1-hover" href="#"><i class="fa fa-2x fa-google-plus"></i></a>
                    </div>
                </div> -->
                <!-- /Social Sign Up -->

                <div class="row">
                    <!-- First Name -->
                    <div class="col m6 s12">
                        <div class="input-field">
                            <i class="fa fa-user prefix"></i>
                            <input id="name" name="name" type="text">
                            <label for="input_fname">First Name</label>
                        </div>
                    </div>
                    <!-- /First Name -->

                    <!-- Last Name -->
                    <div class="col m6 s12">
                        <div class="input-field">
                            <i class="fa fa-user prefix"></i>
                            <input id="lname" name="lname" type="text">
                            <label for="input_lname">Last Name</label>
                        </div>
                    </div>
                    <!-- /Last Name -->
                </div>

                <!-- Email -->
                <div class="input-field">
                    <i class="fa fa-envelope prefix"></i>
                    <input id="email" name="email" type="email">
                    <label for="input_email">Email</label>
                </div>
                <!-- /Email -->

                <!-- Username -->
                <!-- <div class="input-field">
                    <i class="fa fa-user prefix"></i>
                    <input id="input_username" type="text">
                    <label for="input_username">Username</label>
                </div> -->
                <!-- /Username -->

                <!-- Password -->
                <div class="input-field">
                    <i class="fa fa-unlock-alt prefix"></i>
                    <input id="password" name="password" type="password">
                    <label for="input_password">Password</label>
                </div>
                <!-- /Password -->

                <p>
                    <input type="checkbox" id="checkbox_terms" />
                    <label for="checkbox_terms">I agree to the <a href="#">terms of use</a>.</label>
                </p>

                <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">Sign Up</button>
            </div>

        </form>
        <!-- /Sign Up Form -->

    </section>


    <!-- jQuery -->
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery RAF (improved animation performance) -->
    <script type="text/javascript" src="bower_components/jquery-requestAnimationFrame/dist/jquery.requestAnimationFrame.min.js"></script>

    <!-- nanoScroller -->
    <script type="text/javascript" src="bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js"></script>

    <!-- Materialize -->
    <script type="text/javascript" src="bower_components/materialize/bin/materialize.js"></script>










    <!-- Sortable -->
    <script type="text/javascript" src="bower_components/Sortable/Sortable.min.js"></script>

    <!-- Main -->
    <script type="text/javascript" src="assets/_con/js/_con.js"></script>

    <!-- Google Prettify -->
    <script type="text/javascript" src="bower_components/code-prettify/src/prettify.js"></script>


</body>

</html>