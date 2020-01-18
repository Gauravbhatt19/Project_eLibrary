<?php
require __dir__.'/'.'../../Controllers/connection.php';
if(isset($_POST['book_name']) and isset($_POST['author_name']) and isset($_POST['book_edition']) and isset($_POST['book_categories']) and isset($_POST['bid'])){
	$bid=mysqli_escape_string($conn,$_POST['bid']);
	$book_name=mysqli_escape_string($conn,$_POST['book_name']);
	$author_name=mysqli_escape_string($conn,$_POST['author_name']);
	$edition=mysqli_escape_string($conn,$_POST['book_edition']);
	$book_categories=mysqli_escape_string($conn,$_POST['book_categories']);
	$qry="UPDATE books SET book_name='{$book_name}',book_categories='{$book_categories}',author_name='{$author_name}',edition='{$edition}' WHERE bid='{$bid}'";
	$result=mysqli_query($conn,$qry);
	if(isset($result)){
		echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
	}
	else{
		echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Book Saving..! Try Again.!' ); window.location='/admins';},0);</script>";
	}
}
?>