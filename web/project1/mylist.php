<?php
   require “dbConnect.php”;
   $db = get_db();
   
   $w5_event = $db->prepare(“SELECT * FROM list”); 
   $w5_event->execute();
   while ($row = $w5_event->fetch(PDO::FETCH_ASSOC))
   {
      $name = $row[“name”];
      $image = $row[“image”];
      echo “$name<br><img src=‘$image’>“;
   }
?>