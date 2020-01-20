<?php
require_once __dir__.'/'."../../resources/gmail_login/config.php";
require_once __dir__.'/'.'../connection.php';
if (isset($_SESSION['access_token']))
	$gClient->setAccessToken($_SESSION['access_token']);
else if (isset($_GET['code'])) {
	$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
	$_SESSION['access_token'] = $token;
} else {
	echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error ! Try Again..!' ); window.location='/';},0);</script>";
}
$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();
$name= $userData['name'];
$id = $userData['id'];
$email = $userData['email'];
$_SESSION['users_type']='reader';


function freshUser($emailid,$conn){
	$qry="SELECT * FROM readers WHERE email='{$emailid}'";
	$result=mysqli_query($conn,$qry);
	if(mysqli_num_rows($result)!=0){
		$db_row=mysqli_fetch_assoc($result);
		$_SESSION['uid']=$db_row['id'];
		 header("location:/readers");
		 die();
		return FALSE;
	}
	else
		return TRUE;
}
function registerUser($name,$emailid,$id,$conn){
	$qry1="INSERT INTO readers(user_name,email,oauth_uid) VALUES ('{$name}','{$emailid}','{$id}')";
	$result1=mysqli_query($conn,$qry1);
	if(isset($result1)){
		$qry2="SELECT * FROM readers WHERE email='{$emailid}'";
		$result2=mysqli_query($conn,$qry2);
		$db_row=mysqli_fetch_assoc($result2);
		$_SESSION['uid']=$db_row['id'];
		 header("location:/readers");
		 die();
	}
	
	else
		echo "<script type='text/javascript'>
	window.setTimeout(function() { alert( 'Error ! Try Again..!' ); window.location='/';},0);</script>";
}
if(isset($name) and isset($id) and isset($email)){
	if(freshUser($email,$conn)){
		registerUser($name,$email,$id,$conn);
	}
	else{

		echo "<script type='text/javascript'>
		window.setTimeout(function() { alert( 'User already Exists ! Try Again..!' ); window.location='/';},0);</script>";
	}
}



?>