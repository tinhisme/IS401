<?php
	session_start();
	require 'admin/connect/connect.php';
	require "header.php";

	if(isset($_COOKIE['remember'])){
		$token = $_COOKIE['remember'];
		$sql = "select * from customers where token = '$token'";
		$result = sqlsrv_query($connect, $sql, array(), array( "Scrollable" => 'static' ));
    	$count = sqlsrv_num_rows($result);
		if($count == 1){
			$each = sqlsrv_fetch_array($result);
			$_SESSION['id'] = $each['customer_id'];
			$_SESSION['name'] = $each['customer_name'];
		}
	}
	if(isset($_SESSION['id'])){
		header('location:user.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	 <!-- Font Awesome -->
	 <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
	<title>Login</title>
</head>
<body>
	<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="text-center mb-5 text-dark">Made with bootstrap</div>
        <div class="card my-5">
          <form class="card-body cardbody-color p-lg-5" action="process_signin.php" method="POST">
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" name="email" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="#" class="text-dark fw-bold"> Create an
                Account</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

	


	<!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
</body>
</html>