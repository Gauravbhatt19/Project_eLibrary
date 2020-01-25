<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
function flashError($msg,$dir){
	$dir=isset($_POST['loginid'])?$dir."?id=admin":$dir;
	echo "<script type='text/javascript'>window.setTimeout(function() { alert( '{$msg} ! Try Again..!' ); window.location='{$dir}';},0);</script>";
}
function verify($row,$pass){
	if(isset($row)){
		if(password_verify($pass, $row['password'])){
			$type=$row['type'];    			
			$uid=$row['uid'];
			require __dir__.'/'.'../common/setUserSession.php';
		}
		else
			flashError('Invalid Password','/');
	}
	else	
		flashError('Invalid Login Id or Password','/');
}
if(!isset($_SESSION['uid'])){
	if(isset($_POST['loginid']) || isset($_POST['emailid']) ) {
		if(isset($_POST['password'])){
			$name=isset($_POST['loginid'])?mysqli_escape_string($conn,$_POST['loginid']):mysqli_escape_string($conn,$_POST['emailid']);
			$pass=mysqli_escape_string($conn,$_POST['password']);
			$user=new Users;
			$row=$user->fetchUser($name);
			verify($row,$pass);
		}
		else
			flashError('Please enter Password','/');
	}
	else
		flashError('Please Enter login Id','/');
}
require __dir__.'/'.'../auth/checkAuthentication.php';
if (isset($_SESSION['type'])){
	require __dir__.'/'.'../../Views/common/header.view.php';	
	if($_SESSION['type']=='inadmin'){
		echo 'Hello Admin';
	}
	elseif ($_SESSION['type']=='inreader') {
		echo 'Hello User';	
	}
	else 
		header('location:/');
	require __dir__.'/'.'../../Views/common/footer.view.php';
}
?>