<?php
include("conn.php");

$sql="INSERT INTO memberorder (memberid, cartid, amount) 
VALUES ('$_POST[member_id]','$_POST[cart_id]','$_POST[totalamount]')";

if (!mysqli_query($con,$sql)){
	die('Error: ' . mysqli_error($con));
}
else {
	echo '<script>alert("Successfull Payment");
    window.location.href= "deletecart.php?memberid='.$_POST["member_id"].'";
	</script>';
}

mysqli_close($con);
?>