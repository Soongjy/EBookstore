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
		width: 60%;
		border: 1px solid #000000;
		padding: 10px;
		height:550px;
		display:flex;
		border-radius: 10px;
	}

	.bookphoto{
		width:25%;
		float:left;
		margin:15px;
		height:100%;
	}

	.bookdetails{
		width: 450px;
		height:320px;
		padding:20px;
		box-sizing: border-box;
	}

	.purchasebox{
		height:150px;
		width:100%;
	}

	.wrap{
		display:grid;
		height: 100%;
		width: 70%;
	}

	.purchasebox{
		height: 200px;
		padding:20px;
		width:90%;
	}

	.section {
        margin-bottom: 15px;
		width:100%;
		float:left;
	}

	.label {
		float: left;
		margin-right: 10px;
		width: 100px;
	}

	.quantity-selector__button{
		border-radius:50%;
		font-size: 16px;
	}

	.quantity-selector__button:hover{
		background-color: var(--clr-gray200);
	}

	.quantity-selector__button:active{
		transform:scale(0.9);
	}

	#add_to_cart_button:hover{
		background-color: lightcoral;
	}

	#add_to_cart_button:active{
		transform:scale(0.95);
	}

	#buyBtn:hover{
		background-color: lightgray;
	}

	#buyBtn:active{
		transform: scale(0.95);
	}

	#add_to_cart_button{
		font-size: 30px;
		padding: 5px 15px;
		border-radius: 10px;
		background-color: #BE1E2D;
		color:aliceblue;
	}

	#buyBtn{
		font-size:30px;
		padding: 5px 15px;
		border-radius: 10px;
		background-color: #313e47;
		color:aliceblue;
	}
	</style>
	
	<title>BookDetails</title>
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
		<div>
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
					echo '<h3 style="width:280px; height:auto;">'.$username.'</h3><br>';
					echo '</div>';
				}
			?>
		</div>
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
        <a href="Sign in.php">
            <div>Sign In</div>
        </a>
	</div>
<?php
    include("conn.php");
    $bookid = $_GET['id']; //intval — Get the integer value of a variable
    $result = mysqli_query($con,"SELECT * FROM book WHERE book_ID='$bookid'");
    if($row = mysqli_fetch_array($result)){
		$data ='
		<div id=bodycontainer>
			<div class=bookphoto>
				<img src="uploads/'.$row["book_image"].'" alt="Book Photo" style="height:230px;width:100%">
			</div>
			<div class="warp">
				<div class="bookdetails">
					<h1 style="margin-bottom:0px">'.$row["book_name"].'</h1>
					<h3 style="margin-top:0px">'.$row["author"].'</h3>
					<p>'.$row["describtion"].'</p>
				</div>
				<div class="purchasebox">
					<div class="section">
						<div class="label">
							<h3 style="margin: 0px">Price</h3>
						</div>
						<div class="field">
							:  RM  '.$row["price"].'
						</div>
					</div>
					<div class="section">
						<div class="label">
							<h3 style="margin: 0px">Stock</h3>
						</div>
						<div class="field">
							:  '.$row["quantity"].'
						</div>
					</div>
					<dic class="section">
						<form method="post" action="addcartitem.php">
							<input type="hidden" name="member_id" value="'.$userid.'">
							<input type="hidden" name="book_id" value="'.$bookid.'">
						<div class="label">
							<h3 style="margin: 0px">Quantity</h3>
						</div>
						<div class="field">
							: <button type="button" id="button_decrease" class="quantity-selector__button"style="padding:0.8px 7.3px" onclick="decreaseBtn();">-
							</button>
							<input name="quantity" id="counter" class="quantity-selector__value" inputmode="numeric" value="1" size="2">
							<button type="button" id="button_increase" class="quantity-selector__button" onclick="increaseBtn();">+</button>
							<script>
								function decreaseBtn(){
									let count = document.getElementsByName("quantity")[0].value
									if (count > 1) {
									count = count - 1;
									document.getElementsByName("quantity")[0].value= count;
									}
									else {
										alert("The number of book cannot less that 1 or other than number")
									}
								}
								function increaseBtn(){
									let count = Number(document.getElementsByName("quantity")[0].value) + 1;
									if (count < '.$row["quantity"].') {
									document.getElementsByName("quantity")[0].value= count;}
									else{
										alert("The number of book cannot more that stock number or insert other than number")
								}}
							</script>
							<input type="hidden" name="price" value="'.$row["price"].'">
							<div style="flex-direction:row; margin:30px">
								<button type="submit" id="add_to_cart_button" onclick="return confirm(\'Add to Cart?\')">Add to cart</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>;
		</div>';
		echo $data;
		}
		mysqli_close($con);
		?>
		</div>
	</div>

</body>
</html>

