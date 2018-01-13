<?php 

$id = $_POST['id'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$semester = $_POST['semester'];
$yob = $_POST['yob'];
$province = $_POST['province'];

require_once 'db.php';
$sql = "update users set 
		firstName = :firstName, 
		lastName = :lastName, 
		email = :email, 
		semester = :semester, 
		year_of_birth = :yob, 
		province = :province
	where id = :id
";


$stmt = $conn->prepare($sql);
$stmt->bindValue(':firstName', $firstName);
$stmt->bindValue(':lastName', $lastName);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':semester', $semester);
$stmt->bindValue(':yob', $yob);
$stmt->bindValue(':province', $province);
$stmt->bindValue(':id', $id);
$stmt->execute();

// var_dump($user);
header('location: index.php');


 ?>