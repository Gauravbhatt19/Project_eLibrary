<div class="container-fluid">
  <div class="row p-3">
    <div class="col-lg m-1">
     <div class="border border-secondary p-4 rounded bg-light">
      <h5 class="text-center">List of Book Read</h5>
      <div class="table-responsive" style="height: 250px; overflow-y:scroll;">
        <table class="table">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col" class="text-left">Book Name</th>
              <th scope="col" class="text-left">Author Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody >
            <?php $i=1;
            $book = new Books;
            while($bok=mysqli_fetch_assoc($readBookss)):  
              $bid=$bok['bid'];
              $row=$book->fetchBook($bid);
              ?>
              <tr>
                <th class="text-center"><?=$i++?></th>
                <td><?=$row['book_name'] ?></td>
                <td><?=$row['author_name'] ?></td>
                <td class="text-center"><a class="text-danger"<?="href='/readbook?dbid={$bid}'"?> > Uncheck</a></td> 
              </tr>
            <?php endwhile;?>
          </tbody>
        </table>
      </div>   
      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addCategoryModal">Add Category</button>  
      <?php  require __dir__.'/'.'../../Views/bookCategories/addCategory_form.view.php'; ?>

    </div> 
  </div>
</div> 
</div> 


