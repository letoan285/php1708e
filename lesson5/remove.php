<?php 

require_once 'db.php';

$id = isset($_GET['id']) == true ? $_GET['id'] : null;
if ($id == null ) {
	echo "<h1>Khong ton tai nguoi dung</h1>";
	echo "<a class='btn btn-primary' href='index.php'>Come back</a>";
	die;
}

$sql = "select * from users where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();

if ($user == false) {
	echo "<h1>Nguoi dung khong ton tai!</h1>";
	die;
}

$sql = 'delete from users where id = :id';
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
header('location: index.php');



 ?>