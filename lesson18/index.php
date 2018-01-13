<?php 

require_once 'db.php';

$sql = "select * from users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h2 class="text-center">User List</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Avatar</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>YOB</th>
					<th>Semester</th>
					<th>Province</th>
					<th><a class="btn btn-success btn-sm" href="create.php">Add user</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($result as $value): ?>
					<tr>
						<td><?= $value['id'] ?></td>
						<td><a href="detail.php?id=<?= $value['id'] ?>"><img width="100px" src="<?= $value['avatar'] ?>" alt=""></a></td>
						<td><?= $value['firstName'] ?></td>
						<td><?= $value['lastName'] ?></td>
						<td><?= $value['email'] ?></td>
						<td><?= $value['semester'] ?></td>
						<td><?= $value['year_of_birth'] ?></td>
						<td><?= $value['province'] ?></td>
						<td>
							<a class="btn btn-primary btn-sm" href="edit.php?id=<?= $value['id'] ?>"">Edit</a>
							<a class="btn btn-danger btn-sm" href="remove.php?id=<?= $value['id'] ?>">Del</a>
						</td>
					</tr>
					
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	
</body>
</html>