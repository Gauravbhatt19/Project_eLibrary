<?php
require __dir__.'/'.'../../Controllers/connection.php';
$qry="SELECT * FROM readers";
$result=mysqli_query($conn,$qry);
?>
