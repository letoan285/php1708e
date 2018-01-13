<?php 
require_once 'models/Post.php';
//1. Thu thap thong tin tu form (Dữ liệu mới thay đổi)
$id = $_POST['id'];
$title = $_POST['title'];
$created_by = $_POST['created_by'];
$content = $_POST['content'];
//2. find model
$model = Post::find($id);
if (!$model) {
	echo "<h1>Thông tin không tồn tại!</h1>";die;
}
//3. Cập nhập giữ liệu từ form vảo database
$model->title = $title;
$model->content = $content;
$model->created_by = $created_by;
//4. Save dữ liệu
$model->update();
//5. Redirect đến trang khác (list.php)
header('location: list.php');



 ?>