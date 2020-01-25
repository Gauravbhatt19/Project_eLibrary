<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

require __dir__.'/'.'../auth/checkAuthentication.php';
function verify($row,$pass){
	if(isset($row)){
		if(password_verify($pass, $row['password'])){
			$type=$row['type'];    			
			$uid=$row['uid'];
			require __dir__.'/'.'../common/setUserSession.php';
		}
		else{ 
			echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Invalid Password ! Try Again..!' ); window.location='/';},0);</script>";
		}
	}
	else{ 
		echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Invalid Login Id or Password ! Try Again..!' ); window.location='/';},0);</script>";
	}
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
		else{ 
			echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Please enter Password ! Try Again..!' ); window.location='/?id=admin';},0);</script>";
		}
	}
	else{ 
		echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Please Enter login Id ! Try Again..!' ); window.location='/?id=admin';},0);</script>";
	}
}

require __dir__.'/'.'../../Controllers/auth/checkAuthentication.php';
require __dir__.'/'.'../../Views/common/header.view.php';
if (isset($_SESSION['type'])){
	if($_SESSION['type']=='inadmin'){
		echo 'Hello Admin';
	}
	elseif ($_SESSION['type']=='inreader') {
		echo 'Hello User';	
	}
	else {
		header('location:/');
	}
}
require __dir__.'/'.'../../Views/common/footer.view.php';





?>