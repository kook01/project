<?php
	$conn= mysqli_connect("localhost","root","passw0rd.","productes") or die("Error: " . mysqli_error($con));
	mysqli_query($conn, "SET NAMES 'utf8' "); 
?>
