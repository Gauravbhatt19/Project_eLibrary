<?php
$category = new Categories();
if(isset($_POST['category_name'])){
	$categoryName=mysqli_escape_string($conn,$_POST['category_name']);
	$category->values=["'{$categoryName}'"];
	if($category->freshCategory())
		$category->registerCategory();
	else
		Users::flashError('category Already Exists','/login');
}
?>