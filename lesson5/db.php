<?php 

$serverName = 'localhost';
$userName = 'root';
$dbname = 'php1708';
$password = '';

try {
	$conn = new PDO("mysql:host=$serverName;dbname=$dbname;charset=utf8", $userName, $password);
	// var_dump($conn);
} catch (PDOException $e) {
	var_dump($e->getMessage());
	die;
}
