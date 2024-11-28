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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="upi.css">
     

</head>

<body>
	<!-- Start header -->
		<!-- Start header -->
        <header class="top-navbar" styles="position:absolute;top:0;">
<div class="signInHeader">
                    <h1 class="Titleh1">Thank You For Payment </h1>
                    </div>
			
		</nav>
	</header>
<!-- Payment Page Design Starts Here -->
<div class="payment-container">
    <h2>Payment Details</h2>
    <form action="process_payment.php" method="post">
        <div class="form-group">
            <label for="phonenumber">Phone Number:</label>
            <input type="text" id="phonenumber" name="phonenumber" required>
        </div>
        <div class="form-group">
            <label for="upiid">UPI-ID:</label>
            <input type="text" id="upiid" name="upiid" placeholder="MM/YYYY" required>
        </div>
        
        <div class="form-group">
            <label for="coupon_code">Coupon Code:</label>
            <select id="coupon_code" name="coupon_code">
                <option value="">Select Coupon</option>
                <option value="DISCOUNT5">DISCOUNT5 - 5% off</option>
                <option value="FREE_SHIP">FREE_SHIP - Free Shipping</option>
                <option value="DIABETES">DIABETES FREE</option>
                <option value="VEG_ONLY">VEG ONLY</option>
            </select>
        </div>
        <div class="form-group">
            <label for="qrcode">QR Code :</label>
            <img src="qr.jpg" alt="qrcode" class="qrimg" width=100px height=100px >
        </div>
        <button type="submit">Pay Now</button>
        <br><br>
        <a href="index.php" class="upi">Return To Home</a>
    </form>
</div>

<!-- End Payment page Design -->


<!-- PHP Code  -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted payment details
    $cardNumber = $_POST["card_number"];
    $expiryDate = $_POST["expiry_date"];
    $cvv = $_POST["cvv"];
    $couponCode = $_POST["coupon_code"];

    // In a real-world scenario, you would integrate with a payment gateway API here
    // For this example, let's assume a successful payment
    $successMessage = "Payment successful!";

    // You should store the payment details securely in a database for record-keeping
    // and handle any additional order processing logic

    // Process the coupon code if provided
    $discount = 0;
    if ($couponCode === "DISCOUNT5") {
        // Apply a 5% discount
        $discount = 0.05;
    } elseif ($couponCode === "FREE_SHIP") {
        // Apply free shipping
        $successMessage .= " Free Shipping Applied!";
    }

    // You can use $discount to calculate the final payment amount
}
?>

<div>
    <?php if (isset($successMessage)) { ?>
        <p style="color: green;"><?php echo $successMessage; ?></p>
    <?php } ?>
</div>









    <!-- Footer Starts Here -->
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