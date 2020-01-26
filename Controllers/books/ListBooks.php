<?php
$book = new Books();
$rows=$book->fetchBooks();
if(isset($_SESSION['fetchBooks'])){
	$bookIds=$_SESSION['fetchBooks'];
}
else
	$bookIds=NULL;
require __dir__.'/'.'../../Views/books/books_card.view.php';
?>