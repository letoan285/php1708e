<?php 

if (isset($_POST['submit'])) {
	session_start();
	$name = $_SESSION['name'];

	$_SESSION['name'] = $_POST['name'];

	$_SESSION['email'] = $_POST['email'];

	header('Location: page1.php');
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Session</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	
	<form method="post" class="col-md-6 col-md-offset-3" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="form-group">
			<label for="">Name:</label>
			<input class="form-control" type="text" name="name" value="<?php echo isset($name);?>">
		</div>
		<div class="form-group">
			<label for="">Email:</label>
			<input class="form-control" type="text" name="email">
		</div>
		<button class="btn btn-success" name="submit">Submit</button>
	</form>

</div>
	
</body>
</html>