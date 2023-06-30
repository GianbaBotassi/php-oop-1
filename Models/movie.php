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
};