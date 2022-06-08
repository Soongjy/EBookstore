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
		float:left;
		margin-left:30%;
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
        border: 1px solid #000000;
		border-radius: 20px;
	}

    hr{
		width:90%;
		text-align:left;
		margin-left:0
	}
    
    .p_detail{
        font-size: 20px;
    }

	button{
		height:30px;
		width:200px;
		padding:3px;
		border-radius: 10px;
		background-color:#D5DCDC;
	}

	button:hover{
		background-color: lightslategray;
	}

	button:active{
		transform: scale(0.95);
	}
    </style>
    <title>My Account</title>
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
        </a>
        <a href="homepage1.php#contact">    
            <div>Contact us</div>
        </a>
        <a href="myaccount.php">
            <div>My Account</div>
        </a>
	</div>
    <h1 style="margin-left:26%">My Account</h1>
    <div id=bodycontainer>
        <h2>My Details</h2>
        <hr>
        <p class="p_detail">Name:</p>
		<?php echo $username?>
		<hr>
        <p class="p_detail">Email Address:</p>
		<?php $email=$result["email_address"];
		echo $email?>
		<hr>
        <p class="p_detail">Phone Number:</p>
		<?php echo $pnumber=$result["phone_number"];?>
		<hr>
        <p class="p_detail">Address:</p>
		<?php $address=$result["address"];
		echo $address?>
		<hr>
    </div>
    <?php
    mysqli_close($con);
    ?>
	<div style="justify-content:center;display:flex;">
	<button class="button" style="margin-bottom:10px;" onclick="window.location.href='logout.php'">Logout</button>
	<?php
	echo "<button class='button' style='margin-bottom:10px;' onclick=\"window.location.href='edit.php?memberID=$result[memberID]'\">Edit</button>"
	?>
	</div>
</body>
</html>