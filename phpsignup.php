<?php session_start();
function test_input($data) 
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$name="";
		$email="";
		$pass="";
		$mobile="";
		$gender="";
		
		$name=test_input($_POST['name']);
		$email=test_input($_POST['email']);
		$pass=test_input($_POST['pass']);
		$mobile=test_input($_POST['mobno']);
		$gender=test_input($_POST['gender']);
		
	if(!empty($name) && !empty($email) && !empty($pass))
	{
		include"config.php";

		$sql="INSERT INTO `tribe`.`signup`(`name`, `email`, `pass`, `gender`, `mobno`) VALUES ('$name','$email','$pass','$gender','$mobile');";
			if ($conn->query($sql) === TRUE) 
			{
				if(isset($_POST['Submit']))		// code for check server side validation
				{
					if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0)
					{  
						$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
						echo '<script>alert("Data Not Submited")</script>';
					}
					else
					{// Captcha verification is Correct. Final Code Execute here!		
						$msg="<span style='color:green'>The Validation code has been matched.</span>";		
						echo '<script>alert("Data Submited")</script>';
						echo"<script>location.href='loginpage.php'</script>";
						exit;
					}
				}
			}
			else
			{
				echo "Error: " . $sql . "<br>" . $conn->error."<br>";
				echo '<script>alert("Data Not Submited")</script>';
			}
	$conn->close();
	}
	}	
?>