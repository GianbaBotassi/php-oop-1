<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
    include "db.php";
    include "./models/movie.php";
  ?>
<style>
  .container {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.row {
  display: flex;
  justify-content: center;
  flex-wrap:wrap;
}

.slot {
  border: 1px solid #ccc;
  padding: 10px;
  display: flex;
  flex-direction: column;
  flex-basis:20%;
}
h6{
  margin: 0;
}
span{
  margin-top:5px;
}
/* ul{
  margin: 0;
} */
</style>


</head>
<body>

<div class="container">
    <div class="row">

      <?php


$movies[] = new Movie("Oppenheimer", "2010","Christofer Nolan", "208 min","booo", "brutto", "Cattivo" );
$movies[] = new Movie("Indiana Jones", "2022", "Pinni l'avaro", "111 min", "Documentario", "Avventura");

// echo "<pre>",var_dump($movies),"</pre>";

        foreach ($movies as $movie) {
          echo "<div class='slot'>";
          echo "<h3>" .$movie->title ."</h3>";
          echo "<span>Anno: " . $movie->year ."</span>";
          echo "<span>Regista: " . $movie->director ."</span>";
          echo "<span>Durata: " . $movie->time ."</span>";
          echo "<span>Attore principale: " . $movie->main_actor ."</span>";
          echo "<span>Genere: ";
          $genresCount = count($movie->genres);
          foreach ($movie->genres as $key => $genre) {
            echo $genre;
            if ($key !== $genresCount - 1) {
              echo ", ";
          }
          }
          echo "</span>";
          echo "</div>";
        }
?>

    </div>
</div>

</body>
</html>

