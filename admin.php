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
		body {
			color: white;
		}
		input[type=text] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid red;
		  border-radius: 4px;
		}
		
		input[type=password] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 2px solid red;
		  border-radius: 4px;
		}
		</style>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row">
		<br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-sm-1"></div>
			
			<div class="col-sm-10">
			
				<h2>Login for Admin<br><br></h2>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
					<div class="form-group">
						<input type="text" name="admin_id" placeholder="ID" class="form-control" required/>
					</div>
					<div class="form-group">
						<input type="password" name="admin_pass" placeholder="Password" class="form-control" required/><br>
					</div>
						<br><input type="submit" class="btn btn-primary btn-lg" />
				</form>
			
			</div>
			
			<div class="col-sm-1"></div>
		</div>
	</div>
	</body>
</html>


<?php	
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	$email="";
	$pass="";
	$result="";
	
	
	$email=test_input($_POST["admin_id"]);
	$pass=test_input($_POST["admin_pass"]);
	
	
	if(!empty($email) && !empty($pass))
	{
		include("config.php");
		$sql ="SELECT * FROM `admin` WHERE admin_id='$email' and admin_pass ='$pass' ";
						
		$result = $conn->query($sql);
		
	/*	if($email=="admin@gmail.com" && $pass=="123456789")
		{
			echo"<script>location.href='admin.php'</script>";
			exit;
		}
	*/	
		if ($result->num_rows > 0)						// output data of each row
		{
			while($row = $result->fetch_assoc()) 
			{
				echo '<script type="text/javascript">alert("Login Done")</script>';
				echo"<script>location.href='admin_page.php'</script>";
				exit;
			}
		}
		else 
		{
			echo '<script type="text/javascript">alert("Login not Done")</script>';
		}
		$conn->close();
	}
}
	
function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>  