<?php 

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$semester = $_POST['semester'];
$yob = $_POST['yob'];
$province = $_POST['province'];

require_once 'db.php';
$sql = "insert into users 
		(firstName, lastName, email, password, year_of_birth, semester, province) 
values (:firstName, :lastName, :email, :password, :yob, :semester, :province)";

$stmt = $conn->prepare($sql);
$stmt->bindValue(':firstName', $firstName);
$stmt->bindValue(':lastName', $lastName);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', sha1($password));
$stmt->bindValue(':yob', $yob);
$stmt->bindValue(':semester', $semester);
$stmt->bindValue(':province', $province);
$stmt->execute();

// var_dump($user);
header('location: index.php');


 ?>