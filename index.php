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
    
    <!-- Grid Component css -->
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/buttons.css">
	<link rel="stylesheet" href="css/social-button.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
	<!-- Slider -->
    <link rel="stylesheet" href="css/slider.css">
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
        


	
    </style>


</head>

<body id="body">
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
    
      ?>

        <!-- End Database
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
                    <a class="navbar-brand" href="#body">
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
						<li><a href="services.html">Our Services</a></li>
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
		<div id="home slitSlider" class="sl-slider-wrapper" style="padding-top:70px;">
       <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  <script>
    
    
$(document).ready(function() {  
var i = 0;
    var $target = $('.item');
    var $target1 = $('.item1');
    var $target2 = $('.item2');
    var $target3 = $('.item3');
	$target1.addClass('active');
 setInterval(function() {
	 i++;
  
   if(i==1)
   { $target.removeClass('active');
   $target1.removeClass('active');
   $target2.removeClass('active');
   $target3.removeClass('active');
	   $target2.addClass('active');
   } if(i==2)
   { $target.removeClass('active');
   $target1.removeClass('active');
   $target2.removeClass('active');
   $target3.removeClass('active');
	   $target3.addClass('active');
   } if(i==3)
   { $target.removeClass('active');
   $target1.removeClass('active');
   $target2.removeClass('active');
   $target3.removeClass('active');
	   $target1.addClass('active');
	   i=0;
   }
        
    }, 5000);

 }); 
   
  </script>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item item1 slides ">
      <div class="slide-3"></div>
   <div class="hero">        
          
            <h4 class="heading animated fadeInDown">SKYLON INDIA INTERIOR DECORATORS</h4>
              
        <a data-toggle="modal" href="#normalModal" style="color:inherit;">
            

</a>
      </div>
    </div>
    <div class="item  item2 slides">
      <div class="slide-2"></div>
      <div class="hero">        
          
            <h4 class="heading animated fadeInDown">Anticipated to work with us!!!.</h4>
              
        <a data-toggle="modal" href="#normalModal" style="color:inherit;">
      
 
<button type="button" class="ph btn btn-info btn3d btn-xs" style="margin-left:78%;padding-bottom:8px" ><span class="fa fa-book">&nbsp;Get a Quote Now</span></button>
<button type="button" class="ipad btn btn-info btn3d btn-lg"  style="margin-left:75%;"><span class="fa fa-book">&nbsp;Get a Quote Now</span></button>
<br><br>
<button type="button" class="sys btn btn-info btn3d btn-lg"  style="margin-left:32%;"><span class="fa fa-book">&nbsp;Get a Quote Now</span></button>
</a>
      </div>
    </div>
	<div class="item item3 slides ">
      <div class="slide-8"></div>
    <div class="hero1">        
              
        <a href="earnatskylon.html" style="color:inherit">
		<!-- Indicates a successful or positive action -->
		<button type="button" class="ph btn btn-info btn3d btn-xs "><span class="fa fa-inr">&nbsp;Refer and Earn</span></button>
		<button type="button" class="sys btn btn-info btn3d btn-lg"><span class="fa fa-inr">&nbsp;Refer and Earn</span></button>
        <button type="button" class="ipad btn btn-info btn3d btn-lg"><span class="fa fa-inr">&nbsp;Refer and Earn</span></button>
		</a>
      </div>
      
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
        <section id="main-counter">
            <div class="container">
                <div class="row">
                    
                    <!-- /section title -->
                    <!-- features item -->
                    <div id="features" style="padding-top:50px;>
                        <div class="item">

                            <div class="features-item" style="padding-left:50px;padding-right:10px;">
                                <div class="col-md-12 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <h2 class="ow" style="color:#000000;text-align:justiy;line-height: 1.6;">“At Skylon India, we provide best customized and personalised interior design solutions at an
affordable cost with superior class looks and a fabulous finish”</h2>
									<h2 style="color:#000000;text-align:center;font-weight:bold;">Why us?</h2>
                                    <h4 class="ow" style="text-align:justify;line-height: 1.6;">Our ultimate intention is to design and execute the &nbsp;&nbsp;most aesthetic, innovative and
efficient home designs with utmost functionality to satisfy even the smallest expectation of our clients.</br></br>
									We have a group of dedicated professional designers with expertise in residential and commercial
interior home decor to help you create inviting and personalized spaces and we also engage skilled
labour to perfectly execute our designs. From sophisticated living room design to space saving and
clutter free interior design, we are here to help you to find the best interior solutions to match your
requirement and style.
								Get a free estimate or book a free consultation with us at Skylon India today
for Residential &amp; commercial Interior projects, furniture designs and architectural 3D designs. We
promise elegant interiors delivered within the stipulated time (depending upon the project) taking

care of even the minute details or we pay you rent.</h4>
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
                <img src="img/parallax/Louis.jpg" alt="Louis" style="max-width: 100%;max-height: 100%">
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
                            <p>Interior designing has become an integral part of buildings in recent times. Everyone is now
interested in Interior home decorations to have greater aesthetic view of their dream homes.</p>
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
                            <p>We also decorate commercial interiors which portray a unique theme. Doing commercial interior
works to your spaces will increase the functional value of the building and also enhance your
business.</p>
                        </div>
                    </article>
                    <!-- End Single Service Item -->

                    <!-- Single Service Item -->
                    <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
                        <div class="service-block text-center">
                            <div class="service-icon text-center">
                                <i class="fa fa-gavel fa-5x"></i>
                            </div>
                            <h3>&nbsp;&nbsp;Renovation Works&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                            <p>Skylon India will help you to renovate or remodel your Residential or Commercial space to the whole new level and the very look of your &nbsp;  building will be greater than your farthest imaginations.</p>
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
                            <p>We have certified Architecture designer who are expertised in designing stunning
elevations to make sure that your home or commercial space looks will be what you
desire and coherent.</p>
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
                            <p>Handmade furniture’s are sustainable treasures and can be treasured for the years to come.Adding up furniture’s to your home interiors and commercial interiors will make your home.</p>
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
                            <p>Skylon also undertake civil and electrical contracts which will commence after structural
construction. we do all kinds of non-structural works like wall construction, paintings,
electrical wiring and more.</p>
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
                <img src="img\parallax\bruns.jpg" alt="Bruns" style="max-width: 100%;max-height: 100%">
            </div>
        </section>

        <!-- Start Testimonial
		=========================================== 

        <section id="testimonial" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- section title 
                        <div class="sub-title text-center wow fadeInDown" data-wow-duration="500ms">
                            <h3>What People Say About Us</h3>
                        </div>
                        <!-- /section title -->

                        <!-- testimonial wrapper 
                        <div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                            #<?php
								#if($comments->num_rows > 0) {
									#while($row = $comments->fetch_assoc()) {
							
									#	echo '<div class="item text-center">';
									
									
									#	echo '<div class="client-thumb">';
									#	?>
										<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" class="img-responsive" alt="Skylon">
									#	<?php
									#		echo '</div>';
									#		echo '<div class="client-info">';
									#		echo '<div class="client-meta">';
									#		echo '<h3>'.$row["cust_name"].'</h3>';	
									#		echo '</div>';
									#		echo '<div class="client-comment">';
									#		echo '<p>'.$row["cust_desc"].'</p>';
									#		echo '</div>';
									#		echo '</div>';
									#		echo '</div>';
									#}
								#}
							
							?>


                        </div>
                        <!-- end testimonial wrapper 
                    </div>
                    <!-- end col lg 12 
                </div>
                <!-- End row 
            </div>
            <!-- End container 
        </section>
        <!-- End Section -->




        <!-- Srart Contact Us
		=========================================== -->
        


     <div class="container-fluid" style="text-align:center;padding:80px;position:relative;z-index=-1;background-color:#50486d;">
		
            <div class="row">
			<h3 style="font-weight:bold;">ENGAGE WITH US AND SHAPE YOUR DREAMS</h3>
			<br>
			</div>
            <div class="row">
                <a href="earnatskylon.html" style="color:inherit" target=”_blank”>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-info btn3d btn-lg"><span class="fa fa-inr" style="font-size:18px;">&nbsp;Earn at Skylon</span></button>
                </a>
                <a href="#normalModal" data-toggle="modal" style="color:inherit">
                    <!-- Indicates a successful or positive action -->
                    <button type="button" class="btn btn-default btn3d btn-lg"><span class="fa fa-book" style="font-size:18px;">&nbsp;Get a Quote</span></button>
                </a>


            </div>
        </div>
		
		<!-- Google Map -->
          <div class="google-map wow fadeInDown" data-wow-duration="500ms">
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
					<h3>&nbsp;</h3>
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
							<h3 style="color:#ffffff;"><a data-toggle="modal" href="#normalModal">Make an Appoinment now</a></h3>
						</div>
                    
					</div>

                    <!-- Contact Details -->
                    <div class="contact-info col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="500ms">
                        <h3 style="color:#d3b36c;font-weight:bold;">Contact Us</h3>
                        <br>
                        <div class="contact-details">
                            <div class="con-info text-center clearfix">
                                <i class="fa fa-home fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">Reach Us: </span>
                                <span style="color:#ffffff;font-size:16px;">AP:1725,102ndStreet,<br>14thSector, k.k.Nagar,<br>Chennai-600078.</span>
                            </div>

                            <div class="con-info  text-center clearfix">
                                <i class="fa fa-phone fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">&nbsp;Phone No: </span>
                                <span style="color:#ffffff;font-size:16px;">+919840492966</span>
                            </div>
							
							<div class="con-info  text-center clearfix">
                                <i class="fa fa-phone fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">&nbsp;Phone No: </span>
                                <span style="color:#ffffff;font-size:16px;">+917200107659</span>
                            </div>

                            <div class="con-info  text-center clearfix">
                                <i class="fa fa-envelope fa-lg" style="color:#ffffff"></i>
								<span style="color:#ffffff;font-size:16px;">Email: </span>
                                <span style="color:#ffffff;font-size:16px;">skylonindia@gmail.com</span>
                            </div>
							
                        </div>
						<div class="col-md-10  text-center">
								<ul class="social-network social-circle">
									<li><a href="https://instagram.com/skylon_india?utm_source=ig_profile_share&igshid=yyl086ibgfrq" target="_blank" class="icoRss" title="Rss"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.facebook.com/skylonindia/?ref=bookmarks" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/IndiaSkylon" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCkYerkHBOvQc759YxHKRVWw?view_as=subscriber" class="icoGoogle" title="Google +"><i class="fa fa-youtube"></i></a></li>

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
                            <button  id="submitfrm" class="btn btn-primary" style="background-color:#4274D7;">Submit</button>
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
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		
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