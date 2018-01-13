<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php 



// function addNumber($x, $y = 5, $z=5){
// 	echo $x * $y;
// }

// addNumber(9, 8);
//

// var_dump($arr);

// foreach ($arr as $key => $value) {
// 	echo "$key------$value <br>";
// 	break;
// }

// $odd = [];
// $even = [];
// $total =[];
// for ($i=0; $i < 100; $i++) { 
// 	$ranNumer = rand(0, 100);
// 	$total = $ranNumer;
// 	if ($ranNumer % 2 == 0) {
// 		$even[]+=1;
// 	} else {
// 		$odd[] +=1;
// 	}
// }

// echo "Tổng cộng";
// var_dump($total);

// echo "Mảng chẵn";
// var_dump($even);

// echo "Mang lẻ";
// var_dump($odd);

// include 'header1.php';

// echo "noi dung chinh";


// include 'footer.php';

// $arr = "when YOU say nothiNG at all";

// echo str_word_count($arr);
 // $b = rtrim($arr);

// echo strlen($b);

// echo substr($arr, 5, 10);

// echo str_replace('you', 'we', $arr);

// echo strpos($arr, 'y');

// echo strtolower($arr);
// $myName = "le van toan";
// $myString = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias dicta voluptates vel fuga voluptate aliquam, culpa in officiis reprehenderit repellendus nam optio tempore impedit tempora laudantium eos similique voluptatum sequi quaerat doloremque illo. Inventore eveniet veniam enim voluptatem odit est aspernatur dignissimos quia porro illum nisi, magnam distinctio, sapiente qui ad explicabo incidunt, voluptas at voluptatum quam architecto blanditiis ipsum! Quis accusamus quaerat alias libero. Ex, atque, excepturi. Possimus laudantium distinctio sint facere at ipsam sequi. Consequuntur enim, aut sapiente commodi! Delectus dolorem voluptatibus inventore quibusdam, repellat dolore odio atque eaque magni officiis, quos tempora hic blanditiis ducimus. Temporibus, corporis.";
// echo ucwords($myName);
// echo ucfirst($myName);
// $a = gzcompress($myString);
// echo $a;

// echo "<hr>";
// echo gzuncompress($a);

// $arr = "when you say nothing at all";

// $myarr = explode(' ', $arr);

// print_r($myarr);
// $mypassword = '123456';

// echo md5($mypassword);

// echo "<br>";

// echo sha1($mypassword);

// $num = 12974777000000.93987474;
// echo number_format($num, 2);

// $numbers = range(1, 20);
// shuffle($numbers);
// // foreach ($numbers as $number) {
//     var_dump($numbers);
// // }

// $arr1 = ['apple', 'banana', 'pear', 'orang'];
// $arr2 = ['apple', 'start fruit', 'mango', 'orang'];

// var_dump( array_intersect($arr1, $arr2));
// function myfunction($v)
// {
//   return($v*$v);
// }

// $a=array(1,2,3,4,5);
// print_r(array_map("myfunction",$a));
// $myarr = ['nam beo', 'Toan gay', 'Thang Mui to', 'Giang coi', 'Hung hui', 'Han troc'];
// for ($i=0; $i < count($myarr); $i++) { 
// 	echo "My name is $myarr[$i]  <br>";
// }

// echo count($myarr);
if (isset($_POST['submit'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];

	echo $num1 + $num2 + $num3;
}


 ?>

 <div class="container">

	 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	 	<div class="form-group col-md-6 col-md-offset-3">
	 		<label for="num1">Number 1</label>
	 		<input type="number" name="num1" class="form-control">
	 	</div>
	 	<div class="form-group col-md-6 col-md-offset-3">
	 		<label for="num2">Number 2</label>
	 		<input type="number" name="num2" class="form-control">
	 	</div>
	 	<div class="form-group col-md-6 col-md-offset-3">
	 		<label for="num3">Number 3</label>
	 		<input type="number" name="num3" class="form-control">
	 	</div>
	 	<div class="form-group col-md-6 col-md-offset-3">
	 		<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	 	</div>
	 </form>
</div>