<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<!-- <form action="handle.php" method="post"><br>
			<h3>Select your gender!</h3>
			Male: <input type="radio" value="male" name="gender"><br>
			Female: <input type="radio" value="female" name="gender"><br>
			GLBT: <input type="radio" value="lgbt" name="gender"><br>
			<button class="btn btn-primary" type="submit">Submit</button>
		</form> -->

		<!-- <form action="handle.php" method="post"><br>
			<h3>Select your favorite players!</h3><br>
			Messi: <input type="checkbox" value="messi" name="player[]"><br>
			Ronaldo: <input type="checkbox" value="ronaldo" name="player[]"><br>
			Ro Beo: <input type="checkbox" value="robeo" name="player[]"><br>
			Rooney: <input type="checkbox" value="rooney" name="player[]"><br>
			<button class="btn btn-primary" type="submit">Submit</button>
		</form> -->
		<form action="handle.php" method="post"><br>
			<h3>Select your favorite players!</h3><br>
			<div class="form-group">
				<label for="">Players</label>
				<select name="player[]" id="" class="form-control" multiple>
					<option value="Messi">Messi</option>
					<option value="Ronaldo">Ronaldo</option>
					<option value="Kaka">Kaka</option>
					<option value="Rooney">Rooney</option>
					<option value="Valencia">Valencia</option>
				</select>
			</div>
			<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	</div>

	
</body>
</html>