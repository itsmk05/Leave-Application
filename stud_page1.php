<?php
// Start the session
session_start();
?>
<?php
	include("header.php");
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
			.text{
				color:white;
			}
			h1{
				text-align:center;
			}
		</style>
	</head>
	
<body class="text" style="background-color:#222;">
	<div class="container">
		<br><br><br><br><br><br><br><br><br><br>
		
		<div class="row">
			<div class="col-4-sm">
			</div>
			<div class="col-5-sm">
				<h3>
					<?php
					echo "&nbsp &nbsp &nbsp Hello... " . $_SESSION["Name"] . "<br>";
					?>
				</h3>
				<h1>
					Points to remember...<br><br>
				</h1>
				<h4>
					<ol>
						<li>Read all instructions carefully.<br><br></li>
						<li>Fill all details carefully.<br><br></li>
						<li>The confirmation will be sent on registered email id.<br><br></li>
						<li>Please enter valid reason.<br><br></li>
						<li>Leave will be approved only by concern staff.<br><br></li>
						<li>If leave is not approved then you need to attend the lectures as per schedule.<br><br></li>
					</ol>
				</h4>
				<form action="compose.php" method="POST">
					<input type="submit" class="btn btn-primary btn-lg" value="Click Here To Apply"/>
				</form>
			</div>
			<div class="col-3-sm">
			</div>
		</div>
	</div>	
</body>
</html>