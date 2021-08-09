<?php
	include("header.php");
?>
<html>
	<head>
		<title>SignUp</title>
		<link rel="stylesheet" href="css.css"/>											<!--External CSS-->
		
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
		<link rel="stylesheet" href="css\bootstrap.min.css"/>
		<script src="js\jquery.min.js"></script>
		<script src="js\bootstrap.min.js"></script>
		<link href="./css/style.css" rel="stylesheet">
		
		<style>
		body {
			color: white;
		}
		</style>
	</head>
	<body>
	<div class="container">
		<div class="row">
		<br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			<div class="col-sm-10 data">
				<h2>Register<br></h2>
				<br>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
					<div class="form-group">
						<input type="text" name="name" placeholder="Name" class="form-control" required />
					</div>
					<div class="form-group">
						<input type="email" name="email" placeholder="Email" class="form-control" required />
					</div>
					<div class="form-group">
						<input type="password" name="pass" placeholder="Password" class="form-control" required />
					</div>
					<div class="form-group">
						<input type="number" name="mobno" placeholder="Mobile no" class="form-control" required />
					</div>
					<div class="form-group">
						<select name="dept" placeholder="Department" class="form-control" required>
							<option value="dept">--Select Department--</option>
							<option value="CSE">Computer Science And Engineering</option>
							<option value="ENTC">Electronics And Telecommunication</option>
							<option value="Electrical">Electrical</option>
							<option value="Mech">Mechanical</option>
							<option value="Civil">Civil</option>
						</select>
					</div>
					<div class="form-group">
						<select name="year" placeholder="Year" class="form-control" required>
							<option value="year">--Select Year--</option>
							<option value="FE">First Year</option>
							<option value="SE">Second Year</option>
							<option value="TE">Third Year</option>
							<option value="BE">Fourth Year</option>
						</select>						
						<br>
					</div>
					<div>
					</div>
						<br><input name="Submit" onclick="return validate();" value="Submit" type="submit" class="btn btn-primary btn-lg" />
					</div>
				</form>	
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>
<?php
	include("php_staff_reg.php");
?>
