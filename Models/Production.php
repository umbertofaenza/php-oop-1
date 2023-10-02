<?php

require_once __DIR__ . "./Genre.php";

/**
 * ### Class Production
 * Define a class Production
 * */
class Production
{
    public $title;

    public $genre;

    public function __construct(
        string $title,
        Genre $genre
    ) {
        $this->title = $title;
        $this->genre = $genre;
    }

    public function get_details()
    {
        $genre_name = $this->genre->name;
        return "$this->title, $genre_name";
    }
}