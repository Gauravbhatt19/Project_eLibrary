<?php
$conn=mysqli_connect("127.0.0.1","root","","elibrary_db");
if($conn){
	$login_name="admin";
	$pass="password";;
	$pass=password_hash($pass, PASSWORD_DEFAULT);
	$qry= "INSERT INTO admins(login_name,password) VALUES ('{$login_name}','{$pass}')";
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