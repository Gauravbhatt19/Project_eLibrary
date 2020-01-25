<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
  require __dir__.'/'.'../../Controllers/Auth/checkAuthentication.php';
  if(!isset($_SESSION)) 
  { 
    session_start(); 
  } 
  if(isset($_SESSION['users_type']))
    {   if($_SESSION['users_type']=='admin');
  elseif($_SESSION['users_type']=='reader')
    header("location:/readers");
}
else{
  session_destroy();
}
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_css.php';
?>    
<title>eLibrary | Admins Dashboard</title>
<script type="text/javascript">
  function addBookModal(){
    alert("Hello");
  }
</script>
</head>
<body>
  <?php
  include __dir__.'/'.'../common/header.php';
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg m-1">
       <div class="border border-secondary p-4 rounded bg-light">
        <h5 class="text-center">Categories</h5>
        <?php
        include __dir__.'/'.'../readers_views/listOfCategories.php';
        ?>     
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>         <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="form">
            <form action='/tacdda' method="POST" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Enter Category Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter Category Name" required oninvalid="this.setCustomValidity('Enter Valid Category Name')"
                    oninput="this.setCustomValidity('')">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> 
    </div>
    <div class="col-lg m-1">
     <div class="border border-secondary p-4 rounded bg-light">
      <h5 class="text-center">List of Users</h5>
      <?php
      include __dir__.'/'.'../readers_views/listOfUsers.php';
      ?> 
    </div>
  </div>
</div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg m-1">
      <div class="border border-secondary p-4 rounded bg-light">
        <h5 class="text-center">List of Books</h5>                
        <?php
        include __dir__.'/'.'../books_views/listOfAvailableBooks.php';
        ?>      
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addBookModal">Add Book</button>         <div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="form">
            <form action='/koobdda' method="POST" enctype="multipart/form-data">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Enter Book Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="book_name">Book Name</label>
                    <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter Book Name" required oninvalid="this.setCustomValidity('Enter Valid Book Name')"
                    oninput="this.setCustomValidity('')">
                  </div>
                  <div class="form-group">
                    <label for="author_name">Author Name</label>
                    <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Enter Author Name" required oninvalid="this.setCustomValidity('Enter Valid Author Name')"
                    oninput="this.setCustomValidity('')">
                  </div>
                  <div class="form-group">
                    <label for="book_edition">Book Edition</label>
                    <input type="text" class="form-control" id="book_edition" name="book_edition" placeholder="Enter Book Edition" required oninvalid="this.setCustomValidity('Enter Valid Book Edition')"
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
                        echo "<label for='cat".$i."' class='form-control'>".$row23['category_name']." <input type='checkbox' name='cat".$i."' id='cat".$i."' value='".$row23['cid']."'></label>";
                        $i++;
                        if($i%3==0)
                          echo "</div><div class='input-group'>";
                      }
                      ?>
                    </div>

                  </div>

                  <div class="form-group">
                    <label for="book_cover">Book Cover (size < 1MB)</label>
                    <div class="input-group mb-3">
                      <div class="custom-file">
<input type="file" class="custom-file-input" accept="image/*" id="book_cover" name="book_cover">
                      <label class="custom-file-label" for="book_cover">Choose Image File</label>
                      </div>
                    </div>


                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add Book</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



  </div>
</div>
<?php
include __dir__.'/'.'../common/footer.php';
?>
<?php
require __dir__.'/'.'../../resources/bootstrap/bootstrap4_js.php';
?>
</body>
</html>