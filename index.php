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
</style>


</head>
<body>

<div class="container">
    <div class="row">

      <?php

        foreach ($movies as $value) {
          echo "<div class='slot'>";
          echo "<h3>" . $value['title'] ."</h3>";
          echo "<span>" . $value['year'] ."</span>";
          echo "<span>" . $value['director'] ."</span>";
          echo "<span>" . $value['time'] ."</span>";
          echo "<span>" . $value['main_actor'] ."</span>";
          echo "</div>";
        }
?>


    </div>
</div>

<?php
// // echo "<pre>",var_dump($movie1),"</pre>";

// echo "<pre>",var_dump($movies),"</pre>";


// echo $movie1 -> title;

// echo "<br>";

?>

</body>
</html>

