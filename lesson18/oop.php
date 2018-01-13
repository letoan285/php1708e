<?php
define('MY_VAR', 'le');



class User {
	public $username;
	public $password;
	static $age;
	static $passwordLength = 10;
	const MY_VAR = 'Toan';

	public static function getPassword(){
		return 'Hello static';
	}
}

// echo User::MY_VAR;
// echo '<br>';
// echo MY_VAR;
/**
 * summary
 */
// class Member extends User
// {
// 	return parent::getPassword();

// }

class Foo
{
    public static $my_static = 'foo Toan';

    public function staticValue($n) {
        return self::$my_static = $n ;
    }
}

class Bar extends Foo
{
    public function staticValue($m) {
        return parent::$my_static = $m;
    }
}
echo Foo::staticValue('Hello world').'<br>';
echo Bar::staticValue('Hello world vietnam');


 ?>