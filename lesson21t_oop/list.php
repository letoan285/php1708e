<?php 
require_once 'models/User.php';
require_once 'models/Post.php';

echo '<pre>';
$listUser = User::find(2);
var_dump($listUser);





 ?>