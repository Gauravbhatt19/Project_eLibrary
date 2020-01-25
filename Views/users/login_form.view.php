<div class="border border-secondary p-4 rounded bg-light">
	<h5 class="text-center">Login Form</h5>                
	<form method="POST" action="/login">
		<?php if ($id=='admin'): ?>
			<div class="form-group">
				<label for="login">Login Id</label>
				<input type="text" class="form-control" id="login" placeholder="Enter Login Id" name="loginid" required oninvalid="this.setCustomValidity('Enter Valid Login Id')"
				oninput="this.setCustomValidity('')">
				<?php else: ?>
					<div class="form-group">
						<label for="emailid">Email address</label>
						<input type="email" class="form-control" name="emailid" id="emailid"  placeholder="Enter email" required oninvalid="this.setCustomValidity('Enter Valid Emailid')"
						oninput="this.setCustomValidity('')">
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Enter Valid password')"
					oninput="this.setCustomValidity('')">
					
				</div>
				<br>
				<div class="row">
					<span class="col-md-4">
						<button type="submit" class="btn btn-success btn-block">Login</button>
					</span>
					<?php if ($id!='admin'): ?>
						<span class="col-md-8 text-center">Or&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Login using&nbsp;&nbsp;<button type='button' class="text-danger btn btn-link" onclick="window.location = '<?php echo $loginURL ?>';"><i class="fas fa-envelope"></i>Gmail</button></span>
					<?php endif; ?>
				</div>
			</form>          
		</div>
