<?php

require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/Genre.php';

$genre_array_1 = ['Drama', 'Western'];
$genre_array_2 = ['Drama', 'Psychological'];

$genres_1 = new Genre($genre_array_1);
$genres_2 = new Genre($genre_array_2);



$movie_1 = new Movie(
    'dance with wolves',
    "1990",
    $genres_1,
);

$movie_2 = new Movie(
    "one flew over the cuckoo's nest",
    "1975",
    $genres_2,
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
        <?= $movie_1->year; ?>
    </p>
    <p>
        Genre:
        <?php foreach ($movie_1->genres->genres as $genre) {
            echo "$genre ";
        }
        ?>
    </p>

    <!-- Movie 2  -->
    <h2>
        <?= $movie_2->getCapitalisedTitle($movie_2->title); ?>
    </h2>
    <p>
        Year:
        <?= $movie_2->year; ?>
    </p>
    <p>
        Genre:
        <?php foreach ($movie_2->genres->genres as $genre) {
            echo "$genre ";
        }
        ?>
    </p>
</body>

</html>