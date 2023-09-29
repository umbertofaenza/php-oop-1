<?php

/**
 * ### Class Movie
 * Define a class Movie
 * */
class Movie
{
    public $title;
    public $year;

    public $genre;

    public function __construct(string $title, string $year, string $genre)
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