<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard with Materialize</title>


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>

    <style>
        body {
            backgroud: white;
        }


        #credits li,
        #credits li a {
            color: white;
        }

        #credits li a {
            font-weight: bold;
        }

        .footer-copyright .container,
        .footer-copyright .container a {
            color: #BCC2E2;
        }

        .fab-tip {
            position: fixed;
            right: 85px;
            padding: 0px 0.5rem;
            text-align: right;
            background-color: #323232;
            border-radius: 2px;
            color: #FFF;
            width: auto;
        }
    </style>


</head>

<body>

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>



<header>
    <ul class="dropdown-content" id="user_dropdown">
        <li><a class="indigo-text" href="#!">Profile</a></li>
        <li><a class="indigo-text" href="#!">Logout</a></li>
    </ul>

    <nav class="indigo" role="navigation">
        <div class="nav-wrapper">
            <a data-activates="slide-out" class="button-collapse show-on-" href="#!"><img style="margin-top: 17px; margin-left: 5px;" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463989873/smaller-main-logo_3_bm40iv.gif" /></a>

            <ul class="right hide-on-med-and-down">
                <li>
                    <a class='right dropdown-button' href='' data-activates='user_dropdown'><i class=' material-icons'>account_circle</i></a>
                </li>
            </ul>

            <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>

<!--    <nav>
        <div class="nav-wrapper indigo darken-2">
            <a style="margin-left: 20px;" class="breadcrumb" href="#!">Admin</a>
            <a class="breadcrumb" href="#!">Index</a>

            <div style="margin-right: 20px;" id="timestamp" class="right"></div>
        </div>
    </nav>-->
</header>

<main>
    <div class="row">
        <div class="col s3">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Capteur 1</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div  class="grey lighten-3 col s12 waves-effect">
                            <p>25 °C</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Capteur 2</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div  class="grey lighten-3 col s12 waves-effect">
                            <p>25 °C</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Capteur 3</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div  class="grey lighten-3 col s12 waves-effect">
                            <p>25 °C</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col s3">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Capteur 4</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div  class="grey lighten-3 col s12 waves-effect">
                            <p>25 °C</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div style="padding: 35px;" align="center" class="card">
                <div class="row">
                    <div class="left card-title">
                        <b>Capteur 5</b>
                    </div>
                </div>
                <div class="row">
                    <a href="#!">
                        <div  class="grey lighten-3 col s12 waves-effect">
                            <p>25 °C</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    </div>


    <div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large pink waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>

        <ul>
            <li>
                <a class="btn-floating blue"><i class="material-icons">input</i></a>
                <a href="" class="btn-floating fab-tip">Add new sensor</a>
            </li>
        </ul>
    </div>
</main>

<!--<footer class="indigo page-footer">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h5 class="white-text">Icon Credits</h5>
                <ul id='credits'>
                    <li>
                        Gif Logo made using <a href="https://formtypemaker.appspot.com/" title="Form Type Maker">Form Type Maker</a> from <a href="https://github.com/romannurik/FORMTypeMaker" title="romannurik">romannurik</a>
                    </li>
                    <li>
                        Icons made by <a href="https://material.io/icons/">Google</a>, available under <a href="https://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License Version 2.0</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <span>Made By <a style='font-weight: bold;' href="https://github.com/norskel" target="_blank">Norskel</a></span>
        </div>
    </div>
</footer>-->
</body>

</html>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>



<script>
    $('.button-collapse').sideNav();

    $('.collapsible').collapsible();

    $('select').material_select();
</script>




</body>

</html>
