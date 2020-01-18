<?php
function returnUser(){
	session_start();
	$url=$_SERVER['REQUEST_URI'];
	if(isset($_SESSION['users_type'])){
		return $_SESSION['users_type'];
	}
	elseif(stripos($url,"admins"))
		return 'off_admin';
	else
		return 'off_reader';
} 
?>