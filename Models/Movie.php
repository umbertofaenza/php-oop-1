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

    public $genre;

    public function __construct(string $title, string $year, Genre $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getCapitalisedTitle($title)
    {
        return ucwords($title);
    }
}