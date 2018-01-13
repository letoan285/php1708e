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
	
	<form method="post" class="col-md-6 col-md-offset-3" action="image_upload.php" enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Avatar:</label>
			<input class="form-control" type="file" name="avatar">
		</div>
		
		<button class="btn btn-success" name="submit">Submit</button>
	</form>

</div>
	
</body>
</html>