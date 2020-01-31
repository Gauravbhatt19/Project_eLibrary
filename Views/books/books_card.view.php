<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-md m-3">
      <div class="p-4">
        <div class="row">
          <h5 class="col text-center">Books Available</h5>                
          <?php if($_SESSION['type']=='inadmin'): ?>
            <button type="button" class="col-sm-3 mr-5 col-lg-2 btn btn-outline-success" data-toggle="modal" data-target="#addBookModal">Add Book</button>  
            <?php  require __dir__.'/'.'../../Views/books/addBook_form.view.php'; ?>
          <?php endif; ?>
        </div>
        <div class='row mt-5'>
          <?php while($row=mysqli_fetch_assoc($rows)):
            if(isset($bookIds)):
              if(in_array($row['bid'], $bookIds)):
                ?>
                <div class="card col-lg-3 col-md-4 col-sm-6">
                  <?php $fetch='../../resources/uploads/'.$row['cover_image_name'].".jpg";?>
                  <img class='mt-3 align-self-center' style='height:255px; width:170px;' <?="src='{$fetch}'";?> alt='Book Cover'>
                  <div class="card-body">
                    <h5 class="card-title"><?=$row['book_name'] ?></h5>
                    <p class="card-text"><?=$row['edition'] ?><br/>by <?=$row['author_name'] ?></p>
                    <?php 
                    $bid=$row['bid'];
                    $uid=$_SESSION['uid'];
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
                  </div>
                </div>
              <?php endif;
            else:
              ?>
              <div class="card col-lg-3 col-md-4 col-sm-6 bg-white border shadow-sm text-sm-left text-center">
                <?php $fetch='../../resources/uploads/'.$row['cover_image_name'].".jpg";?>
                <img class='m-0 mt-3 p-0 align-self-center' style='height:255px; width:170px;' <?="src='{$fetch}'";?> alt='Book Cover'>
                <div class="card-body p-2 m-0">
                  <h5 class="card-title mx- my-0"><?=$row['book_name'] ?></h5>
                  <p class="card-text mx-auto"><?=$row['edition'] ?><br/>by <?=$row['author_name'] ?></p>
                  <?php 
                  $bid=$row['bid'];
                  $uid=$_SESSION['uid'];
                  $myCategories=$book->fetchCategories($bid);
                  while($myCategory=mysqli_fetch_assoc($myCategories)):
                    $cid=$myCategory['cid'];
                    $category=new Categories();
                    $category=$category->fetchCategory($cid);
                    $cname=$category['category_name'];
                    ?>
                    <span class="mx-auto card-text badge badge-secondary"><?=$cname ?></span> 
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
                    <a <?="href='/readbook?bid={$bid}'"?> class=' mx-auto card-link'>Read Book</a>
                    <?php else: ?>
                      <a <?="href='/readbook?dbid={$bid}'"?> class='mx-auto card-link text-danger'>Uncheck</a> 
                    <?php endif; ?> 
                  <?php endif; ?>
                  <?php if($_SESSION['type']=='inadmin'): ?>
                   <a data-toggle="modal" data-target="#editBookModal" href='javascript:void(0);' data-bid="<?=$bid?>"  data-bookname="<?=$book_name?>"  data-authorname="<?=$author_name?>"  data-edition="<?=$edition?>" class='mx-auto card-link'> Edit</a>
                   <?php 
                   require __dir__.'/'.'../../Views/books/editbook_form.view.php';
                   $lnk='delbook?bid='; ?> 
                   <a onclick="del('<?=$bid?>','<?=$lnk?>')" href='javascript:void(0);' class='card-link text-danger'>Delete</a>
                 <?php endif; ?>
               </div>
             </div>
           <?php endif;
         endwhile;?>
       </div>
     </div>
   </div>
 </div>
</div>