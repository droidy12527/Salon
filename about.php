	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <title>About 10 Scissors</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    
	    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	    <link rel="stylesheet" href="css/animate.css">
	    
	    <link rel="stylesheet" href="css/owl.carousel.min.css">
	    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	    <link rel="stylesheet" href="css/magnific-popup.css">

	    <link rel="stylesheet" href="css/aos.css">

	    <link rel="stylesheet" href="css/ionicons.min.css">

	    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
	    <link rel="stylesheet" href="css/jquery.timepicker.css">

	    
	    <link rel="stylesheet" href="css/flaticon.css">
	    <link rel="stylesheet" href="css/icomoon.css">
	    <link rel="stylesheet" href="css/style.css">
	  </head>
	  <body>

	  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		      <a class="navbar-brand" href="index.html">10 Scissors salon.</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>

		      <div class="collapse navbar-collapse" id="ftco-nav">
			  <?php
				session_start();
				if(isset($_SESSION['loggedid'])){
					echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="http://localhost/salon/index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="http://localhost/salon/about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="http://localhost/salon/services.php" class="nav-link">Services &amp; Pricing</a></li>
					<li class="nav-item"><a href="http://localhost/salon/gallery.php" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="http://localhost/salon/includes/logout.php" class="nav-link">Logout</a></li>
					<li class="nav-item"><a href="http://localhost/salon/blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="http://localhost/salon/contact.php" class="nav-link">Contact</a></li>
				  </ul>';
				}else{
					echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="http://localhost/salon/index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="http://localhost/salon/about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="http://localhost/salon/services.php" class="nav-link">Services &amp; Pricing</a></li>
					<li class="nav-item"><a href="http://localhost/salon/gallery.php" class="nav-link">Gallery</a></li>
					<li class="nav-item"><a href="Login/login.html" class="nav-link">Login</a></li>
					<li class="nav-item"><a href="http://localhost/salon/blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="http://localhost/salon/contact.php" class="nav-link">Contact</a></li>
				  </ul>';
				}  
			 
			 ?>
		      </div>
		    </div>
		  </nav>
	    <!-- END nav -->
	    
	    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	      <div class="overlay"></div>
	      <div class="container">
	        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-md-6 d-flex ftco-animate">
	    				<div class="img img-about align-self-stretch" style="background-image: url(images/bg_3.jpg); width: 100%;"></div>
	    			</div>
	    			<div class="col-md-6 pl-md-5 ftco-animate">
	    				<h2 class="mb-4">Welcome to Trim A Hair Salon Website</h2>
	    				<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
	    				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="ftco-section ftco-discount img" style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row justify-content-center" data-scrollax-parent="true">
						<div class="col-md-7 text-center discount ftco-animate" data-scrollax=" properties: { translateY: '-30%'}">
							<h3>Save up to 25% Off</h3>
							<h2 class="mb-4">All Services Discount</h2>
							<p class="mb-4">Enjoy a big surprise now on DHgate.com to buy all kinds of discount hairpiece hairstyles 2019! </p>
							<p><a href="appointmen" class="btn btn-primary px-4 py-3">Appointment</a></p>
						</div>
					</div>
				</div>
			</section>

			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section ftco-animate text-center">
					  <h2 class="mb-4">Our Hair Stylist</h2>
					  <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
					  <p class="mt-5">We have exerts from all branded organisations . Read what our exerts think abot their proffessions.</p>
					</div>
				  </div>
				  <div class="row">
					  <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
						  <div class="staff">
								<div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
								<div class="info text-center">
									<h3><a href="teacher-single.html">Tom Smith</a></h3>
									<span class="position">Hair Specialist</span>
									<div class="text">
									  <p>If I weren't performing, I'd be a beauty editor or a therapist. I love creativity, but I also love to help others. My mother was a hairstylist, and they listen to everyone's problems like a beauty therapist! </p>
								  </div>
								</div>
						  </div>
					  </div>
					  <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
						  <div class="staff">
								<div class="img mb-4" style="background-image: url(images/person_2.jpg);"></div>
								<div class="info text-center">
									<h3><a href="teacher-single.html">Mark Wilson</a></h3>
									<span class="position">Beard Specialist</span>
									<div class="text">
									  <p>I honestly get comments like that almost every day. My friends and family roll their eyes when it happens. But they’re just jealous of the attention. Ha ha.</p>
								  </div>
								</div>
						  </div>
					  </div>
					  <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
						  <div class="staff">
								<div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
								<div class="info text-center">
									<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
									<span class="position">Hair Stylist</span>
									<div class="text">
									  <p>As an artist, you can always learn different ways to refine your look. I mean, you look at any one time in my career and you see all the hairstyles I went through. You make changes until something feels comfortable with you. And people vibe with it because they can see the difference</p>
								  </div>
								</div>
						  </div>
					  </div>
					  <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
						  <div class="staff">
								<div class="img mb-4" style="background-image: url(images/person_4.jpg);"></div>
								<div class="info text-center">
									<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
									<span class="position">Beard Specialist</span>
									<div class="text">
									  <p>If you're very particular about your beard, struggle to keep your beard sharp, or are just lazy about giving growing it out a real shot, we have compiled a few well-groomed beards with recommendations on where their owners like to get it done.</p>
								  </div>
								</div>
						  </div>
					  </div>
				  </div>
				</div>
			  </section>

			<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
	      <div class="container">
	        <div class="row justify-content-center">
	        	<div class="col-md-10">
	        		<div class="row">
			          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18 text-center">
			              <div class="text">
			              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
			              	<strong class="number" data-number="705">0</strong>
			              	<span>Creative Makeup</span>
			              </div>
			            </div>
			          </div>
			          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18 text-center">
			              <div class="text">
			              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
			              	<strong class="number" data-number="1000">0</strong>
			              	<span>Number of Awards</span>
			              </div>
			            </div>
			          </div>
			          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18 text-center">
			              <div class="text">
			              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
			              	<strong class="number" data-number="3000">0</strong>
			              	<span>Happy Clients</span>
			              </div>
			            </div>
			          </div>
			          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18 text-center">
			              <div class="text">
			              	<div class="icon"><span class="flaticon-scissor-and-comb"></span></div>
			              	<strong class="number" data-number="900">0</strong>
			              	<span>Piercing Done</span>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
	        </div>
	      </div>
	    </section>

	    <footer class="ftco-footer ftco-section img">
			<div class="overlay"></div>
		  <div class="container">
			<div class="row mb-5">
			  <div class="col-md-3">
				<div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">About Us</h2>
				  <p>From 1 salon to over 2 salons across Thane, all it took was one man’s passion. This drove Naturals to become Thane’s No.1 hair and beauty salon.</p>
				  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						<li class="ftco-animate"><a href="https://www.facebook.com/10Scissors/"><span class="icon-facebook"></span></a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-md-4">
				<div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Recent Blog</h2>
				  <div class="block-21 mb-4 d-flex">
					<a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
					<div class="text">
					  <h3 class="heading"><a href="#">Men's hairstyle for all face shapes</a></h3>
					  <div class="meta">
						<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
						<div><a href="#"><span class="icon-person"></span> Admin</a></div>
						<div><a href="#"><span class="icon-chat"></span> 19</a></div>
					  </div>
					</div>
				  </div>
				  <div class="block-21 mb-4 d-flex">
					<a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
					<div class="text">
					  <h3 class="heading"><a href="#">Best Hair Products for Men Guide (Must Read If Buying!)</a></h3>
					  <div class="meta">
						<div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
						<div><a href="#"><span class="icon-person"></span> Admin</a></div>
						<div><a href="#"><span class="icon-chat"></span> 19</a></div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  <div class="col-md-2">
				 <div class="ftco-footer-widget mb-4 ml-md-4">
				  <h2 class="ftco-heading-2">Services</h2>
				  <ul class="list-unstyled">
						<li><a href="services.html" class="py-2 d-block">Haircut</a></li>
						<li><a href="services.html" class="py-2 d-block">Hairstyle</a></li>
						<li><a href="services.html" class="py-2 d-block">Trimming</a></li>
						<li><a href="services.html" class="py-2 d-block">Shaving</a></li>
						<li><a href="services.html" class="py-2 d-block">Skin Care</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="col-md-3">
				<div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Have a Questions?</h2>
					<div class="block-23 mb-3">
					  <ul>
							<li><a href="https://goo.gl/maps/wwYgqVhjrNa4wNwL8"><span class="icon icon-map-marker"></span><span class="text">Louis Wadi, Thane West, Thane, Maharashtra 400604</span></a></li>
							<li><span class="icon icon-phone"></span><span class="text">098927 84870</span></li>
							<li><span class="icon icon-envelope"></span><span class="text">10scissors@gmail.com</span></li>
					  </ul>
					</div>
				</div>
			  </div>
			</div>
			<div class="row">
			  
			</div>
		  </div>
		</footer>
	  

	  <!-- loader -->
	  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	  <script src="js/jquery.min.js"></script>
	  <script src="js/jquery-migrate-3.0.1.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.easing.1.3.js"></script>
	  <script src="js/jquery.waypoints.min.js"></script>
	  <script src="js/jquery.stellar.min.js"></script>
	  <script src="js/owl.carousel.min.js"></script>
	  <script src="js/jquery.magnific-popup.min.js"></script>
	  <script src="js/aos.js"></script>
	  <script src="js/jquery.animateNumber.min.js"></script>
	  <script src="js/bootstrap-datepicker.js"></script>
	  <script src="js/jquery.timepicker.min.js"></script>
	  <script src="js/scrollax.min.js"></script>
	  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	  <script src="js/google-map.js"></script>
	  <script src="js/main.js"></script>
	    
	  </body>
	</html>