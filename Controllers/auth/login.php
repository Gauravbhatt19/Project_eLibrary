<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$user=new Users;
if (isset($_SESSION['token']) and isset($_SESSION['loginid'])) {
	$name=$_SESSION['loginid'];
	$row=$user->fetchUser($name);
	$type=$row['type'];    			
	$uid=$row['uid'];
	require __dir__.'/'.'../../Controllers/common/setUserSession.php';
}
elseif(!isset($_SESSION['uid'])){
	if(isset($_POST['emailid'])) {
		if(isset($_POST['password'])){
			$name=mysqli_escape_string($conn,$_POST['emailid']);
			$pass=mysqli_escape_string($conn,$_POST['password']);
			$row=$user->fetchUser($name);
			$user->verify($row,$pass);
		}
		else
			$user->flashError([NULL,'Please Enter Password'],'/');
	}
	else
		$user->flashError(['Please Enter Email Address','Please Enter Password'],'/');
}
if (isset($_SESSION['type'])){
	if($_SESSION['type']=='inadmin'){
		$category = new Categories();
		$categories=$category->fetchCategories();
		if(isset($_GET['books']))
			require __dir__.'/'.'../books/ListBooks.php';
		else {
			require __dir__.'/'.'../users/ListAllUsers.php';
			require __dir__.'/'.'../bookCategories/ListCategories.php';
		}
	}
	elseif ($_SESSION['type']=='inreader') {
		if(isset($_GET['listbooks']))
			require __dir__.'/'.'../books/UserBooks.php';	
		else
			require __dir__.'/'.'../books/ListBooks.php';	
	}
	else 
		header('location:/');
}
?>