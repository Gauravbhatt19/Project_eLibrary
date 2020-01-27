<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require __dir__.'/'.'../../resources/PHPMailer/src/Exception.php';
require __dir__.'/'.'../../resources/PHPMailer/src/PHPMailer.php';
require __dir__.'/'.'../../resources/PHPMailer/src/SMTP.php';
$mail = new PHPMailer;
require __dir__.'/'.'../configs/PHPMailer/config.php';
class Mail {
	public function sendVerificationMail($lnk,$emailid,$name){
		$GLOBALS['mail']->addAddress($emailid, $name);
		$GLOBALS['mail']->Subject  = 'Verification Link for eLibrary';
		$GLOBALS['mail']->Body     = '<h1>Hi '.$name.' !</h1><h2> Thank you for Registration.!</h2><h3> Your verification link is :'.$lnk.'</h3>';
		if(!$GLOBALS['mail']->send()) {
			return FALSE;
		}
		return TRUE; 
	}
	public function sendMail($emailid,$name,$body,$subject){
		$GLOBALS['mail']->addAddress($emailid, $name);
		$GLOBALS['mail']->Subject  = $subject;
		$GLOBALS['mail']->Body     = $body;
		if(!$GLOBALS['mail']->send()) {
			return FALSE;
		}
		return TRUE; 
	}
}


?>