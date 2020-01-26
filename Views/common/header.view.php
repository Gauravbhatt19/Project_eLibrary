<?php
if($id=='admin'): ?>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="javascript:void(0)">eLibrary</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
<div style="height: 30px;"></div>
	<?php elseif($id=='reader'): ?>
		<header>
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="javascript:void(0)">eLibrary</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./admin?id=admin">Admin</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<?php else: ?>
			<header>
				<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="javascript:void(0)">eLibrary</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
							<li class="nav-item active">
								<?php if($id=='admin'):?>
									<a class="nav-link" href="/login">Dashboard<span class="sr-only">(current)</span></a>
									<?php else: ?>
										<a class="nav-link" href="/login">Dashboard<span class="sr-only">(current)</span></a>
									<?php endif; ?>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="./logout">Logout</a>
								</li>
							</ul>
						</div>
					</nav>
				</header>
			<?php endif; ?>
<div style="height: 80px;"></div>