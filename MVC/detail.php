<?php include('header.php'); ?>
<?php 
require_once 'models/Post.php';
$id = $_GET['id'];
$post = Post::find($id);

?>

<div class="container">
	<div class="col-md-5">
		<h1>The title</h1>
		<h3><?php echo $post->title; ?></h3>
	</div>
	<div class="col-md-7">
		<h3>The content of Post</h3>
		<p><?php echo $post->content ?></p>
		<strong><?php echo $post->getUserInfo(); ?></strong><br>
		<a href="list.php">Come Back</a>
		
	</div>
</div>
	
</body>
</html>