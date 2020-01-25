<?php
class Users extends QueryBuilder{
	protected  $table='users';
	protected  $names=['email_id'];
	protected $values=[];
	public  function fetchUser($values){
		$values=explode(',',$values);
		return parent::fetchOne($this->table,$this->names,$values);
	}
}

?>