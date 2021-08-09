<?php
	include("header.php");
	include('config.php');
?>
<html>
	<head>
		<title>Loginpage</title>
		<link rel="stylesheet" href="css.css"/>											<!--External CSS-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<style>
		body {
			color: white;
			
		}
		.a{
			color: black;
			
		}
		</style>
	</head>
	
	<body>
		<div class="container-fluid">
			<div class="row">
				<br><br><br><br><br><br><br><br><br><br><br>
				<div class="col-sm-1">
				</div>
				<div class="col-sm-10 data">
					<a href="btnApproved.php">Approved Applications</a><br>
					<a href="btnDisapproved.php">Disapproved Applications</a><br>
					<a href="staff_action.php">Action Required</a>
					<br><br><br>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</body>
</html>

