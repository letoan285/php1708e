<?php 

// $say =  "Hello World";
// $name = ['toan', 'nam', 'Thien'];

// $name[] = 'Hung';
// var_dump($name);

// echo $say;
// echo '<h2>Hello Vietnam</h2>';
// echo $a;


// echo '<br>';
// var_dump($say);

// print_r($name);
// $person = ['name'=>'Toan', 'age'=> 32, 'Han', 'job'=> 'Teacher', 'hobby'=>'ride horse', 'Reading'];
// var_dump($person);

// $person = array(
// 	array('Toan', 30, 'teacher'),
// 	array('Lam', 40, 'Stutent'),
// 	array('Han', 20, 'Stutent')
// );

// var_dump($person[2][1]);

// define('NAME', 'Toan');
// $NAME = 'Han';

// echo NAME;

// echo $NAME;
// echo 9**2;

// $a = '9';
// $b = 9;

// if ($a === $b) {
// 	echo 'Right';
// } else {

// echo 'wrong';
// }
// $a = 9;
// ++$a;
// echo $a;

// $a = 'my name';
// $b = 'toan';

// echo $a.$b;
// echo '<br>';

// $a.=$b;
// echo $a;


// $a = $_GET['a'];
// $b = $_GET['b'];
// $c = $_GET['c'];

// echo $a + $b + $c;

// if (condition) {
// 	# code...
// } else if() {

// } else if(){

// } else {

// }
// $day = $_GET['day'];
// switch ($day) {
// 	case 1:
// 		echo 'Hom nay la thu Hai';
// 		break;
// 	case 2:
// 		echo 'Hom nay la thu ba';
// 		break;
// 	case 3:
// 		echo 'Hom nay la thu bon';
// 		break;
// 	case 4:
// 		echo 'Hom nay la thu nam';
// 		break;
// 	case 5:
// 		echo 'Hom nay la thu sau';
// 		break;
// 	case 6:
// 		echo 'Hom nay la thu bay';
// 		break;
// 	case 7:
// 		echo 'Hom nay la chu nhat';
// 		break;
	
// 	default:
// 		echo 'Vui long nhap dung';
// 		break;
// }

// $i = 0;
// while ( $i <= 10) {
// 	echo $i;
// 	echo '<br>';
// 	$i++;
// }


// $i = 0;
// do(thu thi code)

// while{ dieu kien}
// for ($i=0; $i < 10; $i++) {


// // echo "<h2>Day la vi tri thu ".$i. " </h2> ";
	



// }
$person = ['name'=>'my name', 'age'=> 32, 'email'=>'toan@gmail.com'];

$person[] = rand(2, 100) % 2==0 ? 'Nam' : 'Nữ';
$person[] = rand(2, 100) % 2==0 ? 'Nam' : 'Nữ';
$person[] = rand(2, 100) % 2==0 ? 'Nam' : 'Nữ';
$person[] = rand(2, 100) % 2==0 ? 'Nam' : 'Nữ';
$person[] = rand(2, 100) % 2==0 ? 'Nam' : 'Nữ';
$person[] = rand(2, 100) % 2==0 ? 'Nam' : 'Nữ';

foreach ($person as $key => $value) {

	echo "$key -------> $value <br>";
	// echo "<h3>thi is h3</h3>";
 }


// foreach($person as $element): 
  
// echo $a;
// $a = 10;




// endforeach; 
// function add(){
// 	$a = 10;
// 	echo $a;
// }
// add();



?>

<script>
	// document.write(a);
	// var a = 10;

	// // function add(){
	// // 	return a + 10;
	// // }

	// document.write(add());
</script>