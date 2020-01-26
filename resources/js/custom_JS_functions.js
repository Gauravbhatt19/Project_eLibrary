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