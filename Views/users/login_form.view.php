<div class="border border-secondary p-4 rounded bg-light col-sm-8 col-lg-12 mx-auto">
	<form method="POST" action="/login" >
		<h5 class="text-center">Welcome Back</h5>   
		<input type="email" class="form-control mt-4" name="emailid" id="emailid"  placeholder="Enter Email Address *" required oninvalid="this.setCustomValidity('Enter Valid Email Address')" oninput="this.setCustomValidity('')">
		<small class="form-text text-muted text-danger"><?=$msg1?></small>
		<input type="password" class="form-control mt-2"  minlength="1" id="password" placeholder="Enter Password *" name="password" required oninvalid="this.setCustomValidity('Enter Valid Password')"
		oninput="this.setCustomValidity('')">      <small class="form-text text-muted text-danger"><?=$msg2?></small>
		<button class="btn  btn-primary btn-block mt-3" type="submit">Log in</button>
		<div class="row mt-4 m-2">
			<hr class="d-inline col"><p class="text-muted text-center d-inline col-6 mt-1">or connect through</p><hr class="d-inline col"></div>         
			<a href="<?=$loginURL?>">
				<img src="../resources/images/google_logo.jpg" class="rounded mx-auto d-block"  alt="Login with Google" height="50">
			</a>
		</div>
	</form>          
</div>
