<?php
require __dir__.'/'.'../../Controllers/connection.php';
$qry="SELECT * FROM book_categories";
$result=mysqli_query($conn,$qry);
?>
