<?php
session_start();
if (!isset($_SESSION['mySession']))
{
  echo "<script>alert('Please login!'); window.location.href='Sign in.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	.flex-container {
		background-color:powderblue;
		display:flex;
		margin-bottom:10px;
		border:3px solid black;
	}
	
	.flex-container > div {
		height:30px;
		width: 20%;
		border-right:3px solid black;
		text-align: center;
		font-size:24px;
	}
	
	#logo {
		width:400px;
		height:90px;
		margin-bottom:10px;
		float:left;
	}
	
	#searchbox {
		height:40px;
		padding:30px;
	}
	
	#title {
		height:50px;
		line-height:50px;
		width:100%;
		background-color:silver;
		font-size:24px;
		padding-left:20px;
		margin-bottom:20px;
		font-weight:bold;
	}
	
	.wrap {
		width:1200px;
		margin:0 auto;
		border:1px solid black;
	}
	
	input:focus:invalid {
		background-color: orange;
	}
	
	input[type=number],input[type=text] {
		width:100%; height:35px;
		margin-bottom:25px;
	}
	
	#select {
		width:100%; height:35px;
		margin-bottom:25px;
	}
	
	#submit_button {
		width:100%; height:35px;
		margin-bottom:25px;
	}
	
	textarea {
		width:100%;height:70px;
		margin-bottom:10px;
	}
	
	.center {
		width:800px;
		margin:0 auto;
	}
</style>
</head>


<body>
<div id="logo">
	<img src="image/book store.png" alt="Book store logo" style="height:80px;width:80px;float:left">
	<h1>SOH Book Store</h1>
</div>

<div id="searchbox">
	<input type="text" name="search box" placeholder="Enter to search" style="height:25px;width:300px">\
	<input type="submit" name="search" value="Search">
</div>

<div class="flex-container"> <!--top selections--> 
	<div><a href="Admin dashboard.php">Dashboard</a></div>
	<div><a href="Admin view book.php">View book</a></div>
	<div><a href="Admin view sales.php">View sales</a></div>
	<div><a href="Admin add books.php">Add book</a></div>
	<div><a href="Admin view user.php">View user</a></div>
</div>

<div id="title">Add book</div>

<div class="wrap">
	<h3 style="font-weight:bold;margin:30px">Add book form</h3>
	<div class="center">
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<table width="800px" border="0" cellpadding="5" cellspacing="1">
				<tr>
					<td>Book Name:</td>
				</tr>
				<tr>
					<td><input type="text" name="book_name" required="required" placeholder="Enter book name here"></td>
				</tr>
				<tr>
					<td>Author:</td>
				</tr>
				<tr>
					<td><input type="text" name="author" required="required" placeholder="Enter author here"></td>
				</tr>
				<tr>
					<td>Category:</td>
				</tr>
				<tr>
					<td>
					<select id="select" name="category" required="required">
						<option value="">Please select</option>
						<option value="Adventure">Adventure</option>
						<option value="Classic">Classic</option>
						<option value="Comic">Comic</option>
						<option value="Mystery">Mystery</option>
						<option value="Fantasy">Fantasy</option>
						<option value="Horror">Horror</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>Price:</td>
				</tr>
				<tr>
					<td><input type="number" name="price" required="required" placeholder="Enter the book price" min="1"></td>
				</tr>
				<tr>
					<td>Quantity:</td>
				</tr>
				<tr>
					<td><input type="number" name="quantity" required="required" placeholder="Enter the book quantity" min="1"></td>
				</tr>
				<tr>
					<td>Describtion:</td>
				</tr>
				<tr>
					<td><textarea required="required" name="describtion" placeholder="Enter the book describtion"></textarea></td>
				</tr>
				<tr>
					<td>Book image:</td>
				</tr>
				<tr>
					<td><input type="file" name="book_image"></td>
				</tr>
				<tr>
					<td><input type="submit" id="submit_button" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>

</html>