<?php
session_start();
if(isset($_SESSION['uid'])){
	$user =new Users();
	$uid=$_SESSION['uid'];
	if(isset($_GET['bid'])){
		$bid=$_GET['bid'];
		$user->readBook($uid,$bid);
		header('location:/login');
	}
	elseif(isset($_GET['dbid'])){
		$bid=$_GET['dbid'];
		$user->unreadBook($uid,$bid);
		header('location:/login');
	}
}
?>