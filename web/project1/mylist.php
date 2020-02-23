<?php
    session_start();
    $UID = $_SESSION['UID'];
?>
<head>
   <link rel="stylesheet" href="home.css">
   <title>Movies List</title>
</head>

<body>

<div class="topnav">
   <a class="active" href="home.php">Home</a>
   <a href="mylist.php">Movie/Series List</a>
   <a>
        <?php
            if(isset($_SESSION['username'])) {
                $user = $_SESSION['username'];
                echo $user;
            } else {
                echo '<a href="login.php">Login</a>';
            }
               
        ?>
        </a>
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

   $movie = $db->prepare("SELECT title, year, cover FROM movie mt INNER JOIN list l ON mt.id = l.movie_id Where l.user_id = 1"); //:UID
   //$statement->bindValue(':user_id', $UID);
   $movie->execute();
   while ($row = $movie->fetch(PDO::FETCH_ASSOC))
   {
      $title = $row["title"];
      $year = $row["year"];
      $image = $row["cover"];
      echo "$title<br>$year<br><img src='$image'><br><hr>";
   }
?>

