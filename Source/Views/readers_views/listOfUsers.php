<div class="table-responsive">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col" class="text-left">Full Name</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
     <?php
     require __dir__.'/'.'../../Models/Readers/readers_data.php';
     $i=1;
     while($row=mysqli_fetch_assoc($result)):  ?>
      <tr>
        <th class="text-center"><?=$i++?></th>
        <td><?=$row['user_name'] ?></td>
        
          <?php if($row['verified_id']) echo "<td class='text-center text-success'>Verified</td>";
          else echo "<td class='text-center text-danger'>Unverified</td>"; ?>
      </tr>
    <?php endwhile;?>
  </tbody>
</table>
</div>