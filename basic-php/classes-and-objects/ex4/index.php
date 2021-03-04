<?php
require_once 'MovieCollection.php';

class Movie
{
    private $title;
    private $studio;
    private $rating;


    /**
     * Movie constructor.
     * @param $title
     * @param $studio
     * @param $rating
     */
    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
    public function getRating()
    {
        return $this->rating;
    }
}

$movies = new MovieCollection();
$movies->addMovie(new Movie('Casino Royale', 'Eon Productions', 'PG13'));
$movies->addMovie(new Movie('Glass', 'Buena Vista International', 'PG13'));
$movies->addMovie(new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'));

$movies->GetPG();

var_dump($movies->getPGMovies());




