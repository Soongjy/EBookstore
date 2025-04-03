<?php
    include("session.php");	
?>
<?php 
	if(!isset($_SESSION['mySession'])){
		echo"<script>alert('Please Login First!'); window.location.href='Sign in.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
	/*top area*/
	body{
		font-family: 'Roboto', sans-serif;
		background-image: url('image/webbackground.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	.flex-container {
		background-color:powderblue;
		display:flex;
		margin-bottom:10px;
		border:3px solid black;
	}
	
	.flex-container > a {
		height:30px;
		width: 20%;
		border-right:3px solid black;
		text-align: center;
		font-size:24px;
        text-decoration: none;
        color:black;
	}

    .flex-container >  a:visited {
        text-decoration: none;
        color:black;
    }   
    .flex-container >  a:hover {
        text-decoration: underline;
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

	#shoppingcart{
		float:right;
		margin-left:20%;
		margin-top: 18px;

	}

	#topareacontainer{
		display:flex;
		width:100%; 

	}
	/*body*/
	#bodycontainer{
		margin: auto;
		width: 80%;
		padding: 10px;
		height:auto;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	h2,h3{
		text-align: center;
	}

	#receipt{
		border: 1px solid #000000;
		height: 280px;
		width: 270px;
		border-radius: 10px;
		display: flex;
		flex-direction: column;
		padding:30px;
	}

	hr{
		width:90%;
		text-align:left;
		margin-left:0
	}
	.btncontainer{
		align-self: center;
		justify-content: center;
	}
	.btncontainer button{
		height:30px;
		width:200px;
		margin:3px;
		padding:3px;
		border-radius: 10px;
	}

	.btncontainer button:hover{
		background-color: lightslategray;
	}

	.btncontainer button:active{
		transform: scale(0.95);
	}

	.center{
		display:flex;
		align-self: center;
		justify-content: center;
	}
	
    </style>
	<title>Thank You</title>
</head>
<body>
	<div id=topareacontainer>
		<div id="logo">
			<img src="image/book store.png" alt="Book store logo" style="height:80px;width:80px;float:left">
			<h1>SOH Book Store</h1>
		</div>

		<div id="searchbox">
			<input type="text" name="search box" placeholder="Enter to search" style="height:25px;width:300px">
			<input type="submit" name="search" value="Search">
		</div>

		<div id=shoppingcart>
			<a href="mycart.php">
			    <img src="image/Cart logo.jpg" alt="Cart Logo" style="height:60px; width:60px;">
            </a>
		</div>
		<?php
		include("conn.php");
		if(isset($_SESSION['mySession'])){
			$email=$_SESSION['mySession'];
			$sql= "SELECT * FROM user WHERE email_address='$email'";
			$runsql=mysqli_query($con,$sql);
			$result=$runsql->fetch_array(MYSQLI_ASSOC);
			$username=$result['member_name'];
			$userid=$result['memberID'];
			$useradd=$result['address'];
			echo '<div style="float:right; margin:auto; width:auto; height:auto; text-align: center">';
			echo '<h3 style="width:150px; height:auto;">'.$username.'</h3><br>';
			echo '</div>';
		}
		?>
	</div>
	<div class="flex-container"> <!--top selections--> 
		<a href="homepage1.php">
			<div>Home</div>
		</a>
		<a href="homepage1.php#categoryinhomepage">
			<div>Category</div>
		</a>
        <a href="myaccount.php">    
            <div>My Account</div>
        </a>
		<a href="homepage1.php#contact">    
			<div>Contact us</div>
		</a>
		<a href="myaccount.php">
			<div>My Account</div>
		</a>
	</div>
<?php
	$result = mysqli_query($con,"SELECT * FROM memberorder INNER JOIN user on memberorder.memberid=user.memberID where memberorder.memberid='$userid'");
	echo '<h2>Thank You for your Order</h2>';
	echo '<h3>You will receive a email confirmation soon.</h3>';
	echo '<div id=bodycontainer>';
	while($row = mysqli_fetch_array($result)){
	print'
		<div id=receipt>
			<div>Order No.</div>
			<div>'.$row["orderid"].'</div>
			<hr>
			<div>Total Amount.</div>
			<br>
			<div>RM '.$row["amount"].'</div>
			<hr>
			<div>Shipping to</div>
			<div>'.$row["address"].'</div>
		</div>';}
?>		
		</div>
		<div class="center">
			<div class="btncontainer">
				<button onclick="window.location.href='homepage1.php'">Back to Home Page</button>
				<button onclick="window.location.href='mycart.php'">Back to Cart</button>
			</div>
		</div>
<?php
	mysqli_close($con);
?>
</body>
</html>