function passwordMatch(){
  var pass=document.getElementById('rpassword').value;
  var confirmPass=document.getElementById('password1').value;
  if(pass===confirmPass){
    return true;
  }
  else{
   document.getElementById('error').innerHTML="<div class='mt-2 alert alert-warning alert-dismissible fade show' role='alert'>  <strong>Try Again!</strong> Confirm Password doesn\'t matches with password .!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    document.getElementById('rpassword').focus();
    return false;
  }
}
          function logout(){
            var test= window.confirm("Are you sure, You want Logout !");
            if(test == true){
              var url='/logout';
              window.location=url;
          }
        }