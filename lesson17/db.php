<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "php1708";


try {
	$conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $password);
	// $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 
} catch (PDOException $e) {
	var_dump($e->getMessage());
	die;
	
}












 ?>