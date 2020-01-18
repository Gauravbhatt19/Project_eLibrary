<?php
require __dir__.'/'.'../../Controllers/connection.php';
$qry="SELECT * FROM books";
$result=mysqli_query($conn,$qry);
?>
