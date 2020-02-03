<div class="container-fluid h-100" >
  <div class="row p-3 h-100">
    <div class="col-lg m-1">
     <div class="border border-secondary p-4 rounded bg-light  h-100">
      <h5 class="text-center">List of Book Read</h5>
      <div class="table-responsive" style="height:95%;overflow-y:scroll;">
        <table class="table table-striped">
          <thead>
            <tr class="text-center">
              <th scope="col">#</th>
              <th scope="col" class="text-left">Book Name</th>
              <th scope="col" class="text-left">Author Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody >
            <?php $i=0;
            $book = new Books;
            while($bok=mysqli_fetch_assoc($readBookss)):  
              $bid=$bok['bid'];
              $row=$book->fetchBook($bid);
              ?>
              <tr>
                <th class="text-center"><?=++$i?></th>
                <td><?=$row['book_name'] ?></td>
                <td><?=$row['author_name'] ?></td>
                <td class="text-center">
                  <?php $lnk='/readbook?dbid='; ?> 
                <a onclick="uncheck('<?=$bid?>','<?=$lnk?>','0')" href='javascript:void(0);' class='card-link text-danger'> Uncheck</a>
               </td> 
             </tr>
           <?php endwhile;
          ?>
         </tbody>
       </table>
       <?php  if($i==0):?>
           <h1 class="text-center">You haven't read any book yet.</h1>
              <?php endif; ?>
     </div>   
   </div> 
 </div>
</div> 
</div> 


