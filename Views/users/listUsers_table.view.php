<div class="container-fluid mt-5 mb-5">
  <div class="row">
    <div class="col-lg m-1">
     <div class="border border-secondary py-4 rounded bg-light">
      <h5 class="text-center">List of Users</h5>
      <div class="table-responsive" style="height: 400px; overflow-y:scroll;">
        <table class="table table-striped">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col" class="text-left">Full Name</th>
              <th scope="col">No. of Books Read</th>
            </tr>
          </thead>
          <tbody>
           <?php
           $i=1;
         while($row=mysqli_fetch_assoc($rows)):
          $no_of_books_read=mysqli_num_rows($user->fetchBooks($row['uid']));
           ?>
            <tr>
              <th class="text-center"><?=$i++?></th>
              <td><?=$row['user_name'] ?></td>
              <td class="text-center"><?=$no_of_books_read ?></td>
            </tr>
          <?php endwhile;?>
        </tbody>
      </table>
    </div>
  </div>
</div>
   