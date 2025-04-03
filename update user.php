<?php
	include("conn.php");
	
	$sql = "UPDATE user SET 
	member_name='$_POST[name]', 
	phone_number='$_POST[phone_number]',
	gender='$_POST[gender]', 
	email_address='$_POST[email]', 
	address='$_POST[address]' 
	
	WHERE id=$_POST[member_ID];";
	
	if (mysqli_query($con, $sql)) {
		mysqli_close($con);
		header('Location: Admin view user.php');
	}
?>