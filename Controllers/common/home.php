<?php
require __dir__.'/'.'../../Controllers/auth/checkAuthentication.php';
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if(isset($_SESSION['type'])){
	header('location:/login');
}
$msg1=$msg2=$msg3=$emailid=$password=$rname=NULL;
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

if(isset($_SESSION['password'])){
	$password=$_SESSION['password'];
	unset($_SESSION['password']);
}
if(isset($_SESSION['rname'])){
	$rname=$_SESSION['rname'];
	unset($_SESSION['rname']);
}
?>
<div class="row bg-light d-flex align-items-center py-5" style="min-height:calc(100% - 180px);">
	<div class="col-lg d-lg-block d-none">
		<div class="text-lg-left text-center ml-lg-5 text-muted">
			<div class="ml-lg-5">
				<div>
					<p class="lead" style="font-size:2em;"><q>Today a Reader, Tomorrow a Leader.</q></p>
					<p class="text-center ml-xl-0 mr-xl-5 ml-lg-5">- Margaret Fuller</p>
				</div>
				<div class="">
					<p class="lead mt-5" style="font-size:1.7em;"><b>What's inside</b><i class="fas fa-question"></i></p>
					<p class="lead mt-3" style="font-size:1.5em; "><i class="fas fa-check"></i> Large variety &nbsp;of &nbsp;books</p>
					<p class="lead mt-3" style="font-size:1.5em; "><i class="fas fa-check"></i> Maintains your &nbsp;booklist</p>
					<p class="lead mt-3" style="font-size:1.5em; "><i class="fas fa-check"></i> Increases reading habits </p>
					<p class="lead mt-3" style="font-size:1.5em; "><i class="fas fa-check"></i> Entertainment&nbsp;&amp;&nbsp;&nbsp;Peace</p></div>
					<?php if(!isset($_GET['register'])): ?>
						<a class="btn btn-outline-primary mx-auto my-3 mb-5 d-lg-none" href="/index?register=1">Join Now</a>
					<?php endif;?>
				</div>
			</div>	
		</div>
		<div class="col-xl-4 col-lg-5">	
			<div class="mr-lg-5">
				<div class="mr-lg-5">
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