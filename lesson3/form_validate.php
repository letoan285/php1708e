<?php 
if (filter_has_var(INPUT_POST, 'name')) {
	echo 'data found';
} else {
	echo 'no data';
}
 ?>



 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 	<label for="name">Name</label>
 	<input name="name" type="text">
 	<input type="submit" name="submit" value="Submit">
 </form>