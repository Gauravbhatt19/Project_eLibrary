<?php
$book = new Books();
if(isset($_GET['bid'])){
	$bid=$_GET['bid'];
	$row=$book->fetchBook($bid);
	if($book->deleteBook($bid)){
		$title=$row['cover_image_name'];
		$filename=$title.".jpg";      
		$file_pointer = __dir__.'/'.'../../resources/uploads/'.$filename;  
		unlink($file_pointer); 
		header('location:/login');
	}
	else
		Users::flashError('Error in Deleting ','/admins');
}
?>
