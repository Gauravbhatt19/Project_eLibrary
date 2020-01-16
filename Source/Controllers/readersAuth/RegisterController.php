<?php
include '../connection.php';
function freshUser($emailid,$conn){
$qry="SELECT * FROM readers WHERE email='{$emailid}'";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)!=0)
return FALSE;
else
return TRUE;
}
function registerUser($name,$emailid,$pass,$conn){
	$pass=password_hash($pass, PASSWORD_DEFAULT);
$qry1="INSERT INTO readers(user_name,email,password) VALUES ('{$name}','{$emailid}','{$pass}')";
$result1=mysqli_query($conn,$qry1);
if(isset($result1))
echo "<script type='text/javascript'>
  						 window.setTimeout(function() { alert( 'User Successfully Registered..!' ); window.location='/';},0);</script>";
else
echo "<script type='text/javascript'>
  						 window.setTimeout(function() { alert( 'Error ! Try Again..!' ); window.location='/';},0);</script>";
}
if(isset($_POST['rname']) and isset($_POST['remailid']) and isset($_POST['rpassword'])){
            $name=mysqli_escape_string($conn,$_POST['rname']);
            $email=mysqli_escape_string($conn,$_POST['remailid']);
            $pass=mysqli_escape_string($conn,$_POST['rpassword']);
            if(freshUser($email,$conn)){
            	registerUser($name,$email,$pass,$conn);
            }
            else{
            		echo "<script type='text/javascript'>
  						 window.setTimeout(function() { alert( 'User already Exists ! Try Again..!' ); window.location='/';},0);</script>";
            }
          	}

?>