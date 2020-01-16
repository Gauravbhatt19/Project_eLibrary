<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
      include '../bootstrap/bootstrap4_header.php';
    ?>    
    <title>eLibrary</title>
  </head>
  <body>
    <?php
        include __dir__.'/common/header.php';
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md m-3">
          <div class="border border-secondary p-4 rounded bg-light">
              <h5 class="text-center">Login Form</h5>                
              <?php
                  include __dir__.'/common/login.php';
              ?>            
          </div>
        </div>
        <div class="col-md m-3">
           <div class="border border-secondary p-4 rounded bg-light">
                <h5 class="text-center">Registration Form</h5>
                <form>
                <div class="form-group">
                  <label for="emailid">Email address</label>
                  <input type="email" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="password1">Confirm Password</label>
                  <input type="password" class="form-control" id="password1" placeholder="Confirm Password">
                </div>
                <br>
               <span class="col-sm-6"><button type="submit" class="btn btn-success" style="margin-left:-12px;">Register</button>
                </span>
                <span class="col-sm-6">Register using  <a href="http://www.google.com" class=" text-danger"><i class="fas fa-envelope"></i>Gmail</a></span>
              </form>
            </div>
          </div>
      </div>
    </div>
    <?php
include __dir__.'/common/footer.php';
?>
      <?php
      include '../bootstrap/bootstrap4_footer.php';
    ?>
  </body>
</html>