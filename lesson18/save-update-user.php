<?php 

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$semester = $_POST['semester'];
$year_of_birth = $_POST['year_of_birth'];
$province = $_POST['province'];
$avatar = $_FILES['avatar'];
// var_dump($avatar);die;

require_once 'db.php';
$sql = "update users set 
		firstName = :firstName, 
		lastName = :lastName, 
		email =:email,
		semester =:semester,
		year_of_birth =:year_of_birth,
		province =:province
";
$fileName = null;
if ($avatar['size'] > 0) {
	$fileName = 'uploads/'.uniqid().'-'.$avatar['name'];
	if(move_uploaded_file($avatar['tmp_name'], $fileName)){
		$sql += ", avatar = :fileName";
	}
}
$sql += " where id = :id";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':firstName', $firstName);
$stmt->bindValue(':lastName', $lastName);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':semester', $semester);
$stmt->bindValue(':year_of_birth', $year_of_birth);
$stmt->bindValue(':province', $province);
if ($fileName != null) {
	$stmt->bindValue(':fileName', $fileName);
}
$stmt->bindValue(':id', $id);

$stmt->execute();

header('location: index.php');

 ?>