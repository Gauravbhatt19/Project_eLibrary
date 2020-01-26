<?php
$book = new Books();
$category = new Categories();
$categories=$category->fetchCategories();
if(isset($_POST['book_name']) and isset($_POST['author_name']) and isset($_POST['edition']) and isset($_POST['bid'])) {
	$categories=array();
	$i=1;
	$makeId='cid'.$i++;
	$c=new Categories();
	while(($i-1)<=mysqli_num_rows($c->fetchCategories()))	{
		if(isset($_POST[$makeId]))
			array_push($categories,mysqli_escape_string($conn,$_POST[$makeId]));
		$makeId='cid'.$i++;
	}
	$book_name=mysqli_escape_string($GLOBALS['conn'],$_POST['book_name']);
	$author_name=mysqli_escape_string($GLOBALS['conn'],$_POST['author_name']);
	$edition=mysqli_escape_string($GLOBALS['conn'],$_POST['edition']);
	$bid=mysqli_escape_string($GLOBALS['conn'],$_POST['bid']);
	$booknames=['book_name','author_name','edition'];
	$bookvalues=[$book_name,$author_name,$edition];
	$book->updateBook($booknames,$bookvalues,$bid);
	$book->deleteAllCategories($bid);
	$book->enterCategories($bid,$categories);
	header('location:/login');
}
if(isset($_GET['bid'])){
	$bid=$_GET['bid'];
	$rows=$book->fetchBook($bid);
	$book_name=$rows['book_name'];
	$author_name=$rows['author_name'];
	$edition=$rows['edition'];
	require __dir__.'/'.'../../Views/books/editbook_form.view.php';
}
// else
// 	Users::flashError('Error in Updating ','/login');
?>