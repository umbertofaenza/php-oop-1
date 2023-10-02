<?php

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/TvSerie.php';

$genre_drama = new Genre("Drama");

$prod_1 = new TvSerie("Titolo", $genre_drama, "2004", "2010", 50, 5);

var_dump($prod_1);