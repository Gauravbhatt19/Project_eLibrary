<?php
class QueryBuilder{
	public function fetchOne($table,$names,$values){
		$names=implode(',',$names);
		$values=implode(',',$values);
		$qry="SELECT * FROM {$table} WHERE {$names} = '{$values}'";
		$result=mysqli_query($GLOBALS['conn'],$qry);
		return (mysqli_fetch_assoc($result));
	}
}
?>	