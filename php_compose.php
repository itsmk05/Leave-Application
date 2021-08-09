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
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$apply_date="";
		$from_date="";
		$to_date="";
		$reason="";

		$apply_date="date(YYYY/mm/dd)";
		$from_date=test_input($_POST['from']);
		$to_date=test_input($_POST['to']);
		$reason=test_input($_POST['reason']);
		
	if(!empty($name) && !empty($email) && !empty($pass))
	{
		include"config.php";

		$sql="INSERT INTO `applied`(`apply_date`, `stud_name`, `stud_year`, `stud_dept`, `from_date`, `to_date`, `reason`, `stud_mail`, `staff_mail`) VALUES ('$apply_date','{$_SESSION['Name']}','{$_SESSION['Year']}','{$_SESSION['Dept']}','$from_date','$to_date','$reason','{$_SESSION['Mail']}','{$_SESSION['staff_mail']}');";
			if ($conn->query($sql) === TRUE) 
			{
				if(isset($_POST['Submit']))		// code for check server side validation
				{
					echo '<script>alert("Application Submited")</script>';
					echo"<script>location.href='login-stud.php'</script>";
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
}	
?>