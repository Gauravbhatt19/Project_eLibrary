<?php 
session_start();
if(!isset($_SESSION['users_type']))
{    header('location:/');
    die();
	}
?>