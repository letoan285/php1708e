<?php 

$file = $_FILES['file'];
if ($file['size'] > 0) {
	$fileName = $file['name'];
	move_uploaded_file($file['tmp_name'], $fileName);
	echo "<img width='200px' src=$fileName>";
} else {
	echo 'Vui long chon file';
	echo '<br>';
	echo "<a href='index.php'>Back</a>";
}

 ?>