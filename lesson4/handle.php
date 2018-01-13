<?php 

// $gender = $_POST['gender'];

// echo 'Your gender is: '. $gender;

$players = $_POST['player'];


 ?>
 <h3>My favorite players are! </h3>

 <?php foreach ($players as $player): ?>
 	<ul>
 		<li><?= $player; ?></li>
 	</ul>
 <?php endforeach; ?>