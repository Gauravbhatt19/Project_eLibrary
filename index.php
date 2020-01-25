<!DOCTYPE html>
<html>
<head>
	<title>eLibrary</title>
	<?php 
	require __dir__.'/resources/bootstrap/bootstrap4_css.php';
	?> 
</head>
<body>
	<?php  
	require 'core/bootstrap.php';
	$loginURL = $gClient->createAuthUrl();
	require Router::load('routes.php')->direct(Request::uri());
	require __dir__.'/resources/bootstrap/bootstrap4_js.php';
	require 'resources/js/custom_JS_functions.php';
	?>
</body>
</html>

