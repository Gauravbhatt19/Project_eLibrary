<?php
$category=new Categories();
$allCategories=$category->fetchCategories();
?>
<form action='/filterBook' method="POST" class="form-inline mr-md-5 mr-0">
	<div class="input-group mx-auto">
		<select class="input-control custom-select " id="category" name="fcid">
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
		<div class="input-group-append">
			<button class="btn btn-outline-secondary  my-2 my-sm-0 mr-sm-0 ml-auto" type="submit">Filter</button>
		</div>
	</div>
</form>

