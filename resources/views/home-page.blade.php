<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transfer Rules</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>

        /* HIDDEN ELEMENTS BY DEFAULT */
        .features-icons,
        #mobile-footer {
            display: none;
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
            padding: 0px;
            margin: 0px;
        }

        #header {
            width: 100%;
            height: 650px;
            /* background: linear-gradient(180deg, #358CAA 1.49%, #F87373 98.73%); */
            /* background: #333333; */
            background-size: 100% 650px !important;
        }

        #logo {
            width: 40px;
            height: 40px;
            margin-right: 15px;
            margin-left: 50px;
        }

        .navbar {
            margin: 0px;
            padding-top: 30px !important;
            padding: 0px;
            background: transparent;
            width: 100%;
            border-radius: 0px;
            border: none;
            color: white;
        }

        .navbar-brand,
        .navbar-nav a {
            color: white !important;
            font-size: 17px;
            margin-right: 10px;
        }

        .navbar-brand {
            margin-top: -13px;
            font-size: 19px;
            font-weight: bold;
            letter-spacing: 0.04em;
        }

        .navbar-nav {
            margin-right: 20px;
        }

        .navbar-nav .active > a {
            background: transparent !important;
            border: 2px solid white;
            border-radius: 10px;
            padding: 5px 10px;
            margin-top: 9px;
        }

        #sign-in {
            margin-top: 9px;
            /* background: #E57679; */
            background: #FF6200;
            border-radius: 63px;
            padding-left: 12px;
            padding-right: 12px;
        }

        #sign-in a  {
            padding: 7px 14px;
        }


        /* HEADER BODY STYLE */
        #background-text {
            position: absolute;
            left: 5%;
            top: 30%;
            color: white;
            font-size: 300px;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.04);
            z-index: 1;
        }

        #header-content {
            padding: 80px 200px;
            display: grid;
            grid-template-columns: 40% 60%;
            z-index: 200;
        }

        #content-text {
            display: grid;
            grid-template-rows: 1fr 1fr 1fr;
            height: 300px;
            grid-gap: 5px;
            color: white;
        }

        #heading-hd {
            font-size: 36px;
            letter-spacing: 0.07em;
            padding-right: 100px;
        }

        #text-hd {
          padding-right: 100px;
          word-spacing: 0.09em;
          letter-spacing: 0.05em;
          z-index: 100;
          font-size: 16px;
          line-height: 25px;
        }

        #button-hd {
            width: fit-content;
            /* color: #E57679; */
            color: white;
            border: none;
            background: #FF5700;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            padding: 10px 15px;
            border-radius: 63px;
            transition: background 1s, color 2s;
            z-index: 100;
        }

        #button-hd:hover {
            /* background: #E57679;
            color: white; */
            color: #FF6200;
            background: white;
        }

        #mobile-app {
            width: 250px;
            height: 500px;
        }

        /* HEADER BODY STYLE ENDS */

        /* SECTION ONE STYLE */
        #section1,
        #section2,
        #divider,
        #footer {
            text-align: center;
            margin-top: 30px;
        }

        .section-header {
            font-size: 36px;
            /* color: #3D8BA8; */
            color: #FF6200;
        }

        .section-sub {
            font-size: 16px;
            letter-spacing: 0.06em;
        }

        #features {
            display: grid;
            grid-template-columns: 60% 40%;
            margin-top: 70px;
            padding: 0px 80px;
        }

        #screenshots {
            width: 600px;
            height: 400px;
        }

        #features-list {
            display: grid;
            grid-template-rows: 1fr 1fr 1fr 1fr;
            grid-row-gap: 20px;
        }

        .feature {
            padding: 0px 50px;
            display: grid;
            grid-template-columns: 20% 80%;
            align-content: center;
            align-items: center;
            justify-content: center;
            text-align: left;
        }

        .feature-text {
            grid-column: 2/3;
        }

        .feature-img {
            width: 60px;
            height: 60px;
            border-radius: 30px;
            /* background: linear-gradient(180deg, #358CAA 1.49%, #F87373 98.73%); */
            background: linear-gradient(180deg, #FF6200 0%, #000000 98.9%);
        }

        #feature-heading {
            text-transform: uppercase;
            color: #FF6200;
        }

        /* SECTION ONE STYLE ENDS */

        /* SECTION 2 STYLE */
        .testimony-img {
            width: 100px;
            height: 100px;
            border-radius: 90px;
            /* background: linear-gradient(180deg, #358CAA 1.49%, #F87373 98.73%); */
            background: linear-gradient(180deg, #FF6200 0%, #000000 98.9%);
        }

        #media1 {
            float: left;
        }

        #media2 {
            float: right;
            direction: rtl;
        }

        .media {
            width: 50%;
        }

        .media-object,
        .media-body {
            margin: 0px !important;
            padding: 0px !important;
        }

        .testimony {
            background: #333333;
            color: white;
            padding: 20px;
            margin-left: 30px;
            text-align: left;
        }

        .name {
            width: fit-content;
            margin-left: 30px;
        }

        #t-container {
            padding: 0px 150px;
            margin-top: 70px;
        }
        /* SECTION TWO STYLE ENDS */


        /* DIVIDER STYLE */
        #divider {
            width: 100%;
            height: 300px;
            padding: 70px 170px;
            background: #333333;
        }

        #divider-content {
            display: grid;
            align-content: center;
            justify-content: center;
            align-items: center;
            grid-template-columns: 70% 30%;
            padding: 30px 30px;
            background: white;
            text-align: left;
        }

        #divider-cta {
            transition: color 1s, background 1s;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            grid-column: 2/3;
            grid-row: 1/3;
            width: fit-content;
            height: fit-content;
            background: #FF6200;
            color: white;
            border: none;
            padding: 12px 16px;
            border-radius: 63px;
            margin-right: -80px;
        }

        #divider-cta:hover {
            color: #FF6200;
            background: white;
        }

        #divider-text {
            display: grid;
            grid-template-rows: 20% 80%;
            grid-row-gap: 10px;
            width: fit-content;
            height: fit-content;
            margin-right: 40px;
        }

        #divider-title {
            color: #FF6200;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 0.04em;
            margin: 0px;
            padding: 0px;
        }
        /* DIVIDER STYLE ENDS */


        /* FOOTER STYLE */
        #footer {
            text-align: center;
        }

        #footer-links,
        #footer-heading {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
        }

        #footer-links {
            grid-row-gap: 10px;
        }

        #footer-heading {
            margin-bottom: 20px;
        }

        #footer-heading a {
            text-transform: uppercase;
            font-weight: bold;
            color: #333333;
        }

        #footer-links a {
            color: #4F4F4F;
        }

        #footer li {
            list-style: none;
        }

        #line {
            height: 1px;
            width: 100%;
            padding: 0px 200px;
            background:  #BDBDBD ;
            margin: 30px 0px;
        }

        /* FOOTER STYLE ENDS */



        /* RESPONSIVE STYLES */

        @media only screen and (max-width: 1250px) {
            /* HEADER BODY STYLE */
            #header {
                height: 650px;
            }

            #header-content {
                padding: 80px 150px;
                grid-template-columns: 40% 60%;
            }

            #mobile-app {
                width: 200px;
                height: 400px;
            }

            #content-text {
                display: grid;
                grid-template-rows: 1fr 1fr 1fr;
                height: 300px;
                grid-gap: 5px;
            }

            #heading-hd {
                font-size: 26px;
                padding-right: 80px;
            }

            #text-hd {
                padding-right: 80px;
            }

            /* HEADER BODY STYLE ENDS */

            /* SECTION ONE STYLE */

            .section-header {
                font-size: 30px;
            }

            .section-sub {
                font-size: 14px;
                letter-spacing: 0.06em;
            }

            #features {
                display: grid;
                grid-template-columns: 60% 40%;
                margin-top: 70px;
                padding: 0px 40px;
            }

            #screenshots {
                width: 450px;
                height: 300px;
            }

            .feature {
                padding: 0px 10px;
                grid-template-columns: 20% 80%;
            }

        }

        @media only screen and (max-width: 1090px) {
            /* HEADER BODY STYLE */
            #header {
                height: 550px;
            }

            #header-content {
                padding: 80px 100px;
                display: grid;
                grid-template-columns: 40% 60%;
            }

            #mobile-app {
                width: 150px;
                height: 350px;
            }

            #content-text {
                display: grid;
                grid-template-rows: 1fr 1fr 1fr;
                height: 300px;
                grid-gap: 5px;
            }

            #heading-hd {
                font-size: 20px;
                padding-right: 50px;
            }

            #text-hd {
                font-size: 16px;
                padding-right: 50px;
            }

            /* HEADER BODY STYLE ENDS */

            /* SECTION ONE STYLE */

            .section-header {
                font-size: 26px;
            }

            .section-sub {
                font-size: 13px;
                letter-spacing: 0.06em;
            }

            #features {
                grid-template-columns: 50% 50%;
                grid-gap: 20px;
                padding: 0px 10px;
            }

            #screenshots {
                width: 400px;
                height: 300px;
            }

            .feature {
                padding: 0px 0px;
                grid-template-columns: 20% 80%;
            }

            /* DIVIDER STYLE */
            #divider {
                width: 100%;
                height: 300px;
                padding: 30px 100px;
                background: #306B8E;
            }
        }

        @media only screen and (max-width: 800px) {
            #header {
                height: 620px;
            }
            .features-icons {
                display: inline;
            }

            .feature-img {
                display: none;
            }

            #header-content {
                padding: 50px 10px;
                display: flex;
                flex-direction: row;
            }

            #content-text {
                align-self: center;
                flex: 2;
                display: flex;
                flex-direction: column;
                height: fit-content;
            }

            #heading-hd {
                font-size: 18px;
                letter-spacing: 0.07em;
                padding-right: 0px;
                margin-bottom: 15px;
            }

            #text-hd {
                padding-right: 0px;
                word-spacing: 0.09em;
                letter-spacing: 0.05em;
                font-size: 12px;
                margin-bottom: 15px;
            }

            #mobile-app {
                flex: 1;
                width: 150px;
                height: 300px;
                margin-right: 20px;
            }

            /* END HEADER */

            .section-sub {
                padding: 0px 30px;
                text-align: justify;
            }

            #features {
                display: flex;
                flex-direction: column;
                margin-top: 70px;
                padding: 0px 10px;
            }

            #screenshots {
                width: 350px;
                height: 200px;
            }

            #features-list {
                display: flex;
                flex-direction: column;
                margin-top: 30px;
            }

            .feature {
                padding: 0px 10px;
                margin-top: 30px;
                display: flex;
                flex-direction: column;
                grid-template-columns: 20% 80%;
                align-content: center;
                align-items: center;
                justify-content: center;
                text-align: left;
            }

            #feature-heading {
                text-transform: uppercase;
                color: #FF6200;
                font-size: 14px !important;
                align-self: flex-start;
                margin-bottom: 10px;
            }

            /* FEATURES ENDS */

            .testimony-img {
                width: 60px;
                height: 60px;
                border-radius: 30px;
                /* background: linear-gradient(180deg, #358CAA 1.49%, #F87373 98.73%); */
                background: linear-gradient(180deg, #FF6200 0%, #000000 98.9%);
            }

            #media1 {
                float: none;
            }

            #media2 {
                float: none;
                direction: rtl;
            }

            .media {
                width: 100%;
            }

            .media-object,
            .media-body {
                margin: 0px !important;
                padding: 0px !important;
            }

            .testimony {
                background: #333333;
                color: white;
                padding: 20px;
                margin-left: 30px;
                margin-bottom: 60px;
                text-align: left;
            }

            .name {
                width: fit-content;
                margin-left: 30px;
            }

            #t-container {
                padding: 0px 10px;
                margin-top: 70px;
            }


            /* DIVIDER STYLE */
            #divider {
                width: 100%;
                height: fit-content;
                padding: 70px 30px;
                background: #333333;
            }

            #divider-content {
                display: flex;
                flex-direction: column;
                align-content: center;
                justify-content: center;
                align-items: center;
                padding: 15px 15px;
                background: white;
                text-align: left;
            }

            #divider-cta {
                width: fit-content;
                height: fit-content;
                text-align: center !important;
                background: #FF6200;
                color: white;
                border: none;
                padding: 12px 60px;
                border-radius: 63px;
                margin-right: 0px;
                margin-top: 20px;
            }

            #divider-text {
                display: flex;
                flex-direction: column;
                text-align: justify;
                width: fit-content;
                height: fit-content;
                margin-right: 0px;
            }

            #divider-title {
                color: #FF6200;
                font-size: 16px;
                font-weight: bold;
                letter-spacing: 0.04em;
                margin: 0px;
                margin-bottom: 10px;
                padding: 0px;
            }
            /* DIVIDER STYLE ENDS */


            /* FOOTER STYLES */
            #footer {
                display: none;
            }

            #mobile-footer {
                display: block;
                margin-top: 100px;
                text-align: center;
                width: 100%;
            }

            #mobile-footer td {
                padding: 0px 20px !important;
            }

            #mobile-footer tr {
                width: 100%;
            }

            #footer-links,
            #footer-heading {
                display: flex;
                flex-direction: row;
                flex-grow: 4;
            }
        }

    </style>
</head>
<body>
<!-- HEADER BEGINS -->
<div id="header" style="background: url('img/background.png');">
    <p id="background-text">FUNDS</p>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img id="logo" src="img/logo.png" alt="Company logo" style="display: inline;"> </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">

                     <li class="{{ Request::segment(1) === '/' ? 'active' : null }}" ><a href="{{url('/')}}">Home</a></li>
                    <li class="{{ Request::segment(1) === 'how' ? 'active' : null }}" ><a href="{{route('how')}}">FAQs</a></li>
                    <li class="{{ Request::segment(1) === 'features' ? 'active' : null }}"><a href="{{route('features')}}">Features</a></li>
                    <li><a href="{{url('#')}}">Demo</a></li>
                    <li class="{{ Request::segment(1) === 'about' ? 'active' : null }}"><a href="{{route('about')}}">About<span class="sr-only">(current)</span></a></li>

                    @if(Auth::guest())
                        <li id="sign-in"><a href="{{url('/login')}}">SIGN IN</a></li>
                    @else
                        <li id="sign-in">
                        <a href="{{ url('/logout') }}">
                            Logout
                        </a>
                      </li>

                      <li id="sign-in">
                        <a href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                      </li>
                    @endif

                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>

    <div id="header-content">
        <img src="img/phone.png" alt="Transfer rules mobile app screenshot" id="mobile-app">
        <div id="content-text" class="clearfix">
                <span id="heading-hd">
                    TransferRules
                </span>
            <span id="text-hd">
                    Create an account for your company with TransferRules and gain full control over financial transactions, disbursement of funds and lot more services.
                </span>
            <button id="button-hd">
                DOWNLOAD APP
            </button>
        </div>
    </div>
</div>

<!--HEADER ENDS -->

<!-- SECTION ONE - (AMAZING FEATURES) -->
<div id="section1">
    <p class="section-header">
        Amazing Features
    </p>
      <!-- <p class="section-sub">
          Enjoy our great and amazing features
      </p> -->
    <div id="features">
        <img src="img/screenshots.png" alt="site screenshot" id="screenshots">
        <div id="features-list">
            <div class="feature">
                <span class="feature-img"></span>
                <span id="feature-heading">Get Payment <span class="fa fa-money features-icons"></span></span>
                <span class="feature-text">You can trust transferrules with fast and secure online payment.</span>
            </div>
            <div class="feature">
                <span class="feature-img"></span>
                <span id="feature-heading">Manage Funds <span class="fa fa-money features-icons"></span></span>
                <span class="feature-text">Transferrules gives you full control to manage and track your company funds.</span>
            </div>
            <div class="feature">
                <span class="feature-img"></span>
                <span id="feature-heading">Access Wallet <span class="fa fa-shopping-bag features-icons"></span></span>
                <span class="feature-text">Create, access and manage unlimited number of wallets for every staff.</span>
            </div>
        </div>
    </div>
</div>
<!-- SECTION ONE ENDS -->


<!-- SECTION TWO - (TESTIMONIES) -->
<div id="section2">
    <p class="section-header">
        Testimonies
    </p>
    <p class="section-sub">
        Our Users are passionate about us because we are passionate about them. Hear what they say about us!
    </p>

    <div id="t-container">
        <div class="row">
            <div class="media col-md-6" id="media1">
                <a class="pull-left" href="#">
                    <img src="img/man.jpg" alt="man" class="testimony-img">
                </a>
                <div class="media-body">
                    <h4 class="media-heading name">Mr. Musa Abubakar</h4>
                    <p class="testimony">It has been more than 2 years my company started using TRANSFERRULES for fund disbursement and i must confess it has been great, fast and secure. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="media col-md-12 pull-right" id="media2">
                <a class="pull-right" href="#">
                    <img src="img/woman.jpg" alt="man" class="testimony-img">
                </a>
                <div class="media-body">
                    <h4 class="media-heading name">Miss Natasha Paul</h4>
                    <p class="testimony">Thank you TRANSFERRULES for providing a secure, friendly and trusted way for we to manage funds in my company.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SECTION TWO ENDS -->

<!-- DIVIDER -->
<div id="divider">
    <div id="divider-content">
        <div id="divider-text">
            <p id="divider-title">Get Started in Five Minutes</p>
            <p id="">
                Create an account in less than 5 minutes. Login to your account and create wallets for your company
            </p>
        </div>
        <button id="divider-cta">Sign Up Now</button>
    </div>
</div>
<!-- DIVIDER ENDS-->

<!-- FOOTER -->

<div id="footer">
    <div id="footer-links">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{route('about')}}">About Us</a></li>
        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>

        <li><a href="{{route('how')}}">How it works</a></li>
        <li><a href="{{route('contact')}}">Contact Us</a></li>
        <li><a href="#">Disclaimer</a></li>

        <li><a href="{{route('help')}}">Help & Support</a></li>
        <li><a href="{{url('login')}}">Sign In</a></li>
        <li><a href="{{route('how')}}">FAQs</a></li>
        <li><a href="{{route('terms')}}">Terms & Condition</a></li>

        <li><a href="#">Site Map</a></li>
    </div>
    <p id="line"> </p>
    <div id="lower-footer">
        <p>&#169; 2017 Transferrules.com. All rights reserved</p>
    </div>
</div>

<div id="mobile-footer">
    <table>
        <tr>
            <td style="font-size: 17px; font-weight: bold;">Company</td>
            <td style="font-size: 17px; font-weight: bold;">Support</td>
            <td style="font-size: 17px; font-weight: bold;">Terms</td>
        </tr>
        <tr>
            <td><a href="{{url('/')}}">Home</a></td>
            <td><a href="{{route('about')}}">About Us</a></td>
            <td><a href="{{route('contact')}}">Contact Us</a></td>
        </tr>
        <tr>
            <td><a href="{{route('how')}}">How it works</a></td>
            <td><a href="{{route('contact')}}">Contact Us</a></td>
            <td><a href="{{route('help')}}">Help & Support</a></td>
        </tr>
        <tr>
            <td><a href="{{route('terms')}}">Terms & Condition</a></td>
            <td><a href="{{route('privacy')}}">Privacy Policy</a></td>
            <td><a href="#">Disclaimer</a></td>
        </tr>
    </table>
    <p id="line"> </p>
    <div id="lower-footer">
        <p>&#169; 2017 Transferrules.com. All rights reserved</p>
    </div>
</div>

<!-- FOOTER BEGINS -->
<!--<script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous">
</script> -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
