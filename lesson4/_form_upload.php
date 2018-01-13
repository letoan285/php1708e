<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<!-- <form action="handler.php" method="post">
			<h3>What is your gender?</h3>
		
				<label for="">Nam</label>
				<input type="radio" name="gender" value="male" class="form-control">
		
		
				<label for="">Nữ</label>
				<input type="radio" name="gender" value="female" class="form-control">
			<button type="submit" class="btn btn-success">Submit</button>
		</form> -->



		<!-- <form action="handler.php" method="post">
			<h3>What language do you speak?</h3>
			English: <input type="checkbox" value="english" name="lang[]">
			Vietnamese: <input type="checkbox" value="vietnamese" name="lang[]">
			Chinese: <input type="checkbox" value="chinese" name="lang[]">
		
				
			<button type="submit" class="btn btn-success">Submit</button>
		</form> -->

		<form action="handler.php" method="post">
			<div class="form-group">
				
				<h3>What language do you speak?</h3>
				<select name="lang[]" id="" class="form-control" multiple>
					<option value="english">English</option>
					<option value="vietnamese">Vietnamese</option>
					<option value="chinese">Chinese</option>
				</select>
			</div>
		
				
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
	
</body>
</html>