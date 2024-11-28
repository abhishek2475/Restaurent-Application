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
    <!-- Login CSS -->
    <link rel="stylesheet" href="login.css">

     

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar" styles="position:absolute;top:0;">
<div class="signInHeader">
                    <h1 class="Titleh1">Sign-in For Mainstreet Banquet Services </h1>
                    </div>
			
		</nav>
	</header>



    
    <!-- Start For Login page -->



    <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button><br>
        <a href="signup.php" class="signupDirect">New user?Click here to sign up?</a>
    </form>
</div>




<!-- Php Code For signup -->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // In a real-world scenario, you should perform proper validation and authentication here
    // For this example, let's assume a simple check for a specific username and password
    $validUsername = "manish@gmail.com";
    $validPassword = "1234";

    if ($username == $validUsername && $password == $validPassword) {
        // Authentication successful, redirect to a welcome page
        header("Location: index.php");
        exit;
    } else {
        // Authentication failed, display an error message
        $error = "Invalid username or password";
    }
}
?>
<div>
    <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
</div>


    <!-- End For Login page -->

	<!-- End header -->
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