<?php
$router->define([	
	''=>'Controllers/common/home.php',
	'index.php'=>'Controllers/common/home.php',
	'index'=>'Controllers/common/home.php',
	'logout'=>'Controllers/auth/logout.php',
	'login'=>'Controllers/auth/login.php',
	'registration'=>'Controllers/auth/registration.php',
	'verifymsg'=>'Views/users/unVerifiedUser.view.php',
	'verify'=>'Controllers/auth/verifyRegistration.php',
	'gmail'=>'Controllers/auth/GmailRegistration.php',
	'addcat'=>'Controllers/bookCategories/AddCategory.php',
	'editcat'=>'Controllers/bookCategories/EditCategory.php',
	'delcat'=>'Controllers/bookCategories/DeleteCategory.php',
	'editbook'=>'Controllers/books/EditBook.php',
	'delbook'=>'Controllers/books/DeleteBook.php',
	'addbook'=>'Controllers/books/AddBook.php',
	'readbook'=>'Controllers/books/ReadBook.php',
	'filterBook'=>'Controllers/books/CategoryBooks.php',
	'sendreport'=>'Controllers/users/SendReport.php',
	'nudgeInactiveUser'=>'Controllers/AutomatedLogics/nudgingInactiveReaders.php'
]);
?>
