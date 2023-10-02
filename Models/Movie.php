<?php

require_once __DIR__ . "./Genre.php";

/**
 * ### Class Movie
 * Define a class Movie
 * */
class Movie extends Production
{
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        Genre $genre,
        string $published_year,
        int $running_time
    ) {
        parent::__construct($title, $genre);
        $this->published_year = $published_year;
        $this->running_time = $running_time;

    }

    public function get_details()
    {
        $genre_name = $this->genre->name;
        return "$this->title, $genre_name, $this->published_year, $this->running_time";
    }
}