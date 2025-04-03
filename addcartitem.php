<?php
include("conn.php");

$amount = "$_POST[quantity]";
$p = "$_POST[price]";
$ptotal = number_format($amount) * number_format($p);

$sql="INSERT INTO cart (memberid, bookid, cquantity, totalprice) 
VALUES ('$_POST[member_id]','$_POST[book_id]','$_POST[quantity]','$ptotal')";

if (!mysqli_query($con,$sql)){
	die('Error: ' . mysqli_error($con));
}
else {
	echo '<script>alert("Item Added to Cart Successfully");
	window.location.href= "homepage1.php";
	</script>';
}

mysqli_close($con);
?>