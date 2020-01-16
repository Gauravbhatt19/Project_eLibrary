<?php 
$hostname="127.0.0.1";
$username="root";
$password=NULL;
$db_name="elibrary_db";
$conn=mysqli_connect($hostname,$username,"",$db_name);
if(!isset($conn))
    die("Database Connection Error..! Invalid Credentials !");
?>