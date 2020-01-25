<?php
class Users extends QueryBuilder{
	protected  $table='users';
	protected  $names=['email_id'];
	protected $values=[];
	public  function fetchUser($values){
		$values=explode(',',$values);
		return parent::fetchOne($this->table,$this->names,$values);
	}
	public function fetchUsers(){
		return parent::fetchList($this->table);
	}
	public function flashError($msg,$dir){
		$dir=isset($_POST['loginid'])?$dir."/admin":$dir;
		echo "<script type='text/javascript'>window.setTimeout(function() { alert( '{$msg}  Try Again..!' ); window.location='{$dir}';},0);</script>";
	}
	public function verify($row,$pass){
		if(isset($row)){
			if(password_verify($pass, $row['password'])){
				if($row['verified_id']==0){
					session_destroy();
					header('location:/verifymsg');
				}
				$type=$row['type'];    			
				$uid=$row['uid'];
				require __dir__.'/'.'../../Controllers/common/setUserSession.php';
				header('location:/login');
			}
			else
				$this->flashError('Invalid Password','/');
		}
		else	
			$this->flashError('Invalid Login Id or Password','/');
	}
	public function freshUser($emailid){
		$row=$this->fetchUser($emailid);
		if(isset($row))
			return FALSE;
		else
			return TRUE;
	}
	public function deleteUser($emailid){
		return parent::delete($this->table,$this->names[1],$emailid);
	}
	public function registerUser($name,$emailid,$pass,$id){
		$pass=password_hash($pass, PASSWORD_DEFAULT);
		$this->names=['user_name','email_id','password','provider_id','verified_id'];
		$this->values=["'{$name}'","'{$emailid}'","'{$pass}'","'{$id}'","'1'"];
		if(parent::insert($this->table,$this->names,$this->values)){
			if($id!=NULL){
				header('location:/login');
			}
			else{
				$lnk='http://localhost/verify?id='.$emailid.'&secret='.$pass;
				if(Mail::sendVerificationMail($lnk,$emailid,$name)){
					header("location:/verifymsg");
				}
				else{
					$this->deleteUser($emailid);
					$this->flashError('Internal Error ','/');
				}	
			}

		}
	}
	public function activate($emailid){
		if(parent::update($this->table,['verified_id'=>'1'],'email_id',$emailid))
			$this->flashError('Verification Done..! Do not ','/');	
		else
			$this->flashError('Problem in Verification ','/');	
	}
}
?>