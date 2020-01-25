<?php
require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
require __dir__.'/'.'../../Controllers/connection.php';
if(isset($_POST['category_name']))
{
    $category_name=mysqli_escape_string($conn,$_POST['category_name']);
    $qry="INSERT INTO book_categories(category_name) VALUES ('{$category_name}')";
    $result=mysqli_query($conn,$qry);
    if(isset($result)){
    echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
}
else{
  echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Book Adding..! Try Again.!' ); window.location='/admins';},0);</script>";
}
}
?>
