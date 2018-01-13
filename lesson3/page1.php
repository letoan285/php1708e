<?php 
// session_start();
// if (isset($_SESSION['name']) && isset($_SESSION['email'])) {

	// $name = $_SESSION['name'];
	// $email = $_SESSION['email'];

// }


if (isset($_COOKIE['name'])) {

	$name = $_COOKIE['name'];
}

 ?>

 <h3>Xin chao <?php echo $name; ?></h3>


 <a href="cookie.php">Go to page 2</a>