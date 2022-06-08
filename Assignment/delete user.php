<?php
	include("conn.php");

	$id = intval($_GET['id']);
	$sql = "DELETE FROM user WHERE memberID=$id;";
	
	if (mysqli_query($con, $sql)) {
			mysqli_close($con);
			echo "<script>alert('Data deleted successfully!'); 
			window.location.href='Admin view user.php';</script>";
	} else {
			echo "<script>alert('Failed to delete')</script>";
	}
?>