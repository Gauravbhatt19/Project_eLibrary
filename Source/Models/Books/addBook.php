<?php
require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
require __dir__.'/'.'../../Controllers/connection.php';
if(isset($_POST['book_name']) and isset($_POST['author_name']) and isset($_POST['book_edition']) and isset($_POST['book_categories'])){
    $book_name=mysqli_escape_string($conn,$_POST['book_name']);
    $author_name=mysqli_escape_string($conn,$_POST['author_name']);
    $edition=mysqli_escape_string($conn,$_POST['book_edition']);
    $book_categories=mysqli_escape_string($conn,$_POST['book_categories']);
    $qry="INSERT INTO books(book_name,book_categories,author_name,edition) VALUES ('{$book_name}','{$book_categories}','{$author_name}','{$edition}')";
    $result=mysqli_query($conn,$qry);
    if(isset($result)){
        $target_dir = __dir__.'/'.'../../resources/uploads/';   
        // $filename=basename($_FILES["book_cover"]["name"]);
        // // $filename=explode('.',$filename);
        $filename=$book_name.$edition.".jpg";      
        $target_file = $target_dir . $filename;
        $uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["book_cover"])) {
    $check = getimagesize($_FILES["book_cover"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if ($_FILES["book_cover"]["size"] > 500000) {
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
       echo "<script type='text/javascript'>window.setTimeout(function() { window.location='/admins';},0);</script>";
    }
    else{
      echo "<script type='text/javascript'>window.setTimeout(function() { alert( 'Error in Book Adding..! Try Again.!' ); window.location='/admins';},0);</script>";
    }
}
?>
