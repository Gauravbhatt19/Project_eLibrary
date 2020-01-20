<?php
require __dir__.'/'.'../Auth/checkAuthentication.php';
require __dir__.'/'.'../connection.php';
if(isset($_POST['category_name']) and isset($_POST['cid']))
	{   $cid=$_POST['cid'];
$category_name=mysqli_escape_string($conn,$_POST['category_name']);
$qry="UPDATE book_categories SET category_name='{$category_name}' WHERE cid='{$cid}'";
$result=mysqli_query($conn,$qry);
if(isset($result)){
	echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
}
else{
	echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Book Editing..! Try Again.!' ); window.location='/admins';},0);</script>";
}
}
?>
