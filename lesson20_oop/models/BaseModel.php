<?php 
/**
 * summary
 */
class BaseModel
{
    public $connect;

    public function __construct()
    {
        $this->connect = new PDO("mysql:host=localhost;dbname=php1708;charset=utf8", 'root', '');
    }

    public static function all(){
    	$model = new static();
    	$sql = "select * from $model->tableName";
    	$stmt = $model->connect->prepare($sql);
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    	return $result;
    	
    }
}


 ?>