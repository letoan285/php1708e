<?php 
/**
 * Created by Le Van Toan 29/09/2017
 */
class BaseModel
{
    protected $host = "127.0.0.1";
    protected $user = "root";
    protected $dbname = "php_1708";
    protected $password = "";
    protected $connect;
    /**
     * summary
     */
    function __construct()
    {
        $this->connect = new PDO("mysql:host=$this->host; dbname=$this->dbname; charset=utf8", $this->user, '');
    }

    public function update(){
        $this->queryBuilder = "update $this->tableName set ";
        foreach ($this->columns as $col) {
            $this->queryBuilder .= " $col = '". $this->{$col} . "', ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");

        $this->queryBuilder .= " where id = $this->id";
        var_dump($this->queryBuilder); die;
    }

    public static function all(){
    	$model = new static();
    	$sql = "select * from $model->tableName";
    	$stmt = $model->connect->prepare($sql);
    	$stmt->execute();
    	$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    	return $rs;
    }

    public static function find($id){
    	$model = new static();
    	$sql = "select * from $model->tableName where id = $id";
    	$stmt = $model->connect->prepare($sql);
    	$stmt->execute();
    	$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
    	if (count($rs) > 0) return $rs[0];
    	return null;
    }
    //Create the where condition @by Le Van Toan

    public static function where($arr = []){
    	$model = new static();
    	$model->queryBuilder = "select * from $model->tableName where ";
    	if (count($arr) == 2) {
    		$model->queryBuilder .= "$arr[0] = '$arr[1]' "; 
    	}
    	if (count($arr) ==3) {
    		$model->queryBuilder .= "$arr[0] $arr[1] '$arr[2]' ";
    	}
    	return $model;
    }

    //Create the andWhere condition method @by Le Van Toan

    public function andWhere($arr = []){
    	$this->queryBuilder .= " and ";
    	if (count($arr) == 2) {
    		$this->queryBuilder .= "$arr[0] = '$arr[1]' "; 
    	}
    	if (count($arr) ==3) {
    		$this->queryBuilder .= "$arr[0] $arr[1] '$arr[2]' ";
    	}
    	return $this;
    }
    //Create the orWhere condition method @by Le Van Toan

    public function orWhere($arr = []){
    	$this->queryBuilder .= " or ";
    	if (count($arr) == 2) {
    		$this->queryBuilder .= "$arr[0] = '$arr[1]' "; 
    	}
    	if (count($arr) ==3) {
    		$this->queryBuilder .= "$arr[0] $arr[1] '$arr[2]' ";
    	}
    	return $this;
    }

    //Create the get condition method @by Le Van Toan

    public function get(){
    	// var_dump($this->queryBuilder);die;
    	$stmt = $this->connect->prepare($this->queryBuilder);
    	$stmt->execute();
    	$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    	return $rs;
    	// var_dump($rs);
    }
}


 ?>