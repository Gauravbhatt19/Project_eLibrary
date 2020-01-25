<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  require __dir__.'/'.'../../resources/bootstrap/bootstrap4_css.php';
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
  $book_categories=$row['categories_id'];
  $author_name=$row['author_name'];
  $edition=$row['edition'];
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md m-3">
        <div class="modal-dialog" role="form">
          <form action='/koobdom' method="POST" enctype="multipart/form-data">
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
                 <div class="form-group">Book Categories:
                      <?php
                      $qry23="SELECT * FROM book_categories";
                      $result23=mysqli_query($conn,$qry23);
                      $i=1;

              ?>
                       <div class="input-group">
                    <?php
                      
                       while($row23=mysqli_fetch_assoc($result23)){
                        if(strpos($book_categories,$row23['cid']))
                echo "<label for='cat".$i."' class='form-control'>".$row23['category_name']." <input type='checkbox' name='cat".$i."' id='cat".$i."' value='".$row23['cid']."' checked></label>";
                        
                else
                  echo "<label for='cat".$i."' class='form-control'>".$row23['category_name']." <input type='checkbox' name='cat".$i."' id='cat".$i."' value='".$row23['cid']."'></label>";
                        $i++;
                  if($i%3==0)
                          echo "</div><div class='input-group'>";
                }     ?>
              </div>
                    </div>
                  <input type="hidden" name="bid"   value="<?=$bid?>">
                <div class="form-group">
                  <label for="book_cover">Want to change Book Cover</label>
                  <input type="file" class="form-control" accept="image/*" id="book_cover" name="book_cover">
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
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_js.php';
?>
</body>
</html>