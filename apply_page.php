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
					<br><br>from <?php echo "" . $_SESSION["from_date"];?> to <?php echo "" . $_SESSION["to_date"];?> for the below mentioned reason(s)<br><br><?php echo "" . $_SESSION["reason"];?>
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
function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
if(isset($_POST['Submit']))	
{
	/*
	// the message
	$msg = "First line of text\nSecond line of text";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	mail("gaurangpkarve@gmail.com","My subject",$msg);
	*/
	
	
	
	/*	
	$recipient="gaurangpkarve@gmail.com"; //Enter your mail address
	$subject="Contact from Website"; //Subject
	$sender="Gaurang Karve";
	$senderEmail="mangeshkharat7000@gmail.com";
	$message="Fuck U";
	$mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
	mail($recipient, $subject, $mailBody);
	sleep(1);*/
	/*
	$to = "gaurangpkarve@gmail.com";
	$subject = "My subject";
	$txt = "Hello world!";
	$headers = "From: gaurangpkarve@gmail.com" . "\r\n" .
	"CC: mangeshkharat7000@gmail.com";
	mail($to,$subject,$txt,$headers);
	*/
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		include"config.php";

		$sql="INSERT INTO `applied`(`apply_date`, `stud_name`, `stud_year`, `stud_dept`, `from_date`, `to_date`, `reason`, `stud_mail`, `staff_mail`) VALUES ('{$_SESSION['apply_date']}','{$_SESSION['Name']}','{$_SESSION['Year']}','{$_SESSION['Dept']}','{$_SESSION['from_date']}','{$_SESSION['to_date']}','{$_SESSION['reason']}','{$_SESSION['Mail']}','{$_SESSION['staff_mail']}');";
		
		//echo '<script>alert("Application Submited")</script>';
		
		if ($conn->query($sql) === TRUE) 
		{
			if(isset($_POST['Submit']))		// code for check server side validation
			{
				echo '<script>alert("Application Submited")</script>';
				echo"<script>location.href='login-stud.php'</script>";
				// remove all session variables
				session_unset(); 

				// destroy the session 
				session_destroy(); 

				exit;
			}
		}
		else
		{
			echo "Error: " . $sql . "<br>" . $conn->error."<br>";
			echo '<script>alert("Application Not Submited")</script>';
		}
		$conn->close();
		
	}
	
	
}	
?>