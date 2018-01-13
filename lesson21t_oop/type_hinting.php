<?php
// class Person {
// 	public function names(){
// 		return ['le', 'van', 'toan'];
// 	}
// }
// class Book {
// 	public $authors;

// 	public function authors(Person $person){
// 		$this->authors = $person->names();
// 	}
// }
// $book = new Book();
// $person = new Person();
// // $person->authorsName = $person->names();
// $book->authors($person);
// print_r($book->authors);

class Person{
	public function names(){
		return ['toan', 'le', 'hien'];
	}
}

class Book {
	public $authors;

	public function authors(Person $person){
		$this->authors = $person->names();
	}
}

$book = new Book();
$person = new Person();

$book->authors($person);
print_r($book->authors);

 ?>