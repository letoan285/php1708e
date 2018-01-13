<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "php1708";


try {
	$conn = new PDO("mysql:host=$serverName;dbname=$dbName;charset=utf8", $userName, $password);

} catch (PDOException $e) {
	var_dump($e->getMessage());
	die;
	
}
function test(){
	
}

 ?>