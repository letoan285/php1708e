<?php 
require_once 'models/User.php';
require_once 'models/Post.php';

echo '<pre>';
$listUser = User::where(['lastName', 'like', '%h%'])->get();
var_dump($listUser);

 ?>