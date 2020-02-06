<div class="container-fluid bg-light min-vh-100">
  <div class="row">
    <div class="col-md m-3">
      <div class="p-4">
        <div class="row">
          <h5 class="col text-center">Books Available</h5>                
          <?php if($_SESSION['type']=='inadmin'): ?>
            <button type="button" class="col-sm-3 mr-5 ml-5 col-lg-2 btn btn-outline-success" data-toggle="modal" data-target="#addBookModal">Add Book</button>  
            <?php  require __dir__.'/'.'../../Views/books/addBook_form.view.php'; ?>
          <?php endif; ?>
        </div>
        <div class='row mt-5'>
          <?php $i=0;
          while($row=mysqli_fetch_assoc($rows)):
            $i++;
            if(isset($bookIds)):
              if(in_array($row['bid'], $bookIds)):
                ?>
                <div class="col-xl-4 col-lg-6 col-md-12">
                  <div class="card flex-md-row mb-4">
                    <?php $fetch='../../resources/uploads/'.$row['cover_image_name'].".jpg";
                    $bid=$row['bid'];
                    $uid=$_SESSION['uid'];
                    $myCategories=$book->fetchCategories($bid);
                    ?>
                    <img class='align-self-center m-2'  style="height: 255px; width: 170px;" height=255 width=170  <?="src='{$fetch}'";?> alt='Book Cover'>
                    <div class="card-body d-flex  flex-column text-md-left text-center">
                      <h3 class="mb-0">
                        <strong class="d-inline-block mb-2"><?=$row['book_name'] ?></strong>
                      </h3>
                      <div class="text-dark"><?=$row['edition'] ?></div>
                      <div class="mb-1 text-muted">by <?=$row['author_name'] ?></div>
                      <p class="card-text mb-auto">
                        <?php 
                        while($myCategory=mysqli_fetch_assoc($myCategories)):
                          $cid=$myCategory['cid'];
                          $category=new Categories();
                          $category=$category->fetchCategory($cid);
                          $cname=$category['category_name'];
                          ?>
                          <span class="mx-auto card-text badge badge-secondary"><?=$cname ?></span> 
                        <?php endwhile;?>
                      </p>
                      <div class="card-text mb-auto">
                        <?php if($_SESSION['type']=='inreader'): 
                          $booksRead=$user->fetchBooks($uid);
                          $ch=$booksRead->fetch_all();
                          $check=NULL;
                          foreach ($ch as $val) {
                           if(in_array($bid, $val))
                             $check='checked';
                         }
                         if(!$check): ?>
                          <a <?="href='/readbook?bid={$bid}'"?> class='mx-auto card-link'>Read Book</a>
                          <?php else:  $lnk='/readbook?dbid='; ?> 
                            <a onclick="uncheck('<?=$bid?>','<?=$lnk?>')" href='javascript:void(0);' class='mx-auto card-link text-danger'> Uncheck</a>
                          <?php endif; ?> 
                          <?php 
                        endif; ?>
                        <?php if($_SESSION['type']=='inadmin'): ?>
                          <a <?="href='/editbook?bid={$bid}'"?> class='mx-auto card-link'>Edit</a>
                          <?php $lnk='delbook?bid='; ?> 
                          <a onclick="del('<?=$bid?>','<?=$lnk?>')" href='javascript:void(0);' class='mx-auto card-link text-danger'>Delete</a>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif;
            else:
              ?>
              <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card flex-md-row mb-4">
                  <?php $fetch='../../resources/uploads/'.$row['cover_image_name'].".jpg";
                  $bid=$row['bid'];
                  $uid=$_SESSION['uid'];
                  $myCategories=$book->fetchCategories($bid);
                  ?>
                  <img class='align-self-center m-2' style="height: 255px; width: 170px;" height=255 width=170  <?="src='{$fetch}'";?> alt='Book Cover'>
                  <div class="card-body d-flex flex-column text-md-left text-center">
                    <h3 class="mb-0">
                      <strong class="d-inline-block mb-2"><?=$row['book_name'] ?></strong>
                    </h3>
                    <div class="text-dark"><?=$row['edition'] ?></div>
                    <div class="mb-1 text-muted">by <?=$row['author_name'] ?></div>
                    <p class="card-text mb-auto">
                      <?php 
                      while($myCategory=mysqli_fetch_assoc($myCategories)):
                        $cid=$myCategory['cid'];
                        $category=new Categories();
                        $category=$category->fetchCategory($cid);
                        $cname=$category['category_name'];
                        ?>
                        <span class="mx-auto card-text badge badge-secondary"><?=$cname ?></span> 
                      <?php endwhile;?>
                    </p>
                    <div class="card-text mb-auto">
                      <?php if($_SESSION['type']=='inreader'): 
                        $booksRead=$user->fetchBooks($uid);
                        $ch=$booksRead->fetch_all();
                        $check=NULL;
                        foreach ($ch as $val) {
                         if(in_array($bid, $val))
                           $check='checked';
                       }
                       if(!$check): ?>
                        <a <?="href='/readbook?bid={$bid}'"?> class='mx-auto card-link'>Read Book</a>
                        <?php else:  $lnk='/readbook?dbid='; ?> 
                          <a onclick="uncheck('<?=$bid?>','<?=$lnk?>')" href='javascript:void(0);' class='mx-auto card-link text-danger'> Uncheck</a>
                        <?php endif; ?> 
                        <?php 
                      endif; ?>
                      <?php if($_SESSION['type']=='inadmin'): ?>
                        <a <?="href='/editbook?bid={$bid}'"?> class='mx-auto card-link'>Edit</a>
                        <?php $lnk='delbook?bid='; ?> 
                        <a onclick="del('<?=$bid?>','<?=$lnk?>')" href='javascript:void(0);' class='mx-auto card-link text-danger'>Delete</a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php  endif; endwhile;
            if($i==0): ?>
                <h1 class="mx-auto">No Books Found</h1>
              <?php endif;?>
          </div>
        </div>
      </div>
    </div>
  </div>