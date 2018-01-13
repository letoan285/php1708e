<?php 
class DongVat {
	public $name;
	public $age; 
}
interface TanTinh {
	public function xoeDuoi();
}
interface VoiAn {
	public function cuoi();
}
class ConCong extends DongVat implements TanTinh, VoiAn{
	public function xoeDuoi(){
		echo 'Xoe duoi lam dieu';
	}
	public function cuoi(){
		return "Thich thi cuoi";
	}
}
$conCong = new ConCong();
var_dump($conCong->cuoi());

 ?>