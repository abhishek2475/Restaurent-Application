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
    <link rel="shortcut icon" href="images/favicon-icon.png" type="image/x-icon">
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
						<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="takeaway.php">Takeaway</a></li>
						<li class="nav-item"><a class="nav-link" href="banquet.php">Banquet</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->


	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-left">
				<img src="images/s1.png" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Mainstreet Banquet Service</strong></h1>
							<p class="m-b-40">Premium  Banquet & Catering Services  <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#services">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-left">
				<img src="images/blog-img-04.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Mainstreet Banquet Service</strong></h1>
							<p class="m-b-40">Premium Restaurant & Banquet Services.  <br>
							Book your order now !</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a></p>
						</div>
					</div>
				</div>
			</li>
			
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Mainstreet Banquet and Catering Service</span></h1>
						<p>  Mainstreet Banquet is perfect location for all your functions. Now book your banquet online and celebrate the function offline! Mainstreet Catering is a bench mark for Taste & Hygiene. We offer best quality food with premium services. Trending Takeaway service is also available here.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#services">Book a Order Now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" style="padding-left : 130px">
					<img src="images/p2.jpg" alt="" class="img-fluid" height="82%" width="82%">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->



	<!-- Start Menu -->
	<div class="menu-box" id="menu">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Menu</h2>
						<p>Have a look at our special and delicious food dishes.</p>
					</div>
				</div>
			</div>

			<div class="row inner-menu-box">


					        	</div>
					        	<div class="row">
					        	    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 7");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 8");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
							    <?php 
								    require 'db.php';
								
							        $ex = mysqli_query($con,"select * from category where cid = 20");
							        while($r = mysqli_fetch_array($ex)){
								?>
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<a href="takeaway.php">
									    <div class="gallery-single fix">
										<img src="<?php echo $r['img'];  ?>" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4><?php echo $r['name'];  ?></h4>
											<h5>
											<?php 
											    $cid = $r['cid'];
											    $q1 = mysqli_query($con,"select * from menu where type= $cid"); 
						                        while($r1 = mysqli_fetch_array($q1)){
						                            echo $r1['name']."<br>";          
						                        }
											?></h5>
										</div>
									</div>
									</a>
								</div>
							    <?php 
							        }
							    ?>
					        	</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p>Food Dishes and Banquet Designs at a glance.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color:#ff006f"> <b><u>Food Dishes </b></u></h2>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-01.jpg">
							<img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-02.jpg">
							<img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="images/gallery-img-03.jpg">
							<img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 style="color:#ff006f"> <b><u>Banquet Designs </b></u></h2>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 10000.jpeg">
							<img class="img-fluid" style="height: 12%;" src="plan_image/Rs. 10000.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 8000.jpeg">
							<img class="img-fluid" style="height: 12%;" src="plan_image/Rs. 8000.jpeg" alt="Gallery Images">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4">
						<a class="lightbox" href="plan_image/Rs. 21000.jpeg">
							<img class="img-fluid" src="plan_image/Rs. 21000.jpeg" alt="Gallery Images">
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- End Gallery -->


	<!-- Start Services -->
	<div id="services">
		<div class="container-fluid p-5" style="background-color:#dcdcdc; border-top:3px solid #ff006f; border-bottom:3px solid #ff006f;">
			<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Services </h2>
						<h2 style="color : #ff006f">Takeaway Orders & Banquet Hall</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center" style="border-right:2px solid black">
					<div class="inner-column" style="text-align: center;">
						<p>Takeaway Orders Service is available at our restaurant. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="takeaway.php">Order Now</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center" >
					<div class="inner-column" style="text-align: center;">
						<p>Attractive Banquet Hall for all your ceremonies. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="banquet.php">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- End Services -->
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
					<p><span class="text-color"> Takeaway : </span> 10:30AM - 3:30PM </p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name"><a href="./index.php">&nbsp; &copy;Mainstreet Banquet and Catering Service</a> <br>    
					</div>
				</div>
			</div>
		</div>

	</footer>

	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

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
