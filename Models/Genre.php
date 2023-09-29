<?php

/**
 * ### Class Genre
 * Define a class Genre
 * */
class Genre
{
    public $name;

    public function __construct(
        string $name,
    ) {
        $this->name = $name;
    }
}