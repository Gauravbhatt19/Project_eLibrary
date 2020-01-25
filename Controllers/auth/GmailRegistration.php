<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$user= new Users();
if (isset($_SESSION['access_token']))
	$gClient->setAccessToken($_SESSION['access_token']);
else if (isset($_GET['code'])) {
	$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
	$_SESSION['access_token'] = $token;
} else {
	$user->flashError('Internal Error ','/');
}
try {
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	$name= $userData['name'];
	$id = $userData['id'];
	$email = $userData['email'];
	$_SESSION['token']=$id;
	$_SESSION['loginid']=$email;	
} catch (Exception $e) {
	$user->flashError('Internal Error ','/');	
}
if(isset($name) and isset($id) and isset($email)){
	if($user->freshUser($email,$conn)){
		$user->registerUser($name,$email,NULL,$id);
	}
	else{
		header('location:/login');
	}
}

?>