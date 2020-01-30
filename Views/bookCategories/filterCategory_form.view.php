<?php
$category=new Categories();
$allCategories=$category->fetchCategories();
?>
<form action='/filterBook' method="POST" class="form-inline">
	<select class="input-control mx-auto custom-select" id="category" name="fcid">
		<option selected disabled>Category wise</option>
		<option value="">All Categories</option>
		<?php
		while($row=mysqli_fetch_assoc($allCategories)):
			$cname=$row['category_name'];
			$cid=$row['cid'];
			?>
			<option value="<?=$cid?>"><?=$cname?></option>
		<?php endwhile;?>
	</select>
	<button class="btn btn-outline-secondary  my-2 my-sm-0" type="submit">Filter</button>
</form>

