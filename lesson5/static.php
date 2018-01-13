<?php
// class Foo {
//     public function aStaticMethod() {
//         echo 'Hello world';
//     }
// }
// Foo::aStaticMethod();
// echo '<br>';
// $classname = 'Foo';
// $classname::aStaticMethod(); // As of PHP 5.3.0

// class A {
//     public static function who() {
//         echo '__CLASS__ A';
//     }
//     public static function test() {
//         static::who(); // Here comes Late Static Bindings
//     }
// }

// class B extends A {
//     public static function who() {
//         echo '__CLASS__ B';
//     }
// }

// $a = B::test();
// echo '<br>';
// var_dump($a);

// class A {
//     public static function foo() {
//         self::who(); // PHP binds this to A::who() right away
//         static::who();  // PHP waits to resolve this (hence, late)!
//     }

//     public static function who() {
//         echo __CLASS__."\n";
//     }
// }

// class B extends A {
//     public static function test() {
//        self::foo();
//     }

//     public static function who() {
//         echo __CLASS__."\n";
//     }
// }

// B::test();

// class Bar {
//     public static function test() {
//         var_dump(static::class);
//     }
// }

// class Foo extends Bar {

// }

// Foo::test();
// echo "<br>";
// Bar::test();

class DongVat {
	var $name;
	var $age;
	function say(){
		echo "Hello";
	}
}
$dog = new DongVat();
$dog->name = 'Milu';
$dog->age = 20;
// var_dump($dog->name);
echo $dog->age;
?>

