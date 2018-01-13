<?php include('header.php') ?>

<?php 
require_once 'models/Post.php';
require_once 'models/User.php';
$id = $_GET['id'];
$post = Post::find($id);
if (!$post) {
	echo '<h3 style="color:red;">Bài viết không tồn tại</h3>';
	die;
}
$users = User::all();

?>
<div class="col-md-8 col-md-offset-2">
	<form action="save-update-post.php" method="post">
		<input type="hidden" name="id" value="<?php echo $post->id; ?>">
		<div class="form-group">
			<label for="title">Title: </label>
			<input type="text" name="title" class="form-control" value="<?php echo $post->title?>" placeholder="Title...">
		</div>
		<div class="form-group">
			<label for="author">Author: </label>
			<select name="created_by" id="created_by" class="form-control">
				<?php foreach ($users as $user): ?>

				<option <?php if ($user->id == $post->created_by): ?>
					selected

				<?php endif ?>
				value="<?php echo $user->id; ?>">
					<?php echo $user->name; ?>
				</option>
					
				<?php endforeach ?>
			</select>
		</div>
		<div class="form-group">
			<label for="content">Content: </label>
			<textarea name="content" id="" cols="10" rows="6" class="form-control"><?php echo $post->content?></textarea>
		</div>
		<button class="btn btn-success">Save Post</button>
		<a href="list.php" class="btn btn-danger">Cancel</a>
	</form>
</div>