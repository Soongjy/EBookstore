<?php
    include("session.php");	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | SOH Book Store</title>
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

    a {
        text-decoration: none;
        color:black;
    }    
    a:visited {
        text-decoration: none;
        color:black;
    }   

    a:hover {
        color:black;
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
                        <a class="nav-link active" aria-current="page" href="#"></a>
						<form method="post" action="homepage2.php">
							<input type="text" name="search_box" placeholder="Enter to search" style="height:25px;width:300px">
							<input type="submit" name="search" value="Search">
						</form>
                    </li>
                </ul>
                <div>
                    <ul>
                        <a href="mycart.php">
                            <img src="image/Cart logo.jpg" alt="Cart Logo" style="height:60px; width:60px;">
                        </a>
                    </ul>
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
                            echo '<div style="float:right; margin:auto; width:auto; height:auto; text-align: center">';
                            echo '<h3 style="width:280px; height:auto;">'.$username.'</h3><br>';
                            echo '</div>';
                        }
                    ?>
                </div>
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
            <div>Log In</div>
        </a>
	</div>
    <div class="container-fluid border mt-3 ">
        <div class="row">
            <div class="col-6">
                <p class="display-6">SOH Book Store </p>
                <p class="font-weight-italic"> is an online bookstore with a mission to financially support local,
                    independent bookstores.

                    We believe that bookstores are essential to a healthy culture. They’re where authors can connect
                    with readers, where we discover new writers, where children get hooked on the thrill of reading that
                    can last a lifetime.
                </p>
            </div>
            <div class="col-6">
                <img src="image/banner.png" alt="" class="img-fluid banner" srcset="">
            </div>
        </div>
    </div>
    <div id="categoryinhomepage" class="container-fluid mt-2 rec-div">
        <h4>Category</h4>
    </div>

    <div class="container mt-3"style="width:75%;margin:auto">
        <div class="row">
            <div class="col-6 border">
                <a href="homepage2.php?id=adventure">
                    <div class="row">
                        <div class="col-6">
                            <img src="image/action.jpg" id="genere-pic" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <h4>Action and Adventure</h4>
                            <p>Action and adventure books constantly have you on the edge of your seat with
                                excitement, as your fave main character repeatedly finds themselves in high stakes
                                situations.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 border">
                <a href="homepage2.php?id=classic">
                    <div class="row">
                        <div class="col-6">
                            <img src="uploads/The Nightmare before Christmas.jpg" id="genere-pic" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <h4>Classics</h4>
                            <p>You may think of these books as the throwback readings you were assigned in
                                English class.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 border">
                <a href="homepage2.php?id=comic">
                    <div class="row">
                        <div class="col-6">
                            <img src="uploads/Marvel-Verse Loki.jpg" id="genere-pic" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <h4>Comic Books</h4>
                            <p>Comics is a medium used to express ideas with images, often combined with text or other visual information.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 border">
                <a href="homepage2.php?id=mystery">
                    <div class="row">
                        <div class="col-6">
                            <img src="uploads/Down the Hatch.jpg" id="genere-pic" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <h4>Detective and Mystery</h4>
                            <p>Mystery fiction is a loosely-defined term that is often used as a synonym of detective fiction 
                                — in other words a novel or short story in which a detective </p>
                        </div>
                    </div>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 border">
                <a href="homepage2.php?id=fantasy">
                    <div class="row">
                        <div class="col-6">
                            <img src="uploads/Final Fantasy XIV.jpg" id="genere-pic" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <h4>Fantasy</h4>
                            <p>Stories of the otherworldly allow readers to make sense of this world, refracting change, wickedness,
                                 and heartache through a magical lens so we can see them all more clearly — and face them head-on.</p>
                        </div>
                    </div>
                </a>    
            </div>
            <div class="col-6 border">
                <a href="homepage2.php?id=horror">
                    <div class="row">
                        <div class="col-6">
                            <img src="uploads/If She Knew.jpg" id="genere-pic" alt="" srcset="">
                        </div>
                        <div class="col-6">
                            <h4>Horror</h4>
                            <p>Horror fiction is fiction in any medium intended to scare, unsettle, or horrify the audience. Historically, 
                                the cause of the "horror" experience has often been the intrusion of a supernatural element into everyday human experience.</p>
                        </div>
                    </div>
                </a>    
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 rec-div">
        <h4>Latest News</h4>
    </div>

    <div class="container-fluid">
        <a href=""> <img src="image/news.png" class="img-fluid" alt="" id="new-img" srcset=""></a>
    </div>

    <div id="contact" class="container-fluid mt-5 rec-div">
        <h4>Contact us</h4>
    </div>
    <div class="d-flex justify-content-evenly mt-5 mb-3">
        <p><b> send us a query at: sohbookstore@store.com</b></p>
        <div><button class="btn btn-primary">Contact us</button></div>
    </div>

</body>

</html>