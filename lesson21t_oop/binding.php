<?php 

class Book {
	public $name = 'Le Van Toan';

	public function author(){
		return "author name is ".$this->name;
	}
	public function getAuthor(){
		return $this->author();
	}
}
class NewBook extends Book {
	public function author(){
		return "author names are Me and ".$this->name;
	}
}


$book = new NewBook();
echo $book->getAuthor();
// Book::getAuthor();
// $book = new NewBook();
// echo $book->author();
?>