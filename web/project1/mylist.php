<?php

   include “dbConnect.php”;
   $db = get_db();

   $movie = $db->prepare('SELECT * FROM movie'); 
   $movie->execute();
   while ($row = $movie->fetch(PDO::FETCH_ASSOC))
   {
      echo "in while";
      $name = $row[“name”];
      $image = $row[“image”];
      echo "$name<br><img src=‘$image’>";
   }
?>