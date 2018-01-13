<?php
$id = $_GET['id'];
require_once 'db.php';

$sql = "select * from users where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch(); 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>User detail</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

 </head>
 <body>
 	<div class="container">
 		<div class="col-md-5">
 			<img src="<?=$user['avatar'];?>" alt="">
 		</div>
 		<div class="col-md-7">
 			<h3><?=$user['firstName'];?></h3>
 			<h3><?=$user['lastName'];?></h3>
 			<h3><?=$user['province'];?></h3>
 			<p><?=$user['email'];?></p>
 		</div>
 	</div>
 	
 </body>
 </html>