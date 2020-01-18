<?php
require '../connection.php';
$bid=$_GET['bid'];
$qry="DELETE FROM books WHERE bid='{$bid}'";
$result=mysqli_query($conn,$qry);
if(isset($result))
echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
else
echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Deleting! Try Again..!' ); window.location='/admins';},0);</script>";

?>