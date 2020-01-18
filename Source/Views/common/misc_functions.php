<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
function returnUser(){
	$url=$_SERVER['REQUEST_URI'];
	if(isset($_SESSION['users_type'])){
		return $_SESSION['users_type'];
	}
	elseif(stripos($url,"admins"))
		return 'off_admin';
	else
		return 'off_reader';
} 
function checkUser($readersList,$readerId){
	$readersList=explode(',',$readersList);
	foreach ($readersList as $id) {
		if($id==$readerId){
			return TRUE;
			exit(0);
		}
	}
	return FALSE;
} 

?>