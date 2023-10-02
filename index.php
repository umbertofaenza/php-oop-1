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
                                <h3 class="card-title">
                                    <?= $prod->title ?>
                                    </h5>
                                    <p class="card-text">
                                    <h5>
                                        <?= get_class($prod) ?>
                                    </h5>
                                    <?= $prod->get_details() ?>
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