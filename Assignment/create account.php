<?php
include("conn.php");

$sql="INSERT INTO user (member_name, gender, email_address, password, phone_number, address) 
VALUES ('$_POST[name]','$_POST[gender]','$_POST[email]','$_POST[password]','$_POST[phone_number]','$_POST[address]')";

if (!mysqli_query($con,$sql)){
	die('Error: ' . mysqli_error($con));
}
else {
	echo '<script>alert("Sign up Successfully");
	window.location.href= "Sign in.php";
	</script>';
}

mysqli_close($con);
?>