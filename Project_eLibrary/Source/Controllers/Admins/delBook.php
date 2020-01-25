<?php
require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
require '../connection.php';
$bid=$_GET['bid'];
$qry1="SELECT * FROM books WHERE bid='{$bid}'";
$result1=mysqli_query($conn,$qry1);
if(isset($result1)){
	$qry="DELETE FROM books WHERE bid='{$bid}'";
	$filename=mysqli_fetch_assoc($result1);
	$filename=$filename['book_name'].$filename['edition'].'.jpg';
	$file_pointer = __dir__.'/'.'../../resources/uploads/'.$filename;  
	if (unlink($file_pointer)) { 
		$result=mysqli_query($conn,$qry);
		if(isset($result)){
			echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
		}
		else {  
			echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Deleting! Try Again..!' ); window.location='/admins';},0);</script>";
		}
	}  	
	else {  
		echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Deleting! Try Again..!' ); window.location='/admins';},0);</script>";
	}   	
}
echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
?>