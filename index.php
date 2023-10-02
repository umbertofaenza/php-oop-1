<?php

require_once __DIR__ . './Models/Production.php';
require_once __DIR__ . './Models/Movie.php';

$genre_drama = new Genre("Drama");

$prod_1 = new Production("Titolo", $genre_drama);

echo $prod_1->get_details($prod_1->title, $prod_1->genre->name);