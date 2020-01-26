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
                <?php if($_SESSION['type']=='inreader'): 
                  $booksRead=$user->fetchBooks($uid);
                  $ch=$booksRead->fetch_all();
                  $check=NULL;
                  foreach ($ch as $val) {
                   if(in_array($bid, $val))
                     $check='checked';
                 }
                  if(!$check): ?>
                  <a <?="href='/readbook?bid={$bid}'"?> class='card-link'>Read Book</a>
                <?php else: ?>
                  <a <?="href='/readbook?dbid={$bid}'"?> class='card-link text-danger'>Uncheck</a> 
              <?php endif; ?> 
              <?php endif; ?>
                <?php if($_SESSION['type']=='inadmin'): ?>
                  <a <?="href='/editbook?bid={$bid}'"?> class='card-link'>Edit</a>
                  <a <?="href='/delbook?bid={$bid}'"?> class='card-link'>Delete</a>
                <?php endif; ?>
              </div>
            </div>
          <?php endwhile;?>
        </div>
        <?php if($_SESSION['type']=='inadmin'): ?>
          <button type="button" class="btn btn-light mt-3" data-toggle="modal" data-target="#addBookModal">Add Book</button>  
          <?php  require __dir__.'/'.'../../Views/books/addBook_form.view.php'; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>