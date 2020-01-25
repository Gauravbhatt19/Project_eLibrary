<?php
$conn=mysqli_connect("127.0.0.1","root","Gaurav@19","elibrary_db");
if($conn){
	$login_name="user@1.1";
	$pass="hahaha";
	$pass=password_hash($pass, PASSWORD_DEFAULT);
	$qry= "INSERT INTO users(email_id,password) VALUES ('{$login_name}','{$pass}')";
	$result=mysqli_query($conn,$qry);
	if($result){
		echo "Success..!";
	}
	else{
	 die("Error:".mysqli_error($conn));		
	}
}
else{
	die("Error..: Database Connections");
}
?>