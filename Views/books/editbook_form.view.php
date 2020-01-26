<div class="container-fluid">
  <div class="row">
    <div class="col-md m-3">
      <div class="modal-dialog" role="form">
        <form action='/editbook' method="POST">
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
                <label for="edition">Edition</label>
                <input type="text" class="form-control" id="edition" name="edition" value="<?=$edition?>" required oninvalid="this.setCustomValidity('Enter Valid Edition')"
                oninput="this.setCustomValidity('')">
              </div>
              <div class="form-group">Book Categories:
               <div class="input-group">
                 <?php 
                 $i=1;
                 while($categoryFetch=mysqli_fetch_assoc($categories)):  
                  $makeId='cid'.$i;
                  $cname=$categoryFetch['category_name'];
                  $cid=$categoryFetch['cid'];
                  $checkedCategories=$book->fetchCategories($bid);
                  $ch=$checkedCategories->fetch_all();
                  $check=NULL;
                  foreach ($ch as $val) {
                   if(in_array($cid, $val))
                     $check='checked';
                 }
                 ?>
                 <label <?="for='{$makeId}'"?> class='form-control'><?=$cname?> <input type='checkbox' <?="name='{$makeId}' id='{$makeId}'  value='{$cid}' {$check}"?> ></label>
                 <?php 
                 if($i%2==0):
                  ?>
                </div>
                <div class='input-group'>
                  <?php
                endif;
                $i++;
              endwhile;
              ?>
            </div>
          </div>
          <input type="hidden" name="bid"   value="<?=$bid?>">
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" href='/login'>Close</a>
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>

