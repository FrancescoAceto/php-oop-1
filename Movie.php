
<?php

class Movie {
    public $title;
    public $duration;
    public $genre;
    public $director;
    public $producer;

    function __construct(string $title, int $duration, string $genre, string $director, string $producer){
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->director = $director;
        $this->producer = $producer;
    }
}