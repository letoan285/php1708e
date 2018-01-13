<?php 
require_once 'models/User.php';
require_once 'models/Post.php';

$model = User::all();
echo '<pre>';
var_dump($model);

 ?>