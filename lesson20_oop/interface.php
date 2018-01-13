<?php 
interface A {
	// var $name;
	const TINH_CHAT = 'Right';
	public function testA();
}
interface B {
	public function testB();
}
class C {
	var $name;
	public function testC(){

	}
}

class D extends C implements A{
	public function testA(){

	}
}
interface E extends B {

}

$d = new D();
var_dump($d);
echo A::TINH_CHAT;

 ?>