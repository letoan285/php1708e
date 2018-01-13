<?php 

// 1. Lấy ID từ url
$id = isset($_GET['id']) == true ? $_GET['id'] : null;
// 2. Kiểm tra ID có hợp lệ hay không
if ($id == null) {
	echo "Sai đường dẫn! <a href='index.php'>Trở về trang chủ!</a>";
	die;
}
// 3. Lấy thông tin user từ id
require_once 'db.php';
$sql = "select * from users where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$user = $stmt->fetch();
if ($user == false) {
	echo "Người dùng không tồn tại! <a href='index.php'>Trở về trang chủ!</a>";
	die;
}
// 4. Hiển thị form với những dữ liệu có sẵn (từ csdl)


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
			<h2>Create new user</h2>
			<form action="save-update-user.php" method="post">
				<input type="hidden" value="<?= $user['id'] ?>" name="id">
				<div class="form-group">
					<label for="">First Name</label>
					<input name="firstName" value="<?= $user['firstName'] ?>" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Last Name</label>
					<input name="lastName" value="<?= $user['lastName'] ?>" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input name="email" value="<?= $user['email'] ?>" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Semester</label>
					<input name="semester" value="<?= $user['semester'] ?>" type="number" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Year of birth</label>
					<input name="yob" value="<?= $user['year_of_birth'] ?>" type="number" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Province</label>
					<input name="province" value="<?= $user['province'] ?>" type="text" class="form-control">
				</div>
				<button class="btn btn-success btn-block">Update</button>
			</form>
		</div>
	</div>
	
</body>
</html>