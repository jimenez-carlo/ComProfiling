<?php
session_start();
if(!empty($_SESSION['id'])){
	header("location: dashboard.php");
}
$con=mysqli_connect("localhost","root","","db_record");
$selectUser = mysqli_query($con,"SELECT * FROM tbluser");
if (mysqli_num_rows($selectUser) < 1) {
	$insertAccount = mysqli_query($con,"INSERT INTO tbluser SET username = 'admin', password = 'admin'");
	$msg = "<div class='alert alert-success'>Default User Account <br> Username: admin<br> Password: admin</div>";
	header("Location: login.php?msg=$msg");
	mysqli_query($con,$query);
}

?>

<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!--===============================================================================================-->	
	<link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />
	<!--===============================================================================================-->	
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="fontawe/css/all.css" rel="stylesheet">
	<!--===============================================================================================-->	
	<link rel="icon" type="images/png" href="web/images/favicon.ico"/>
	<!--===============================================================================================-->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>
	<div class="main-bg" style="background: url(images/perezBrgyhall.jpg);background-position: center; background-position: no-repeat; background-size: cover;">
		<!-- title -->
		<h1 style=" font-family: Rockwell; color:#ffffff">Barangay Herrero - Perez </h1>
		<h1 style=" font-family: Rockwell; color:#ffffff; margin-top:-45px;">Community Profiling System </h1>

		<div class="sub-main-w3" >
			<div class="bg-content-w3pvt" style="background: -webkit-linear-gradient(top, #ff69b4, #ffffff);background: -o-linear-gradient(top, #006446, #3b4f26);background: -moz-linear-gradient(top, #006446, #3b4f26);background: linear-gradient(top, #006446, #3b4f26);">

				<div class="top-content-style" style="background-color:#ffffff; background-image: url('images/perezlogo.png'); background-repeat: no-repeat;background-position: 83px 3px; background-size:57% 80%;padding: 30% 20% 30% 20%;     ">
				</div>

				<form  action="login_validation.php" method="POST" style="background: -webkit-linear-gradient(top, #ff69b4, #ffffff);background: -o-linear-gradient(top, #57e86b, #3b4f26);background: -moz-linear-gradient(top, #ff69b4, #3b4f26);background: linear-gradient(top, #ff69b4, #ffffff);">
					<p class="legend" style="color:#ffffff">LOGIN HERE<span class="fas fa-hand-point-down"></span></p>
					<div class="input">
						<input type="text" placeholder="Username" id="username" name="username" autofocus required />
						<span style=" color: #000000;" class="fa fa-user"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" id="password" required />
						<span style=" color: #000000;" class="fa fa-lock"></span>
					</div>
					<a href="#"  data-toggle="modal" data-target="#forgot-password">Forgot Password?</a>
					<button type="submit" class="btn submit" name="btnLogin" id="btnLogin" style=" background-color: #ff69b4;">
						<span style=" color: #000000;" class="fas fa-sign-in-alt"></span>
					</button>

				</form>
				<a href="#" class="bottom-text-w3ls"><?php
				if (isset($_GET["msg"])) {
					$msg = $_GET["msg"];
					echo "$msg";
				}
				?>
			</a>
		</div>
	</div>

	<div class="copyright" >
		<h2 style="height:50px;">&copy; 2021 Community Profiling System. All rights reserved.
<!-- 				<a href="http://w3layouts.com" target="_blank">W3layouts</a>
-->			</h2>
</div>
<!-- //copyright -->
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="forgot-password">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Forgot Password?</h5>
			</div>
			<div class="modal-body">
				<input type="text" id="email" class="form-control" placeholder="Enter Email Here!">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btn_send_email">Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	document.getElementById("btn_send_email").addEventListener("click", email_request);
	function email_request() {
		var	email = document.getElementById("email").value;
		if (!email) {
			alert("Email Must Not Be Empty!");
			return false;
		}
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				if ((this.response) == 1) {
					alert("Email Sent!");
					// email_send(email);

				}else{
					alert("Email Not Registered!");
				}
			}

		};
		xhttp.open("GET", "send_email.php?email="+email, true);
		xhttp.send();
	}

</script>
</body>

</html>

