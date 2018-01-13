<?php 
require_once 'models/User.php';

echo '<pre>';
$listUser = new User();
var_dump($listUser->all());

 ?>