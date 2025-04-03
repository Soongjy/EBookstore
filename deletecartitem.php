<?php
	include("session.php");
	include("conn.php");
	//$_GET[‘id’] — Get the integer value from id parameter in URL.
	//intval() will returns the integer value of a variable
	$id = intval($_GET['id']);
	$result = mysqli_query($con,"DELETE FROM cart WHERE cartid=$id");
	mysqli_close($con); //close database connection
	header('Location: mycart.php'); //redirect the page to view.php page
?>