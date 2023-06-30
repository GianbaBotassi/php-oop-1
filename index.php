<?php

class Movie {
  
  public $title;
  public $year;
  public $director;
  public $time;
  public $main_actor;
  public $genres;
  
  public function __construct($title, $year, $director, $time, $main_actor, ...$genres){

    $this -> title = $title;
    $this -> year = $year;
    $this -> director = $director;
    $this -> time= $time;
    $this -> main_actor = $main_actor;
    $this -> genres = $genres;

  }

  public function cycleGenres(){
    foreach($this->genres as $genre ){
      $generi .= "<li>" .$genre ."</li>";
    }
    return $generi;
  }

  public function getMovieInfo(){

    $info = "Titolo: " .$this -> title 
    ."<br>Anno: " .$this -> year 
    ."<br>Regista: " .$this -> director 
    ."<br>Attore principale: " .$this -> main_actor;
    $info .="<br>Genere: <ul>" .$this -> cycleGenres() ."</ul>";

    return $info;
  }

  
};

$movie1 = new Movie("Into the Wild", "2007","Sean Penn", "148 min","Emile Hirsch", "Drammatico", "Biografico", "Avventura");
$movie2 = new Movie("The Dawn Wall", "2017", "Josh Lowell", "100 min", "Tommy Caldwell", "Documentario", "Sportivo");


// echo "<pre>",var_dump($movie1),"</pre>";


echo $movie1 -> getMovieInfo();

echo "<br><br>";


echo $movie2 -> getMovieInfo();
?>