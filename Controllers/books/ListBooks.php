<?php
$book = new Books();
$rows=$book->fetchBooks();
require __dir__.'/'.'../../Views/books/books_card.view.php';
?>