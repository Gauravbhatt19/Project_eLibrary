<?php
session_start();
$_SESSION['users_type']=$type;
if(isset($uid))
	$_SESSION['uid']=$uid;
?>