<?php
	if(isset($_POST['update'])) {
		include("conn.php");
	
		$sql = "UPDATE user SET 
		member_name='$_POST[name]', 
		phone_number='$_POST[phone_number]',
		gender='$_POST[gender]', 
		email_address='$_POST[email]', 
		address='$_POST[address]' 
		
		WHERE memberID=$_POST[member_ID];";
		
		if (mysqli_query($con, $sql)) {
			mysqli_close($con);
			echo "<script>alert('Data update successfully!'); 
			window.location.href='Admin view user.php';</script>";
		} else {
			echo "<script>alert('Failed to update')</script>";
		}
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
	
	input[type=text],textarea,input[type=tel],input[type=email] {
		width:100%; height:35px;
		margin-bottom:25px;
	}
	
	#block {
		border:2px solid green;
		width:880px;
		margin:auto;
		padding:40px;
	}
	
	#update {
		width:100%; height:35px;
		margin-bottom:25px;
	}
</style>
</head>


<body>
<div id="logo">
	<img src="image/book store.png" alt="Book store logo" style="height:80px;width:80px;float:left">
	<h1>SOH Book Store</h1>
</div>

<div id="searchbox">
	<input type="text" name="search box" placeholder="Enter to search" style="height:25px;width:300px">
	<input type="submit" name="search" value="Search">
</div>

<div class="flex-container"> <!--top selections--> 
	<div><a href="Admin dashboard.php">Dashboard</a></div>
	<div><a href="Admin view book.php">View book</a></div>
	<div><a href="Admin view sales.php">View sales</a></div>
	<div><a href="Admin add books.php">Add book</a></div>
	<div><a href="Admin view user.php">View user</a></div>
</div>

<div id="title">Edit user</div>
<?php
include("conn.php");
$id = intval($_GET['id']);
$result = mysqli_query($con,"SELECT * FROM user WHERE memberID= $id");
while($row = mysqli_fetch_array($result))
{
?>
<div id="block">
<form method="post">
	<table width="800px" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td>Name:</td>
		</tr>
		<tr>
			<td><input type="text" name="name" required="required" value="<?php echo $row['member_name']?>"></td>
		</tr>
		<tr>
			<td>Gender:</td>
		</tr>
		<tr>
			<td><input type="radio" name="gender" 
			<?php if ($row['gender']=="Male") {?> checked="checked" <?php }?> 
			value="Male" required="required"><label>Male</label>
			
			<input type="radio" name="gender" 
			<?php if ($row['gender']=="Female") {?> checked="checked" <?php }?> 
			value="Female" required="required"><label>Female</label></td>
		</tr>
		<tr>
			<td>Phone number:</td>
		</tr>
		<tr>
			<td><input type="tel" name="phone_number" value="<?php echo $row['phone_number']?>" required="required"></td>
		</tr>
		<tr>
			<td>Email address:</td>
		</tr>
		<tr>
			<td><input type="email" name="email" value="<?php echo $row['email_address']?>" required="required"></td>
		</tr>
		<tr>
			<td>Address</td>
		</tr>
		<tr>
			<td><textarea required="required" name="address"><?php echo $row['address']?></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update" id="update"></td>
		</tr>
	</table>
	
<input type="hidden" name="member_ID" value="<?php echo $row['memberID'] ?>">
</form>
</div>
<?php
}
mysqli_close($con);
?>
</body>

</html>