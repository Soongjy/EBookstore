<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conn.php");
        $sql = "UPDATE user SET 
        member_name='$_POST[name]', 
        gender='$_POST[gender]', 
        email_address='$_POST[email]', 
        password='$_POST[password]', 
        phone_number='$_POST[phone_number]', 
        address='$_POST[address]' 
        WHERE memberID=$_POST[id];";
        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            header('Location: myaccount.php');
        }
    ?>
</body>
</html>