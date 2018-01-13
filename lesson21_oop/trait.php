<?php 
trait DongVat {
	public $long;
	public $rangNanh;
	public function sanMoi(){
		echo 'Dong Vat san nmoi';
	}
}
trait ConMeo {
	public $name;
	public $age;
	public function test(){
		return 'Test method';
	}
	public function sanMoi(){
		echo 'Con Meo san nmoi';
	}
}
class ConHo {
	use ConMeo {
		ConMeo::sanMoi insteadof DongVat;
	}
	use DongVat;
}
$conHo = new ConHo();
var_dump($conHo->sanMoi());

 ?>