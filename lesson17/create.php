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
		<div class="col-md-6 col-md-offset-3">
			<h2>Create new user</h2>
			<form action="save-user.php" method="post">
				<div class="form-group">
					<label for="">First Name</label>
					<input name="firstName" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Last Name</label>
					<input name="lastName" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input name="password" type="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Semester</label>
					<input name="semester" type="number" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Year of birth</label>
					<input name="yob" type="number" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Province</label>
					<input name="province" type="text" class="form-control">
				</div>
				<button class="btn btn-success btn-block">Create new</button>
			</form>
		</div>
	</div>
	
</body>
</html>