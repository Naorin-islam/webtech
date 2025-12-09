<?php
class Book {
    public $title;
    public $author;
    public $year;
 
    public function __construct($title, $author, $year) {
        $this->title  = $title;
        $this->author = $author;
        $this->year   = $year;
    }
 
    public function getDetails() {
        return "Title: {$this->title}, Author: {$this->author}, Year: {$this->year}";
    }
    public function setTitle($title) {
        $this->title = $title;
    }
 
    public function setAuthor($author) {
        $this->author = $author;
    }
 
    public function setYear($year) {
        $this->year = $year;
    }
}
$book1 = new Book("Harry Potter", "J.K. Rowling", 1997);
$book1->setTitle("Harry Potter and the Philosopher's Stone");
$book1->setYear(1997);
echo "<h3>Book Details:</h3>";
echo $book1->getDetails();
?>
 