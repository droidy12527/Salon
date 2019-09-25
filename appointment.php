<html lang="en">
    <head>
            <title>Appointments - 10 Scissors</title>
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
                                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="services.html" class="nav-link">Services &amp; Pricing</a></li>
                                <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="http://localhost/salon/includes/logout.php" class="nav-link">Logout</a></li>
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                </ul>';
                              }else{
                                echo '<ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                                <li class="nav-item"><a href="services.html" class="nav-link">Services &amp; Pricing</a></li>
                                <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
                                <li class="nav-item"><a href="Login/login.html" class="nav-link">Login</a></li>
                                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                </ul>';
                              }  
                            
			                        ?>
                      </div>
                    </div>
                  </nav>
                  
        <section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Appointments</h3>
	    			<form action="http://localhost/salon/includes/appointment.php" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" id="appointment_date" class="form-control" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" id="appointment_time" class="form-control" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
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