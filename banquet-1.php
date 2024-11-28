<?php
		session_start();
		$_SESSION['menu'] = $_POST['menu'];
		$_SESSION['no'] = $_POST['b-no'];
		if(isset($_SESSION['menu']) && isset($_SESSION['no'])){}
		else{
		       $_SESSION['er'] = 1;
			header("location:banquet.php");
		}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <link rel="shortcut icon" href="images/favicon-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
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
		<link rel="stylesheet" href="css/c-items.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
   

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


	<div style="padding:70px;">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="content-wrap-1">
			    <a href="banquet.php"><i class="fa fa-shopping-cart icon1" style="color: #ff006f; border: 2px solid #ff006f"></i></a>
					<a href="banquet-1.php"><i class="fa fa-calendar-alt icon1" style="color: black; border: 2px solid black"></i></a>
			    <a href="banquet-2.php"><i class="fas fa-user-circle icon1" style="color: black; border: 2px solid black"></i></a>

    	</div>
		</div>
		</div>
	</div>

<?php
	require 'db.php';


	$exec = mysqli_query($con,"select * from banquet_plans order by price");

?>

  <!-- Products Section -->
    <section class="second-sect">
        <div class="main-section-categ">
            <div class="main-section-container">
                <div class="heading-title text-center">
                    <h1 style="margin-bottom:0px; font-size: 32px; color: #ff006f">Banquet Designs & Plans</h1>
										<p>Select Banquet Design & Plan as per your needs.</p>
				</div>
				
                <div class="products wow fadeInRight">
                    <?php
					    while($r = mysqli_fetch_array($exec)){
				    ?>
		                    <div class="item" style="border-radius:10px; border:1px solid #ff006f;">
		                        <div class="imgBx">
		                            <img style="max-width: 100%; max-height: 100%;" src="<?php echo $r['img']; ?>" />
		                        </div>
		                        <div class="cntBx">
		                            <div class="item-title" style="color : #ff006f;"><?php echo $r['plan_name']; ?></div>
		                            <div class="description">
		                                <p> <?php echo $r['feature_list']; ?> </p>
		                            </div>
																<div class=""  style=" font-weight: bold">Price : Rs. <?php echo number_format($r['price']); ?></div>
																<div class="padding-top:15px">
		                            	                                <a class="btn btn-lg btn-circle btn-outline-new-white" style="font-size:14px; padding:10px; border-radius:8px;" href="banquet-2.php?mbid=<?php echo $r['mbid']; ?>">Book Now</a>
																</div>
																<div class="" style="padding:20px">
																</div>
		                          </div>
		                    </div>
                        <?php  } ?>
                </div>
            </div>
					</div>
    </section>


		<div style="padding:50px;" >
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
							Mainstreet Banquet Service, Mantripukri, Imphal.
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
