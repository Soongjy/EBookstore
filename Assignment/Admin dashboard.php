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
	
	#title {
		height:50px;
		line-height:50px;
		width:100%;
		background-color:silver;
		font-size:24px;
		padding-left:20px;
		margin-bottom:20px;
		font-weight: bold;
	}
	
	#desc {
		height:30px;
		width:100%;
		font-size:24px;
		padding-left:20px;
		margin-bottom:50px;
	}
	
	.wrap {
		width:1000px;
		margin:0 auto;
	}
	
	#viewbook {
		float:left;
		width:300px;
		height:250px;
		margin:50px;
		border:3px solid black;
		text-align:center;
	}
	
	#viewsales {
		float:right;
		width:300px;
		height:250px;
		margin:50px;
		border:3px solid black;
		text-align:center;
	}
	
	#addbook {
		float:left;
		width:300px;
		height:250px;
		margin:50px;
		border:3px solid black;
		text-align:center;
	}
	
	#viewuser {
		float:right;
		width:300px;
		height:250px;
		margin:50px;
		border:3px solid black;
		text-align:center;
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
		display:inline-block;
	}
	
	#logout {
		height:50px;
		width:100px;
		display:inline-block;
		margin:20px;
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

<div id="logout">
<form action="logout.php" method="post">
	<input type="submit" name="logout" style="height:48px;width:98px" value="Log out">
</form>
</div>

<div class="flex-container"> <!--top selections--> 
	<div><a href="Admin dashboard.php">Dashboard</a></div>
	<div><a href="Admin view book.php">View book</a></div>
	<div><a href="Admin view sales.php">View sales</a></div>
	<div><a href="Admin add books.php">Add book</a></div>
	<div><a href="Admin view user.php">View user</a></div>
</div>

<div id="title">Admin dashboard</div>
<div id="desc">Admin Features</div>

<div class="wrap">
	<div id="viewbook">
		<img src="image/book icon.jpg" alt="View book" style="width:200px;height:200px">
		<form action="Admin view book.php" method="post">
		<input type="submit" value="View book" style="width:100%; height:45px">
		</form>
	</div>
	<div id="viewsales">
		<img src="image/sales icon.png" alt="View sales" style="width:200px;height:200px">
		<form action="Admin view sales.php" method="post">
		<input type="submit" value="View sales" style="width:100%; height:45px">
		</form>
	</div>
	<div id="addbook">
		<img src="image/add book icon.png" alt="Add book" style="width:200px;height:200px">
		<form action="Admin add books.php" method="post">
		<input type="submit" value="Add book" style="width:100%; height:45px">
		</form>
	</div>
	<div id="viewuser">
		<img src="image/view user icon.png" action="Admin view user.php" alt="View user" style="width:200px;height:200px">
		<form action="Admin view user.php" method="post">
		<input type="submit" value="View user" style="width:100%; height:45px">
		</form>
	</div>
</div>
</body>
</html>