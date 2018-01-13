<?php 
require_once 'db.php';

$sql = "select * from posts";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


 ?>
 