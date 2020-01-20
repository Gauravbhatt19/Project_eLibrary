<div class="table-responsive">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col" class="text-left">Category</th>
        <th scope="col">Action 1</th>
        <th scope="col">Action 2</th>
      </tr>
    </thead>
    <tbody>
     <?php
     require __dir__.'/'.'../../Models/Readers/categories_data.php';
     $i=1;
     while($row=mysqli_fetch_assoc($result)):  ?>
      <tr>
        <th class="text-center"><?=$i++?></th>
        <td><?=$row['category_name'] ?></td>
        <td class="text-center">
          <a <?php echo 'href=Cate?eid='.$row['cid']; ?> > Edit</a>
        </td> 
        <td class="text-center"><a class="text-danger"<?php echo 'href=Catd?did='.$row['cid']; ?> > Delete</a></td> 
      </tr>
    <?php endwhile;?>
  </tbody>
</table>
</div>