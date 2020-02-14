<?php if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
?>
<nav class="p-3 px-lg-5 bg-white border-bottom shadow-sm navbar navbar-expand-sm navbar-light" style="z-index:3">
	
	<a href="/" class="navbar-brand ml-5" title='Go to home'>
		<h2 style="font-family: Georgia;">eLibrary</h2>
	</a>
	
	<?php if((Request::uri()=='')||(Request::uri()=='index')||(Request::uri()=='index.php')||(Request::uri()=='login')||(Request::uri()=='editbook')):?>	
	<button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbartoggler" aria-controls="navbartoggler" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon" title="Menu"></span>
	</button>
<?php endif;?>

<div class="collapse navbar-collapse" id="navbartoggler">
	<ul class="navbar-nav mr-lg-0 mx-auto text-center">
		<?php if(isset($_GET['register'])): ?> 
			<li class="nav-item">Already Registered? <a class="btn btn-outline-primary mr-lg-5 mr-sm-5 mr-md-0 ml-sm-5" href="/">Log in</a>
			</li>
			<?php 
			elseif((Request::uri()=='verifymsg')):?>
				<li class="nav-item">Done Verification?<a class="btn btn-outline-primary mr-5 ml-5" href="/index">Log in</a></li>
				<?php elseif((Request::uri()=='')||(Request::uri()=='index.php')||(Request::uri()=='index')):?>
				<li class="nav-item">New User?<a class="btn btn-outline-primary mr-5 ml-5" href="/index?register=1">Join Now</a></li>		
			<?php elseif($type==='inadmin'): ?>
				<li class="nav-item">
					Hello, <b><i><?=$_SESSION['username']?></i></b>
					<button type="button"  class="btn btn-outline-danger mt-2 mb-2 mr-5 ml-5" data-toggle="modal" data-target="#logoutModal" title='logout my account'>Logout</button>  
				</li>
			<?php  elseif($type==='inreader'):
				if(!isset($_GET['listbooks'])):?>				
					<li class="nav-item ml-lg-5 mr-lg-5 mt-2 mb-2 mr-2">
						<a class="btn btn-link" href="login?listbooks=1" title="list of read books">My Books</a>
					</li>	
				<?php endif;?>
				<li class="nav-item mr-3">
					Hello, <b><i><?=$_SESSION['username']?></i></b>
					<button type="button"  class="btn btn-outline-danger mt-2 mb-2 mr-lg-5 ml-lg-5 ml-2" data-toggle="modal" data-target="#logoutModal" title='logout my account'>Logout</button>  
				</li>	
			<?php endif;?>
		</ul>
	</div>
</nav>