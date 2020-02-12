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
<!DOCTYPE html>
<head>
   <link rel="stylesheet" href="home.css">
   <title>Movies List</title>
</head>

<body>

<div class="topnav">
   <a class="active" href="#home">Home</a>
   <a href="mylist.php">Movie/Series List</a>
   <a href="login.html">Login</a>
      <div class="search-container">

         <form action="search.php" method="GET">

            <label for = "channel">Pick Channel: </label>

            <select name="channel" required>
            <option value="movie" selected="selected">Movie
            </option>
            <option value="tv">TV Show
            </option>
            </select>

            <input type="text" placeholder="Search.." name="search" required>
            <button type="submit" name="submit">Submit</button>

         </form>
      </div>
</div>

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

