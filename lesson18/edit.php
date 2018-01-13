<?php 

//1. lay id tu url
$id = isset($_GET['id']) == true ? $_GET['id'] : null ;
//2. kiểm tra tính hợp lệ của id
if ($id == null ) {
	echo "<h1>Đường dẫn sai</h1> <a href='index.php'>Trở về trang chủ</a>";
	die;
}
//3. Lấy thông tin user từ id
require_once 'db.php';
$sql = "select * from users where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
//4. hiển thị thông tin user từ cơ sở dữ liệu

 ?>

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
			<form action="save-update-user.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$user['id'];?>">
				<h2>Add new user</h2>
				<div class="form-group">
					<label for="">First Name</label>
					<input type="text" value="<?=$user['firstName'];?>" name="firstName" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Last Name</label>
					<input type="text" value="<?=$user['lastName'];?>" name="lastName" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="text" value="<?=$user['email'];?>" name="email" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Avatar</label>
					<?php if ($user['avatar'] != null): ?>
						<img width="100px" src="<?=$user['avatar'];?>" alt="">
					<?php endif ?>
					<input type="file" name="avatar" class="form-control">
				</div>
				

				<div class="form-group">
					<label for="">Semester</label>
					<input type="number" value="<?=$user['semester'];?>" name="semester" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Year of birth</label>
					<input type="number" value="<?=$user['year_of_birth'];?>" name="year_of_birth" class="form-control" placeholder="First Name">
				</div>
				<div class="form-group">
					<label for="">Province</label>
					<input type="text" name="province" value="<?=$user['province'];?>" class="form-control" placeholder="First Name">
				</div>
				<button type="submit" class="btn btn-success btn-block">Update User</button>
			</form>
		</div>
	</div>
	
</body>
</html>