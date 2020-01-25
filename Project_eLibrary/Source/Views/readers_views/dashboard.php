<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  if(isset($_SESSION['users_type']))
  {   if($_SESSION['users_type']=='admin'){
    header('location:/admins');}
    elseif($_SESSION['users_type']=='reader');
      // header("location:/readers");
  }
  else{
    session_destroy();
  }
  require __dir__.'/'.'../../resources/bootstrap/bootstrap4_css.php';
  ?>    
  <title>eLibrary | Readers Dashboard</title>
  <script type="text/javascript">

  </script>
</head>
<body>
  <?php
  include __dir__.'/'.'../common/header.php';
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg m-3">
        <div class="border border-secondary p-4 rounded bg-light">
          <h5 class="text-center">Books Available</h5>                
          <?php
          include __dir__.'/'.'../books_views/listOfAvailableBooks.php';
          ?>            
        </div>
      </div>
      <div class="col-lg m-3">
       <div class="border border-secondary p-4 rounded bg-light">
        <h5 class="text-center">Books Read</h5>
        <?php
        include __dir__.'/'.'../books_views/listOfReadBooks.php';
        ?> 
      </div>
    </div>
  </div>
</div>
<?php
include __dir__.'/'.'../common/footer.php';
?>
<?php
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_js.php';
?>
</body>
</html>