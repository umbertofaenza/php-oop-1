<?php

require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/Genre.php';

$genre_drama = new Genre('Drama');
$genres_pshycological = new Genre("Psychological");
$genre_western = new Genre("Western");


$movie_1 = new Movie(
    'dance with wolves',
    "1990",
    $genre_drama,
    $genre_western
);

$movie_2 = new Movie(
    "one flew over the cuckoo's nest",
    "1975",
    $genre_drama,
    $genres_pshycological
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Movies:</h1>

    <!-- Movie 1  -->
    <h2>
        <?= $movie_1->getCapitalisedTitle($movie_1->title); ?>
    </h2>
    <p>
        Year:
        <?= $movie_1->getCapitalisedTitle($movie_1->year); ?>
    </p>
    <p>
        Genre:
        <?= $movie_1->getCapitalisedTitle($movie_1->genre_1->name); ?>,
        <?= $movie_1->getCapitalisedTitle($movie_1->genre_2->name); ?>
    </p>

    <!-- Movie 2  -->
    <h2>
        <?= $movie_2->getCapitalisedTitle($movie_2->title); ?>
    </h2>
    <p>
        Year:
        <?= $movie_2->getCapitalisedTitle($movie_2->year); ?>
    </p>
    <p>
        Genre:
        <?= $movie_2->getCapitalisedTitle($movie_2->genre_1->name); ?>,
        <?= $movie_2->getCapitalisedTitle($movie_2->genre_2->name); ?>
    </p>
</body>

</html>