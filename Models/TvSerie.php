<?php

require_once __DIR__ . "./Genre.php";

/**
 * ### Class TvSerie
 * Define a class TvSerie
 * */
class TvSerie extends Production
{
    public $title;
    public $genre;
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct(
        string $title,
        Genre $genre,
        string $aired_from_year,
        string $aired_to_year,
        int $number_of_episodes,
        int $number_of_seasons
    ) {
        parent::__construct($title, $genre);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }

    public function get_details()
    {
        return "$this->title, $this->genre, $this->aired_from_year, $this->aired_to_year, $this->number_of_episodes, $this->number_of_seasons";
    }
}