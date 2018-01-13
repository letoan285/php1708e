<?php 

class BaseModel {
	public $connect;
	function __construct (){
		$this->connect = new PDO("mysql:host=127.0.0.1;dbname=php1708;charset=utf8", 'root', '');
	}
	public static function all(){
		$model = new static();
		$sql = "select * from $model->tableName";
		$stmt= $model->connect->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		return $result;
	}
	public static function find($id){
		$model = new static();
		$sql = "select * from $model->tableName where id = $id";
		$stmt= $model->connect->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
		if($result) return $result[0];
		return null;
	}
	public static function where($arr = []){
		$model = new static();
		$model->queryBuilder = "select * from $model->tableName where ";
		if ($arr==2) {
			$model->queryBuilder += "$arr[0] = '$arr[1]' ";
		}
		if ($arr==3) {
			$model->queryBuilder += "$arr[0] $arr[1] '$arr[2]' ";
		}
		return $model;
	}
	public function get(){
		// var_dump($this->queryBuilder);die;
		$stmt = $this->connect->prepare($this->queryBuilder);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $result;
	}

}


 ?>