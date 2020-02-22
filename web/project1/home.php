<?php
    require "dbConnect.php";
    $db = get_db();
    session_start();
    if(isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        echo 'Session username is: ' . $user;
    }
    if(isset($_SESSION['UID'])) {
        $UID = $_SESSION['UID'];
        echo 'Session UID is: ' . $UID;
    }

?>

    <head>
        <link rel="stylesheet" href="home.css">
        <title>Movies List</title>
    </head>
    
    <body>
    
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="mylist.php">Movie/Series List</a>
        <a href="login.php">Login</a>
        <a>
            <?php
                if(isset($_SESSION['username'])) {
                    $user = $_SESSION['username'];
                    echo 'Session username is: ' . $user;
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
            
            // Loads up the most popular Movies
            include "info.php";
            $title="Movie List";

            include_once "api/api_popular.php";
            foreach($popular->results as $p){
                echo '<br><li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w200'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li><hr>";
            }
                
        ?>

    </body>
   