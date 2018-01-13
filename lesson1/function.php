<?php 

// $a = $_GET['a'];
// echo $a;

// function testName(){
// 	$name = 'Thai';
// 	echo 'Hello ' . $name;
// }

// // testName();

// $testSort = ['toan','le','nam','nguyen','huynh','ba','tue','duongs'];

// sort($testSort);

// // echo $_SERVER['PHP_SELF'];
// echo "<br>";
// // echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// // echo $_SERVER['HTTP_HOST'];
// // $_SERVER['HTTP_HOST']
// echo "<br>";
// // echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// // echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// // echo $_SERVER['SCRIPT_NAME'];
// echo $_SERVER['SERVER_SOFTWARE'];
// // echo $_SERVER['HTTPS'];
// echo $_SERVER['SERVER_PORT'];
// $name = $_GET['name'];
// $age = $_GET['age'];
// echo $name;
// echo 'my age is';
// echo $age;

// echo strpos('i love you', 'i love you so', 'you');
// $a = "when you";
  
// $b = str_split($a);
// // var_dump($b);
// echo $b[2];
// /''

// $a = ['name'=>'toan', 'age'=>30];
// var_dump(array_values($a));


// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,0,2,$a2);
// var_dump($a1);


$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
	// global $a;
	// global $b;

	if ($a+$b > $c && $a+$c > $b && $b+$c > $b && $b+$c >$a) {
		echo 'Day la 3 canh cua Tam giac';
	} else {
		echo 'Day khong phai la 3 canh cua tam gia';
	}
echo $a;
echo $b;
echo $c;


 ?>

 <form action="" method="post">
 	<label for="a">So A</label>
 	<input type="text" name="a"><br>
 	<label for="b">So B</label>
 	<input type="text" name="b"><br>
 	<label for="c">So C</label>
 	<input type="text" name="c"><br>
 	<button type="submit" name="submit">Check</button>
 </form>