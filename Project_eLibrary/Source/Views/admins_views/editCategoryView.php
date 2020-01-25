<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  require __dir__.'/'.'../../resources/bootstrap/bootstrap4_css.php';
  require __dir__.'/'.'../../Controllers/connection.php';
  ?>    
  <title>eLibrary</title>
  <script type="text/javascript">

  </script>
</head>
<body>
  <?php
  include __dir__.'/'.'../common/header.php';
  $cid=$_GET['eid'];
  $qry="SELECT * FROM book_categories WHERE cid='{$cid}'";
  $result=mysqli_query($conn,$qry);
  $row=mysqli_fetch_assoc($result);
  $category_name=$row['category_name'];
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md m-3">
        <div class="modal-dialog" role="form">
          <form action='/taced' method="POST" enctype="multipart/form-data">
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
                <a class="btn btn-secondary" href='/admins'>Close</a>
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>    <?php
include __dir__.'/'.'../common/footer.php';
?>
<?php
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_js.php';
?>
</body>
</html>