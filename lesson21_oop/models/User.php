<?php 
class User {
	public $connect;
	function __construct (){
		$this->connect = new PDO("mysql:host=127.0.0.1;dbname=php1708;charset=utf8", 'root', '');
	}
	public function all(){
		// $model = new static();
		$sql = "select * from users";
		$stmt= $this->connect->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
		return $result;
	}
}



 ?>