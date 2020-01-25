<div class="container-fluid">
  <div class="row">
    <div class="col-md m-3">
      <div class="modal-dialog" role="form">
        <form action='/editcat' method="POST">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Edit Category Details</h5>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="category_name">Category Name</label>
                <input type="text" class="form-control" id="category_name" name="category_name" value="<?=$category_name?>" required oninvalid="this.setCustomValidity('Enter Valid Category Name')"
                oninput="this.setCustomValidity('')">
              </div>
              <input type="hidden" name="cid"   value="<?=$cid?>">
            </div>
            <div class="modal-footer">
              <a class="btn btn-secondary" href='/login'>Close</a>
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>