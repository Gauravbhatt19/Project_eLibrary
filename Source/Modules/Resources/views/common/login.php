<form>              <div class="form-group">
                <label for="emailid">Email address</label>
                <input type="email" class="form-control" id="emailid" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
                   <?php if ($id!='admin'): ?><small class="form-text text-muted text-right">Facing problem? <a href="#">Forget Password</a></small><?php endif; ?>
              </div>
              <br>
             <span class="col-sm-6">
              <button type="submit" class="btn btn-success" style="margin-left:-12px;">Login</button>
              </span>
              <?php if ($id!='admin'): ?>
              <span class="col-sm-6">Login using  <a href="http://www.google.com" class=" text-danger"><i class="fas fa-envelope"></i>Gmail</a></span>
            <?php endif; ?>
            </form>