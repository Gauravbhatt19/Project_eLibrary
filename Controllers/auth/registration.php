<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$user=new Users;
if(isset($_POST['rname']) and isset($_POST['remailid']) and isset($_POST['rpassword'])){
	$name=mysqli_escape_string($conn,$_POST['rname']);
	$email=mysqli_escape_string($conn,$_POST['remailid']);
	$pass=mysqli_escape_string($conn,$_POST['rpassword']);
	if($user->freshUser($email))
		$user->registerUser($name,$email,$pass,NULL);
	else
		$user->flashError('User Already Exists','/');
}
?>