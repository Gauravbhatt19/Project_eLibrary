<?php
$category=new Categories();
$allCategories=$category->fetchCategories();
?>
<div class="container">
	<div class="row">
		<form action='/filterBook' method="POST" class="input-group">
		<div class="input-group">
			<select class="custom-select" id="category" name="fcid">
				<option selected disabled>Choose Category to filter</option>
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
				<button class="btn btn-outline-secondary" type="submit">Filter</button>
			</div>
		</div>
	</form>
	</div>
</div>
