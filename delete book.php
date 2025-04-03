<?php
	include("conn.php");

	$id = intval($_GET['id']);
	$sql = "DELETE FROM book WHERE book_ID=$id;";
	
	if (mysqli_query($con, $sql)) {
			mysqli_close($con);
			echo "<script>alert('Data deleted successfully!'); 
			window.location.href='Admin view book.php';</script>";
	} else {
			echo "<script>alert('Failed to delete')</script>";
	}
?>