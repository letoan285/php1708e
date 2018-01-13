<?php 

include 'students.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lesson PHP03</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br>
		

		<table class="table table-bordered">
			<a class="btn btn-success" href="">Add new</a>
			<thead>
				<tr>
					<th>Tên</th>
					<th>Email</th>
					<th>Lớp</th>
					<th>Quê</th>
					<th>Tùy chọn</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($students as $value): ?>
				<tr>
					<td><?= $value['name']; ?></td>
					<td><?= $value['email']; ?></td>
					<td><?= $value['class']; ?></td>
					<td><?= $value['province']; ?></td>
					<td>
						<a class="btn btn-primary btn-sm" href="">Edit</a>
						<a class="btn btn-danger btn-sm" href="">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>
		
		</tbody>
		</table>
		
	
	</div>
</body>
</html>