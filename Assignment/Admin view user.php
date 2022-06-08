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
	
	.parentbox {
		display: flex;
		flex-wrap: wrap;
	}

	.childbox {
		margin: 10px;
		height: 450px; width: 330px;
		background-color: #d9f9ff;
		border-radius: 10px;
		border: #d4d4d4 solid 2px;
		padding: 10px;
	}	

</style>
</head>


<body>
<?php include("conn.php");
$result = mysqli_query($con,"SELECT * FROM user");
?>
<div id="logo">
	<img src="image/book store.png" alt="Book store logo" style="height:80px;width:80px;float:left">
	<h1>SOH Book Store</h1>
</div>

<div id="searchbox">
	<form method="post">
		<input type="text" name="search box" placeholder="Enter to search" style="height:25px;width:300px">\
		<input type="submit" name="search" value="Search">
	</form>
</div>

<?php //search function php
	include("conn.php");

	$search_element = "";

	if(isset($_POST['search'])){
		$search_element = $_POST['search_box'];
	}

	$result=mysqli_query($con,"SELECT * FROM user WHERE member_name LIKE '%$search_element%'");
?>

<div class="flex-container"> <!--top selections--> 
	<div><a href="Admin dashboard.php">Dashboard</a></div>
	<div><a href="Admin view book.php">View book</a></div>
	<div><a href="Admin view sales.php">View sales</a></div>
	<div><a href="Admin add books.php">Add book</a></div>
	<div><a href="Admin view user.php">View user</a></div>
</div>

<div id="title">View user</div>

<div class="parentbox">
<?php 
	while($row=mysqli_fetch_array($result)){
		
		if ($row['gender']=="Male"){
			$gender_icon = "image/male.jpg";
		}
		else if ($row['gender']=="Female") {
			$gender_icon = "image/female.jpg";
		}
		
		$data = '<div class="childbox">
		
		<img src="'.$gender_icon.'" width="60" style="float: left"><br><br><br><br><br>
		
		<h3>'.$row['member_name'].'</h3>
		
		Phone Number:<br>'.$row['phone_number'].'<br><br>
		
		Email:<br><a href="mailto:'.$row['email_address'].'">'.$row['email_address'].'</a><br><br>
		
		Home Address:<br>'.$row['address'].'<br><br>
		
		<a href="edit user.php?id='.$row['memberID'].'">Edit</a>
		<a href="delete user.php?id='.$row['memberID'].'">Delete</a>
		
		</div>';
		
		echo $data;
		
	} 
	mysqli_close($con);//to close the database connection
?>
</div>
</body>

</html>



