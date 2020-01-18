<?php
require '../connection.php';
if(isset($_POST['loginid'])) {
  if(isset($_POST['password'])){
    $name=mysqli_escape_string($conn,$_POST['loginid']);
    $pass=mysqli_escape_string($conn,$_POST['password']);
    $qry="SELECT password FROM admins WHERE login_name='{$name}'";
    $result=mysqli_query($conn,$qry);
    if(isset($result)){
        $db_values=mysqli_fetch_assoc($result);
        $db_pass=$db_values['password'];
        if(password_verify($pass, $db_pass)){
            $type='admin';
            require __dir__.'/'.'../setUserSession.php';
            header("location:/admins");
        }
        else{ 
            echo "<script type='text/javascript'>
            window.setTimeout(function() { alert( 'Invalid Login ID or Password ! Try Again..!' ); window.location='/any?q=admins';},0);</script>";
        }
    }
  }
}
elseif(isset($_POST['emailid'])) {
    if(isset($_POST['password'])){
      $emailid=mysqli_escape_string($conn,$_POST['emailid']);
      $pass=mysqli_escape_string($conn,$_POST['password']);
      $qry="SELECT * FROM readers WHERE email='{$emailid}'";
      $result=mysqli_query($conn,$qry);
      if($result){
        $db_values=mysqli_fetch_assoc($result);
        $db_pass=$db_values['password'];
        if(password_verify($pass, $db_pass)){
           if($db_values['verified_id']=='1'){
           $type='reader';
           $uid=$db_values['id'];
           require __dir__.'/'.'../setUserSession.php';
           header("location:/readers");
         }
           else {
              header("location: /verifymsg");
           }
           }
        else{
           echo "<script type='text/javascript'>   window.setTimeout(function() { alert( 'Invalid Login ID or Password ! Try Again..!' ); window.location='/';},0);</script>";
            }
       }
    }
  }
?>