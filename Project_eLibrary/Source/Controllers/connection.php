<?php 
$hostname="localhost";
$username="root";
$password="Gaurav@19";
$db_name="elibrary_db";
$conn=mysqli_connect($hostname,$username,$password,$db_name);
 if(!isset($conn))
 die("Database Connection Error..! Invalid Credentials !");
?>