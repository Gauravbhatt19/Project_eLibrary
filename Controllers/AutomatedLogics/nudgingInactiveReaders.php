<?php
$user = new Users();
$book = new Books();
$fetchAllUsers=$user->fetchInactiveUsers();
$subject="eLibrary | Newly Added Books";
$lastWeekBookList="<h3>The following are the Last Week Added Books: <ol>";
$fetchLastWeekBook=$book->fetchLastWeekBook();
while($bok=mysqli_fetch_assoc($fetchLastWeekBook)){
	$lastWeekBookList=$lastWeekBookList."<li>".$bok['book_name']." by ".$bok['author_name']."</li>";
}
$lastWeekBookList=$lastWeekBookList."</ol></h3>";
foreach ($fetchAllUsers as $uid){
	$usr=$user->fetchUser($uid);
	if($usr['email_id']!='admin'){
		$email_id=$usr['email_id'];
		$name=$usr['user_name'];
		$body="<h3>Hello {$name},</h3>";
		$body=$body.$lastWeekBookList;
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