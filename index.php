<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Skylon">
        
        <meta name="author" content="2G developers">
		
        <title>Skylon</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
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
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>
		
		

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-54152927-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Skylon Preloader" src="img/preloader.gif"  />
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
    $dbUsername = 'id6491760_skylon1';
    $dbPassword = 'skylon@12345';
    $dbName     = 'id6491760_skylon1';
    
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
        ==================================== 
        <header id="navigation1" class="navbar1 navbar-inverse1 hidden-sm hidden-xs hidden-md">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button 
					
					<!-- logo 
                    <a class="navbar-brand1" href="#body">
						<h1 id="logo">
							<img src="img/logo-meghna.png" alt="Meghna" />
						</h1>
					</a>
					<!-- /logo 
                </div>

				<!-- main nav 
               
                        
                        <h4 align="right"><i class="fa fa-phone"></i>&nbsp;+919840492966&nbsp;,<br>+917200107659</h4>
						
                        
						
                    
				<!-- /main nav 
				
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
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Welcome To Skylon</h2>
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
								<h2 class="heading animated fadeInDown">Interior Design</h2>
								<!--<h3 class="animated fadeInUp">With all Mejor Browser support including IE 9</h3> -->
								
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">Together We Can Grow</h2>
								<!-- <h3 class="animated fadeInLeft">Clean and Professional Design</h3> -->
								
							</div>
						</div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		
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
							<img src="img/logo-meghna.png" alt="Skylon" />
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#main-counter">About Us</a></li>
                        <li><a href="#team-skills1">Skills</a></li>
                        <li><a href="#services-counter">Services</a></li>
                        <li><a href="#team-skills">Works</a></li>
                        <li><a href="#team-counter">Team</a></li>                       
                        <li><a href="#touch-counter">Contact</a></li>
						
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		<!--
		Start About Section
		==================================== -->
		<section id="about-counter" class="bg-one">
			<div class="container">
				<div class="row">
				
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp wrap" data-wow-duration="500ms" >
						<div class="wrap-about">							
							<div class="icon-box" style="color:#000000;">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>					
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="ddd" style="color:#000000;">We're Creative</h3>								
								<p></p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp wrap" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 style="color:#000000;">We're Professional</h3>
								<p></p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
					<!-- About item -->					
					<div class="col-md-4 text-center wow fadeInUp wrap" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 style="color:#000000;">We're Team</h3>
								<p></p>
							</div>
						</div>
					</div> 
					<!-- End About item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		
		<!--
		Start Main Features
		==================================== -->
		<section id="main-counter">
			<div class="container">
				<div class="row">
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms" >
						<h2 style="color:#000000;">About <span class="color">Us</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<!-- features item -->
					<div id="features">
						<div class="item">
							
							<div class="features-item">
							<div class="col-md-6 feature-desc wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
									<h1 style="color:#000000;">"We emphasise on making your today's imaginations into tomorrow's reality"</h1>
									<h3>Skylon India focuses on providing interior design & services to today's growing designing sector.  A real set of experienced Handcrafted labours, budding enthusiast architects and engineers much interested to outbreak the talent of designing and execution in own thoughts. In a much competitive world of growing business we focus much more on effective work satisfaction rather than the profit.</h3>
									<h3>As a company, we care about PEOPLE; employees, co-workers, customers, vendors, and whoever else we come across in our work. We believe that people are more important than projects, products, or problems. We care about PERFECTION. We believe that our work must be perfect. When our work is done, our customers rave about our services and products, and we are inspired to progress.</h3>
									<h3>We believe that our positive work environment and commitment to team-work allow us to give our customers the ultimate service experience.</h3>
								</div>
								<!-- features media -->
								<div class="col-md-6 feature-media media-wrapper wow fadeInUp hidden-sm hidden-xs hidden-md" data-wow-duration="500ms">
									<img src="img/parallax/man.png" alt="man" width="100%">
								</div>
								<!-- /features media -->								
								
								<!-- features content -->
								
								<!-- /features content -->
								
							</div>
						</div>
						
						
						
					</div>
					<!-- /features item -->
					
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<section id="sample1">
		<div>
		<img src="http://www.pmchconstructors.com/wp-content/uploads/2016/10/LouisvilleCityscape3.jpg" style="max-width: 100%;max-height: 100%">
		</div>
		</section>
		
		
		
		<!-- Start Team Skills
		=========================================== -->
		
		<section id="team-skills1" class="parallax-section">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
				
					<!-- section title -->
					<div class="title text-center">
						<h2>Our <span class="color">Skills</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="80">
								<span class="percent">86</span>
							</span>
							<h3><i class="fa fa-child"></i> Perfection</h3>
							
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="90">
								<span class="percent">90</span>
							</span>
							<h3><i class="fa fa-wifi"></i> Satisfaction</h3>
							
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="85">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-thumbs-up"></i> Quality</h3>
							
						</div>
					</div>
					<!-- end skill set -->
					
					<!-- skill set -->
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="skill-chart text-center">
							<span class="chart" data-percent="92">
								<span class="percent"></span>
							</span>
							<h3><i class="fa fa-trophy"></i> Trust</h3>
							
						</div>
					</div>
					<!-- end skill set -->
					
				</div>  		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		<!--
		Start Counter Section
		==================================== 
		
		<section id="counter" class="parallax-section">
			<div class="container">
				<div class="row">
				
					<!-- first count item 
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="320">320</span>
							</div>
							<i class="fa fa-users fa-3x"></i>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->
				
					<!-- second count item 
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="565">565</span>
							</div>
							<i class="fa fa-check-square fa-3x"></i>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->
				
					<!-- third count item 
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="counters-item">
							<div>
							    <span data-speed="3000" data-to="95">95</span>
								<span>%</span>
							</div>
							<i class="fa fa-thumbs-up fa-3x"></i>
				            <h3>Positive feedback</h3>
							
						</div>
					</div>
					<!-- end third count item -->
					
					<!-- fourth count item 
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item kill-margin-bottom">
							<div>
							    <span data-speed="3000" data-to="2500">2500</span>
							</div>
							<i class="fa fa-coffee fa-3x"></i>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
					
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->
		
		
		<!-- Start Services Section
		==================================== -->
		
		<section id="services-counter" class="bg-one">
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
							<p>Sample Paragraph</p>
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
							<p>Sample Paragraph</p>
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
							<p>Sample Paragraph</p>
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
							<p>Sample Paragraph</p>
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
							<p>Sample Paragraph</p>
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
							<p>Sample Paragraph</p>
						</div>
					</article>
					<!-- End Single Service Item -->
						
				</div> 		<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		<!-- Start Portfolio Section
		=========================================== -->
		
		<section id="team-skills">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2 style="color:#000000">Our <span class="color">Works</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					
						<!-- portfolio item filtering 
						<div class="portfolio-filter clearfix">
							<ul class="text-center">
							    <li><a href="javascript:void(0)" class="filter" data-filter="all">All</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".app">Mobile App</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".web">Web Design</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Photoshop</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".illustrator">Illustrator</a></li>
							</ul>
						</div>
						<!-- /portfolio item filtering -->
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
	
			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
				<?php
				if($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				
						
					echo '<li class="mix app">';
					
						?><a href="javascript:void(0)" data-largesrc="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" data-title=<?php echo $row["prod_name"]?> data-description="<?php echo $row["prod_desc"]?>" >
							<img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>">
							<?php
							echo '<div class="hover-mask">';
								echo "<h3>".$row["prod_name"]."</h3>";
								echo '<span>';
									echo '<i class="fa fa-plus fa-2x"></i>';
								echo '</span>';
							echo '</div>';
						echo '</a>';
					echo '</li>';
					
					}
				}
					?>
					
					
				</ul> <!-- end og grid -->
			</div>  <!-- portfolio items wrapper -->
			
		</section>   <!-- End section -->
		
		
		<section id="sample2">
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
									?><img src="data:image/jpeg;base64,<?php echo base64_encode($row['image'])?>" class="img-responsive" alt="Skylon">
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
							<!-- testimonial single 
							<div class="item text-center">
								
								<!-- client photo 
								<div class="client-thumb">
									<img src="img/team/client.jpg" class="img-responsive" alt="Skylon">
								</div>
								<!-- /client photo 
								
								<!-- client info 
								<div class="client-info">
									<div class="client-meta">
										<h3>Shareen Raj</h3>
										
									</div>
									<div class="client-comment">
										<p>Excellent</p>
										
									</div>
								</div>
								<!-- /client info 
							</div>
							<!-- /testimonial single -->
						
							<!-- testimonial single 
							<div class="item text-center">
								
								<!-- client photo 
								<div class="client-thumb">
									<img src="img/team/client.jpg" class="img-responsive" alt="Skylon">
								</div>
								<!-- /client photo 
								
								<!-- client info 
								<div class="client-info">
									<div class="client-meta">
										<h3>Shareen Raj</h3>
										
									</div>
									<div class="client-comment">
										<p>Happy with your service</p>
										
									</div>
								</div>
								<!-- /client info 
							</div>
							<!-- /testimonial single -->
							
						</div>		<!-- end testimonial wrapper -->
					</div> 		<!-- end col lg 12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
		
		<!--
		Start Blog Section
		=========================================== -->
				
		<section id="blog" class="bg-one">
			<div class="container">
				<div class="row">

					<!-- section title -->
					<div class="title text-center wow fadeInDown">
						<h2> Latest <span class="color">Posts</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->

					<div class="clearfix">
					
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- /single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
							<div class="note">
								<div id="gallery-post" class="media-wrapper">
									<div class="item">
										<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/bicycle.jpg" alt="Flying bicycle" class="img-responsive">
									</div>
									<div class="item">
										<img src="img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
									</div>
								</div>
								
								<div class="excerpt">
									<h3>Simple Slider Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
							<div class="note">
								<div class="media-wrapper">
									<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
						
						<!-- single blog post -->
						<article class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="note kill-margin-bottom">
								<div class="media-wrapper">
									<img src="img/blog/amazing-caves-coverimage.jpg" alt="amazing caves coverimage" class="img-responsive">
								</div>
								<div class="excerpt">
									<h3>Simple Image Post</h3>
									<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
									<a class="btn btn-transparent" href="single-post.html">Read more</a>
								</div>
							</div>						
						</article>
						<!-- end single blog post -->
					</div>

					<div class="all-post text-center">
						<a class="btn btn-transparent" href="blog.html">View All Post</a>
					</div>

				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end section -->
		
		
		
		<!-- Start Our Team
		=========================================== -->
		
		<section id="team-counter">
			<div class="container">
				<div class="row">
				
					<!-- section title -->
					<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
						<h2 style="color:#000000;">Our <span class="color">Team</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/member-4.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Abul Mal Muhit</h3>
								<span>CEO/Founder</span>
							</div>
							<!-- /member name & designation -->
							
							
						   
                       </article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/client-2.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Frank Miller</h3>
								<span>Manager</span>
							</div>
							<!-- /member name & designation -->
							
							
						</article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
                       <article class="team-mate">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/client-3.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Michael Jonson</h3>
								<span>Web Developer</span>
							</div>
							<!-- /member name & designation -->
							
							
                       </article>
                    </div>
					<!-- end team member -->
					
					<!-- team member -->
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                       <article class="team-mate kill-margin-bottom">
							<div class="member-photo">
								<!-- member photo -->
								<img class="img-responsive" src="img/team/client-3.jpg" alt="Meghna">
								<!-- /member photo -->
								
								<!-- member social profile -->
								<div class="mask">
									<ul class="clearfix">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
								<!-- /member social profile -->
							</div>
							
							<!-- member name & designation -->
							<div class="member-title">
								<h3>Mo. Kha. Alamgir</h3>
								<span>SEO Specialist</span>
							</div>
							<!-- /member name & designation -->
							
							
                       </article>
                    </div>
					<!-- end team member -->
					
				</div>  	<!-- End row -->
			</div>   	<!-- End container -->
		</section>   <!-- End section -->
		
		
		
		
		
		<!-- Srart Contact Us
		=========================================== -->	
<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map-canvas"></div>
			</div>			
		<section id="about-counter" class="bg-one">
		
			<!-- /Google Map -->
			<div class="container">
				<div class="row">
				
				
					
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Get In <span style="color:#352d4f;">Touch</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					
					<!-- Contact Details -->
					<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
						<h1 style="color:#250284;">Contact Details</h1>
						<br>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>AP:1725,102ndStreet,<br>14thSector,<br>k.k.Nagar,<br>Chennai-600078.</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Phone: +919840492966</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-fax fa-lg"></i>
								<span>Phone: +917200107659</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email: skylonindia@gmail.com</span>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
					<!-- Contact Form -->
					<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
						<form id="contact-form" method="post" action="sendmail.php" role="form">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
							</div>
							
							<div id="mail-success" class="success">
								Thank you. The Mailman is on His Way :)
							</div>
							
							<div id="mail-fail" class="error">
								Sorry, don't know what happened. Try later :(
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			
			
		</section> <!-- end section -->
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="foot-counter" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/skylon.png" alt="Skylon" /> 
							</a>
							<br />
							
							<p>Developed by 2G Developers.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
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
		<script src="js/jquery.nicescroll.min.js"></script>
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