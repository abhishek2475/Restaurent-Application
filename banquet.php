<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Mainstreet Banquet Service and Banquet</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

     

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">

						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="takeaway.php">Takeaway</a></li>
						<li class="nav-item active"><a class="nav-link" href="banquet.php">Banquet</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<div style="padding:100px;">
	</div>



	<section class="second-sect">
        <div class="main-section-categ">
            <div class="main-section-container">
                <div class="heading-title text-center">
                    <h1 style="margin-bottom:0px; font-size: 32px; color: #ff006f">Plan Details</h1>
										<p>Fill up your details and confirm your booking</p>
                </div>

              </div>
            </div>
    </section>

	<div class="heading-title text-center">
                    
										<p>Plan 1 :Paneer Manchurian Dry,Plain Rice,Margarita Pizza , Starters</p>
                                  <p>Plan 2:Paneer Tawa Masala,Veg. Hyderabadi Biryani,Veg. Chowmein, Starters </p>
								  <p>Plan 3: Hyderabadi Biryani,Chicken Chowmein,Lemon Coriander Soup</p>
    <div style="height: 20%;text-align:center;">
       <!-- <a href="menu.jpeg" download><img src="/menu.jpeg" height="20%" width="90%" alt="Image Not Loaded" /></a> -->
    </div>
    <div class="contact-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<form id="contactForm" method="post" action="banquet-1.php">
							<div class="row">
                                <div class="col-md-12">
									<span class="field-title" > Select Plan : </span>
									<div class="form-group">
										<select class="custom-select d-block form-control" id="n-reason" required data-error="Please Select No. of Slots" name="menu">
											<option disabled selected>Select Plan *</option>
											<option value="250">Plan - 1 : 250/- per person</option>
											<option value="300">Plan - 2 : 300/- per person</option>
		
											<option value="450">Plan - 3 : 450/- per person</option>
										</select>
										<div class="help-block with-errors"></div>									
									</div>
                                </div>
								<div class="col-md-12">
									<span class="field-title" > Enter Number Of People </span>
									<div class="form-group">
										<input type="number" onchange="calc()" class="form-control" id="b-name" name="b-no" min="50" max="1000" placeholder="Enter Number of people" required data-error="Please Enter Number"> 
										<div class="help-block with-errors"></div>
									</div>
                                </div>
                                <script>
                                    function calc(){
                                        var plan = document.getElementById('n-reason').value;
                                        var person = document.getElementById('b-name').value;
                                        
                                        console.log(plan);
                                        console.log(person);
                                        var total = plan * person;
                                        total.toString().toLocaleString();
                                        var t = document.getElementById('total').value = total;
                                    }
                                </script>
                                <div class="col-md-12">
                                    <span class="field-title">Total Food Bill</span>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="total" readonly value="0" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-button text-center">
											<button class="btn btn-lg btn-circle btn-outline-new-white" style="font-size:14px; padding:10px; border-radius:8px;" id="submit" type="submit" name="submit">Banquet Design</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
										</div>
                                </div>
								</div>	
                                </form>
                                <div class="text-center" style="margin-top: 2%;">
    							    <h2 class="text-warning">
    								    <strong id="showResvered">
    								    <?php 
    								        if(isset($_SESSION['er'])){
                                                echo 'Select Plan & Person No.';
                                                unset($_SESSION['er']);
                                            }
                                         ?>
                                        </strong>
    							    </h2>
    						    </div>
							</div>
						</div>
							<div style="padding:5%;"></div>
				</div>
			</div>

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4 arrow-right">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							8574572362, &nbsp;
							  
						</p>
					</div>
				</div>
				<div class="col-md-4 arrow-right">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							maniy2104@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							Mainstreet Banquet Service,   Mantripukhri , Imphal
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h3> </h3>
					<p>
					   
					<span style="padding:8px">   </span>
					</p>
					<ul style="padding:10px">
						<li style="color:white"> Restaurant </li>
						<li style="color:white"> Banquet </li>
						<li style="color:white"> Marraige Hall Booking </li>
						<li style="color:white"> Architect & Home Design </li>

				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Mainstreet Banquet Service, Mantripukhri, Imphal </p>
					<p class="lead"><a href="tel:8469000683">8574572362,</a> &nbsp;<a href="tel:8128141047">  </a></p>
					<p><a href="mailto:maniy2104@gmail.com"> maniy2104@gmail.com</a></p>
				</div>
				<div class="col-lg-4 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Banquet Timing :</span> 5:00PM to 2:00AM</p>
					<p><span class="text-color">Restaurant (Takeaway) : </span> 10:30AM - 3:30PM </p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						© Manish Yadav
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->


	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
