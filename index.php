<?php

require_once __DIR__ . './Models/Movie.php';

$drama_genre = new Genre('drama');

$movie_1 = new Movie(
    'dance with wolves',
    "1990",
    $drama_genre
);

$movie_2 = new Movie(
    "one flew over the cuckoo's nest",
    "1975",
    $drama_genre
);

echo $movie_1->getCapitalisedTitle($movie_1->title);
var_dump($movie_1);

echo $movie_2->getCapitalisedTitle($movie_2->title);
var_dump($movie_2);

echo $movie_1->genre?->name;