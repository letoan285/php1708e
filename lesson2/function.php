<?php 

function simpleFunc(){
	echo 'Hello';
}


//function with param

// function sayHello($name){
// 	echo "Hello $name <br>";
// }

// sayHello('Toan');

// $age = 30;

// echo "<h2>Toan is $age</h2>";

// function addNumbers($num1 = 9, $num2 = 8){
// 	echo $num1 ."+". $num2 ."=". ($num1 + $num2);
// }

// addNumbers();

// function addOne($num){
// 	$num+=2;
// }

// echo addOne(9);
// echo addOne(9);
// echo addOne(9);

// if (condition) {
// 	# code...
// }

// if (condition) {
// 	# code...
// } else {
// 	# code...
// }


// $a = 1;

// // echo date('d');
// echo date('a-h-l-d-m-y');
// require('content.php');

// include('footer.php');
// $pass = Hash::make('123456');
// $pass = sha('123456');

// echo $arr;
// echo $pass;

// $num = '90000001223000.5';
// echo number_format($num, 1);

// $output = strpos('Hello world', 'o');

// echo $output;

// $str = 'Hello Vietnam, goodby vietnam';
// print_r(explode(' ', $str)) ;

// echo str_word_count($str);
// $arr = ['name', 3, '3', true, 'true'];

// foreach ($arr as $value) {
// 	if (is_string($value)) {
// 		echo "$value is a string <br>";
// 	} 
// }
if (isset($_GET['name'])) {
// echo $_GET['name'];
// echo $_GET['email'];
} 
	# code...

// echo $name;
// echo "<br>";
// echo $email;
// echo $name + $email;
// echo "<br>";
// if (is_integer($name) ==true && is_integer($email)==true) {
// 	echo "Day la so";
// } else {
// 	echo "Day khong phai la so";
// }


// $total = '9' + '80';
// echo $total;


// $base = array("orange", "banana", "apple", "raspberry");
// $replacements = array(0 => "pineapple", 4 => "cherry");
// $replacements2 = array(0 => "grape");

// $basket = array_replace($base, $replacements, $replacements2);
// print_r($basket);

// print_r($_GET);
// if (is_numeric($_GET['name'])) {
// 	echo $_GET['name'] . " is number ";
// } else {
// 	echo $_GET['name'] . " is not number ";
// }

// $input_number = $_GET["name"];

// if (preg_match ("/^([0-9]+)$/", $input_number)) {
//      print "Successfully input";
// } else {
//      print "Try again";
// }
// $name = 'le van toan';
// echo ucfirst($name);

// $str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
// echo ($str);
// $a = ['toan', 'hung', 'name'=>'Le van'];
// $a[] = rand(1, 100)%2 == 0 ? 'Nam' : 'Nu';
// foreach ($a as $key => $value) {
// 	echo "$key------$value <br>";
// 	// break;
// 	// continue;
	
// }

// var_dump($a);
// if (isset($_GET['submit'])) {
// 	# code...
// 	header('location: index.php');
// }

// $arr = ['name' =>'toan'];
// $com = compact($arr);
// var_dump($com);
echo $_SERVER['PHP_SELF'];
?>

<form action="" method="get" accept-charset="utf-8">
	<input type="text" name="name" placeholder="Tên.." value="<?php echo isset($_GET['name']); ?>"><br>
	<input type="text" name="email"><br>
	<input type="text" name="name2"><br>
	<input type="text" name="name3"><br>
	<input type="text" name="name4"><br>
	<input type="text" name="name5"><br>
	<input type="submit" name="submit" value="Submit">
</form>
	