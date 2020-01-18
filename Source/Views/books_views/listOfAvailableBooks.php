<?php
require __dir__.'/'.'../../Models/Books/books_data.php';
$i=0;
while($row=mysqli_fetch_assoc($result)):  ?>
  <?php  
  if($i==0){
    echo "<div class='row'>";
  }
  elseif($i%3==0){
    echo "</div><div class='row'>";
  }
  $i++;?>
  <div class="card col-lg-5 col-md-3 col-sm-5 m-2">
    <img class="card-img-top" src="..." alt="Book Cover">
    <div class="card-body">
      <h5 class="card-title"><?=$row['book_name'] ?></h5>
      <p class="card-text"><?=$row['edition'] ?></p>
      <p class="card-text"><?=$row['author_name'] ?></p>
    </div>
    <div class="card-body">
      <p class="card-text"><?=$row['book_categories'] ?></p>
      <?php 
      $bid=$row['bid'];
      if($id=='reader') { echo "<a href='/daer?bid={$bid}' class='card-link'>Read Book</a>"; }
      else { echo "<a href='/edit?bid={$bid}' class='card-link'>Edit</a><a href='/del?bid={$bid}' class='card-link'>Delete</a>";} ?>
    </div>
  </div>
  <?php
endwhile;
echo "</div>"?>
