<div class="col-lg m-1 h-100">
 <div class="border border-secondary py-4 rounded bg-light h-100">
  <h5 class="text-center">Categories</h5>
  <div class="table-responsive" style="height: 98%; overflow-y:scroll;">
    <table class="table table-striped">
      <thead style="">
        <tr class="text-center">
          <th scope="col" class="my-auto">#</th>
          <th scope="col" class="text-left">Name</th>
          <th scope="col"></th>
          <th class='text-center p-0 pb-1'> <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addCategoryModal">Add</button> </th>
        </tr>
      </thead>
      <tbody >
        <?php $i=1;
        while($row=mysqli_fetch_assoc($categories)):  ?>
          <tr>
            <th class="text-center"><?=$i++?></th>
            <td><?=$row['category_name'] ?></td>
            <td class="text-center">
              <a data-toggle="modal" data-target="#editCategoryModal" href='javascript:void(0);' data-cname="<?=$row['category_name']?>" data-cid="<?=$row['cid']?>"> Edit</a>
            </td> 
            <?php $lnk='delcat?cid='; $cid=$row['cid']; ?> 
            <td class="text-center"><a class="text-danger" onclick="del('<?=$cid?>','<?=$lnk?>')" href="javascript:void(0)"> Delete</a></td> 
          </tr>
        <?php endwhile;?>
      </tbody>
    </table>
  </div>   
  <?php  require __dir__.'/'.'../../Views/bookCategories/addCategory_form.view.php'; require __dir__.'/'.'../../Views/bookCategories/editCategory_form.view.php'; ?>

</div> 
</div>
</div> 
</div> 


