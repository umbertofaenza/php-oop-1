<?php

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './Models/TvSerie.php';

$genre_drama = new Genre("Drama");

$prods = [
    new TvSerie("Titolo 1", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo 2", $genre_drama, "2004", 120),
    new TvSerie("Titolo 3", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo 4", $genre_drama, "2004", 120),
    new TvSerie("Titolo 5", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo 6", $genre_drama, "2004", 120),
    new TvSerie("Titolo 7", $genre_drama, "2004", "2010", 50, 5),
    new Movie("Titolo 8", $genre_drama, "2004", 120),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <h1 class="my-5">Productions</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row g-3">
                <?php foreach ($prods as $prod): ?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <!-- title -->
                                <h3 class="card-title">
                                    <?= $prod->title ?>
                                </h3>
                                <!-- description -->
                                <p class="card-text">
                                    <!-- type -->
                                <h6>
                                    <?= get_class($prod) ?>
                                </h6>
                                <!-- details -->
                                <ul>
                                    <li>
                                        Genre:
                                        <?= $prod->genre->name ?>
                                    </li>
                                    <li>
                                        Year:
                                        <?php if (get_class($prod) == "Movie") {
                                            echo $prod->published_year;
                                        } else if (get_class($prod) == "TvSerie") {
                                            echo "from $prod->aired_from_year to $prod->aired_to_year";
                                        }
                                        ?>
                                    </li>
                                    <li>
                                        <?php if (get_class($prod) == "Movie") {
                                            echo "Duration: $prod->running_time";
                                        } else if (get_class($prod) == "TvSerie") {
                                            echo "Number of episodes: $prod->number_of_episodes";
                                        }
                                        ?>
                                    </li>
                                    <?php if (get_class($prod) == "TvSerie") {
                                        echo "<li> Number of seasons: $prod->number_of_seasons </li>";
                                    } ?>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>