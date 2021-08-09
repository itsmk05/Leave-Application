<?php
	include("header.php");
	include('config.php');
	$id=0;
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
				<div class="col-sm-10 data" style="color: white;">
					<?php
						include("config.php");
						$sql = "SELECT `apply_date`, `stud_name`, `stud_year`, `stud_dept`, `from_date`, `to_date`, `reason`, `id` FROM `applied` WHERE `stat`=0";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) 
						{
							$row = $result->fetch_assoc();
							echo "
								<form method='POST'>
									<table align='center' border='5' cellpadding='50' cellspacing='10' width='100%'>
										<tr>
											<th>ID</th>
											<td>".$row["id"]."</td>
										</tr>
										<tr>
											<th>Application Date</th>
											<td>".$row["apply_date"]. "</td>
										</tr>
										<tr>
											<th>Student Name</th>
											<td>".$row["stud_name"]. "</td>
										</tr>
										<tr>
											<th>Year</th>
											<td>".$row["stud_year"]."</td>
										</tr>
										<tr>
											<th>Department</th>
											<td>".$row["stud_dept"]."</td>
										</tr>
										<tr>
											<th>From Date</th>
											<td>".$row["from_date"]."</td>
										</tr>
										<tr>
											<th>To Date</th>
											<td>".$row["to_date"]."</td>
										</tr>
										<tr>
											<th>Reason</th>
											<td>".$row["reason"]."</td> 
										</tr>
										<tr>
											<td><input type='submit' style ='font-size:18px' class='btn btn-success' name='approve' value='Approve'/></td>
							";
							$id = $row["id"];
							include('config.php');
							if(isset($_POST['approve']))
							{
								$sql1 ="UPDATE `applied` SET `stat`=1 WHERE `id`='$id'";					
								$result1 = $conn->query($sql1);							
								if ($result1->num_rows > 0)						// output data of each row
								{
									//echo "<script type='text/javascript'>alert('Approved')</script>";
									echo"<script>location.href='staff_action.php'</script>";
									exit;
								}
								else 
								{
									//echo "<script type='text/javascript'>alert('Not Done')</script>";
									echo"<script>location.href='staff_action.php'</script>";
									exit;
								}
							}
							echo "				
											<td><input type='submit' style ='font-size:18px' class='btn btn-danger' name='disapprove' value='Dispprove'/></td>
							";
							if(isset($_POST['disapprove']))
							{
								$sql1 ="UPDATE `applied` SET `stat`=2 WHERE `id`='$id'";					
								$result1 = $conn->query($sql1);							
								if ($result1->num_rows > 0)						// output data of each row
								{									
									//echo "<script type='text/javascript'>alert('Approved')</script>";
									echo"<script>location.href='staff_action.php'</script>";
									exit;
								}
								else 
								{
									//echo "<script type='text/javascript'>alert('Not Done')</script>";
									echo"<script>location.href='staff_action.php'</script>";
									exit;
								}
							}
							echo"
										</tr>
									</table>
								</form>
							";
						}
						else
						{
							echo "<script type='text/javascript'>alert('No record found')</script>";
							echo"<script>location.href='staff_approv.php'</script>";
						}
						$conn->close();
					?>
					<br><br><br>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
		</div>
	</body>
</html>
