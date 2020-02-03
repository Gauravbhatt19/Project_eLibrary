<nav class="p-3 px-lg-5 bg-white border-bottom shadow-sm navbar navbar-expand-lg navbar-light">
	<a href="#" class="navbar-brand ml-5">
		<img src="../resources/images/logo.jpg" width="120" class="">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggler" aria-controls="navbartoggler" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbartoggler">
		<ul class="navbar-nav mr-lg-0 mx-auto text-center">
			<?php if(isset($_GET['register']) ||(Request::uri()=='verifymsg') ): ?> 
			<li class="nav-item">Already Registered?<a class="btn btn-outline-primary mr-5 ml-5" href="/">Log in</a>
			</li>
			<?php elseif((Request::uri()=='')||(Request::uri()=='index.php')||(Request::uri()=='index')):?>
			<li class="nav-item">New to eLibrary?<a class="btn btn-outline-primary mr-5 ml-5" href="/index?register=1">Join Now</a></li>		
			<?php elseif($type=='inreader'): ?>
				<?php if(isset($_GET['listbooks'])):?>
					<li class="nav-item">
						<a class="btn btn-link" href="login">Home</a>
					</li>					
					<?php else:?>
						<li class="nav-item">
							<?php require __dir__.'/'.'../../Views/bookCategories/filterCategory_form.view.php'; ?>
						</li>
						<li class="nav-item">
							<a class="btn btn-link" href="login?listbooks=1">List of Read Books</a>
						</li>					
					<?php endif;?>
					<li class="nav-item">
						<a class="btn btn-outline-danger mr-5 ml-5" onclick='logout()' href="javascript:void(0);">Logout</a>
					</li>
					<?php else: if(isset($_GET['books'])):?>
						<li class="nav-item">
							<a class="btn btn-link" href="login">Dashboard</a>
						</li> 
						<?php else : ?>
							<li class="nav-item">
								<a class="btn btn-link" href="login?books=1">Manage Books</a>
							</li> 
						<?php endif;?>
						<li class="nav-item">
							<a class="btn btn-outline-danger mr-5 ml-5" onclick='logout()' href="javascript:void(0);">Logout</a>
						</li>
					<?php endif;?>
				</ul>
			</div>
		</nav>