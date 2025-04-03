<!DOCTYPE html>
<html>
<head>
<title>Sign In</title>
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
	input:focus:invalid {
		background-color: orange;
	}
	
	input[type=email],input[type=password],input[type=submit] {
		width:300px; height:25px;
		margin-bottom:15px;
	}
	
	#wrap {
		background-color:#D5DCDE;
		width:320px;
		margin:170px auto;
		padding:40px;
		opacity: 0.9;
		border-radius: 15px;
	}

	input[name=submit]{
		height: 34px;
		border-radius: 10px;
		background-color:#2E5052;
		color:white;
	}
	input[name=submit]:hover{
		background-color:#233C3E;
	}

	input[name=submit]:active{
		transform:scale(0.97);
	}

</style>
</head>


<body>
<?php
include("conn.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
//username and password sent from Form
$emailaddress=mysqli_real_escape_string($con,$_POST['email_address']);
$password=mysqli_real_escape_string($con,$_POST['password']);

if($emailaddress=="admin@mail" and $password="Admin9999") {
	session_start();
	$_SESSION['mySession']=$emailaddress;
	header("location:Admin dashboard.php");
};

$sql="SELECT email_address FROM user WHERE email_address='$emailaddress' and
password='$password'";

if($result=mysqli_query($con,$sql)){
	//return the number of rows in result set
	$rowcount=mysqli_num_rows($result);
}

	if($rowcount==1){
		session_start();
		$_SESSION['mySession']=$emailaddress;
		header("location:homepage1.php");
	}
	else{
		$error=print('<script>alert("Your Login Name or Password is invalid.Please login again")</script><br/><br/>');
	}

mysqli_close($con);
}
?>

<div id="wrap">
<h1 style="text-align:center;">Sign In</h1>

<form action="Sign in.php" method="post">
<table width="300px" border="0" cellspacing="1" cellpadding="3">
	<tr>
		<td>Email Address:</td>
	</tr>
	
	<tr>
		<td><input type="email" name="email_address" required="required" placeholder="Enter email"></td>
	</tr>
	
	<tr>
		<td>Password:</td>
	</tr>
	
	<tr>
		<td><input type="password" name="password" required="required" placeholder="Enter your password"></td>
	</tr>
	
	<tr>
		<td>Don't have an account? Click <a href="Sign up.php">Sign Up.</a></td>
	</tr>
	
	<tr>
		<td><input name="submit" type="submit" value="Log In"></td>
	</tr>
</table>
</form>
</div>

</body>
</html>