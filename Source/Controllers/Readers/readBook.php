<?php
require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
require __dir__.'/'.'../../Controllers/connection.php';
session_start();
$bid=$_GET['bid'];
$uid=$_SESSION['uid'];
$qry="SELECT * FROM readers WHERE id= '{$uid}'";
$results=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($results);
$qry1="SELECT * FROM books WHERE bid= '{$bid}'";
$results1=mysqli_query($conn,$qry1);
$row1=mysqli_fetch_assoc($results1);
$rid=$row1['readers_id'];
$rid=$rid.','.$uid;
$nob=$row['no_of_books_read'];
$nob++;
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$upd_qry="UPDATE readers SET no_of_books_read='{$nob}',last_book_read_time='{$date}' WHERE id='{$uid}'";
$results=mysqli_query($conn,$upd_qry);
$upd_qry1="UPDATE books SET readers_id='{$rid}' WHERE bid='{$bid}'";
$results1=mysqli_query($conn,$upd_qry1);
header("location: /readers");