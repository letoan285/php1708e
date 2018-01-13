<?php 


class DongVat {
	public $name;
	public $age = 20;
	public $khoiLuong;
	function __construct($a, $b, $c){
		return $a + $b + $c;
	}

	static function layThuocTinh (){
		 $model = new static();
		 $model->queryBuilder = "select * from ".static::$table;
		 // $model->tenBang = "select * from ".static::$table;
		 return $model; 
	}
	public function get(){
		return $this->queryBuilder;
	}
}
class ConNguoi extends DongVat{
 	static $table = 'people';
}
class ConChuot extends DongVat{
	static $table = 'rats';
}

$dongTop = new ConNguoi(4,5,6);
// $jery = new ConChuot();
// echo $dongTop->demo('Dong');
// var_dump($jery->layThuocTinh());
var_dump($dongTop);


 ?>
 