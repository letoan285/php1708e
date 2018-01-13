<?php 

session_start();

if (isset($_SESSION['name'])) {

$name1 = $_SESSION['name'];

}


 ?>

 <h3>Day la page ca nhan cua: <?php echo $name1; ?></h3>

 <a href="session.php">Come back to home</a>