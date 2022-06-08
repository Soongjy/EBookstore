<?php
	if(isset($_POST['update'])) {
		include("conn.php");
	
		$sql = "UPDATE book SET 
		book_name='$_POST[book_name]', 
		author='$_POST[author]',
		category='$_POST[category]', 
		price='$_POST[price]', 
		quantity='$_POST[quantity]',
		describtion='$_POST[describtion]' 
		
		WHERE book_ID=$_POST[book_ID];";
		
		if (mysqli_query($con, $sql)) {
			mysqli_close($con);
			echo "<script>alert('Data update successfully!'); 
			window.location.href='Admin view book.php';</script>";
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
	
	input[type=text],textarea,input[type=int] {
		width:100%; height:35px;
		margin-bottom:25px;
	}
	
	#select {
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
	<form method="post">
	<input type="text" name="search_box" placeholder="Enter to search" style="height:25px;width:300px">\
	<input type="submit" name="search" value="Search">
	</form>
</div>

<?php
include("conn.php");

$search_element = "";

if(isset($_POST['search'])){
	$search_element = $_POST['search_box'];
}

$result=mysqli_query($con,"SELECT * FROM book WHERE book_name LIKE '%$search_element%'");
?>
<div class="parentbox">

<div class="flex-container"> <!--top selections--> 
	<div><a href="Admin dashboard.php">Dashboard</a></div>
	<div><a href="Admin view book.php">View book</a></div>
	<div><a href="Admin view sales.php">View sales</a></div>
	<div><a href="Admin add books.php">Add book</a></div>
	<div><a href="Admin view user.php">View user</a></div>
</div>

<div id="title">Edit book</div>
<?php
include("conn.php");
$id = intval($_GET['id']);
$result = mysqli_query($con,"SELECT * FROM book WHERE book_ID= $id");
while($row = mysqli_fetch_array($result))
{
?>
<div id="block">
<form method="post">
	<table width="800px" border="0" cellpadding="5" cellspacing="1">
		<tr>
			<td>Book name:</td>
		</tr>
		<tr>
			<td><input type="text" name="book_name" required="required" value="<?php echo $row['book_name']?>"></td>
		</tr>
		<tr>
			<td>Author:</td>
		</tr>
		<tr>
			<td><input type="text" name="author" required="required" value="<?php echo $row['author']?>"></td>
		</tr>
		<tr>
			<td>Category:</td>
		</tr>
		<tr>
			<td>
			<select id="select" name="category" required="required">
				<option value="">Please select</option>
				<option value="Advanture" <?php if($row['category'] == "Advanture"){?> selected="selected" <?php } ?>>Advanture</option>
				<option value="Classic" <?php if($row['category'] == "Classic"){?> selected="selected" <?php } ?>>Classic</option>
				<option value="Comic" <?php if($row['category'] == "Comic"){?> selected="selected" <?php } ?>>Comic</option>
				<option value="Mistery" <?php if($row['category'] == "Mistery"){?> selected="selected" <?php } ?>>Mistery</option>
				<option value="Fantasy" <?php if($row['category'] == "fantasy"){?> selected="selected" <?php } ?>>Fantasy</option>
				<option value="Horror" <?php if($row['category'] == "Horror"){?> selected="selected" <?php } ?>>Horror</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Price:</td>
		</tr>
		<tr>
			<td><input type="int" name="price" value="<?php echo $row['price']?>" required="required"></td>
		</tr>
		<tr>
			<td>Quantity:</td>
		</tr>
		<tr>
			<td><input type="int" name="quantity" value="<?php echo $row['quantity']?>" required="required"></td>
		</tr>
		<tr>
			<td>Describtion:</td>
		</tr>
		<tr>
			<td><textarea required="required" name="describtion"><?php echo $row['describtion']?></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update" id="update"></td>
		</tr>
	</table>
	
<input type="hidden" name="book_ID" value="<?php echo $row['book_ID'] ?>">
</form>
</div>
<?php
}
mysqli_close($con);
?>
</body>

</html>