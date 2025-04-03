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
    /*body */
    #bodycontainer{
		margin: auto;
		width: 80%;
		padding: 10px;
		height:auto;
		display:flex;
	}

    .cart{
        height: auto;
        width: 800px;
        margin: 5px;
        padding: 5px;
        float:left;
        display:flex;
        flex-direction: column;
    }
    
    #cartitem {
    border-collapse: collapse;
    width: 100%;
    padding: 15px 30px;
    }

    #cartitem th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: darkgrey;
    color: white;
    }
    #citem th {
    padding:0 12px;
    text-align: left;
    background-color: darkgrey;
    color: white;
    }

    #citem td, #citem th {
    border: 1px solid #000000;
    }

    #cartitem td, #cartitem th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #cartphoto{
        height: 100px;
        width: 80px;
    }

    .quantity-selector__button{
		font-size: 16px;
        height:100%;
        padding: 0 12px;
        background: 0 0;
        border: none;
        border-radius: 0;
	}

	.quantity-selector__button:hover{
		background-color: var(--clr-gray200);
	}

	.quantity-selector__button:active{
		transform:scale(0.9);
	}

    .field{
        display:flex;
        flex-direction: column;
        align-items: center;
        margin: 0 30px;
        width: 100px;
        height: 38px;
        border-radius: 5px;
    }

    #counter{
        height:90%;
        width: 50%; 
        border-radius: 3px;
        border: 1px solid #e1e3e4;
    }

    #purchase_container{
        border: 1px solid #000000;
        margin: 10px;
        padding: 10px;
        height:150px;
        width:300px;
        border-radius: 10px;
    }

    
    #purchase_box{
        margin: 5px;
        padding: 5px;
        display :flex;
        justify-content: space-between;
    }

    #buyBtn{
        width: 100%;
        margin:auto;
		font-size:30px;
		padding: 5px 15px;
		border-radius: 10px;
		background-color: #BE1E2D;
		color:aliceblue;
	}
    #buyBtn:hover{
		background-color: lightcoral;
	}

	#buyBtn:active{
		transform: scale(0.95);
	}

    a:link{
        text-decoration: none;
        color:darkgrey;
    }

    a:hover {
        text-decoration: underline;
    }

    a:visited {
        text-decoration: none;
        color:darkgrey;
    }
    </style>
    <title>MyCart</title>
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
                echo '<h3 style="width:280px; height:auto;">'.$username.'</h3><br>';
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
    <h1 style="margin-left:15%">My Shopping Cart</h1>
    <div id=bodycontainer>
        <div class="cart">
                <table id="cartitem">
                    <tr>
                        <th width="400px">Product</th>
                        <th width="200px">Quantity</th>
                        <th width="150px">Total</th>
                    </tr>
                </table>
                    
        <?php
        $totalamount=0;
        include("conn.php");
        $result = mysqli_query($con,"SELECT * FROM cart INNER JOIN book on cart.bookid=book.book_ID where memberid='$userid'");
        while($row = mysqli_fetch_array($result)){
            $data ='<table id="citem">
                    <tr>
                        <th width="420px"></th>
                        <th width="200px"></th>
                        <th width="150px"></th>
                    </tr>
                    <tr>
                        <td>
                            <div style="display:flex;">
                                <div id="cartphoto" style="float:left;">
                                <img src="uploads/'.$row["book_image"].'" alt="Book Photo" style="height:100%;width:100%">
                                </div>
                                <div style="display:grid">
                                    <div style="margin:0 10px; font-size:20px">'.$row["book_name"].'</div>
                                    <div style="margin:0 10px; font-size:20px" ;id=price>RM'.$row["price"].'</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="field">
                                <input name="quantity" id="counter" type="number" value="'.$row['cquantity'].'">
                                <a href="deletecartitem.php?id='.$row["cartid"].'" onClick="return confirm(\'Confirm Remove?\')">Remove</a>
                            </div>
                        </td>
                        <td>
                            <h2 id=totalprice>RM'.$row["totalprice"].'</h2>
                        </td>
                    </tr>
                </table>
                ';
                if(isset($row["totalprice"])){
                $totalamount= $totalamount+$row["totalprice"]
                ;}
                echo $data;}   
		?>                     
        </div>
        <div id="purchase_container">
            <div id="purchase_box">
                <span style="font-size:30px">Total</span>
                <span style="font-size:30px">RM<?php echo $totalamount?></span>
            </div>
            <br><hr>
            <div>
                <button id="buyBtn" onclick="window.location.href='paymentpage.php?totalamount=<?php echo $totalamount?>'">Checkout Now</button>
            </div>
        </div>
    </div>
    <?php
        mysqli_close($con);
    ?>
</body>
</html>