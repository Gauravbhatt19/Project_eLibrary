<?php
include '../connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __dir__.'/'.'../../resources/PHPMailer/src/Exception.php';
require __dir__.'/'.'../../resources/PHPMailer/src/PHPMailer.php';
require __dir__.'/'.'../../resources/PHPMailer/src/SMTP.php';
function freshUser($emailid,$conn){
$qry="SELECT * FROM readers WHERE email='{$emailid}'";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)!=0)
return FALSE;
else
return TRUE;
}
function sendmail($lnk,$emailid,$name){
  $mail = new PHPMailer;
  $mail->SMTPDebug = 0;                               
$mail->isSMTP();                                      
$mail->Host = 'smtp.gmail.com';                    
$mail->SMTPAuth = true;                            
$mail->Username = 'gauravbhatt1924@gmail.com';     
$mail->Password = 'Gauravbhatt@1924';              
$mail->SMTPSecure = 'tls';                         
$mail->Port = 587;              
$mail->setFrom('gauravbhatt1924@gmail.com', 'eLibrary | doNotReply');
$mail->addAddress($emailid, $name);
$mail->Subject  = 'Verification Link for eLibrary';
$mail->Body     = 'Hi '.$name.' ! Thank you for Registration.! Your verification link is :'.$lnk;
if(!$mail->send()) {
 return FALSE;
}
return TRUE; 
}
function registerUser($name,$emailid,$pass,$conn){
	$pass=password_hash($pass, PASSWORD_DEFAULT);
$qry1="INSERT INTO readers(user_name,email,password) VALUES ('{$name}','{$emailid}','{$pass}')";
$result1=mysqli_query($conn,$qry1);
if(isset($result1)){
  $lnk='http://elibrary.test/xyz?id='.$emailid.'&secret='.$pass;
    if(sendmail($lnk,$emailid,$name)){
   header("location:verifymsg");
 }
}
else
echo "<script type='text/javascript'>		 window.setTimeout(function() { alert( 'Error ! Try Again..!' ); window.location='/';},0);</script>";
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
            else{
              header("location:/");
            }

?>