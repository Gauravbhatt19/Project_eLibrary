<?php
require __dir__.'/'.'../../Models/Books/books_data.php';
$i=0;
echo "<div class='row'>";
while($row=mysqli_fetch_assoc($result)):  ?>
  <?php  
  $i++;
  if($id=='reader'){
      if(checkUser($row['readers_id'],$_SESSION['uid'])):
  ?>
  <div class="card col-lg-5 col-md-3 col-sm-5 m-2">
    <?php $fetch='../../resources/uploads/'.$row['book_name'].$row['edition'].".jpg";
     echo "<img class='mt-3' style='height:250px;' src='".$fetch."' alt='Book Cover'>";
    ?>
    <div class="card-body">
      <h5 class="card-title"><?=$row['book_name'] ?></h5>
      <p class="card-text"><?=$row['edition'] ?><br/>by <?=$row['author_name'] ?></p>
      <p class="card-text"><?php $cat=explode(',',$row['categories_id']);
                $i=0;
                while(isset($cat[$i])):
              $qry="SELECT * FROM book_categories WHERE cid='$cat[$i]'";
                  $res=mysqli_query($conn,$qry);
                  $rwo=mysqli_fetch_assoc($res);
              ?>
            <span class="badge badge-secondary"><?=$rwo['category_name'] ?></span>
            <?php 
            $i++;
          endwhile;
            ?></p><br>
      <?php 
      $bid=$row['bid'];
      if($id=='reader') { echo "<a href='/nu?bid={$bid}' class='text-danger'>Uncheck</a>"; }
      else { echo "<a href='/edit?bid={$bid}' class='card-link'>Edit</a><a href='/del?bid={$bid}' class='card-link'>Delete</a>";} ?>
    </div>
  </div>
  <?php
endif; }
endwhile;
echo "</div>"?>
