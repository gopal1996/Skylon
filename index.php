<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Skylon">

    <meta name="author" content="2G developers">

    <title>Skylon</title>

    <!-- Mobile Specific Meta
		================================================== -->
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Grid Component css -->
    <link rel="stylesheet" href="css/component.css">
    <!-- Slit Slider css -->
    <link rel="stylesheet" href="css/slit-slider.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Media Queries -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!--
		Google Font
		=========================== -->

    <!-- Oswald / Title Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <!-- Ubuntu / Body Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <style>
        /*=========================
          Icons
         ================= */
        
        /* footer social icons */
        ul.social-network {
        	list-style: none;
        	display: inline;
        	margin-left:0 !important;
        	padding: 0;
        }
        ul.social-network li {
        	display: inline;
        	margin: 0 5px;
        }
        .btn-group button {
            background-color: #4CAF50; /* Green background */
            border: 1px solid green; /* Green border */
            color: white; /* White text */
            padding: 10px 24px; /* Some padding */
            cursor: pointer; /* Pointer/hand icon */
            float: left; /* Float the buttons side by side */
        }
        
        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }
        
        .btn-group button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }
        
        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: #3e8e41;
        }
        
        /* footer social icons */
        .social-network a.icoRss:hover {
        	background-color: #F56505;
        }
        .social-network a.icoFacebook:hover {
        	background-color:#3B5998;
        }
        .social-network a.icoTwitter:hover {
        	background-color:#33ccff;
        }
        .social-network a.icoGoogle:hover {
        	background-color:#BD3518;
        }
        .social-network a.icoVimeo:hover {
        	background-color:#0590B8;
        }
        .social-network a.icoLinkedin:hover {
        	background-color:#007bb7;
        }
        .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
        	color:#fff;
        }
        a.socialIcon:hover, .socialHoverClass {
        	color:#44BCDD;
        }
        
        .social-circle li a {
        	display:inline-block;
        	position:relative;
        	margin:0 auto 0 auto;
        	-moz-border-radius:50%;
        	-webkit-border-radius:50%;
        	border-radius:50%;
        	text-align:center;
        	width: 50px;
        	height: 50px;
        	font-size:20px;
        }
        .social-circle li i {
        	margin:0;
        	line-height:50px;
        	text-align: center;
        }
        
        .social-circle li a:hover i, .triggeredHover {
        	-moz-transform: rotate(360deg);
        	-webkit-transform: rotate(360deg);
        	-ms--transform: rotate(360deg);
        	transform: rotate(360deg);
        	-webkit-transition: all 0.2s;
        	-moz-transition: all 0.2s;
        	-o-transition: all 0.2s;
        	-ms-transition: all 0.2s;
        	transition: all 0.2s;
        }
        .social-circle i {
        	color: #fff;
        	-webkit-transition: all 0.8s;
        	-moz-transition: all 0.8s;
        	-o-transition: all 0.8s;
        	-ms-transition: all 0.8s;
        	transition: all 0.8s;
        }
        
        a#icon {
         background-color: #D3D3D3;   
        }
        
        .button {
         font-size: 1em;
         padding: 10px;
         color: #fff;
         border: 2px solid #FF9800;
         border-radius: 20px;
         text-decoration: none;
         cursor: pointer;
         transition: all 0.3s ease-out;
        }
        .button:hover {
         background: #06D85F;
        }
        
        .overlay {
         position: fixed;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         background: rgba(0, 0, 0, 0.7);
         transition: opacity 500ms;
         visibility: hidden;
         opacity: 0;
        }
        .overlay:target {
         visibility: visible;
         opacity: 1;
        }
        
        .popup1 {
         margin: 70px auto;
         padding: 20px;
         background: #fff;
         border-radius: 5px;
         width: 30%;
         position: relative;
         transition: all 5s ease-in-out;
        }
        
        .popup1 h2 {
         margin-top: 0;
         color: #000;
         font-family: Tahoma, Arial, sans-serif;
        }
        .popup1 .close {
         position: absolute;
         top: 20px;
         right: 30px;
         transition: all 200ms;
         font-size: 30px;
         font-weight: bold;
         text-decoration: none;
         color: #000;
        }
        .popup1 .close:hover {
         color: #000;
        }
        .popup1 .content {
         max-height: 30%;
         overflow: auto;
        }
        
        .pop-form form {
            padding: 0 15px 15px 15px;
        }
        
        .pop-form input,
        .pop-form textarea {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 12px;
            width: 254px;
            max-width: 254px;
            margin-bottom: 10px;
            margin-left: 7px;
            padding: 6px;
            border: none;
            border-radius: 4px;
            color: #999;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .pop-form input:focus,
        .pop-form textarea:focus {
            outline: none;
            box-shadow: none;
        }
        
        .pop-form input[type='submit'] {
            display: block;
            width: 120px;
            margin: 0 auto;
            padding: 0 20px;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            cursor: pointer;
            transition: all .4s ease;
            color: #000 !important;
            border: none;
        }
        
        .pop-form input[type='submit']:hover {
            box-shadow: 0 3px 3px 0 rgba(0,0,0,0.07),0 1px 7px 0 rgba(0,0,0,0.02),0 3px 1px -1px rgba(0,0,0,0.1);
        }
        
        .pop-form textarea {
            min-height: 110px;
        	color:#000000;
        }
        
        
        ::-webkit-input-placeholder {
            color: #000;
        }
        
        ::-moz-placeholder{
            color: #000;
        }
        
        :-ms-input-placeholder {
            color: #fff;
        }
        
        :-moz-placeholder {
            color: #fff;
        }
        
        .pop-form input[type='submit'] {
            background: #000000;
        }
        
        
        @media screen and (max-width: 700px){
         .box{
         width: 70%;
         }
         .popup1{
         width: 70%;
         }
        }
        
        .btn3d {
            position:relative;
            top: -6px;
            border:0;
             transition: all 40ms linear;
             margin-top:10px;
             margin-bottom:10px;
             margin-left:2px;
             margin-right:2px;
        }
        .btn3d:active:focus,
        .btn3d:focus:hover,
        .btn3d:focus {
            -moz-outline-style:none;
                 outline:medium none;
        }
        .btn3d:active, .btn3d.active {
            top:2px;
        }
        .btn3d.btn-white {
            color: #666666;
            box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #f5f5f5, 0 8px 8px 1px rgba(0,0,0,.2);
            background-color:#fff;
        }
        .btn3d.btn-white:active, .btn3d.btn-white.active {
            color: #666666;
            box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
            background-color:#fff;
        }
        .btn3d.btn-default {
            color: #666666;
            box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 2px rgba(255,255,255,0.10) inset, 0 8px 0 0 #BEBEBE, 0 8px 8px 1px rgba(0,0,0,.2);
            background-color:#f9f9f9;
        }
        .btn3d.btn-default:active, .btn3d.btn-default.active {
            color: #666666;
            box-shadow:0 0 0 1px #ebebeb inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,.1);
            background-color:#f9f9f9;
        }
        .btn3d.btn-primary {
            box-shadow:0 0 0 1px #417fbd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #4D5BBE, 0 8px 8px 1px rgba(0,0,0,0.5);
            background-color:#4274D7;
        }
        .btn3d.btn-primary:active, .btn3d.btn-primary.active {
            box-shadow:0 0 0 1px #417fbd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
            background-color:#4274D7;
        }
        .btn3d.btn-success {
            box-shadow:0 0 0 1px #31c300 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0,0,0,0.5);
            background-color:#78d739;
        }
        .btn3d.btn-success:active, .btn3d.btn-success.active {
            box-shadow:0 0 0 1px #30cd00 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
            background-color: #78d739;
        }
        .btn3d.btn-info {
            box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #348FD2, 0 8px 8px 1px rgba(0,0,0,0.5);
            background-color:#39B3D7;
        }
        .btn3d.btn-info:active, .btn3d.btn-info.active {
            box-shadow:0 0 0 1px #00a5c3 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
            background-color: #39B3D7;
        }
        .btn3d.btn-warning {
            box-shadow:0 0 0 1px #d79a47 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #D79A34, 0 8px 8px 1px rgba(0,0,0,0.5);
            background-color:#FEAF20;
        }
        .btn3d.btn-warning:active, .btn3d.btn-warning.active {
            box-shadow:0 0 0 1px #d79a47 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
            background-color: #FEAF20;
        }
        .btn3d.btn-danger {
            box-shadow:0 0 0 1px #b93802 inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #AA0000, 0 8px 8px 1px rgba(0,0,0,0.5);
            background-color:#D73814;
        }
        .btn3d.btn-danger:active, .btn3d.btn-danger.active {
            box-shadow:0 0 0 1px #b93802 inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
            background-color: #D73814;
        }
        .btn3d.btn-magick {
            color: #fff;
            box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 2px rgba(255,255,255,0.15) inset, 0 8px 0 0 #9823d5, 0 8px 8px 1px rgba(0,0,0,0.5);
            background-color:#bb39d7;
        }
        .btn3d.btn-magick:active, .btn3d.btn-magick.active {
            box-shadow:0 0 0 1px #9a00cd inset, 0 0 0 1px rgba(255,255,255,0.15) inset, 0 1px 3px 1px rgba(0,0,0,0.3);
            background-color: #bb39d7;
        }
    </style>

    <style>
        /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
        .icon-bar1 {
          position: fixed;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        
        /* Style the icon bar links */
        .icon-bar1 a {
          display: block;
          text-align: center;
          padding: 10px;
          transition: all 0.3s ease;
          color: white;
          font-size: 10px;
        }
        
        /* Style the social media icons with color, if you want */
        .icon-bar1 a:hover {
          background-color: #000;
        }
        
        .facebook {
          background: #3B5998;
          color: white;
        }
        
        .twitter {
          background: #55ACEE;
          color: white;
        }
        
        .google {
          background: #dd4b39;
          color: white;
        }
        
        .linkedin {
          background: #007bb5;
          color: white;
        }
        
        .youtube {
          background: #bb0000;
          color: white;
        }
		
		
		
	
    </style>


</head>

<body id="body">
    <div class="icon-bar1" style="width:32px;height:32px;">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google"><i class="fa fa-google"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
    </div>
    <!--
	    Start Preloader
	    ==================================== -->
    <div id="loading-mask">
        <div class="loading-img">
            <img alt="Skylon Preloader" src="img/preloader.gif" />
        </div>
    </div>



    <!--
        End Preloader
        ==================================== -->
    <!--
		Database Connection
		==================================== -->
    <?php

    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'skylon1';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
	
	
    //Get image data from database
    $result = $db->query("SELECT * FROM products");
	$comments = $db->query("SELECT * FROM comments");
    
   // if($result->num_rows>0){
	//	$flag=0;
	//$i=0;
      // while( $imgData = $result->fetch_assoc()){
		//   $i++;
	   //}
      ?>

        <!-- End Database
	   ==================================== -->
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                            <img src="img/skylon.jpg" alt="Skylon" />
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="aboutus.php" target="_blank">About Us</a></li>
						<li><a href="services.html" target="_blank">Services</a></li>
                        <li><a href="earnatskylon.html" target="_blank">Earn at Skylon</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        <!--
        Welcome Slider
        ==================================== -->
        <section id="home">

            <div id="slitSlider" class="sl-slider-wrapper">
                <div class="sl-slider">

                    <!-- single slide item -->
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-1"></div>
                            <div class="carousel-caption">
                                <div>
                                    <img class="wow fadeInUp" src="img/meghna.png" alt="Skylon">
                                    <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="heading animated fadeInRight">Skylon India</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /single slide item -->

                    <!-- single slide item -->
                    <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-2"></div>
                            <div class="carousel-caption">
                                <div>
                                    <h2 class="heading animated fadeInDown">We emphasise on making your today's imaginations into tomorrows's reality.</h2>
                                    <div class="container" style="text-align:center;padding:80px;">
                                        <div class="row">
                                            <a href="services.html" style="color:inherit" target=”_blank”>
                                                <!-- Indicates a successful or positive action -->
                                                <button type="button" class="btn btn-info btn-lg btn3d"><span class="fa fa-book"></span>&nbsp;Get a Quote</button>
                                            </a>


                                        </div>
                                    </div>
                                    <!--<h3 class="animated fadeInUp">With all Mejor Browser support including IE 9</h3> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /single slide item -->

                    <!-- single slide item -->
                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-7"></div>
                            <div class="carousel-caption">
                                <div>
                                    <!-- <h3 class="animated fadeInLeft">Clean and Professional Design</h3> -->
                                    <div class="container" style="text-align:right;padding:80px;">
                                        <div class="row">
                                            <a href="earnatskylon.html" style="color:inherit" target=”_blank”>
                                                <!-- Indicates a successful or positive action -->
                                                <button type="button" class="btn btn-info btn-lg btn3d"><span class="fa fa-inr"></span>&nbsp;Earn at Skylon</button>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /single slide item -->

                </div>
                <!-- /sl-slider -->

                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>

                <nav id="nav-dots" class="nav-dots">
                    <span class="nav-dot-current"></span>
                    <span></span>
                    <span></span>
                </nav>

            </div>
            <!-- /slider-wrapper -->
        </section>
        <!--/#home section-->

        <!--
		Start Main Features
		==================================== -->
        <section id="main-counter">
            <div class="container">
                <div class="row">
                    
                    <!-- /section title -->
                    <!-- features item -->
                    <div id="features">
                        <div class="item">

                            <div class="features-item" style="margin:50px;">
                                <div class="col-md-12 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <h1 style="color:#000000;text-justify:distribute;">"At Skylon India, we provide best customized and personalised interior design solutions at an affordable cost with superior class looks and a fabulous finish."</h1>
									<h2 style="color:#000000;text-justify:distribute;font-weight:bold;">Why us?</h2>
                                    <h3 style="text-justify:distribute;">Our ultimate motive is to design and execute the most aesthetic, innovative and effiecient home designs with utmost functionality to satisfy even the smallest expectation of our clients.</h3>
									<h3 style="text-justify:distribute;"> We have a group of dedicated professional designers with expertise in residential and commercial interior home decor to help you create inviting and personalized spaces and we also engage skilled labour to perfectly execute our designs. From sophisticated living room design to space saving and clutter free interior design, we are here to help you to find the best interior solutions to match your requirement and style. Get a free estimate or book a free consultation with us at Skylon India today for Residential & commercial Interior projects, furniture designs and architectural 3D designs.</h3>
									<h3 style="text-justify:distribute;"> We promise elegant interiors delivered within the stipulated time (depending upon the project) taking care of even the minute details or we pay you rent.</h3>
                                </div>
                                <!-- features media -->
                               

                                <!-- features content -->

                                <!-- /features content -->

                            </div>
                        </div>



                    </div>
                    <!-- /features item -->

                </div>
                <!-- End row -->
            </div>
            <!-- End container -->
        </section>
        <!-- End section -->

        <section id="sample1" style="position:relative;z-index=-1;">
            <div>
                <img src="img/parallax/Louis.jpg" style="max-width: 100%;max-height: 100%">
            </div>
        </section>



        <!-- Start Services Section
		==================================== -->

        <section id="services-counter" class="bg-one" style="position:relative;z-index=-1;">
            <div class="container">
                <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>Our <span class="color">Services</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-home fa-5x"></i>
                            </div>
                            <h3>Residential Interiors</h3>
                            <p>Interior design is an integral part of buildings, Most of the residential building focused on Interior home decorations to have greater aesthetic view of buildings.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-industry fa-5x"></i>
                            </div>
                            <h3>Commercial Interiors</h3>
                            <p>Commercial interior works are those interior works which mainly take place in commercial places.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-gavel fa-5x"></i>
                            </div>
                            <h3>Renovation Works</h3>
                            <p>Skylon India will help you to renovate or remodel your house to the whole new level and the very look of house will be greater than your farthest imaginations.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-map fa-5x"></i>
                            </div>
                            <h3>Architecture Designing</h3>
                            <p>Architecture designing is generally done after the completion of all structural works.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-wrench fa-5x"></i>
                            </div>
                            <h3>Handcrafter Designer Furniture’s</h3>
                            <p>Handcrafted designed furnitures are the furnitures that are crafted using bare hands to make it more durable and efficient.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                        <div class="service-block text-center kill-margin-bottom">
                            <div class="service-icon text-center">
                                <i class="fa fa-plug fa-5x"></i>
                            </div>
                            <h3>Civil & Electrical Contractors</h3>
                            <p>Our civil and electrical contractors take up works which will commence after structural construction like wall construction,paintings,electrical wiring and more.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                </div>
                <!-- End row -->
                <div class="container" style="text-align:center;padding:80px;">
                    <div class="row">
                        <a href="services.html" style="color:inherit" target=”_blank”>
                            <!-- Indicates a successful or positive action -->
                            <button type="button" class="btn btn-info btn-lg btn3d"><span class="fa fa-ellipsis-h"></span>&nbsp;Read More</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End container -->
        </section>
        <!-- End section -->


       


        <section id="sample2" style="position:relative;z-index=-1;">
            <div>
                <img src="img\parallax\bruns.jpg" style="max-width: 100%;max-height: 100%">
            </div>
        </section>

        <!-- Start Testimonial
		=========================================== -->

        <section id="testimonial" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- section title -->
                        <div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
                            <h3>What People Say About Us</h3>
                        </div>
                        <!-- /section title -->

                        <!-- testimonial wrapper -->
                        <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                            <?php
								if($comments->num_rows > 0) {
									while($row = $comments->fetch_assoc()) {
							
										echo '<div class="item text-center">';
									
									
										echo '<div class="client-thumb">';
										?>
										<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" class="img-responsive" alt="Skylon">
										<?php
											echo '</div>';
											echo '<div class="client-info">';
											echo '<div class="client-meta">';
											echo '<h3>'.$row["cust_name"].'</h3>';	
											echo '</div>';
											echo '<div class="client-comment">';
											echo '<p>'.$row["cust_desc"].'</p>';
											echo '</div>';
											echo '</div>';
											echo '</div>';
									}
								}
							
							?>


                        </div>
                        <!-- end testimonial wrapper -->
                    </div>
                    <!-- end col lg 12 -->
                </div>
                <!-- End row -->
            </div>
            <!-- End container -->
        </section>
        <!-- End Section -->




        <!-- Srart Contact Us
		=========================================== -->
        <!-- Google Map -->
        <div class="google-map wow fadeInDown" data-wow-duration="500ms">
            <div id="map-canvas"></div>
        </div>


        <div class="container-fluid" style="text-align:center;padding:80px;position:relative;z-index=-1;background-color:#000;">
            <div class="row">
                <a href="earnatskylon.html" style="color:inherit" target=”_blank”>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-info btn-sm btn3d"><span class="fa fa-inr"></span>&nbsp;Earn at Skylon</button>
                </a>
                <a href="services.html" style="color:inherit" target=”_blank”>
                    <!-- Indicates a successful or positive action -->
                    <button type="button" class="btn btn-default btn-sm btn3d"><span class="fa fa-book"></span>&nbsp;Get a Quote</button>
                </a>


            </div>
        </div>

        <section id="foot-counter" class="bg-one" style="position:relative;z-index=-1;">

            <!-- /Google Map -->
            <div class="container">
                <div class="row">



                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h3>Get In <span style="color:#dbbe3f;">Touch</span></h3>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
					<!-- / End Contact Details -->
					
					<div class="contact-info text-center col-md-6 wow fadeInUp">
					<div class="text-center">
					<h3>&nbsp</h3>
					</div>
                       
						<div class="text-center">
							<h3 style="color:#ffffff;"><a href="#">Refer and Earn</a></h3>
						</div>
						<div class="text-center">
							<h3 style="color:#ffffff;"><a href="services.html">Our Services</a></h3>
						</div>
						<div class="text-center">
							<h3 style="color:#ffffff;"><a href="aboutus.php">About Us</a></h3>
						</div>
						<div class="text-center">
							<h3 style="color:#ffffff;"><a data-toggle="modal" href="#normalModal">Contact Us</a></h3>
						</div>
                    
					</div>

                    <!-- Contact Details -->
                    <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                        <h3 style="color:#dbbe3f;font-weight:bold;">Contact Details</h3>
                        <br>
                        <div class="contact-details">
                            <div class="con-info clearfix">
                                <i class="fa fa-home fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">Reach Us: </span>
                                <span style="color:#ffffff;font-size:16px;">AP:1725,102ndStreet,<br>14thSector, k.k.Nagar,<br>Chennai-600078.</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="fa fa-phone fa-lg" style="color:#ffffff"></i>
                                <span style="color:#ffffff;font-size:16px;">Phone: +919840492966</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="fa fa-fax fa-lg" style="color:#ffffff"></i>
                                <span style="color:#ffffff;font-size:16px;">Phone: +917200107659</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="fa fa-envelope fa-lg" style="color:#ffffff"></i>
                                <span style="color:#ffffff;font-size:16px;">Email: skylonindia@gmail.com</span>
                            </div>
							
                        </div>
						<div class="col-md-10">
								<ul class="social-network social-circle">
									<li><a href="https://instagram.com/skylon_india?utm_source=ig_profile_share&igshid=yyl086ibgfrq" target="_blank" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.facebook.com/skylonindia/?ref=bookmarks" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>

								</ul>
						</div>
                    </div>
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

            <!-- Form -->
            <div id="normalModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" style="color:#000;">Contact Us</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="contactForm1" name="form" style="color:#000000;">
                                <div class="form-group row">
                                    <label for="inputName3" class="col-sm-2 col-form-label">Name*</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName3" placeholder="name" style="background-color:#fff;color:#000;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPhone3" class="col-sm-2 col-form-label">Phone No*</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPhone3" placeholder="90XXXXXXXX" style="background-color:#fff;color:#000;">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email@domain.com" style="background-color:#fff;color:#000;">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Intrested In</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox">
                                            <label for="Intrested-0">
      <input name="Intrested" id="Intrested-0" value="1" type="checkbox">
      Residential Interior
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-1">
      <input name="Intrested" id="Intrested-1" value="2" type="checkbox">
      Commercial Interior
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-2">
      <input name="Intrested" id="Intrested-2" value="3" type="checkbox">
      Renovation works
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-3">
      <input name="Intrested" id="Intrested-3" value="4" type="checkbox">
      Architecture Designing
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-4">
      <input name="Intrested" id="Intrested-4" value="5" type="checkbox">
      Handcrafted designed furnitures
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-5">
      <input name="Intrested" id="Intrested-5" value="6" type="checkbox">
      Civil and Electrical contractors
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-6">
      <input name="Intrested" id="Intrested-6" value="7" type="checkbox">
      Refer and Earn
    </label>
                                        </div>
										<div class="checkbox">
                                            <label for="Intrested-7">
      <input name="Intrested" id="Intrested-7" value="8" type="checkbox">
      For Queries
    </label>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="inputArea3" class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
									 <textarea rows="4" class="form-control" cols="50" placeholder="Feedback" style="background-color:#fff;color:#000;"></textarea> 
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                        <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#4274D7;">Close</button>
                            <button type="button" class="btn btn-primary" style="background-color:#4274D7;">Submit</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Form -->

            <script type="text/javascript">
                <!-- Form Modal -->
                			$(".modal-wide").on("show.bs.modal", function() {
                  var height = $(window).height() - 200;
                  $(this).find(".modal-body").css("max-height", height);
                });
                <!-- End Form Modal -->
                				var frm = $('#contactForm1');
                				frm.submit(function (e) {
                				e.preventDefault();
                				$.ajax({
                				type: frm.attr('method'),
                				url: frm.attr('email.php'),
                				data: frm.serialize(),
                				success: function (data) {
                				console.log('Submission was successful.');
                				console.log(data);
                				},
                				error: function (data) {
                				console.log('An error occurred.');
                				console.log(data);
                				},
                				});
                				$('#contactForm1').text("new dialog title");
                				});
            </script>

        </section>
        <!-- end section -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.12.2.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>

    </body>
</html>