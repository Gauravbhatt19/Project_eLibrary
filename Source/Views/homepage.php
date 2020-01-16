<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
      require __dir__.'/'.'../resources/bootstrap/bootstrap4_header.php';
    ?>    
    <title>eLibrary</title>
    <script type="text/javascript">
      function passwordMatch(){
       var pass=document.getElementById('rpassword').value;
       var confirmPass=document.getElementById('password1').value;
       if(pass===confirmPass){
        return true;
      }
      else{
        alert("Confirm Password doesn\'t matches with password .! Try Again.!");
        document.getElementById('password1').focus();
       return false;
      }
      }
    </script>
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
                <form action="/registration" method="post" onsubmit="return passwordMatch()">
                <div class="form-group">
                  <label for="rname">Full Name</label>
                  <input type="text" class="form-control" name="rname" id="rname" placeholder="Enter Full Name" required oninvalid="this.setCustomValidity('Enter Valid Name')"
    oninput="this.setCustomValidity('')" >
                </div>
                <div class="form-group">
                  <label for="remailid">Email address</label>
                  <input type="email" class="form-control" name="remailid" id="remailid" placeholder="Enter email" required oninvalid="this.setCustomValidity('Enter Valid Email address')"
    oninput="this.setCustomValidity('')" >
                </div>
                <div class="form-group">
                  <label for="rpassword">Password</label>
                  <input type="password" class="form-control" name="rpassword" id="rpassword" placeholder="Password" required oninvalid="this.setCustomValidity('Enter Password')"
    oninput="this.setCustomValidity('')" >
                </div>
                <div class="form-group">
                  <label for="password1">Confirm Password</label>
                  <input type="password" class="form-control" id="password1" placeholder="Confirm Password" required oninvalid="this.setCustomValidity('Enter Password Again')"
    oninput="this.setCustomValidity('')" >
                </div>
                <br>
                <div class="row">
               <span class="col-md-4"><button type="submit" class="btn btn-success btn-block" style="">Register</button>
                </span>
                <span class="col-md-8 text-center">Or &nbsp;&nbsp;&nbsp;&nbsp;Register using&nbsp;&nbsp;<a href="http://www.google.com" class="text-danger"><i class="fas fa-envelope"></i><u>Gmail</u></a></span></div>
              </form>
            </div>
          </div>
      </div>
    </div>
    <?php
include __dir__.'/common/footer.php';
?>
      <?php
      require __dir__.'/'.'../resources/bootstrap/bootstrap4_footer.php';
    ?>
  </body>
</html>