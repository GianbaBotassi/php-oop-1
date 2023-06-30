<?php

class Movie {
  
  public $title;
  public $year;
  public $time;
  public $main_actor;
  public $genre;
  
  public function __construct($title, $year, $time, $main_actor, $genre){

    $this -> title = $title;
    $this -> year = $year;
    $this -> time= $time;
    $this -> main_actor = $main_actor;
    $this -> genre = $genre;

  }

  public function getMovieInfo(){

    return "Titolo: " .$this -> title ."<br>Genere: " .$this -> genre ."<br>Anno: " .$this -> year ."<br>Attore principale: " .$this -> main_actor;
  }

  
};

$movie1 = new Movie("Into the Wild", "2007","148 min","Emile Hirsch", "Sean Penn");
$movie2 = new Movie("The Dawn Wall", "2017", "100 min", "Tommy Caldwell", "Josh Lowell");





echo $movie1 -> getMovieInfo();

echo "<br><br>";


echo $movie2 -> getMovieInfo();
?>