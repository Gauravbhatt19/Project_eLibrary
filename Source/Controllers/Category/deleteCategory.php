<?php
require __dir__.'/'.'../Auth/checkAuthentication.php';
require __dir__.'/'.'../connection.php';
if(isset($_GET['did'])){
    $cid=$_GET['did'];
    $qry="DELETE FROM book_categories WHERE cid='{$cid}'";
    $result=mysqli_query($conn,$qry);
    if(isset($result)){
    echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
}
else{
  echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Deleting..! Try Again.!' ); window.location='/admins';},0);</script>";
}
}
?>
