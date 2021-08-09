<html lang="en">
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap-->
	<link rel="stylesheet" href="css\bootstrap.min.css"/>
	<script src="js\jquery.min.js"></script>
	<script src="js\bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">		<!--Online Bootstrap-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
	
<body style="background-color:#222">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="index.php"><center><img src="img/logo.png" style="margin-left:200px; float:right;padding-right:;" alt="SKNSCOE"/></center></a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a title="Home" href="index.php">Home</a></li>
      <li class=""><a title="Admin" href="admin.php">Admin</a></li>
					
					<li class="dropdown"><a title="Staff" href="#" data-toggle="dropdown" class="dropdown-toggle">Staff <span class="caret"></span></a>
						<ul role="menu" class=" dropdown-menu">
							<li class=""><a title="Register" href="reg-staff.php">Register</a></li>
							<li class=""><a title="Login" href="login-staff.php">Login</a></li>
						</ul>
					</li>
					
					<li class="dropdown"><a title="Student" href="#" data-toggle="dropdown" class="dropdown-toggle">Student <span class="caret"></span></a>
						<ul role="menu" class=" dropdown-menu">
							<li class=""><a title="Register" href="reg-stud.php">Register</a></li>
							<li class=""><a title="Login" href="login-stud.php">Login</a></li>
						</ul>
					</li>
					
					<li class=""><a title="Contact Us" href="contact-us.php">Contact Us</a></li>
					</ul>
  </div>
</nav>
</body>
</html>