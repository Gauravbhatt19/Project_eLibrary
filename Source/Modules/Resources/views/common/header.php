<?php
require __dir__.'/'.'../common/misc_functions.php';
$id=returnUser();
?>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">eLibrary</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-center">
            <?php if ($id=='admin'): ?>
              <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <?php else:?>
             <li class="nav-item active">
              <a class="nav-link" href="./index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="./admins_views/index.php">Admin</a>
            </li>
            <?php endif;?>
           </ul>
          </div>
      </nav>
    </header>
 <?php if ($id=='admin'): ?>
<div class="mt-5"></div>
<?php endif; ?>