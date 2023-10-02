<?php

require_once __DIR__ . './Models/Movie.php';

$genre_drama = new Genre("Drama");

$movie_1 = new Movie("Titolo", "Anno", $genre_drama);

var_dump($movie_1);