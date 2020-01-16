<?php
function returnUser(){
   $url=$_SERVER['REQUEST_URI'];
   if(stripos($url,"admins"))
   	return 'admin';
   else
   	return NULL;
} 
?>