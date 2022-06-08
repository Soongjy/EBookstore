<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["book_image"]["name"]);
	
	if (move_uploaded_file($_FILES["book_image"]["tmp_name"], 
	$target_file)) 
	{

		$file_name = basename($_FILES["book_image"]["name"]);
		
		include("conn.php");

		$sql="INSERT INTO book (book_name, author, category, price, quantity, describtion, book_image) 
		VALUES 
		(\"$_POST[book_name]\",\"$_POST[author]\",\"$_POST[category]\",\"$_POST[price]\",\"$_POST[quantity]\",\"$_POST[describtion]\",\"$file_name\")";

		if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
			mysqli_close($con);
			echo '<script>alert("1 record added!");
			window.location.href = "Admin add books.php";
			</script>';
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
?>