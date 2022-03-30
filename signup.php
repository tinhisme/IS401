<?php
require "header.php";
?>
<!doctype html>
<html>

<head>
	<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
	<h1 class="w3ls">Signup Form</h1>
	<?php
	if (isset($_GET['error'])) {
		echo $_GET['error'];
	}
	?>
			 <form action="process_signup.php" method="post">
				<div class="form-control w3layouts">
					<input type="text" id="firstname" name="name" placeholder="Name" title="Please enter your First Name" required="">
				</div>

				<div class="form-control w3layouts">
					<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
				</div>

				<div class="form-control agileinfo">
					<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
				</div>
				<!-- <input type="submit" class="register" value="Register"> -->
				<button>Dang Ki</button>
			</form> 
			
	<p class="copyright w3l">© 2017 Official Signup Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>

</html>