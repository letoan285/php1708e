<?php 

class Cha {
	public function testCha(){
		return 'Day la cha';
	}
}

class Con extends Cha {
	public function index(){
		echo 'Hello';
	}
}

$me = new Con();
 // echo $me->index();die;
var_dump($me);

 ?>
