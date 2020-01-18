<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  require __dir__.'/'.'../../resources/bootstrap/bootstrap4_header.php';
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
      <div class="col-md m-3">
        <div class="border border-secondary p-4 rounded bg-light">
          <h5 class="text-center">Books Available</h5>                
          <?php
          include __dir__.'/'.'../books_views/listOfAvailableBooks.php';
          ?>            
        </div>
      </div>
      <div class="col-md m-3">
       <div class="border border-secondary p-4 rounded bg-light">
        <h5 class="text-center">Wanna Read Again ?</h5>
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
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_footer.php';
?>
</body>
</html>