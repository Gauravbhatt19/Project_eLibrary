<?php
require __dir__.'/'.'../../Controllers/auth/checkAuthentication.php';
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$msg1=$msg2=$msg3=NULL;
if(isset($_SESSION['error1'])){
	$msg1="<div class='mt-2 alert alert-warning alert-dismissible fade show' role='alert'>{$_SESSION['error1']}<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	unset($_SESSION['error1']);
}
if (isset($_SESSION['error2'])){
	$msg2="<div class='mt-2 alert alert-warning alert-dismissible fade show' role='alert'>{$_SESSION['error2']}<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	unset($_SESSION['error2']);
}
if (isset($_SESSION['error3'])){
	$msg3="<div class='mt-2 alert alert-warning alert-dismissible fade show' role='alert'>{$_SESSION['error3']}<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	unset($_SESSION['error3']);
}
?>
<div class="row bg-light mb-0">
	<div class="col-lg ml-5 mx-auto">
		<div class="text-lg-left text-center">
			<div class="col-lg-5 py-lg-5 pl-lg-5 my-5 mx-lg-5">
				<h1 class="display-3 font-weight-normal">Welcome to eLibrary</h1>
				<p class="lead font-weight-normal display-5 mt-5 w-100">Get Books You Want</p>
			</div>
		</div>	
	</div>
	<div class="col-lg-5 mr-md-5">	
		<div class="p-5">
			<div class=" my-5">
				<?php if(isset($_GET['register']))
				require __dir__.'/'.'../../Views/users/registration_form.view.php';
				elseif((Request::uri()=='')||(Request::uri()=='index.php')||(Request::uri()=='index')) require __dir__.'/'.'../../Views/users/login_form.view.php';?>
			</div>
		</div>
	</div>
</div>
</div>