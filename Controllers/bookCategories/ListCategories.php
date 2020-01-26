<?php
$category = new Categories();
$categories=$category->fetchCategories();
$categories1=$category->fetchCategories();
require __dir__.'/'.'../../Views/bookCategories/listCategories_table.view.php';
?>