<?php 
require_once 'BaseModel.php';
require_once 'User.php';
/**
 * summary
 */
class Post extends BaseModel
{

    public $tableName = 'posts';
    public $columns = ['title', 'content', 'created_by'];

    public function getUserInfo(){
    	$author = User::find($this->created_by);
    	return $author->name;
    }
	
}

 ?>