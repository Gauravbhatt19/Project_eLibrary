<?php
require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
require __dir__.'/'.'../../Controllers/connection.php';
if(isset($_POST['book_name']) and isset($_POST['author_name']) and isset($_POST['book_edition']) and isset($_POST['bid'])){
	$bid=mysqli_escape_string($conn,$_POST['bid']);
	$book_name=mysqli_escape_string($conn,$_POST['book_name']);
	$author_name=mysqli_escape_string($conn,$_POST['author_name']);
	$edition=mysqli_escape_string($conn,$_POST['book_edition']);
    $book_categories='';


    $qry1231='SELECT * FROM book_categories';
    $result1231=mysqli_query($conn,$qry1231);
    $no=mysqli_num_rows($result1231);
    $i=1;
    $cat='cat'.$i;
    $book_categories='';
    while($i<=$no){
        if(isset($_POST[$cat]))
        {$book_categories=$book_categories.','.mysqli_escape_string($conn,$_POST[$cat]);
       }
        $i++;
        $cat='cat'.$i;
    }
	$qry="UPDATE books SET book_name='{$book_name}',categories_id='{$book_categories}',author_name='{$author_name}',edition='{$edition}' WHERE bid='{$bid}'";
	$result=mysqli_query($conn,$qry);
	if(isset($_FILES['book_cover'])){
			$target_dir = __dir__.'/'.'../../resources/uploads/';   
			$filename=$book_name.$edition.".jpg"; 
        $target_file = $target_dir . $filename;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if ($_FILES["book_cover"]["size"] > 1048576) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (!move_uploaded_file($_FILES["book_cover"]["tmp_name"], $target_file)) {
            echo "Sorry, there was an error uploading your file.";
        }
    }
		}
	if(isset($result)){
		header("location:/admins");
	}
	else{
		echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Book Saving..! Try Again.!' ); window.location='/admins';},0);</script>";
	}
}
?>