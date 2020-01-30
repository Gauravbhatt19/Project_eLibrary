 <div class="border border-secondary p-4 rounded bg-light col-sm-8 col-lg-12 mx-auto">
  <form action="/registration" method="post" onsubmit="return passwordMatch()">
    <h5 class="text-center">Welcome you</h5>   
    <input type="text" class="form-control mt-4" name="rname" id="rname" placeholder="Enter Full Name *" required oninvalid="this.setCustomValidity('Enter Valid Name')"
    oninput="this.setCustomValidity('')" >
        <small class="form-text text-muted text-danger"><?=$msg1?></small>
    <input type="email" class="form-control  mt-2" name="remailid" id="remailid" placeholder="Enter email *" required oninvalid="this.setCustomValidity('Enter Valid Email Address')"
    oninput="this.setCustomValidity('')" >
    <small class="form-text text-muted text-danger"><?=$msg2?></small>
   <input type="password" class="form-control  mt-2" name="rpassword"  minlength="8" id="rpassword" placeholder="Password *" required oninvalid="this.setCustomValidity('Enter Password')" oninput="this.setCustomValidity('')" >
      <small id="error" class="form-text text-muted text-danger"><?=$msg3?></small>
    <input type="password" class="form-control  mt-2" id="password1"   minlength="8"placeholder="Confirm Password *" required oninvalid="this.setCustomValidity('Enter Password Again')" oninput="this.setCustomValidity('')" >
  <button class="btn  btn-primary btn-block mt-4 mb-3" type="submit">Register</button>
</form>          
</div>
</div>