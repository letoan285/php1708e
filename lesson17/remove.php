<?php 
$id = isset($_GET['id']) == true ? $_GET['id'] : null;
if ($id == null) {
	echo "Sai đường dẫn! <a href='index.php'>Trở về trang chủ!</a>";
	die;
}
require_once 'db.php';
$sql = "select * from users where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
if ($user == false) {
	echo "Người dùng không tồn tại! <a href='index.php'>Trở về trang chủ!</a>";
	die;
}
$sql = "delete from users where id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$user = $stmt->fetch();
header('location: index.php');
 ?>