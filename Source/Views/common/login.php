<form method="POST" action="/logincheck">
  <?php if ($id=='off_admin'): ?>
    <div class="form-group">
      <label for="login">Login Id</label>
      <input type="text" class="form-control" id="login" placeholder="Enter Login Id" name="loginid" required oninvalid="this.setCustomValidity('Enter Valid Login Id')"
      oninput="this.setCustomValidity('')">
      <?php else: ?>
        <div class="form-group">
          <label for="emailid">Email address</label>
          <input type="email" class="form-control" name="emailid" id="emailid"  placeholder="Enter email" required oninvalid="this.setCustomValidity('Enter Valid Emailid')"
          oninput="this.setCustomValidity('')">
        <?php endif; ?>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Enter Valid password')"
        oninput="this.setCustomValidity('')">
        <?php if ($id!='off_admin'): ?><small class="form-text text-muted text-right">Facing problem? <a href="#">Forget Password</a></small><?php endif; ?>
      </div>
      <br>
      <div class="row">
       <span class="col-md-4">
        <button type="submit" class="btn btn-success btn-block">Login</button>
      </span>
      <?php if ($id!='off_admin'): ?>
        <span class="col-md-8 text-center">Or&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Login using&nbsp;&nbsp;<a href="http://www.google.com" class=" text-danger"><i class="fas fa-envelope"></i><u>Gmail</u></a></span>
      <?php endif; ?>
    </div>
  </form>