<?php 


class DongVat {
	public $name;
	private $age;
	protected $khoiLuong;
	public function setAge($a){
		if ($a > 100) {
			return 100;
		} else {
			return $a;
		}
	}

}
// class ConNguoi extends DongVat{
//  	public function getName (){
//  		return $this->age = "Dong top";
//  	}
// }

// class ConChuot extends DongVat{
	
// }

// $dongTop = new ConNguoi(4,5,6);
// $jery = new ConChuot();
// echo $dongTop->demo('Dong');
// var_dump($jery->layThuocTinh());
// var_dump($dongTop);

$conNguoi = new DongVat();
echo $conNguoi->setAge(200);


 ?>
 