<?php
function returnUser(){
   $url=$_SERVER['REQUEST_URI'];
   if($url=='/admins_views/index.php')
   	return 'admin';
   else
   	return NULL;
} 
?>