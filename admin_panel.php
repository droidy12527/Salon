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
                      <a class="navbar-brand" href="index.html">10 Scissors salon Admin Panel.</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="oi oi-menu"></span> Menu
                      </button>
            
                      <div class="collapse navbar-collapse" id="ftco-nav">
                      <?php
				session_start();
				if(isset($_SESSION['loggedid'])){
					echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="http://localhost/salon/includes/logout.php" class="nav-link">Logout</a></li>
				  </ul>';
				}else{
					echo '<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="Login/login.html" class="nav-link">Login</a></li>
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
	    			<form action="http://localhost/salon/includes/appointment_admin.php" class="appointment-form" method="post">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Your appointment ID." name="first-name">
                </div>
              <div class="form-group">
	              <input type="submit" value="Remove an appointment" class="btn btn-primary py-3 px-4" name="appointment_booking">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>


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