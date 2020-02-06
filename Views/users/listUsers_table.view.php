<div class="container-fluid pt-5 pb-5 min-vh-100 bg-light">
  <div class="row min-vh-100">
    <div class="col-lg m-1">
     <div class="border border-secondary py-4 bg-white rounded min-vh-100">
      <h5 class="text-center">List of Users</h5>
      <div class="table-responsive" style="height:98%;overflow-y:scroll;">
        <table class="table table-striped">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col" class="text-left">Full Name</th>
              <th scope="col">No. of Books Read</th>
              <th scope="col">Account Created</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
           <?php
           $i=0;
           while($row=mysqli_fetch_assoc($rows)):
            if($row['type']!=0):
            $no_of_books_read=mysqli_num_rows($user->fetchBooks($row['uid']));
            ?>
            <tr>
              <th class="text-center"><?=++$i?></th>
              <td><?=$row['user_name'] ?></td>
              <td class="text-center"><?=$no_of_books_read ?></td>
              <td class="text-center"><?=$row['last_login'] ?></td>
              <?php $lnk='delusr?uid='; $uid=$row['uid']; ?> 
            <td class="text-center"><a class="text-danger" onclick="del('<?=$uid?>','<?=$lnk?>')" href="javascript:void(0)"><?php if($row['user_name']!='admin') echo "Delete";?></a></td> 
            </tr>
          <?php endif;endwhile; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
