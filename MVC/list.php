<?php 
include('header.php');


 ?>

<?php 
require_once 'models/User.php';
require_once 'models/Post.php';

$listPost = Post::all();
// $listUser = $model->all();
// echo '<pre>';
// var_dump($listUser);


 ?>
 <h3 class="container">Post List</h3>
 <div class="container">
	 <table class="table table-bordered">
	 	<thead>
	 		<tr>
	 			<th>ID</th>
	 			<th>Title</th>
	 			<th>Author</th>
	 			<th width="500px">Content</th>
	 			<th width="15%">Action</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		<?php foreach ($listPost as $value): ?>
	 			<tr>
	 				<td><?=$value->id ?></td>
	 				<td><a href="detail.php?id=<?php echo $value->id;?>"><?=$value->title ?></a></td>
	 				<td><?=$value->getUserInfo(); ?></td>
	 				<td><?=$value->content ?></td>
	 				<td>
	 					<a class="btn btn-info btn-sm" href="update.php?id=<?php echo $value->id;?>">Edit</a>
	 					<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $value->id;?>">Delete</a>
	 				</td>
	 			</tr>
	 		<?php endforeach ?>
	 	</tbody>
	 </table>
</div>