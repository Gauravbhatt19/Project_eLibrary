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
     <span class="col-md-4">
      <button type="submit" class="btn btn-success btn-block">Register</button>
    </span>
  </div>
</form>
</div>