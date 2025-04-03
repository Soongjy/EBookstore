<?php
	include("session.php");
	include("conn.php");
	//$_GET[‘id’] — Get the integer value from id parameter in URL.
	//intval() will returns the integer value of a variable
	$member_id = intval($_GET['memberid']);
	$result = mysqli_query($con,"SELECT * FROM cart INNER JOIN book on cart.bookid=book.book_ID where memberid='$member_id'");
		while($row = mysqli_fetch_array($result)){
			$bookid=$row["book_ID"];
			$cquantity=$row["cquantity"];
			$quantity = $row["quantity"];
			$quantity = $quantity-$cquantity;
			$sql = mysqli_query($con, "UPDATE book SET 
				quantity='$quantity'
				WHERE book_ID=$bookid;");}
	$result = mysqli_query($con,"DELETE FROM `cart` WHERE memberid=$member_id");

	mysqli_close($con); //close database connection
	header('Location: thankyoupage.php'); //redirect the page to view.php page
?>
