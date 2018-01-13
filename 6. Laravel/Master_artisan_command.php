<?php 

//1. make migration ->
//---php artisan make:migration create_posts_table --create=posts


//2. migrate -> to make table in db with the schema of migration
//---php artisan migrate

//3. migrate refresh -> to delete all table in db and create again
//---php artisan migrate:refresh

//4. Tinker 
//---php artisan tinker
//>>$post = new App\Post;
//>>$post->title = 'title of the post';
//>>$post->content = 'content of the post';
//>>$post->save();
//----ok
//>>App\Post::all();
//>>App\Post::first();
//>>App\Post::where('active', 1)->get();



$posts = DB::table('posts')->get(); //to get all post from table 'posts'
$posts = DB::table('posts')->latest()->get(); //to get latest post from table 'posts'

Route::get('posts/{id}', function($id) {
    $post = DB::table('posts')->find($id);
    dd($post);
});


//eloquent
App\Post::pluck('content')->first();

class Task extends Model {
	public static function incomplete(){
		return static::where('completed', 0)->get();
	}
}

public function show($id){
	$post = Post::find($id);
	return $post;
}

//route model binding
public function show(Post $post){
	return $post;
}