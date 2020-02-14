<?php
$category=new Categories();
$allCategories=$category->fetchCategories();
?>
<form action='/filterBook' method="POST" class="form-inline">
	<div class="input-group mx-auto">
		<select class="input-control custom-select " onchange="this.form.submit()" id="category" name="fcid">
			<option selected disabled>Filter Books</option>
			<option value="">All Categories</option>
			<?php
			while($row=mysqli_fetch_assoc($allCategories)):
				$cname=$row['category_name'];
				$cid=$row['cid'];
				?>
				<option value="<?=$cid?>"><?=$cname?></option>
			<?php endwhile;?>
		</select>
	</div>
</form>

