<?php
require __dir__.'/'.'../../Controllers/connection.php';
if(isset($_POST['book_name']) and isset($_POST['author_name']) and isset($_POST['book_edition']) and isset($_POST['book_categories'])){
    $book_name=mysqli_escape_string($conn,$_POST['book_name']);
    $author_name=mysqli_escape_string($conn,$_POST['author_name']);
    $edition=mysqli_escape_string($conn,$_POST['book_edition']);
    $book_categories=mysqli_escape_string($conn,$_POST['book_categories']);
    $qry="INSERT INTO books(book_name,book_categories,author_name,edition) VALUES ('{$book_name}','{$book_categories}','{$author_name}','{$edition}')";
    $result=mysqli_query($conn,$qry);
    if(isset($result)){
        echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
    }
    else{
      echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Book Adding..! Try Again.!' ); window.location='/admins';},0);</script>";
    }
}
?>
