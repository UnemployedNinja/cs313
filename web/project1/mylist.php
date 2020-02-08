<?php
   // require "dbConnect.php";

   // $db = get_db();

   // $w5_event = $db->prepare("SELECT * FROM w5_event");
   // $w5_event->execute();

   // while ($row = $w5_event->fetch(PDO::FETCH_ASSOC))
   // {
   //    $name = $row["name"];
   //    $image = $row["image"];
   //    echo "$name<br><img src='$image'>";
   // }
?>

<?php

   require "dbConnect.php";

   $db = get_db();
   $movie = $db->prepare("SELECT * FROM movie");
   $movie->execute();
   while ($row = $movie->fetch(PDO::FETCH_ASSOC))
   {
      $title = $row["title"];
      $year = $row["year"];
      $image = $row["cover"];
      echo "$title<br>$year<br><img src='$image'>";
   }
?>

