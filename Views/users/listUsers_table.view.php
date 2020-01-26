<div class="container-fluid">
  <div class="row">
    <div class="col-lg m-1">
     <div class="border border-secondary p-4 rounded bg-light">
      <h5 class="text-center">List of Users</h5>
      <div class="table-responsive" style="height: 288px; overflow-y:scroll;">
        <table class="table">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col" class="text-left">Full Name</th>
              <th scope="col">Type</th>
            </tr>
          </thead>
          <tbody>
           <?php
           $i=1;
         while($row=mysqli_fetch_assoc($rows)):
           ?>
            <tr>
              <th class="text-center"><?=$i++?></th>
              <td><?=$row['user_name'] ?></td>
              <td class="text-center"><?=($row['type']==0)?'Admin':'Readers'; ?></td>
            </tr>
          <?php endwhile;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
   