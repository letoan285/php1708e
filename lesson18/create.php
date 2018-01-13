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
			<form action="save-user.php" method="post" enctype="multipart/form-data">
				<h2>Add new user</h2>
				<div class="form-group">
					<label for="">First Name</label>
					<input type="text" name="firstName" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Last Name</label>
					<input type="text" name="lastName" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" name="email" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name="password" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Avatar</label>
					<input type="file" name="avatar" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Semester</label>
					<input type="number" name="semester" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Year of birth</label>
					<input type="number" name="year_of_birth" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Province</label>
					<input type="text" name="province" class="form-control" placeholder="First Name">
				</div>
				<button type="submit" class="btn btn-success btn-block">Add new User</button>
			</form>
		</div>
	</div>
	
</body>
</html>