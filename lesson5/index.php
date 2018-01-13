<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<?php

require_once 'db.php';

$sql = "select * from users";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();



 ?>

 <div class="container">
 	<h3>Student List</h3>
	 <table class="table table-bordered">
	 	<thead>
	 		<tr>
	 			<th>ID</th>
	 			<th>First name</th>
	 			<th>Last Name</th>
	 			<th>Email</th>
	 			<th>
	 				<a class="btn btn-success btn-sm" href="create.php"><span class="glyphicon glyphicon-plus"></span></a>
	 			</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach ($result as $value): ?>
	 			<tr>
	 				<td><?= $value['id'] ?></td>
	 				<td><?= $value['firstName'] ?></td>
	 				<td><?= $value['lastName'] ?></td>
	 				<td><?= $value['email'] ?></td>
	 				<td>
	 					<a class="btn btn-primary btn-sm" href="edit.php?id=<?=$value['id']?>"><span class="glyphicon glyphicon-edit"></span></a>
	 					<a class="btn btn-danger btn-sm" href="remove.php?id=<?= $value['id'] ?>"><span class="glyphicon glyphicon-remove"></span></a>
	 				</td>
	 			</tr>
	 		<?php endforeach ?>
	 	</tbody>
	 </table>
 </div>