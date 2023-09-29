<?php

/**
 * ### Class Genre
 * Define a class Genre
 * */
class Genre
{
    public $genres;

    public function __construct(
        array $genres,
    ) {
        $this->genres = $genres;
    }
}