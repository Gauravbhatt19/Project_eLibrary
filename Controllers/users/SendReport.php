<?php 
$user = new Users();
$book = new Books();
$fetchAllUsers=$user->fetchUsers();
while($usr=mysqli_fetch_assoc($fetchAllUsers)){
	if($usr['email_id']!='admin'){
		$email_id=$usr['email_id'];
		$name=$usr['user_name'];
		$fetchBooks=$user->fetchLastWeekBooks($usr['uid']);
		$body="<h3>Hello {$name},</h3><h3>Last Week you have read the following list of Books:</h3><h4><ol>";
		$subject="eLibrary | Last Week Read Books Report";
		while($books=mysqli_fetch_assoc($fetchBooks)){
			$fetchBookDetails=$book->fetchBook($books['bid']);
			$body=$body."<li>".$fetchBookDetails['book_name'].' by '.$fetchBookDetails['author_name'].'</li>';
		}
		$body=$body."</ol></h4>";
		if(Mail::sendMail($email_id,$name,$body,$subject)){
			echo "SUCCESS..!";
			return TRUE;
		}
		else{
			echo "FAIL..!";
			return FALSE;
		}
	}
}
?>