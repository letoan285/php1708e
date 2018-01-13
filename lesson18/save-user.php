<?php 

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$semester = $_POST['semester'];
$year_of_birth = $_POST['year_of_birth'];
$province = $_POST['province'];
$avatar = $_FILES['avatar'];
// var_dump($avatar);die;


require_once 'db.php';
$sql = "insert into users 
	(firstName, lastName, email, password, avatar, semester, year_of_birth, province)
values(:firstName, :lastName, :email, :password, :avatar, :semester, :year_of_birth, :province)
";

$fileName = null;
if ($avatar['size'] > 0) {
	$fileName = "uploads/".uniqid()."-".$avatar['name'];
	move_uploaded_file($avatar['tmp_name'], $fileName);
}

$stmt = $conn->prepare($sql);
$stmt->bindValue(':firstName', $firstName);
$stmt->bindValue(':lastName', $lastName);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', md5(time().($password)));
$stmt->bindValue(':avatar', $fileName);
$stmt->bindValue(':semester', $semester);
$stmt->bindValue(':year_of_birth', $year_of_birth);
$stmt->bindValue(':province', $province);

$stmt->execute();

header('location: index.php');

 ?>