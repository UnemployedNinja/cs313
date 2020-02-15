<?php
  require("dbConnect.php");
  $db = get_db();
  session_start();
?>

<head>
   <link rel="stylesheet" href="home.css">
   <title>Movies List</title>
</head>

<body>

<div class="topnav">
   <a class="active" href="home.php">Home</a>
   <a href="mylist.php">Movie/Series List</a>
   <?php
      if(session_id() == '' || !isset($_SESSION)) {
         echo '<a href="login.php">Login</a>';
     }else {
      echo '<a>' . $_SESSION['username'] . '</a>';
     }
   ?>
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

   echo "<br>";
   require "dbConnect.php";

   $db = get_db();
   $movie = $db->prepare("SELECT mt.title,mt.year,mt.image FROM movie mt INNER JOIN list l ON mt.id = l.movie_id INNER JOIN user_profile p ON l.user_id = p.id WHERE l.user_id = 1")// p.id");
   $movie->execute();
   while ($row = $movie->fetch(PDO::FETCH_ASSOC))
   {
      $title = $row["title"];
     // $year = $row["year"];
      //$image = $row["cover"];
      echo "$title<br>$year<br><img src='$image'>";
   }
?>

