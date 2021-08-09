<?php
	include("header.php");
	include('config.php');
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
				<div class="col-sm-10 data">
					<?php
						include("config.php");
						$sql = "SELECT `apply_date`, `stud_name`, `stud_year`, `stud_dept`, `from_date`, `to_date`, `reason`, `id` FROM `applied` WHERE `stat`=1";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) 
						{
							echo "
								<table align='center' border='5' cellpadding='50' cellspacing='10' width='100%'>
									<tr>
										<th>ID</th>
										<th>Application Date</th>
										<th>Student Name</th>
										<th>Year</th>
										<th>Department</th>
										<th>From Date</th>
										<th>To Date</th>
										<th>Reason</th>
									</tr>";
							while($row = $result->fetch_assoc()) 
							{	
								echo "
									<tr>
										<form method='POST'>
											<td>".$row["id"]."</td>
											<td>".$row["apply_date"]. "</td>
											<td>".$row["stud_name"]. "</td>
											<td>".$row["stud_year"]."</td>
											<td>".$row["stud_dept"]."</td>
											<td>".$row["from_date"]."</td>
											<td>".$row["to_date"]."</td>
											<td>".$row["reason"]."</td> 
										</form>
									</tr>
								
								";
							}
							echo"</table>";
						}
						else 
						{
							echo "No record found.";
						}
						$conn->close();
					?>
					<br><br><br>
				</div>
			</div>
		</div>
	</body>
</html>

