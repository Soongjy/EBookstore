<?php
    include("session.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books | SOH Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    body{
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                SOH Book Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
						<form method="post" action="homepage2.php">
							<input type="text" name="search_box" placeholder="Enter to search" style="height:25px;width:300px">
							<input type="submit" name="search" value="Search">
						</form>
                    </li>
                </ul>
                <div>
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
                        echo '<div style="float:right; margin:0 80px; width:100; height:auto; text-align: center">';
                        echo '<h3 style="width:180px; height:auto;">'.$username.'</h3><br>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </nav>

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
	$search_element = "";

	if(isset($_POST['search'])){ //search function
		$search_element = $_POST['search_box'];
		$result=mysqli_query($con,"SELECT * FROM book WHERE book_name LIKE '%$search_element%'");
		$title = "Search result";
	} else {
		$category = $_GET['id']; //not search fucntion
		$result = mysqli_query($con,"SELECT * FROM book WHERE category='$category'");
		$title = "$category";
	};

    if($row = mysqli_fetch_array($result)){
    print'<div class="container-fluid" style="width:80%;margin:auto">
        <h4 class="ms-3 mt-5 mb-3">'.ucfirst($title).'</h4>
        <div class="row">
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
        <div class="row">
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
        <div class="row">
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>';}
    if($row = mysqli_fetch_array($result)){
        print'
            <div class="col-12 col-md-4 border">
                <a href="bookdetail.php?id='.$row["book_ID"].'">
                    <figure class="figure">
                        <img src="uploads/'.$row["book_image"].'" style="height:300px;width:270px;"class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption">
                            <h6>'.$row["book_name"].'</h6>
                            <span>Author:'.$row["author"].'</span><br>
                            <span>RM'.$row["price"].'</span>
                            <br>
                            <button class="btn btn-primary">Add to Cart</button>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </div>';}
    mysqli_close($con);
    ?>
    <div class="container-fluid mt-5 rec-div">
        <h4>Contact us</h4>
    </div>
    <div class="d-flex justify-content-evenly mt-5 mb-3">
        <p><b> send us a query at: sohbookstore@store.com</b></p>
        <div><button class="btn btn-primary">Contact us</button></div>
    </div>

</body>
    
</html>