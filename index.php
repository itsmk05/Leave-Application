<?php
	include("header.php");
?>

<html lang="en">
<head>
	<title>Home</title>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">			<!--Offline Bootstrap
	<link rel="stylesheet" href="css\bootstrap.min.css"/>
	<script src="js\jquery.min.js"></script>
	<script src="js\bootstrap.min.js"></script>-->
</head>
	
<body style="background-color:#222">
<div class="container">

	<br><br><br><br><br><br><br><br><br><br>
	
	<div style="max-width:2100px">
	
		<img class="mySlides" src="img/a1.jpg" style="width:100%">
		<img class="mySlides" src="img/a3.jpg" style="width:100%">
		<img class="mySlides" src="img/a4.jpg" style="width:100%">
		<img class="mySlides" src="img/a5.jpg" style="width:100%">
		<img class="mySlides" src="img/a6.jpg" style="width:100%">
		<img class="mySlides" src="img/a2.jpg" style="width:100%">
		<br>
	</div>
	
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		var i;
		var x = document.getElementsByClassName("myslides");
		for (i = 0; i < x.length; i++) {
		   x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
		x[myIndex-1].style.display = "block";  
		setTimeout(carousel, 3000); // Change image every 3 seconds
		}
	</script>

</div>
</body>
</html>