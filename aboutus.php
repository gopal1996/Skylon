<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Skylon India is pioneered in providing interior design &amp; services to today&#39;s growing
interior designing sector. We also commence work which will shape your dream to a
whole level at the given time">
    <meta name="keywords" content="About us,About skylon india,Best interiors design,Interior designs in chennai">

    <meta name="author" content="2G developers">

    <title>About us|Skylon India.</title>

    <!-- Mobile Specific Meta
		================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
    <!-- Grid Component css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/social-button.css">
    <link rel="stylesheet" href="css/component.css">
    <!-- Slider css -->
    <link rel="stylesheet" href="css/slider.css">
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
        .modal.modal-wide .modal-dialog {
            width: 90%;
        }
        
        .modal-wide .modal-body {
            overflow-y: auto;
        }
    </style>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-54152927-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body id="body">
    <!--
		Database Connection
		==================================== -->
    <?php

   //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'skyloki9_skylon';
    $dbPassword = 'skylon@123';
    $dbName     = 'skyloki9_skylon';

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
        <div class="earnatskylon" style="height:30px;">
            <a href="earnatskylon.html" class="earn">
                <p class="rot" style="padding:8px;margin-bottom:-8px;">Earn&nbsp;&nbsp;at&nbsp;&nbsp;Skylon</p>
            </a>
        </div>
        <div class="icon-bar1" style="width:32px;height:32px;">
            <a href="https://www.facebook.com/skylonindia/?ref=bookmarks" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/IndiaSkylon" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com/skylon_india?utm_source=ig_profile_share&igshid=yyl086ibgfrq" class="google"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCkYerkHBOvQc759YxHKRVWw?view_as=subscriber" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>
        <!--
	    Start Preloader
	    ==================================== -->
        <div id="loading-mask" style="background:white;">
            <div class="loading-img">
                <img alt="Skylon Preloader" src="img/preloader.gif" />
            </div>
        </div>
        <!--
        End Preloader
        ==================================== -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse" style="position:fixed;">
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
                    <a class="navbar-brand" href="index.php">
                        <h1 id="logo">
                            <img src="img/skylon1.png" alt="Skylon" width="130px;" height="50px;"/>
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="services.html"> Our Services</a></li>
                        <li><a href="earnatskylon.html">Refer and Earn</a></li>
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
        <div id="home slitSlider" class="sl-slider-wrapper">
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                <!-- Overlay -->
                <div class="overlay"></div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bs-carousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-4"></div>

                    </div>
                    <div class="item slides">
                        <div class="slide-5"></div>

                    </div>

                </div>
            </div>
        </div>

        <!--
        End Welcome Slider
        ==================================== -->

        <!--
		Start Main Features
		==================================== -->
        <section id="services-counter" style="padding:50px 26px 26px 26px;">
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="1500ms">
                        <h2 style="color:#fff;">About <span class="color">Us</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                    <!-- features item -->
                    <div id="features">
                        <div class="item">

                            <div class="features-item">
                                <div class="col-md-12 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <p class="ow" style="color:#fff;text-align:justify;line-height: 1.6;">Skylon India focuses on providing interior design & services to today's growing interior designing sector. A real set of experienced Handcrafted labors, budding enthusiast architects and engineers much interested to outbreak the talent of interior designing and execution in own thoughts. In a much competitive world of growing business we focus much more on effective work satisfaction rather than the profit. As a company, we care about CLIENTS, employees, Labours, vendors, and whoever else we come across in our work. We believe that people are more important than projects, products, or problems. We care about PERFECTION. When our work is done, our customers rave about our services and products, and we are inspired to progress. We conceive that our positive work environment and commitment to team-work allow us to give our customers the ultimate service experience.
                                    </p>
                                </div>

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

        <!--
		Start Main Features
		==================================== -->
        <section id="main-counter">
            <div class="container">
                <div class="row">
                    <!-- features item -->
                    <div id="features">
                        <div class="item">

                            <div class="features-item" style="padding:50px;">

                                <div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <div style="color:#000000;">
                                        <i class="fa fa-child fa-4x"></i>
                                    </div>
                                    <h1 style="color:#000000;">Our objective:</h1>
                                    <h3>Skylon india’s main objective is to motivate and help our workers to claim their power and to satisfy client needs.</h3>
                                </div>
                                <!-- features media -->
                                <div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
                                    <div style="color:#000000;">
                                        <i class="fa fa-child fa-4x"></i>
                                    </div>
                                    <h1 style="color:#000000;">Our strength:</h1>
                                    <h3>Our main strength- Innovative thinking, uniqueness and influence at work.</h3>
                                </div>
                                <!-- /features media -->
                                <div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <div style="color:#000000;">
                                        <i class="fa fa-child fa-4x"></i>
                                    </div>
                                    <h1 style="color:#000000;">Our oath:</h1>
                                    <h3>We assure that we deliver our work with greater quality at the given time.</h3>
                                </div>
                                <!-- features media -->
                                <div class="col-md-6 feature-media media-wrapper wow fadeInUp" data-wow-duration="500ms">
                                    <div style="color:#000000;">
                                        <i class="fa fa-child fa-4x"></i>
                                    </div>
                                    <h1 style="color:#000000;">Our ambiance:</h1>
                                    <h3>At Skylon India, we commence Works which will shape your Dreams to a whole new level.</h3>
                                </div>

                                <!-- features content -->

                                <!-- /features content -->

                            </div>
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

        <!---- OUR Works V2 -->

        <!-- Start Portfolio Section
		=========================================== -->

        <section id="services-counter" style="position:relative;z-index=-1;">
            <div class="container">
                <div class="row wow fadeInDown" data-wow-duration="500ms">
                    <div class="col-lg-12">

                        <!-- section title -->
                        <div class="title text-center">
                            <h2>Our <span class="color">Works</span></h2>
                            <div class="border"></div>
                        </div>
                        <!-- /section title -->

                        <!-- portfolio item filtering -->
                        <div class="portfolio-filter clearfix">
                            <ul class="text-center">
                                <li><a href="javascript:void(0)" class="filter" data-filter="all" style="font-size:20px;">All</a></li>
                                <li><a href="javascript:void(0)" class="filter" data-filter=".completed" style="font-size:20px;">Completed Projetcs</a></li>
                                <li><a href="javascript:void(0)" class="filter" data-filter=".ongoing" style="font-size:20px;">Ongoing Projects</a></li>

                            </ul>
                        </div>
                        <!-- /portfolio item filtering -->

                    </div>
                    <!-- /end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

            <!-- portfolio items -->
            <div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
                    <?php
				if($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						?>
                        <!-- single portfolio item -->
                        <li class="mix <?php echo $row["Category"]?>">
                            <a style="font-size: 14px;" href="javascript:void(0)" data-largesrc="<?php echo 'http://www.skylonindia.com/project/'.$row['image']?>" data-title="<?php echo $row[ "prod_name"]?>" data-description="<?php echo $row["prod_desc"]?>" >
							<img src="<?php echo 'http://www.skylonindia.com/project/'.$row['image']?>">
							<?php
							echo '<div class="hover-mask">';?>
								<h3>"<?php echo $row[ "prod_name"]?>"</h3>
							<?php	echo '<span>';
									echo '<i class="fa fa-plus fa-2x"></i>';
								echo '</span>';
							echo '</div>';
						echo '</a>'; echo '</li>'; } } ?>
                        <!-- /single portfolio item -->

                </ul>
                <!-- end og grid -->
            </div>
            <!-- portfolio items wrapper -->

        </section>
        <!-- End section -->

        <!---- End Of Our Works V2 -->

        <!-- Srart Contact Us
		=========================================== -->
        <!-- Google Map -->
        <div class="google-map wow fadeInDown" data-wow-duration="500ms" style="position:relative;z-index=-1;background-color:#50486d;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d485.8596407957737!2d80.20484020656036!3d13.043492344927714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267d5f6cbc4df%3A0x7d3893caf1de4263!2sSkylon+India+-+Interior+Design!5e0!3m2!1sen!2sin!4v1536774236008" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <section id="foot-counter" class="bg-one" style="position:relative;z-index=-1;">

            <!-- /Google Map -->
            <div class="container">
                <div class="row">

                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h3>Get In <span style="color:#d3b36c;">Touch</span></h3>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                    <!-- / End Contact Details -->

                    <div class="contact-info text-center col-md-6 col-sm-6 wow fadeInUp">
                        <div class="text-center">
                            <h3>&nbsp</h3>
                        </div>

                        <div class="text-center">
                            <h3 style="color:#ffffff;"><a href="earnatskylon.html">Refer and Earn</a></h3>
                        </div>
                        <div class="text-center">
                            <h3 style="color:#ffffff;"><a href="services.html">Our Services</a></h3>
                        </div>
                        <div class="text-center">
                            <h3 style="color:#ffffff;"><a href="aboutus.php">About Us</a></h3>
                        </div>
                        <div class="text-center">
                            <h3 style="color:#ffffff;"><a data-toggle="modal" href="#normalModal">Make an Appoinment now</a></h3>
                        </div>

                    </div>

                    <!-- Contact Details -->
                    <div class="contact-info col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="500ms">
                        <h3 style="color:#d3b36c;font-weight:bold;">Contact Us</h3>
                        <br>
                        <div class="contact-details">
                            <div class="con-info clearfix">
                                <i class="fa fa-home fa-lg" style="color:#ffffff"></i>
                                <span style="color:#ffffff;font-size:16px;">Reach Us: </span>
                                <span style="color:#ffffff;font-size:16px;">AP:1725,102ndStreet,<br>14thSector, k.k.Nagar,<br>Chennai-600078.</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="fa fa-phone fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">&nbsp;Phone No: </span>
                                <span style="color:#ffffff;font-size:16px;">+919840492966</span>
                            </div>
							
							<div class="con-info clearfix">
                                <i class="fa fa-phone fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">&nbsp;Phone No: </span>
                                <span style="color:#ffffff;font-size:16px;">+917200107659</span>
                            </div>

                            <div class="con-info clearfix">
                                <i class="fa fa-envelope fa-lg" style="color:#ffffff"></i>
                                <span style="color:#ffffff;font-size:16px;">Email ID: </span>
                                <span style="color:#ffffff;font-size:16px;">&nbsp;skylonindia@gmail.com</span>
                            </div>

                        </div>
                        <div class="col-md-10">
                            <ul class="social-network social-circle">
                                <li><a href="https://instagram.com/skylon_india?utm_source=ig_profile_share&igshid=yyl086ibgfrq" target="_blank" class="icoRss" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/skylonindia/?ref=bookmarks" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/IndiaSkylon" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCkYerkHBOvQc759YxHKRVWw?view_as=subscriber" class="icoGoogle" title="Youtube"><i class="fa fa-youtube"></i></a></li>

                            </ul>
                        </div>
                        <br>
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
                                        <input type="text" name="cpname" class="form-control" id="inputName3" placeholder="Name" style="background-color:#fff;color:#000;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPhone3" class="col-sm-2 col-form-label">Phone No*</label>
                                    <div class="col-sm-10">
                                        <input type="tel" name="cpphone" class="form-control" id="inputPhone3" placeholder="90XXXXXXXX" style="background-color:#fff;color:#000;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="cpemail" class="form-control" id="inputEmail3" placeholder="Email@domain.com" style="background-color:#fff;color:#000;">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Intrested In</label>
                                    <div class="col-sm-10">
                                        <div class="checkbox">
                                            <label for="Intrested-0">
      <input name="Intrested[]" id="Intrested-0" value="Residential Interior" type="checkbox">
      Residential Interior
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-1">
      <input name="Intrested[]" id="Intrested-1" value="Commercial Interior" type="checkbox">
      Commercial Interior
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-2">
      <input name="Intrested[]" id="Intrested-2" value="Renovation works" type="checkbox">
      Renovation works
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-3">
      <input name="Intrested[]" id="Intrested-3" value="Architecture Designing" type="checkbox">
      Architecture Designing
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-4">
      <input name="Intrested[]" id="Intrested-4" value="Handcrafted designed furnitures" type="checkbox">
      Handcrafted designed furnitures
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-5">
      <input name="Intrested[]" id="Intrested-5" value="Civil and Electrical contractors" type="checkbox">
      Civil and Electrical contractors
    </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="Intrested-6">
      <input name="Intrested[]" id="Intrested-6" value="Refer and Earn" type="checkbox">
      Refer and Earn
    </label>
                                        </div>
										<div class="checkbox">
                                            <label for="Intrested-7">
      <input name="Intrested[]" id="Intrested-7" value="For Queries" type="checkbox">
      For Queries
    </label>
                                        </div>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label for="inputArea3" class="col-sm-2 col-form-label">Message</label>
                                    <div class="col-sm-10">
									 <textarea rows="4" name="subject" class="form-control" cols="50" placeholder="Feedback" style="background-color:#fff;color:#000;"></textarea> 
                                        
                                    </div>
                                </div>
                                
                            </form>

                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color:#ef0505;">Close</button>
                            <button id="submitfrm" class="btn btn-primary" style="background-color:#4274D7;">Submit</button>
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
                				
                				$( "#submitfrm" ).click(function(e) {
									var frm = $('#contactForm1');
									var sEmail = $('#inputEmail3').val();
									var sPhone = $('#inputPhone3').val();
									var sName = $('#inputName3').val();
									function validateEmail(sEmail) {

   var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

   if (filter.test(sEmail)) {

       return true;

   }

   else {

       return false;
									}}
									if ($.trim(sEmail).length == 0) {
								
										alert('Please enter valid email address');
								
										e.preventDefault();
								
									}
									else if ($.trim(sPhone).length == 0) {
								
										alert('Please enter valid Phone Number');
								
										e.preventDefault();
								
									}
								else if ($.trim(sName).length == 0) {
								
										alert('Please enter valid NAME');
								
										e.preventDefault();
								
									}
								
									
									

									else if (validateEmail(sEmail)) {
								
										
								
									
								
                				e.preventDefault();
                				$.ajax({
                				type: frm.attr('method'),
                				url: "email.php",
                				data: frm.serialize(),
                				success: function (data) {
                				console.log('Submission was successful.');
                				
                				},
                				error: function (data) {
                				console.log('An error occurred.');
                				console.log(data);
                				},
                				});
								$('#contactForm1').text("Thanks for contacting us our executives will get back to you shortly");
								var x = document.getElementById("submitfrm");
								x.style.display = "none";
									}
									else {
								
										alert('Invalid Email Address');
								
										e.preventDefault();
								
									}
                				
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
        <script src="js/jquery.ba-cond.min.js"></script>
        <!-- Parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Portfolio Filtering -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
        <!-- Jappear js -->
        <script src="js/jquery.appear.js"></script>
        <!-- Pie Chart -->
        <script src="js/easyPieChart.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing-1.3.pack.js"></script>
        <script src="js/tweetie.min.js"></script>
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