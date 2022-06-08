<?php
session_start();
header("location: Sign in.php");
session_destroy();
?>