<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$user=new Users;
if (isset($_SESSION['token']) and isset($_SESSION['loginid'])) {
	$name=$_SESSION['loginid'];
	$row=$user->fetchUser($name);
	if($_SESSION['token']==$row['provider_id']){
		$type=$row['type'];    			
		$uid=$row['uid'];
		session_unset($_SESSION['token']);
		session_unset($_SESSION['loginid']);
		require __dir__.'/'.'../../Controllers/common/setUserSession.php';
	}
}
elseif(!isset($_SESSION['uid'])){
	if(isset($_POST['loginid']) || isset($_POST['emailid']) ) {
		if(isset($_POST['password'])){
			$name=isset($_POST['loginid'])?mysqli_escape_string($conn,$_POST['loginid']):mysqli_escape_string($conn,$_POST['emailid']);
			$pass=mysqli_escape_string($conn,$_POST['password']);
			$row=$user->fetchUser($name);
			$user->verify($row,$pass);
		}
		else
			$user->flashError('Please enter Password','/');
	}
	else
		$user->flashError('Please Enter login Id','/');
}
require __dir__.'/'.'../auth/checkAuthentication.php';
if (isset($_SESSION['type'])){
	require __dir__.'/'.'../../Views/common/header.view.php';	
	if($_SESSION['type']=='inadmin'){
		require __dir__.'/'.'../users/ListAllUsers.php';
		require __dir__.'/'.'../bookCategories/ListCategories.php';
		require __dir__.'/'.'../books/ListBooks.php';
	}
	elseif ($_SESSION['type']=='inreader') {
		echo 'Hello User';	
	}
	else 
		header('location:/');
	require __dir__.'/'.'../../Views/common/footer.view.php';
}
?>