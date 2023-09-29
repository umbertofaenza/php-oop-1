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

    public $genres;

    public function __construct(
        string $title,
        string $year,
        Genre $genres,
    ) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;


    }

    public function getCapitalisedTitle($title)
    {
        return ucwords($title);
    }
}