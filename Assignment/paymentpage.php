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

    #bodycontainer{
		margin: auto;
		width: 50%;
		padding: 20px;
		height:auto;
		display:flex;
        flex-direction: column;
        border: 1px solid #000000
	}

    #bodycontainer{
		margin: auto;
		width: 40%;
		padding: 20px;
		height:auto;
		display:flex;
        flex-direction: column;
        border: 1px solid #000000
	}

    #cartphoto{
        height: 100px;
        width: 80px;
    }

    .item{
        display:flex;
		padding-left: 50px;
    }

    hr{
		width:90%;
    }

    .totalsubamount,.totalamount,.shipping{
        display: flex;
        justify-content: space-between;
        padding-bottom: 5px;
    }

	button{
		height:30px;
		width:200px;
		margin:3px;
		padding:3px;
		border-radius: 10px;
	}

	button:hover{
		background-color: lightslategray;
	}

	button:active{
		transform: scale(0.95);
	}
    </style>
    <title>Payment Page</title>
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
    <h1 style="margin:auto;width:30%">Payment</h1>
    <div id=bodycontainer>
		<?php
			$totalamount = $_GET['totalamount'];
			include("conn.php");
			$result = mysqli_query($con,"SELECT * FROM cart INNER JOIN book on cart.bookid=book.book_ID where memberid='$userid'");
			while($row = mysqli_fetch_array($result)){
			$cartid=$row['cartid'];
			$item='
			<div class="item">
				<div id="cartphoto" style="float:left;">
				<img src="uploads/'.$row["book_image"].'" alt="Book Photo" style="height:100%;width:100%">
				</div>
				<p style="width:240px;margin:0 30px; align-self: center;">'.$row["book_name"].'</p>
				<p style="width:60px;margin:0 30px; align-self: center;">RM '.$row["price"].'</p>
			</div>
			';
			echo $item;}
			mysqli_close($con);
		?>
        <hr>
        <div class="totalsubamount">
            <span style="margin:0 50px">Subtotal</span>
            <span style="margin:0 50px">RM <?php echo $totalamount?></span>
        </div>
        <div class="shipping">
            <span style="margin:0 50px">Shipping</span>
            <span style="margin:0 50px">Calculated in the price of book </span>
        </div>
        <hr>
        <div class="totalamount">
            <span style="margin:0 50px">Total</span>
            <span style="margin:0 50px">RM <?php echo $totalamount?></span>
        </div>
		<form method="post" action="addorder.php" style="align-self: center;">
			<input type="hidden" name="member_id" value="<?php echo $userid?>">
			<input type="hidden" name="totalamount" value="<?php echo $totalamount?>">
			<input type="hidden" name="cart_id" value="<?php echo $cartid?>">
        	<button onclick="return confirm('Confirm Checkout?')" style="font-size:20px;" type="submit">Checkout</button>
        </a>
		</form>
	</div>
</body>
</html>