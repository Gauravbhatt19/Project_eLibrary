<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  require __dir__.'/'.'../../resources/bootstrap/bootstrap4_header.php';
  ?>    
  <title>eLibrary | Readers Dashboard</title>
  <script type="text/javascript">

  </script>
</head>
<body>
  <?php
  include __dir__.'/'.'../common/header.php';
  $bid=$_GET['bid'];
  $qry="SELECT * FROM books WHERE bid='{$bid}'";
  $result=mysqli_query($conn,$qry);
  $row=mysqli_fetch_assoc($result);
  $book_name=$row['book_name'];
  $book_categories=$row['book_categories'];
  $author_name=$row['author_name'];
  $edition=$row['edition'];
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md m-3">
        <div class="modal-dialog" role="form">
          <form action='/koobdom' method="POST">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Book Details</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="book_name">Book Name</label>
                  <input type="text" class="form-control" id="book_name" name="book_name" value="<?=$book_name?>" required oninvalid="this.setCustomValidity('Enter Valid Book Name')"
                  oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label for="author_name">Author Name</label>
                  <input type="text" class="form-control" id="author_name" name="author_name" value="<?=$author_name?>" required oninvalid="this.setCustomValidity('Enter Valid Author Name')"
                  oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label for="book_edition">Book Edition</label>
                  <input type="text" class="form-control" id="book_edition" name="book_edition"  value="<?=$edition?>"required oninvalid="this.setCustomValidity('Enter Valid Book Edition')"
                  oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label for="book_categories">Book Categories</label>
                  <input type="text" class="form-control"  id="book_categories" name="book_categories"   value="<?=$book_categories?>" required oninvalid="this.setCustomValidity('Enter Valid Book Categories')"
                  oninput="this.setCustomValidity('')">
                  <input type="hidden" name="bid"   value="<?=$bid?>">
                </div>
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
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_footer.php';
?>
</body>
</html>