<!DOCTYPE html>
<html>
<head>
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
	
	#block {
		background-color:#D5DCDE;
		width:320px;
		margin: 70px auto;
		padding:20px 40px;
		border-radius: 20px;
	}
	
	input[type=text],input[type=email],input[type=tel],textarea,input[type=submit] {
		width:300px; height:25px;
		margin-bottom:15px;
	}
	
	#select {
		width:300px; height:25px;
		margin-bottom:15px;
	}
	
	#password1 ,#password2 {
		width:300px; height:25px;
		margin-bottom:15px;
	}

	input[name=submit]{
		height: 34px;
		border-radius: 10px;
		background-color:darkslategrey;
		color:white;
	}

	input[name=submit]:hover{
		background-color:#233C3E;
	}

	input[name=submit]:active{
		transform:scale(0.97);
	}
</style>
<title>Sign up</title>
<script>
	var check = function() {
		if (document.getElementById("password1").value == 
			document.getElementById("password2").value) {
			password1.style.border = "3px solid green";
			password2.style.border = "3px solid green";
			document.getElementById('submit').disabled = false;
		} else {
			password1.style.border = "3px solid red";
			password2.style.border = "3px solid red";
			document.getElementById('submit').disabled = true;
		}
	}
</script>
</head>


<body>
<div id="block">
<h1 style="text-align:center;">Sign up</h1>
	<p  style="text-align:center;">Please fill in this form to create an account</p>
	<form action="create account.php" method="post">
		<table width="300px" border="0" cellspacing="1" cellpadding="3">
			<tr>
				<td>Name:</td>
			</tr>
			<tr>
				<td><input type="text" name="name" required="required" placeholder="Enter your name"></td>
			</tr>
			
			<tr>
				<td>Gender:</td>
			</tr>
			<tr>
				<td>
				<select id="select" name="gender" required="required">
					<option value="">Please select</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Email Address:</td>
			</tr>
			<tr>
				<td><input type="email" name="email" required="required" placeholder="Enter your email"></td>
			</tr>
			
			<tr>
				<td>Password:</td>
			</tr>
			<tr>
				<td><input type="password" name="password" required="required" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
				placeholder="Enter your password" id="password1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onchange='check()'></td>
			</tr>
			
			<tr>
				<td>Confirm password:</td>
			</tr>
			<tr>
				<td><input type="password" name="confirm_password" required="required" placeholder="Enter your password again" id="password2" onchange='check()'></td>
			</tr>
			
			<tr>
				<td>Phone number:</td>
			</tr>
			<tr>
				<td><input type="tel" name="phone_number" required="required" placeholder="Enter youre phone number"></td>
			</tr>
			
			<tr>
				<td>Address:</td>
			</tr>
			<tr>
				<td><textarea required="required" name="address" placeholder="Enter your address"></textarea></td>
			</tr>
			
			<tr>
				<td>Already had an account? <br>Click here to <a href="Sign in.php">Sign In.</a></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Sign up" id="submit"></td>
			</tr>
		</table>
	</form>
</body>
</div>
</html>