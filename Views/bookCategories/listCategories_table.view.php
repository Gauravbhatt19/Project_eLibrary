<div class="col-lg m-1">
 <div class="border border-secondary p-4 rounded bg-light">
  <h5 class="text-center">Categories</h5>
  <div class="table-responsive" style="height: 250px; overflow-y:scroll;">
    <table class="table">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col" class="text-left">Category</th>
          <th scope="col">Action 1</th>
          <th scope="col">Action 2</th>
        </tr>
      </thead>
      <tbody >
        <?php $i=1;
        while($row=mysqli_fetch_assoc($categories)):  ?>
          <tr>
            <th class="text-center"><?=$i++?></th>
            <td><?=$row['category_name'] ?></td>
            <td class="text-center">
              <a <?php echo 'href=editcat?cid='.$row['cid']; ?> > Edit</a>
            </td> 
            <td class="text-center"><a class="text-danger"<?php echo 'href=delcat?cid='.$row['cid']; ?> > Delete</a></td> 
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


