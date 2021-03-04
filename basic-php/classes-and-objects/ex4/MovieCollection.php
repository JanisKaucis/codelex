<?php

class MovieCollection
{
    private array $movies = [];
    public array $moviesWithPG = [];

    public function addMovie($movie): void
    {
        $this->movies[] = $movie;
    }

    public function GetPG(): void
    {
        foreach ($this->movies as $movie) {
            if ($movie->getRating() == 'PG') {
                $this->moviesWithPG[] = $movie;
            }
        }

    }

    public function getPGMovies(): array
    {
        return $this->moviesWithPG;
    }
}