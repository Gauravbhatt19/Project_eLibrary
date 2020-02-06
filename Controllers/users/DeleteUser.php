<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if($_SESSION['type']!='inadmin')
	header("location:/");
$user = new Users();
if(isset($_GET['uid'])){
	$uid=$_GET['uid'];
	$user->deleteAllBooks($uid);
	if($user->deleteUserById($uid))
		header('location:/login');
}
?>
