<?php
    // Version 7
    class Book {
        var $title;
        var $author;
        var $pages;

        function __construct($title, $author, $pages)
        {
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }
    }
    // Version 8
    class Book2 {
        function __construct(public $title, public $author, public $pages){}
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);        

    $book2 = new Book2("Load of the Rings", "Tolkien", 700);
    echo $book1->title . "<br>";
    echo $book2->title . "<br>";
?>