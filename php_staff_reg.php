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
		$dept="";
		$year="";
		
		$name=test_input($_POST['name']);
		$email=test_input($_POST['email']);
		$pass=test_input($_POST['pass']);
		$mobile=test_input($_POST['mobno']);
		$dept=test_input($_POST['dept']);
		$year=test_input($_POST['year']);
		
	if(!empty($name) && !empty($email) && !empty($pass))
	{
		include"config.php";

		$sql="INSERT INTO `staff`(`staff_name`, `staff_mail`, `staff_pass`, `staff_mobno`, `staff_dept`, `staff_year`) VALUES ('$name','$email','$pass','$mobile','$dept','$year');";
			if ($conn->query($sql) === TRUE) 
			{
				if(isset($_POST['Submit']))		// code for check server side validation
				{
					echo '<script>alert("Data Submited")</script>';
					echo"<script>location.href='login-staff.php'</script>";
					exit;
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