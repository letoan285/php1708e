<?php 
// class Book {
// 	static $author = 'Bui Quoc Hoi';

// 	public static function author(){
// 		return "Author is".self::$author;
// 	}
// 	public static function getAuthor(){
// 		return static::author();
// 	}
// }

// class NewBook extends Book {
// 	public static function author(){
// 		return "Authors are me and ".self::$author;
// 	}
// }

// echo Book::getAuthor();
// echo '<br>';
// echo NewBook::getAuthor();
// echo $book->getAuthor();

// class Bill {
// 	public $dinner = 50;
// 	public $drink = 25;
// 	public $massage = 80;
// 	public $bill;
// 	public function dinner($person){
// 		$this->bill +=$this->dinner*$person;
// 		return $this;
// 	}
// 	public function drink($person){
// 		$this->bill +=$this->drink*$person;
// 		return $this;
// 	}
// 	public function massage($person){
// 		$this->bill +=$this->massage*$person;
// 		return $this;
// 	}
// }
// $bill = new Bill();
// echo $bill->dinner(3)->drink(3)->massage(2)->bill;
class Person {
	public function authorName(){
		return ['toan', 'Hoi', 'Han'];
	}
}
class Book {
	public $authors;
	public $price;

	// public function price(array $authors){
	// 	return $this->authors = $p;
	// }
	public function author(Person $person){
		return $this->authors = $person->authorName();
	}
}
$book = new Book();
$person = new Person();
print_r($book->author($person));

 ?>
 