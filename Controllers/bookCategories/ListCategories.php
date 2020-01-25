<?php
$category = new Categories();
$rows=$category->fetchCategories();
require __dir__.'/'.'../../Views/bookCategories/listCategories_table.view.php';
?>