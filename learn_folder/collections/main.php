<?php
require_once 'Book.php';
require_once 'BookCollection.php';
$books = new BookCollection();
$books->add(new Book());

var_dump($books);
try {
    $books->removeAt(1);
} catch (OutOfRangeException $exception) {
    var_dump($exception->getMessage());
}

var_dump($books);
