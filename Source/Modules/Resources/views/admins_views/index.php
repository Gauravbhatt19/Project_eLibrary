<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
      include '../../bootstrap/bootstrap4_header.php';
    ?>    
    <title>eLibrary</title>
  </head>
  <body>
    <?php
        include __dir__.'/'.'../common/header.php';
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md m-3">
          <div class="border border-secondary p-4 rounded bg-light">
              <h5 class="text-center">Login Form</h5>                
              <?php
                  include __dir__.'/'.'../common/login.php';
              ?>            
          </div>
        </div>
      </div>
    </div>
    <?php
include __dir__.'/'.'../common/footer.php';
?>
      <?php
      include '../../bootstrap/bootstrap4_footer.php';
    ?>
  </body>
</html>