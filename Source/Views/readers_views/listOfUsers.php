<div class="table-responsive">
  <table class="table">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col" class="text-left">Full Name</th>
        <th scope="col">No. of Books Read</th>
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
        <td class="text-center"><?=$row['no_of_books_read'] ?></td>
      </tr>
    <?php endwhile;?>
  </tbody>
</table>
</div>