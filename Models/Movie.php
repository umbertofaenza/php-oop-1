<?php

require_once __DIR__ . "./Genre.php";

/**
 * ### Class Movie
 * Define a class Movie
 * */
class Movie extends Production
{
    public $title;
    public $genre;
    public $published_year;
    public $running_time;

    public function __construct(
        string $title,
        Genre $genre,
        string $published_year,
        int $running_time
    ) {
        $this->title = $title;
        $this->genre = $genre;
        $this->published_year = $published_year;
        $this->running_time = $running_time;

    }

    public function get_details($title, $genre, $published_year, $running_time)
    {
        return "$title, $genre, $published_year, $running_time";
    }
}