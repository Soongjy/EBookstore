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
		border:3px solid green;
	}
	
	.block {
		display:inline-block;
		border:3px solid black;
		width:300px;
		height:300px;
		text-align:center;
		margin:80px
	}
	
	#desc {
		height:30px;
		width:100%;
		font-size:24px;
		padding-left:20px;
		margin-bottom:50px;
		text-align:left;
	}
	
	#center {
		text-align:center;
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

<div id="title">View sales</div>

<div class="wrap">
	<div id="center">
		<div class="block">
			<img src="image/dollar icon.jpg" alt="View sales" style="width:200px;height:200px">
			<h2>Total sales:
			<?php
				include("conn.php");
				$result = mysqli_query($con,"SELECT * FROM memberorder");
				
				$sales = 0;
				while($row=mysqli_fetch_array($result)) {
					$s1 = $row['amount'];
					$sales = $sales + $s1;
				}
				echo $sales;
				mysqli_close($con);
			?>
			</h2>
		</div>
		<div class="block">
			<img src="image/revenue icon.png" alt="Revenue" style="width:200px;height:200px">
			<h2>Revenue:
			<?php
				include("conn.php");
				$result = mysqli_query($con,"SELECT * FROM memberorder");
				
				$sales = 0;
				while($row=mysqli_fetch_array($result)) {
					$s1 = $row['amount'];
					$sales = $sales + $s1;
				}
				$revenue = $sales * 0.2;
				echo $revenue;
				mysqli_close($con);
			?>
			</h2>
		</div>
	</div>
</div>
</body>

</html>