<?php

require_once __DIR__ . "./Genre.php";

/**
 * ### Class Movie
 * Define a class Movie
 * */
class Movie
{
    public $title;
    public $year;

    public $genre_1;

    public $genre_2;

    public function __construct(
        string $title,
        string $year,
        Genre $genre_1,
        Genre $genre_2
    ) {
        $this->title = $title;
        $this->year = $year;
        $this->genre_1 = $genre_1;
        $this->genre_2 = $genre_2;

    }

    public function getCapitalisedTitle($title)
    {
        return ucwords($title);
    }
}