<?php
require __dir__.'/'.'../../Controllers/auth/checkAuthentication.php';
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if(isset($_SESSION['type'])){
	header('location:/login');
}
$msg1=$msg2=$msg3=$emailid=NULL;
if(isset($_SESSION['error1'])){
	$msg1="<p class='text-danger'>{$_SESSION['error1']}</p>";
	unset($_SESSION['error1']);
}
if (isset($_SESSION['error2'])){
	$msg2="<p class='text-danger'>{$_SESSION['error2']}</p>";
	unset($_SESSION['error2']);
}
if (isset($_SESSION['error3'])){
	$msg3="<p class='text-danger'>{$_SESSION['error3']}</p>";
	unset($_SESSION['error3']);
}
if(isset($_SESSION['name'])){
	$emailid=$_SESSION['name'];
	unset($_SESSION['name']);
}
?>
<div class="row bg-light mb-0">
	<div class="col-lg ml-5 mx-auto mt-4">
		<div class="text-lg-left text-center">
			<div class="col-lg-5 py-lg-5 pl-lg-5 my-4 ml-lg-5">
				<h1 class="display-4 font-weight-normal">Welcome to eLibrary</h1>
				<p class="mt-3 lead display-5">eLibrary contains an inventory of books.</p>
				<p class="lead display-5">It will maintain your booklist and also help you in increasing your reading habits.</p>
			</div>
		</div>	
	</div>
	<div class="col-lg-5 mr-md-5">	
		<div class="p-5">
			<div class=" my-5">
				<?php if(isset($_GET['register']))
				require __dir__.'/'.'../../Views/users/registration_form.view.php';
				elseif((Request::uri()=='')||(Request::uri()=='index.php')||(Request::uri()=='index'))
					require __dir__.'/'.'../../Views/users/login_form.view.php';
				?>
			</div>
		</div>
	</div>
</div>
</div>