<?php
$category = new Categories();
if(isset($_GET['cid'])){
	$cid=$_GET['cid'];
	$category->deleteAllBooks($cid);
	if($category->deleteCategory($cid))
		header('location:/login');
}
else
	Users::flashError('Error in Deleting ','/admins');
?>
