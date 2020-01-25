<?php
$user = new Users();
$rows=$user->fetchUsers();
require __dir__.'/'.'../../Views/users/listUsers_table.view.php';
?>