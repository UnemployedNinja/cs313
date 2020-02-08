<?php

   require "dbConnect.php";

   $db = get_db();
   $movie = $db->prepare("SELECT * FROM moive");
   $movie->execute();
   while ($row = $movie->fetch(PDO::FETCH_ASSOC))
   {
      $title = $row["title"];
      $year = $row["year"];
      $image = $row["cover"];
      echo "$title<br>$year<br><img src='$image'>";
   }
?>