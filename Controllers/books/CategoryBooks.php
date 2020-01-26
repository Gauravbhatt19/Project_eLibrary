<?php
session_start();
if(isset($_POST['fcid'])) { 
	if($_POST['fcid']!=''){
		$cid=mysqli_escape_string($GLOBALS['conn'],$_POST['fcid']);
		$category=new Categories();
		$bookIds=[];
		$fetchBooks=$category->fetchBooks($cid);
		while($rw=mysqli_fetch_assoc($fetchBooks))
			array_push($bookIds,$rw['bid']);
		$_SESSION['fetchBooks']=$bookIds;
	}
	else{
		$bookIds=[];
		unset($_SESSION['fetchBooks']);
	}
	header('location:/login');
}
else 
	header('location:/login');

?>