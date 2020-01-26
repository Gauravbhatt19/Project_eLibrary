<div class="container-fluid">
  <div class="row">
    <div class="col-md m-3">
      <div class="border border-secondary p-4 rounded bg-light">
        <h5 class="text-center">Books Available</h5>                
        <div class='row'>
          <?php while($row=mysqli_fetch_assoc($rows)):  ?>
            <div class="card col-lg-3 col-md-4 col-sm-6">
              <?php $fetch='../../resources/uploads/'.$row['cover_image_name'].".jpg";?>
              <img class='mt-3' style='height:200px;' <?="src='{$fetch}'";?> alt='Book Cover'>
              <div class="card-body">
                <h5 class="card-title"><?=$row['book_name'] ?></h5>
                <p class="card-text"><?=$row['edition'] ?><br/>by <?=$row['author_name'] ?></p>
                <?php 
                $bid=$row['bid'];
                $myCategories=$book->fetchCategories($bid);
                while($myCategory=mysqli_fetch_assoc($myCategories)):
                  $cid=$myCategory['cid'];
                  $category=new Categories();
                  $category=$category->fetchCategory($cid);
                  $cname=$category['category_name'];
                  ?>
                  <span class="card-text badge badge-secondary"><?=$cname ?></span> 
                <?php endwhile;?>
                <br>
                 <br>
                <a <?="href='/editbook?bid={$bid}'"?> class='card-link'>Edit</a>
                <a <?="href='/delbook?bid={$bid}'"?> class='card-link'>Delete</a>
              </div>
            </div>
          <?php endwhile;?>
        </div>
        <button type="button" class="btn btn-light mt-3" data-toggle="modal" data-target="#addBookModal">Add Book</button>  
        <?php  require __dir__.'/'.'../../Views/books/addBook_form.view.php'; ?>
      </div>
    </div>
  </div>
</div>