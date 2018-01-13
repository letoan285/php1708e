<?php 

// $gender = $_POST['gender'];

// echo "your gender is  <b> ${gender}</b>";

// $lang = $_POST['lang'];


 ?>

 <?php 
 // foreach ($lang as $key => $value): 

 	?>
 	<!-- <ul> -->
 		<!-- <li><?= $value; ?></li> -->
 	<!-- </ul> -->
 <?php
  // endforeach; 
 ?>

 <?php 

$lang = $_POST['lang'];


  ?>
<h3>I can speak: </h3>
  <?php foreach ($lang as $value): ?>
  	<ul>
  		<li><?= $value ?></li>
  	</ul>
  	
  <?php endforeach ?>