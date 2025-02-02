<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <title>Blog - 10 Scissors</title>
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
	          	<h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog</h1>
	            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
	          </div>
	        </div>
	      </div>
	    </div>

	    <section class="ftco-section">
	      <div class="container">
	        <div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
					</a>
					<div class="text py-4 d-block">
						<div class="meta">
						<div><a href="#">Sept 10, 2018</a></div>
						<div><a href="#">Admin</a></div>
						<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
					  </div>
					  <h3 class="heading mt-2"><a href="#">Men's hairstyle for all face shapes</a></h3>
					  <p>Trust us when we say that a strategic hairstyle will make the world of difference when it comes to enhancing your face shape. Let’s face it (pun intended), your mug is the moneymaker, and your hair should frame it according to what suits it best. Simple enough, right?</p>
					</div>
				  </div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
					</a>
					<div class="text py-4 d-block">
						<div class="meta">
						<div><a href="#">Sept 10, 2018</a></div>
						<div><a href="#">Admin</a></div>
						<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
					  </div>
					  <h3 class="heading mt-2"><a href="#">Makeup Tips For College Going Girls
					  </a></h3>
					  <p>Makeup Tips For College Going Girls
						If you are in college, chances are you spend some, okay, a lot of time in front of the mirror each morning. Along with other things, looking her best is on every college going girl’s to-do list. And why it should not be, after all, you are at your peak with a healthy body, skin and a relatively carefree mind. College days may be the perfect time to try out the latest makeup trends, but it is also the time for perfecting the basics and understanding what kind of makeup works in your favour. Makeup is a wonderful way to express yourself and enhance your beauty but if it is taking too much time or making you look overdone, clearly you are doing something wrong.
						
						Here are some useful makeup tips for girls who go to college, that’ll save you time and help you look your best.</p>
					</div>
				  </div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
					</a>
					<div class="text py-4 d-block">
						<div class="meta">
						<div><a href="#">Sept 10, 2018</a></div>
						<div><a href="#">Admin</a></div>
						<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
					  </div>
					  <h3 class="heading mt-2"><a href="#">Modern Men’s Hairstyles for Curly Hair </a></h3>
					  <p>If you’ve ever seen a hairstyle you loved and thought, “I wish I could get that with my curly hair,” wish no more! Curly hair can get a bad rap for being hard to work with, but it’s as versatile as any other hair type</p>
					</div>
				  </div>
				</div>
			  </div>
	        <div class="row mt-5">
	          <div class="col text-center">
	            
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