<?php 
session_start();
if(isset($_SESSION['users_type']))
{
	if($_SESSION['users_type']=='admin'){
		header('location:/admins');
	}
	elseif($_SESSION['users_type']=='reader'){
		header('location:/readers');
	}}
	else {
    // header('location:/');
	}
?>