<div class="modal fade" id="addBookModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="form">
    <form action='/addbook' method="POST" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Enter Book Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter Book Name *" required oninvalid="this.setCustomValidity('Enter Valid Book Name')"
            oninput="this.setCustomValidity('')">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="author_name" name="author_name" placeholder="Enter Author Name *" required oninvalid="this.setCustomValidity('Enter Valid Author Name')"
            oninput="this.setCustomValidity('')">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="book_edition" name="book_edition" placeholder="Enter Book Edition *" required oninvalid="this.setCustomValidity('Enter Valid Book Edition')"
            oninput="this.setCustomValidity('')">
          </div>
          <div class="form-group">&nbsp;&nbsp;&nbsp;Book Categories *
           <div class="input-group">
             <?php 
             $i=1;
             while($categoryFetch=mysqli_fetch_assoc($categories)):  
              $makeId='cid'.$i;
              $cname=$categoryFetch['category_name'];
              $cid=$categoryFetch['cid'];
              ?>
              <label <?="for='{$makeId}'"?> class='form-control'><?=$cname?> <input type='checkbox' <?="name='{$makeId}' id='{$makeId}'  value='{$cid}' "?> ></label>
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
        <div class="custom-file">
  <input type="file" class="custom-file-input" id="book_cover" accept="image/*" name="book_cover" required>
  <label class="custom-file-label" for="book_cover">Book Cover *</label>
  <small class="form-text text-muted ml-1">size must be less than 1mb</small>
</div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Add Book</button>
      </div>
    </div>
  </form>
</div>
</div>