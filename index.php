<!DOCTYPE html>
<html lang="en">
  <head>
    <title>10 SCISSORS</title>
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

    <div class="hero-wrap js-fullheight" style="background-image: url('images/home.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We provide the best haircuts you will ever find across Thane.</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Visit someday for some of the best trending haircuts you can ever get.</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="http://localhost/salon/appointment.php" class="btn btn-primary px-4 py-3">Book an Appointment</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>098927 84870</h3>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3> Louis Wadi, Thane West</h3>
	    						<p>Thane, Maharashtra 400604</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Sunday</h3>
	    						<p>9:00am - 11:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social pl-md-5 p-4">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="https://goo.gl/maps/wwYgqVhjrNa4wNwL8"><span class="icon-map-marker"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/10Scissors/"><span class="icon-facebook"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-4">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Welcome to <span>10 Scissors</span> Sachin's Hair Salon</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-8 text-center ftco-animate">
    			<p>Scisors salon is best salon you can ever find across Thane.
    				We provide the best you can ever find in the whole area. From trending Haircuts to self designed custom haircut. We provide all things you need. appointment now to enroll and get some exclusive deals on trending haircuts.
    			</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-bg-dark">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
              	<span class="flaticon-scissor-and-comb"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Haircuts &amp; Styling</h3>
                <p>For us the working of hair is architecture with a human element.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
              	<span class="flaticon-male-head-hair-and-beard"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Beard Treatment</h3>
                <p>A decent beard has long been the number one must-have fashion item for any fugitive from justice</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-heads-hairs-and-scissors"></span></div>
              <div class="media-body">
                <h3 class="heading">Coloring Services</h3>
                <p>Hair color is the easiest way to change your appearance, but a bad dye job might draw more attention to you.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4"><span class="flaticon-young-male-short-irregular-hair-on-head-and-a-small-beard"></span></div>
              <div class="media-body">
                <h3 class="heading">Beard Waxing</h3>
                <p> Hair that grows back in after waxing may be lighter and less noticeable. </p>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">What We Do</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Provide our customers with the best experience customized to their individual preferences<br>
				Ensure that we invest in the best treatment products for our customers<br>
				Make our prices reasonable so that way as many people can be able to enjoy the 10 Scisor's Experience<br>
				Ensure the most accommodating atmosphere in both of our locations whether it would be serving coffee or even building our brand loyalty with a rewards program or giving gifts</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
				<div class="row no-gutters d-flex">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img" style="background-image: url(images/work-1.jpg);"></a>
							<div class="text p-4">
								<h3>Hair Style </h3>
								<p>Are you looking for a trendy new men's hairstyle or cool men's haircut to update your look?  </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img" style="background-image: url(images/work-2.jpg);"></a>
							<div class="text p-4">
								<h3>Beard Grooming</h3>
								<p>here are a lot of reasons why you need to do these beard grooming tips.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img" style="background-image: url(images/work-3.jpg);"></a>
							<div class="text p-4">
								<h3>Beard Trimming </h3>
								<p>The best way to trim your beard is to start with the longest hair length and bring it down gradually.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img order-md-last" style="background-image: url(images/work-4.jpg);"></a>
							<div class="text p-4">
								<h3>Hair Style for Childrens</h3>
								<p>One braid or two braids is a universal hairstyle for kids, but it may look too banal. To make your girl's braided style more interesting. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img order-md-last" style="background-image: url(images/work-5.jpg);"></a>
							<div class="text p-4">
								<h3>Hair Style for Womens </h3>
								<p>Ready to finally find your ideal haircut? This is your ultimate resource to get the hottest hairstyles and haircuts in 2019.
									</p>

							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="services-wrap d-flex">
							<a href="#" class="img order-md-last" style="background-image: url(images/work-6.jpg);"></a>
							<div class="text p-4">
								<h3>Traditional Haircuts Mens </h3>
								<p>Many of these types of haircuts for men are classic looks while others are newer trends.</p>

							</div>
						</div>
					</div>
				</div>
			</div>

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Plan &amp; Pricing</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">We keep our prices reasonable so that way as many people can be able to enjoy the 10 Scissors Experience.</p>
        </div>
        <div class="row">
			<div class="col-md-6">
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Men's Haircut</span></h3>
						<span class="price">₹100.00</span>
					</div>
					<div class="d-block">
						<p>Basic mens haircut with hairwash and styling.</p>
					</div>
				</div>
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Children Haircut</span></h3>
						<span class="price">₹70.00</span>
					</div>
					<div class="d-block">
						<p>Basic childrens haircuts with hairwash - Under 15.</p>
					</div>
				</div>
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Beard Cut</span></h3>
						<span class="price">₹50.00</span>
					</div>
					<div class="d-block">
						<p>Beard trimming and shaping or clean shave.</p>
					</div>
				</div>
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Men's Facial</span></h3>
						<span class="price">₹500.00</span>
					</div>
					<div class="d-block">
						<p>Basic mens facial with local but quality products.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Women's Haircut</span></h3>
						<span class="price">₹300.00</span>
					</div>
					<div class="d-block">
						<p>Basic womens haircut [Additinal charges depending uon hairstyle] </p>
					</div>
				</div>
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Men's Gold Facial</span></h3>
						<span class="price">₹1000.00</span>
					</div>
					<div class="d-block">
						<p>24k Gold facial using imported products.</p>
					</div>
				</div>
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span>Beard Waxing</span></h3>
						<span class="price">₹150.00</span>
					</div>
					<div class="d-block">
						<p>Beard waxing with less skin irritating product.</p>
					</div>
				</div>
				<div class="pricing-entry ftco-animate">
					<div class="d-flex text align-items-center">
						<h3><span> Hair Coloring - Basic </span></h3>
						<span class="price">₹200.00</span>
					</div>
					<div class="d-block">
						<p>Incudes basic hair dying [Additional charges for highlights].</p>
					</div>
				</div>
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
						<p class="mb-4">Enjoy a big surprise now on 10scissors.com to buy all kinds of discount hairpiece hairstyles 2019! </p>
						<p><a href="http://localhost/salon/appointment.php" class="btn btn-primary px-4 py-3">Appointment</a></p>
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

    <section class="ftco-section ftco-bg-dark">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Shop</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">We provide wide range of grooming products. </p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-1.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Razor and Brush Holder</a></h3>
    						<span class="price mb-4">₹ 300</span>
    						<p>Get Exlusively from our Salon</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-2.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">NIVEA MEN - After Shave</a></h3>
    						<span class="price mb-4"> ₹ 158</span>
    						<p>Get Exlusively from our Salon</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-3.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Trimmer</a></h3>
    						<span class="price mb-4">₹ 1500</span>
    						<p>Get Exlusively from our Salon</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3 ftco-animate">
    				<div class="product-entry text-center">
    					<a href="#"><img src="images/prod-4.png" class="img-fluid" alt="Colorlib Template"></a>
    					<div class="text">
    						<p class="rate"><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star2"></span><span class="icon-star_half"></span></p>
    						<h3><a href="#">Trimmer</a></h3>
    						<span class="price mb-4">₹ 2500</span>
    						<p>Get Exlusively from our Salon</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Gallery</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">As an artist , we are essentially interested in creating works that call for the participation of the audience to the same extent as our involvement in it. </p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
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
		              	<strong class="number" data-number="500">0</strong>
		              	<span>Piercing Done</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>

          </div>
        </div>
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
                <h3 class="heading mt-2"><a href="#">Best Hair Products for Men Guide (Must Read If Buying!)
				</a></h3>
                <p>Sure, nowadays there are plenty of hair products to choose from, but actually getting the best hair products specific to men’s hair continues to be quite an ordeal in the 21st century; essentially, it can get quite tedious trying to separate the wheat from the chaff.</p>
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
                  <h3 class="heading"><a href="blog-single.html">Men's hairstyle for all face shapes</a></h3>
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
                  <h3 class="heading"><a href="blog-single.html">Best Hair Products for Men Guide (Must Read If Buying!)</a></h3>
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
