<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shiromani Mart</title>
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Content/logo_X3y_icon.ico')}}">
    <link rel="shortcut icon" href="" />
    <!-- CSS preloader -->
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/loader.css')}}">
    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/megatron-template.css')}}">
    <!-- CSS modules -->
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/fontello.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/jcarousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/cloudzoom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/sfmenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/isotope.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Content/dist/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/smoothness/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/hoverfold.css')}}">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/rs-plugin/css/extralayers.css')}}">

    <!-- Layout food -->
    <link rel="stylesheet" href="{{URL::asset('css/LandingPage/css/megatron-template-food.css')}}">
    <!--<link href="~assestsLandingPage/css/style.css" rel="stylesheet">-->
    <style>
        .every-day-block h5 {
            text-align: center;
            margin: 37px 0px 39px 24px;
            font-size: 27px;
            color: #fff;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .wrapper .side-left {
            left: 0;
        }

        .wrapper .side {
            height: 100%;
            position: relative;
            -webkit-backface-visibility: hidden;
            z-index: 100;
            background: #fff;
        }

        .copy {
            max-width: 80%;
            margin: 0 auto;
            padding: 1em 0 0;
        }

        .lesser-viewport-area .chapter-img.animated {
            width: 170px;
            height: 170px;
            line-height: 170px;
            position: relative;
            top: 0;
        }



        .chapter-imgage.chapter-img-1 {
            width: 98px;
        }

        .lesser-viewport-area .chap-no-text {
            top: 10px;
        }

        .chap-no-text {
            padding-top: 0;
            font-family: "Open Sans";
            color: #005286;
            text-align: center;
            position: relative;
            top: 15px;
        }

            .chap-no-text h3 {
                font-family: bebasneue;
                font-size: 4em;
                letter-spacing: 1px;
                margin-bottom: 0;
                margin-top: 5px;
                padding: 0px;
            }

            .chap-no-text p {
                margin-left: 5px;
                font-size: 13px;
                font-weight: 300;
                margin-bottom: 0;
            }


        .lesser-viewport-area .chapter-img.animated {
            width: 170px;
            height: 170px;
            line-height: 170px;
            position: relative;
            top: 0;
        }

        .chap-no-text p {
            margin-left: 5px;
            font-size: 16px;
            font-weight: 300;
            margin-bottom: 0;
        }

        /*  .anyone-can-sell {
            background: linear-gradient(rgba(200, 105, 70, 0.45), rgba(100, 45, 27, 0.69)), url('assestsLandingPage/Slider 3.jpg')no-repeat;
            color: #fff;
            position: relative;
            z-index: 999990;
            padding: 3em 0;
            height: 400px;
        }*/

        .sell-in-flipkart p {
            color: #818181;
            font-size: 18px;
            font-family: opensans-light;
            font-weight: 300;
            margin: 15px 0;
        }

        .center-block {
            max-width: 768px;
            padding: 0 20px;
        }

        .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }

        .sell-in-flipkart h2 {
            font-family: bebasneue;
            text-align: center;
            letter-spacing: 6px;
            font-size: 3.5em;
            margin: 0 10px 0px;
            padding: 0px;
        }

        .sell-needs p {
            display: inline-block;
            font-size: 14px;
            font-weight: 300;
            font-family: opensans-light;
            width: 230px;
            position: relative;
            top: 0;
            margin-top: 5px;
        }

        .sell-needs .and {
            font-size: 4em;
            vertical-align: top;
            margin: 0 5px;
            color: #ffde14;
            font-weight: 300;
            font-family: opensans-light;
            position: relative;
            top: 18px;
        }

        span.card.vcenter {
            padding: 18px 10px;
        }



        span.card {
            border: 2px solid #ffde14;
            height: 60px;
            width: 98px;
            display: inline-block;
            vertical-align: top;
            margin-right: 10px;
            padding: 8px 10px;
            text-align: center;
        }

        .sell-needs {
            font-family: "Open sans";
            margin: 25px 0;
        }

        section#block-slp-blocks-slp-login-form {
            float: right;
            font-family: "Open Sans";
            margin-top: 25px;
            position: relative;
        }

        #block-slp-blocks-slp-login-form h2 {
            margin: 0;
            position: absolute;
            text-align: left;
            color: #40adbf;
            top: -20px;
            font-size: 13px;
            font-weight: 400;
            font-family: "Open Sans";
        }

        .forgot-password {
            position: absolute;
            right: 0;
            top: -21px;
            color: #a3b6c9;
            font-size: 12px;
        }

        #slp_login_form .form-item {
            display: inline-block;
            margin-right: 5px;
        }

        #slp_login_form #edit-submit {
            background: #009688;
            border: 0;
            margin-left: 2px;
            border-radius: 2px;
            color: #fff;
            font-weight: 600;
            border-color: #ccc;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
        }

        /*.reg-col {
            background: linear-gradient(rgba(47, 115, 109, 0.58),rgba(7, 113, 103, 0.59)), url(assestsLandingPage/ques-background.jpg);

        }*/

        .row {
            margin-left: 0px;
            margin-right: 0px;
        }

        .col-md-8.hero {
            padding: 0;
        }

        .col-md-4.registerform {
            padding: 0;
        }

        .navbar-logo.pull-left {
    margin-top: 10px;
    width: 50%;
}

        .navbar-logo img {
            width: 45%;
        }

        @media only screen and (min-width: 320px) and (max-width: 400px) {
            .navbar-logo img {
                width: 80%;
            }
        }
        .navbar-secondary-menu.pull-right.hidden-xs {
    padding-top: 62px;
}

        /*new style*/
        .down-button-component .container {
            padding-top: 50px;
            padding-bottom: 80px;
        }

        @media (min-width: 768px) {
            .col-sm-offset-2 {
                margin-left: 16.66666667%;
            }
        }

        h2.sell {
            color: #fff;
        }

        .text-center {
            text-align: center;
            font-family: -webkit-body;
        }

        .sell {
            width: 100%;
            text-align: center;
            margin-top: 48px;
        }

            .sell button.btn.btn-danger {
                padding: 12px 99px;
                border: 0;
            }

        .sell-text {
            background: linear-gradient(to top right, #45b5c5 0%, #dd351a 100%);
            color: #fff;
            padding: 36px;
        }


        .row {
            margin-left: 0;
            margin-right: 0;
        }

            .row.seller {
                background-color: lightsteelblue;
                padding: 30px 0 30px 0;
            }

        h2.mainheading, h4.headingtext {
            text-align: center;
        }

        h4.headingtext {
            color: #ee7031;
            text-transform: none;
        }

        .mainheading {
            font-weight: bold;
        }

        .ite-wrapper {
            float: left;
            width: 20%;
            margin-top: 50px;
        }


        .ite.item {
            margin-left: 23%;
            max-width: 867px;
        }

        @media only screen and (min-width: 320px) and (max-width: 400px) {
            .mainheading {
                font-size: 20px !important;
            }
        }

        .Newform {
            background-color: black;
            position: absolute;
            top: 3px;
            right: 54px;
            z-index: 1;
            border-radius: 8px;
            opacity: .9;
            width: 23%;
        }

        .reg-col {
            position: relative;
        }

        .row.required {
            padding-top: 65px;
            padding-bottom: 45px;
            background-color: aqua;
        }

        .video {
            margin-top: 70px;
        }

        .howtosell > img {
            height: 500px;
        }

        .howtotext {
            margin-top: 40px;
        }

            .howtotext p {
                letter-spacing: 0.8px;
                word-spacing: 5px;
                padding: 0px;
                line-height: 20px;
                text-align: justify;
            }

            .howtotext h2 {
                text-align: center;
            }

        .line {
            border-top-left-radius: 67px;
            border-bottom-left-radius: 250px;
        }

        .imagee {
            margin-left: 20px;
            margin-bottom: 3px;
        }

        .text {
            margin-top: 20px;
            margin-left: 25px;
        }

        .joinera {
            background-color: #fff;
        }

        .newera {
            margin-top: 35px;
            margin-bottom: 35px;
        }

            .newera p {
                letter-spacing: .7px;
            }

            .newera h3 {
                font-style: italic;
            }

            .newera h2 {
                text-align: center;
            }

        .hotosell {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <style>
       .documentimg>img{width:300px;}
       @media screen and (max-width: 400px) and (min-width: 320px){
          .documentimg>img{
              width:200px;
                  

          }
        }
       @media screen and (max-width: 520px) and (min-width: 400px){
          .documentimg>img{
              width:151px;
                  margin-left: 20px;

          }
        }
      .regeasy {
    margin-top: 85px;
    margin-left: 143px;
    width: 224px;
}
        @media screen and (max-width: 400px) and (min-width: 320px) {
         .regeasy{
            margin-top:15px;
          margin-left:20px;
        width:100%;
        }
        }
        @media screen and (max-width: 520px) and (min-width: 400px) {
         .regeasy{
            margin-top:15px;
            margin-left:20px;
        width:0;
        }
        }
        .joinera{margin-top:40px;}
        @media screen and (max-width: 500px) and (min-width: 320px) {
              .joinera{margin-top:20px;font-size:20px;}
        }
      button.btn-info.easy {
    margin-left: 160px;
    width: 143px;
    color: #000;
    background: #fff;
    border:0;
}
      .easy img {
    width: 25%;
}
        @media screen and (max-width: 400px) and (min-width: 320px) {
              button.btn-info.easy {
    margin-left: 40px;
}
        }
         @media screen and (max-width: 500px) and (min-width: 400px) {
              button.btn-info.easy {
    margin-left: 20px;
}
        }
        .owl-slider-outer .owl-item  img {
	width: 75% !important;
}
  @media screen and (max-width: 500px) and (min-width: 320px) {
   .owl-slider-outer .owl-item  img {
	width:100% !important;
}
}
        section.story-approach {
            background: #fff !important;
            position: relative;
        }

        .doing-business h2 {
            color: #0883af;
            font-family: bebasneue;
            letter-spacing: 2px;
            padding: 15px 0px 15px 25px;
            font-size: 31px;
            margin-top: 0;
            background-color: antiquewhite;
        }

        .business-outer {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .business-wrapper {
            background-size: 95% auto;
            position: relative;
        }



        .business-content {
            font-family: "Open Sans";
        }



            .business-content h2 {
                margin: 0;
                padding: 10px 0;
                font-family: opensans-semibold;
                font-weight: 600;
                letter-spacing: 0;
            }

            .business-content p {
                color: #95a5a6;
                margin-bottom: 15px;
                font-size: 14px;
                font-weight: 400;
            }

        .card-desc {
            display: inline-block;
            margin-right: 20px;
            text-align: center;
            vertical-align: top;
        }

        .card-cont p {
            font-size: 12px;
        }

        .how {
            display: inline-block;
            height: 65%;
            width: 65%;
            vertical-align: middle;
        }

        .business-content h3 {
            color: #01638f;
            font-weight: bold;
            margin: 82px 58px 0;
            line-height: 33px;
            font-size: 25px;
        }

        .anyone-can-sell {
            background: linear-gradient(to top right, #45b5c5 0%, #dd351a 100%);
            color: #fff;
            position: relative;
            z-index: 999990;
            padding:1rem 0;
        }

        .ite-wrapper .col-sm-6 {
            width: 41%;
        }
        .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000 \9;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid #000;
    border-radius: 10px;
}
        .main-slider .owl-slider-outer .owl-controls {
    top: 50%!important;
    left: 1%!important;
    right: auto;
    width: 98%;
    display: none;
}
        .owl-theme .owl-controls .owl-buttons div {
    display: none;
    zoom: 1;
}
        @media screen and (min-width: 768px){

.carousel-indicators {
    bottom: -11px;
}
        }
        @media (max-width: 767px){
.responsive .navbar-logo {
    width: 52%;
    margin: 7px 0;
}}
        @media only screen and (max-width: 500px) and (min-width: 320px) {
            .navbar-logo img {
                width: 96%;
                float:left
            }
        }
        button.btn.btn-default.active {
    background-color: #41aec0;
    border: none;
    color: #fff;
}
        .background {
    height: 73px;
}
        @media only screen and (max-width: 400px) and (min-width: 320px) {
            .background {
    height: 45px;
}
        }
    </style>
    ﻿<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111936397-1"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111936397-1');

    </script>
</head>


<body class="responsive touch">
    
    <!-- Off Canvas Menu -->
    <!-- //end Off Canvas Menu -->

    <div id="outer">
        <div id="outer-canvas">
            <!-- Navbar -->
            <header class="variant2">

                <!-- Back to top -->
                
                <!-- //end Back to top -->

                <section class="navbar">

                    <div class="background">
                        <div class="container">
                            <!-- Logo -->
                            <div class="navbar-logo pull-left"> <a href="/Home/Index"><img src="{{ asset('css/LandingPage/shlogo1.png') }}" alt="Megatron"></a></div>
                            <!-- //end Logo -->
                            <div class="clearfix visible-sm"></div>

                            <!-- Secondary menu -->
                            <div class="login hidden-sm hidden-md hidden-lg">

                                <button class="btn btn-info" data-toggle="modal"
                                        data-target="#login" style="margin-top: 8px;margin-bottom:8px;float: left;
    width: 20%;
    margin-right: 3px;">
                                    LogIn
                                </button>







                                <button class="btn btn-info" data-toggle="modal"
                                        data-target="#register" style="margin-top: 8px">
                                    Register
                                </button>

                            </div>
                            <div class="navbar-secondary-menu pull-right hidden-xs">


                                <section id="block-slp-blocks-slp-login-form" class="block block-slp-blocks clearfix" style="margin-top:-42px;">
                                    <h2 class="block-title">Login</h2>
                                    <div class="form-inline">
                                        <div>
                                            <input type="hidden" name="authName" value="flipkart">
                                            <div class="forgot-password">
                                                <a href="/Home/ForgotPassword">Forgot password?</a>
                                            </div>
<form action="/Home/Login" method="post">                                                <div class="form-type-textfield form-item-name form-item form-group">
                                                    <input id="email112" type="text" placeholder="Username" width="186px" name="Email" class="form-control form-text required">
                                                    <div class="valid" style="height: 0px;
    line-height: 23px;">
                                                        <span id="emailerror1" style="color:red;"></span>
                                                    </div>
                                                </div>
                                                    <div class="form-type-textfield form-item-pass form-item form-group">
                                                        <input id="password1" type="password" placeholder="Password" width="186px" name="Password" class="form-control form-text required">
                                                        <div class="valid" style="height: 0px;
    line-height: 23px;">
                                                            <span id="passworderror1" style="color:red;"></span>
                                                        </div>
                                                    </div>
                                                        <button id="btnlogin" type="submit" class="btn btn-default form-submit"
                                                                style="border:0;">
                                                            Log in
                                                        </button>
</form>
                                        </div>
                                    </div>
                                </section>


                            </div>
                            <!-- Secondary menu mobile -->
                            <!-- Secondary menu mobile -->
                            <div class="modal fade" id="login" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div action="/action_page.php">
<form action="/Home/Login" method="post">                                                <div class="form-group">
                                                    <label for="email">Email address:</label>
                                                    <input type="email" class="form-control" id="modemail" name="Email"  style="background-color: #eee;">
                                                <span id="modemailerror" style="color:red"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pwd">Password:</label>
                                                    <input type="password" class="form-control" id="modpwd" name="Password" style="background-color: #eee;">
                                                    <span id="modpasserror" style="color:red"></span>
                                                </div>
                                                <button type="submit" id="modbtnsub" class="btn btn-default">Submit</button>
                                                <a href="/Home/ForgotPassword" style="color:blue;float:right;">Forgot Password</a>
</form>                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="modal fade" id="register" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div action="/action_page.php">
<form action="/Home/Register" method="post">                                                <div class="form-group row">
                                                    <input type="text" class="form-control" id="modfname" placeholder="Enter your First Name" name="FirstName">
                                                    <span id="modnameerror" style="color:red;"></span>
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" class="form-control" id="modlname" placeholder="Enter your Last Name" name="LastName">
                                                    <span id="modnameerror1" style="color:red;"></span>
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" class="form-control" id="modphone" placeholder="Enter your Mobile No." name="Mobile" onkeypress="return isNumber(event)" maxlength="10" />
                                                    <input type="hidden" id="modmobileexist" />
                                                    <span id="modpherror" style="color:red;"></span>
                                                </div>
                                                <div class="form-group row">
                                                    <input type="text" class="form-control" id="modEmail" placeholder="Enter your Email" name="Email" />
                                                    <input type="hidden" id="modemailexist" />
                                                    <span id="modEmailerror" style="color:red;"></span>
                                                </div>
                                                <div class="form-group row">
                                                    <input type="password" class="form-control" id="modPassword" placeholder="Enter your Password" name="Password" />
                                                    <span id="modPassworderror" style="color:red;"></span>
                                                </div>
                                                <div class="form-group row">
                                                    <input type="password" class="form-control" id="modConfirmPassword" placeholder="Enter Confirm Password" name="ConfirmPassword" />
                                                    <span id="modConfirmPassworderror" style="color:red;"></span>
                                                </div>
                                                <button type="submit" id="modbtnreg" class="btn btn-default">Submit</button>
</form>                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                </section>

                <!-- Navbar height -->
                <div class="navbar-height-inner"></div>
                <!-- Navbar height -->
                <!-- Navbar height -->
                <div class="navbar-height"></div>
                <!-- Navbar height -->

            </header>
            <!-- //end Navbar -->
            <div class="reg-col">
                <div class="row">
                    <div class="hero">
                        <section class="main-slider container" style="width:100%;padding-left:0px;padding-right:0px;">


                            <div class="owl-slider-outer carousel slide" id="myCarousel" data-ride="carousel">
                                <ol class="carousel-indicators hidden-xs">
                                            <li data-target="#myCarousel" class="owl-prev" data-slide-to="1" class="active"></li>
                                            <li data-target="#myCarousel" class="owl-prev" data-slide-to="21" class="active"></li>

                                </ol>
                                <div class="owl-slider">
                                            <div class="item">


                                                <img src="http://api.shiromanimart.com/AdsImages/BM_WhiteBG2.png" class="img-responsive" width="100%"
                                                     height="400px" alt="">
                                                <a href="#" class="title-slide-1"> </a>

                                            </div>
                                            <div class="item">


                                                <img src="http://api.shiromanimart.com/AdsImages/Silder2vgh2.png" class="img-responsive" width="100%"
                                                     height="400px" alt="">
                                                <a href="#" class="title-slide-21"> </a>

                                            </div>

                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="Newform hidden-xs">
                        <div action="#">
<form action="/Home/Register" method="post">                                <div class="form-border" style="padding:20px;">
                                    <h4 style="text-align: center;color:#fff;">Register</h4>

                                    <div class="form-group row">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter your First Name" name="FirstName">
                                        <span id="nameerror" style="color:red;"></span>
                                    </div>

                                    <div class="form-group row">
                                        <input type="text" class="form-control" id="lname" placeholder="Enter your Last Name" name="LastName">
                                        <span id="nameerror1" style="color:red;"></span>
                                    </div>

                                    <div class="form-group row">
                                        <input type="text" class="form-control" id="phone" placeholder="Enter your Mobile No." name="Mobile" onkeypress="return isNumber(event)" maxlength="10" />
                                        <input type="hidden" id="mobileexist" />
                                        <span id="pherror" style="color:red;"></span>
                                    </div>

                                    <div class="form-group row">
                                        <input type="text" class="form-control" id="Email" placeholder="Enter your Email" name="Email" />
                                        <input type="hidden" id="emailexist" />
                                        <span id="Emailerror" style="color:red;"></span>
                                    </div>

                                    <div class="form-group row">
                                        <input type="password" class="form-control" id="Password" placeholder="Enter your Password" name="Password" />
                                        <span id="Passworderror" style="color:red;"></span>
                                    </div>

                                    <div class="form-group row">
                                        <input type="password" class="form-control" id="ConfirmPassword" placeholder="Enter Confirm Password" name="ConfirmPassword" />
                                        <span id="ConfirmPassworderror" style="color:red;"></span>
                                    </div>

                                    <div class="" style="text-align:center;">
                                        <input type="submit" id="btnreg" value="Submit" style="border:none;padding: 6px 18px;background:rgb(0, 150, 136);color: #fff;" />
                                    </div>
                                </div>
</form>                        </div>
                    </div>
                </div>
            </div>

            <div class="row hotosell">
                <div class="container">
                    <h2><b>How to sell on Shiromani Mart</b></h2>

                  
                    <img src="{{ asset('css/LandingPage/images/Capture.PNG') }}" width="100%">
                </div>
            </div>

            <div class="row">
                <div class="thirs-col">
                    <div class="anyone-can-sell">
                        <div class="container">
                            <h2 style="color: #fff;padding:20px 0 12px;text-align:center;">Requirments to be a seller with Shiromani Mart</h2>
                            <div class="row">
                                <div class="anyone-block col-md-7">
                                    <div class="col-md-4 col-xs-6 documentimg">
                                        <img src="{{ asset('css/LandingPage/document.png') }}">
                                    </div>
                                    <div class="col-md-4 col-xs-5 regeasy">
                                        <h4 class="register-in" style="color:#fff;"><b>Easy Registration</b></h4>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <a href="#">
                                            <button class="btn-info easy">
                                                <span><img src="{{ asset('css/LandingPage/dollar.png') }}"></span><span>
                                                    <b>Start Selling</b>
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="video-block col-xs-12 col-md-5">
                                    <div class="video-container">
                                     
                                        <iframe src="https://www.youtube.com/embed/XCHEe5wNV78?rel=0&;controls=1&amp;showinfo=0"
                                                frameborder="0" allowfullscreen="" style="width:100%;height: 240px;margin-top: 20px;"></iframe>
                                        <a href="#" data-toggle="modal" data-target="#videomodel" style="color:blue">For Hindi video</a>





                                        <div class="modal fade" id="videomodel" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">

                                                    <div class="modal-body" style="padding:0px !important;background-color:black">
                                                        <iframe src="https://www.youtube.com/embed/k05E2CHnDZw?rel=0&;controls=1&amp;showinfo=0"
                                                                frameborder="0" allowfullscreen="" style="width:100%;height: 240px;"></iframe>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="container">
                    <h2 class="text-center joinera">Join new era of Selling and buying Footwear Online</h2>
                    <img src="{{ asset('css/LandingPage/5sliderstep.PNG') }}" width="100%"/>
                </div>
            </div>

            
            <!--join  new era-->
           
            <!-- Footer -->
            <footer>
                <section class="footer-navbar dark">
                    <div class="container content nopad-xs">
                        <div class="row">
                            <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                <h3>Information<a class="expander visible-xs" href="#TabBlock-3">+</a></h3>
                                <div class="tabBlock" id="TabBlock-3">
                                    <ul class="menu">
                                        <li><a href="/Home/About">About Us</a></li>
                                        <li><a href="/Home/Cancellations">Cancellation &amp; Returns</a></li>
                                        <li><a href="/Home/Privacy">Privacy Notice</a></li>
                                        <li><a href="/Home/SellonShiromani">Sell on Shiromani Mart</a></li>
                                        <li><a href="/Home/Terms">Terms and Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                <h3>Customer service<a class="expander visible-xs" href="#TabBlock-4">+</a></h3>
                                <div class="tabBlock" id="TabBlock-4">
                                    <ul class="menu">

                                        <li><a href="/Home/FAQ">Help & FAQs</a></li>
                                        <li><a href="/Home/Contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix visible-sm"></div>
                            <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                <h3>Careers:<a class="expander visible-xs" href="#TabBlock-5">+</a></h3>
                                <div class="tabBlock" id="TabBlock-5">
                                    <ul class="menu">
                                        <p>If you would like to work with Shiromani Mart, Send us your resume <a href="mailto:info@shiromanimart.com">info@shiromanimart.com</a></p>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 col-lg-3 collapsed-block">
                                <h3>Contact Us<a class="expander visible-xs" href="#TabBlock-6">+</a></h3>
                                <div class="tabBlock" id="TabBlock-6">
                                    <ul class="menu">
                                        <li><span class="fa fa-home "></span>   Pillar No.143, United Arcade</li>
                                        <li> <span>&nbsp;</span>Attapur, Ranga Reddy, Telangana</li>
                                        <li><span class="fa fa-mobile"></span>   7207135351, 9989988214</li>
                                        <li><span class="fa fa-envelope-o"></span> <a href="mailto:info@shiromanimart.com">   info@shiromanimart.com</a></li>

                                    </ul>
                                </div>
                            </div>
                           
                            <div class="col-sm-9 col-md-9">
                                <ul class="payment-list pull-right">
                                    <li>
                                        <a href="https://www.facebook.com/Shiromani-Mart-148199492376816/?modal=admin_todo_tour" target="_blank">
                                            <img src="{{ asset('css/Content/Facebook.png') }}" width="36" height="30" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/u/0/115991834129166999144" target="_blank">
                                            <img src="{{ asset('css/Content/googleplus.png') }}" width="36" height="30" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/ShiromaniMart" target="_blank">
                                            <img src="{{ asset('css/Content/twitter.png') }}" width="36" height="30" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/shiromanimart" target="_blank">
                                            <img src="{{ asset('css/Content/instagram.png') }}" width="36" height="30" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://in.pinterest.com/shiromanimart" target="_blank">
                                            <img src="{{ asset('css/Content/pinterest.png') }}" width="36" height="30" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCOmMsuldMKIQAfQQ5Lei4rQ" target="_blank">
                                            <img src="{{ asset('css/Content/youtube.png') }}" width="36" height="30" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-bottom-block container">
                    <div class="row">
                        <div class="col-sm-5 col-md-4 copyright-text"> &copy; 2017 <a href="#">Shiromani Mart</a>. All Rights Reserved. </div>
                        
                        
                    </div>
                </section>
            </footer>
            <div id="outer-overlay"></div>
            <!-- //end Footer -->
        </div>
    </div>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery-1.8.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.jcarousel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/cloudzoom.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.fancybox.js?v=2.1.5')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.inview.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/hoverIntent.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/superfish.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/supersubs.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.plugin.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.countdown.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/LandingPage/js/megatron.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/Scripts/slp_homepage1.min.js')}}"></script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <!--
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    -->

</body>

</html>
<script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
</script>
<script>
        $('#Email').change(function () {
            var c = $('#Email').val();
            if (c == "") {
                $('#Emailerror').html("Enter Email");
                return false;
            }
            else {
                var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(c);
                if (!re) {
                    $('#Emailerror').html("Please enter valid email id");
                    return false;
                }
                else {
                    $.ajax({
                        url: '/Home/EmailCheck?em=' + c,
                        type: 'POST',
                        success: function (data) {
                            if (data != "") {
                                $('#emailexist').val(data);
                                $('#Emailerror').html("Email id already exist");
                            }
                            else {
                                $('#emailexist').val("");
                            }
                        }
                    })
                }
                $('#Emailerror').html("");
            }
        })

        $('#phone').change(function () {
            var mobile = $('#phone').val();

            if (mobile == "") {
                $('#pherror').html("Please enter Mobile Number");
                return false;
            }
            else {
                var mo = /[7-9]\d{9}$/.test(mobile);
                if (!mo) {
                    $('#pherror').html("Please enter valid phone number");
                    return false
                }
                else {
                    $.ajax({
                        url: '/Home/mobilecheck?em=' + mobile,
                        type: 'POST',
                        success: function (data) {
                            if (data != "") {
                                $('#mobileexist').val(data);
                                $('#pherror').html("Mobile number already exist");
                            }
                            else {
                                $('#mobileexist').val("");
                            }
                        }
                    })
                }
                $('#pherror').html("");
            }
        })


        $("#btnreg").click(function () {
            var a = $('#fname').val().trim();
            var b = $('#lname').val().trim();
            var ph = $('#phone').val();
            var c = $('#Email').val();
            var em = $('#emailexist').val();
            var d = $('#Password').val().trim();
            var conpass = $('#ConfirmPassword').val().trim();

            if (a == "" || a == null) {
                $('#nameerror').html("Enter First Name");
                return false;
            }
            else {
                $('#nameerror').html("");
            }

            if (b == "" || b == null) {
                $('#nameerror1').html("Enter Last Name");
                return false;
            }
            else {
                $('#nameerror1').html("");
            }

            if (ph == ""||ph == null) {
                $('#pherror').html("Please enter Mobile Number");
                return false;
            }
            else {
                var mo = /[7-9]\d{9}$/.test(ph);
                if (!mo) {
                    $('#pherror').html("Please enter valid phone number");
                    return false
                }
                $('#pherror').html("");

            }

            if (c == "" || c == null) {
                $('#Emailerror').html("Enter Email");
                return false;
            }
            else {
                var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(c);
                if (!re) {
                    $('#Emailerror').html("Please enter valid email id");
                    return false;
                }
                $('#Emailerror').html("");

            }

            if (em != "") {
                $('#Emailerror').html("Email id already exist");
                return false;
            }
           
            if (d == "" || d == null) {
                $('#Passworderror').html("Enter Password");
                return false;
            }
            else {
                $('#Passworderror').html("");
            }

            if (conpass == null || conpass == "") {
                $('#ConfirmPassworderror').html('Please confirm your password').show();
                return false;
            }
            else {
                $('#ConfirmPassworderror').html('');
                if (d != conpass) {
                    $('#ConfirmPassworderror').html('Password and confirm password should match..').show();
                    return false;
                }
                else {
                    $('#ConfirmPassworderror').html('');

                }
            }
        })


        $('#btnlogin').click(function () {
            var user = $('#email112').val();
            var pass = $('#password1').val();

            if (user == null || user == "") {
                $('#emailerror1').html("Please enter email id").show();
                return false;
            }
            else {
                var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(user);
                if (!re) {
                    $('#emailerror1').html("Please enter valid email id");
                    return false;
                }
                $('#emailerror1').html("");

            }

            if (pass == null || pass == "") {
                $('#passworderror1').html("Enter Password");
                return false;
            }
            else {
                $('#passworderror1').html("");
            }

        })

        
        $('#modbtnsub').click(function () {
            var user = $('#modemail').val();
            var pass = $('#modpwd').val();

            if (user == null || user == "") {
                $('#modemailerror').html("Please enter email id").show();
                return false;
            }
            else {
                var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(user);
                if (!re) {
                    $('#modemailerror').html("Please enter valid email id");
                    return false;
                }
                $('#modemailerror').html("");

            }

            if (pass == null || pass == "") {
                $('#modpasserror').html("Enter Password");
                return false;
            }
            else {
                $('#modpasserror').html("");
            }

        })


        $("#modbtnreg").click(function () {
            var a = $('#modfname').val().trim();
            var b = $('#modlname').val().trim();
            var ph = $('#modphone').val();
            var c = $('#modEmail').val();
            var em = $('#modemailexist').val();
            var d = $('#modPassword').val().trim();
            var conpass = $('#modConfirmPassword').val().trim();

            if (a == "" || a == null) {
                $('#modnameerror').html("Enter First Name");
                return false;
            }
            else {
                $('#modnameerror').html("");
            }

            if (b == "" || b == null) {
                $('#modnameerror1').html("Enter Last Name");
                return false;
            }
            else {
                $('#modnameerror1').html("");
            }

            if (ph == "" || ph == null) {
                $('#modpherror').html("Please enter Mobile Number");
                return false;
            }
            else {
                var mo = /[7-9]\d{9}$/.test(ph);
                if (!mo) {
                    $('#modpherror').html("Please enter valid phone number");
                    return false
                }
                $('#modpherror').html("");

            }

            if (c == "" || c == null) {
                $('#modEmailerror').html("Enter Email");
                return false;
            }
            else {
                var re = /([A-Z0-9a-z_-][^@])+?@[^$#<>?]+?\.[\w]{2,4}/.test(c);
                if (!re) {
                    $('#modEmailerror').html("Please enter valid email id");
                    return false;
                }
                $('#modEmailerror').html("");

            }

            if (em != "") {
                $('#modEmailerror').html("Email id already exist");
                return false;
            }

            if (d == "" || d == null) {
                $('#modPassworderror').html("Enter Password");
                return false;
            }
            else {
                $('#modPassworderror').html("");
            }

            if (conpass == null || conpass == "") {
                $('#modConfirmPassworderror').html('Please confirm your password').show();
                return false;
            }
            else {
                $('#modConfirmPassworderror').html('');
                if (d != conpass) {
                    $('#modConfirmPassworderror').html('Password and confirm password should match..').show();
                    return false;
                }
                else {
                    $('#modConfirmPassworderror').html('');

                }
            }
        })


</script>
<link rel="stylesheet" href="{{URL::asset('css/Content/toastr.min.css')}}">
 <script type="text/javascript" src="{{URL::asset('css//Content/toastr.min.js')}}"></script>
