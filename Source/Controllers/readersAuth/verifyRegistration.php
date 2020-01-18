<?php
require __dir__.'/'.'../connection.php';
$emailid=$_GET['id'];
$pass=$_GET['secret'];
$qry="SELECT * FROM readers WHERE email='{$emailid}'";
      $result=mysqli_query($conn,$qry);
      if($result){
        $db_values=mysqli_fetch_assoc($result);
        $db_pass=$db_values['password'];
        if($pass===$db_pass){
$qry="UPDATE readers SET verified_id='1' WHERE email='{$emailid}'";
      $result=mysqli_query($conn,$qry);
           echo "<script type='text/javascript'>   window.setTimeout(function() { alert( 'Successfully Verified !' ); window.location='/';},0);</script>";
         }
           
           }
        else{
           echo "<script type='text/javascript'>   window.setTimeout(function() { alert( 'Verification Fail ! Try Again..!' ); window.location='/';},0);</script>";
            }
?>