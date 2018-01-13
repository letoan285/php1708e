<?php 

$file = $_FILES['avatar'];

$fileName = 'uploads/'.time().'-'.$file['name'];

if ($file['size'] > 0) {
	move_uploaded_file($file['tmp_name'], $fileName);
	echo "<img width='300px' src=$fileName>";
} else {
	echo 'File khong ton tai';
}




 ?>