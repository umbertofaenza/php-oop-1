<?php

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/TvSerie.php';

$genre_drama = new Genre("Drama");

$prods = [
    new TvSerie("Titolo", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo", $genre_drama, "2004", 120),
    new TvSerie("Titolo", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo", $genre_drama, "2004", 120),
    new TvSerie("Titolo", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo", $genre_drama, "2004", 120),
    new TvSerie("Titolo", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo", $genre_drama, "2004", 120),
];

var_dump($prods);