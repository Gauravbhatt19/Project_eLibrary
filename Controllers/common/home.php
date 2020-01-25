<?php
require __dir__.'/'.'../../Controllers/auth/checkAuthentication.php';
require __dir__.'/'.'../../Views/common/header.view.php';
?>
<div class="container">
	<div class="row  justify-content-md-center">
		<div class="col-md-5 m-3">
				<?php
				require __dir__.'/'.'../../Views/users/login_form.view.php';
				?>
			</div>
		<?php 
		if($id!='admin'):
			?>
			<div class="col-md m-3">
				<?php
				require __dir__.'/'.'../../Views/users/registration_form.view.php';
				?>
			</div>
		<?php endif;?>
	</div>
</div>

</div>
<?php
require __dir__.'/'.'../../Views/common/footer.view.php';
?>