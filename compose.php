<?php
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
			.date{
				color:black;
			}
			h1{
				text-align:center;
			}
			.right{
				text-align:right;
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
				<h1>
					<br>Applicaton for Leave<br><br>
				</h1>
				<h4>
				</h4>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<br><br>
					<h4>
					<p class="right">
						<?php
							echo "Date : " . date("l d/m/Y") . "<br>";
						?>
					</p>
					<br>
					To,
					<br>
					The HOD,<br>
					CSE Department,<br>
					SKN SINHGAD COLLEGE OF <br>
					ENGINEERING, KORTI, <br>
					PANDHARPUR - 413304<br>
					<br><br>
					Respected Sir,<br><br>
					<p>I am <?php echo "" . $_SESSION["Name"];?> studying in <?php echo "" . $_SESSION["Year"];?> - <?php echo "" . $_SESSION["Dept"];?> herby state that I couldn't attend the college
					<br><br>from <input class="date" type="date" name="from"> to <input class="date" type="date" name="to"> for the below mentioned reason(s)<br><br><textarea class="date" placeholder="Enter reason here" name="reason" style="height:100px;width:100%"></textarea>
					<br><br>I will highly obliged, if you accept my leave of absence. I assure you that I will complete the portions covered during my absence.
					<br><br>
					Thank you.</p>
					<br><br><br><br>
					<p class="right">Yours faithfully,
					<br><br><?php echo "" . $_SESSION["Name"];?>
					</p>
					</h4>
					<br><br>
					<input type="submit" name="Submit" class="btn btn-primary btn-lg" value="Apply"/>
				</form>
			</div>
			<div class="col-3-sm">
			</div>
		</div>
	</div>	
</body>
</html>
<?php 
		//echo " ".$_SESSION["Name"]." ".$_SESSION["Dept"]." ".$_SESSION["Year"]." ".$_SESSION["Mail"]." ".$_SESSION["staff_mail"]." ".$apply_date;	

	function test_input($data) 
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if(isset($_POST['Submit']))	
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			$apply_date="";
			$from_date="";
			$to_date="";
			$reason="";

			$apply_date=date("Y-m-d");
			$from_date=test_input($_POST['from']);
			$to_date=test_input($_POST['to']);
			$reason=test_input($_POST['reason']);

			$_SESSION["apply_date"] = "$apply_date";
			$_SESSION["from_date"] = "$from_date";
			$_SESSION["to_date"] = "$to_date";
			$_SESSION["reason"] = "$reason";
			
			echo '<script type="text/javascript">alert("Submitted...")</script>';
			echo"<script>location.href='apply_page.php'</script>";
		}
	}

	

?>