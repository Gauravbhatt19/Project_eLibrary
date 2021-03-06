 <div class="border border-secondary p-4 rounded bg-white col-sm-6 col-9 col-lg-12 mx-auto">
  <form action="/registration" method="post" onsubmit="return (checkFieldName('rname') && checkFieldEmail('remailid') && checkFieldPassword('rpassword') && passwordMatch('rpassword','password1'))">
    <h5 class="text-center">Welcome You</h5>   
    <input type="text" class="form-control mt-4" name="rname" id="rname" placeholder="Enter Full Name *" value="<?=$rname?>" onkeyup="checkFieldName('rname')" onblur="checkFieldName('rname')">
    <small class="form-text text-muted text-danger" id='errorrname'><?=$msg1?></small>
    <input type="email" class="form-control  mt-2" name="remailid" id="remailid" placeholder="Enter Email *" value="<?=$emailid?>" onkeyup="checkFieldEmail('remailid')" onblur="checkFieldEmail('remailid')">
    <small class="form-text text-muted text-danger" id='errorremailid'><?=$msg2?></small>
    <input type="password" class="form-control  mt-2" name="rpassword"  id="rpassword" placeholder="Enter Password *" value="<?=$password?>" onkeyup="checkFieldPassword('rpassword')" onblur="checkFieldPassword('rpassword')">
    <small id="errorrpassword" class="form-text text-muted text-danger"><?=$msg3?></small>
    <input type="password" class="form-control  mt-2" name="password1" id="password1" placeholder="Confirm Password *" onkeyup="passwordMatch('rpassword','password1')" onblur="passwordMatch('rpassword','password1')">
    <small id="errorpassword1" class="form-text text-muted text-danger"></small>
    <button class="btn  btn-primary btn-block mt-2 mb-3" type="submit">Register</button>
    <div class="row mt-3 m-1">
        <hr class="d-inline col">
        <p class="text-muted text-center d-inline col-7 mt-1">or connect with</p>
        <hr class="d-inline col">
    </div>         
    <a href="<?=$loginURL?>" >
        <img src="../resources/images/google_logo.jpg" class="rounded-circle mx-auto d-block p-2"  alt="Login with Google" height="70"  onMouseOver="this.style.boxShadow = '0px 0px 3px #000'; this.style.transitionDuration = '0.3s';" onMouseOut="this.style.boxShadow = '0 0 0 #000'; this.style.transitionDuration = '0.3s';">
    </a>
</form>          
</div>