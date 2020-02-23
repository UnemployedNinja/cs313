<?php
    require "dbConnect.php";
    session_start();
    if(isset($_SESSION['UID'])){
        $UID = $_SESSION['UID'];
    }
?>

<!DOCTYPE html>
<html>
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
                    <button type="submit" name="submit" style = "background-color: blue;" >Submit</button>

                </form>
            </div>
    </div>

    <?php

        $input = $_GET['search'];
        $channel = $_GET['channel'];
        $search = $input;
        echo "<br>";

        include_once "info.php";
        $title = 'Result Search | '.$input;

        include_once "api/api_search.php";

        if($channel == "movie"){	

            foreach($search->results as $results){

			    $title = $results->title;
			    $id = $results->id;
                $releas= $results->release_date;
                        
			    if (!empty($release) && !is_null($release)){

				    $tempyear = explode("-", $release);
                    $year = $tempyear[0];
                            
				    if (!is_null($year)){
					    $title = $title.' ('.$year.')';
				    }
                }
                        
                $backdrop = $results->backdrop_path;
                        
			    if (empty($backdrop) && is_null($backdrop)){

                    // $backdrop =  dirname($_SERVER['PHP_SELF']).'/image/no-gambar.jpg';
                    echo "No image to display";
                            
			    } else {

                    $backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
                            
			    }
                echo '<li><a href="movie.php?id=' . $id . '"><img src="'.$backdrop.'"><h4>'.$title.'</h4></a></li>';
                echo '<form method = "POST"><button type = "button" name = "movieAdd">Add to List</button></form><br><hr><br>';
                
            }
                    
        }elseif($channel == "tv"){

            foreach($search->results as $results){

			    $title = $results->original_name;
			    $id = $results->id;
                $release = $results->first_air_date;
                        
			    if (!empty($release) && !is_null($release)){

				    $tempyear = explode("-", $release);
                    $year = $tempyear[0];
                            
				    if (!is_null($year)){
					    $title = $title.' ('.$year.')';
				    }
                }   
                        
                $backdrop = $results->backdrop_path;
                        
			    if (empty($backdrop) && is_null($backdrop)){

                    //$backdrop = $pathloc.'image/no-backdrop.png';
                      echo "No image to display";       
			    } else {
				    $backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
			    }
                echo '<li><a href="tvshow.php?id=' . $id . '"><img src="'.$backdrop.'"><h4>'.$title.'</h4></a></li>';
                echo '<form method = "POST"><button type = "button" name = "seriesAdd">Add to List</button></form><br><hr><br>';
            }
        }

        if (isset($_POST['movieAdd'])) 
        {     
        
            $db = get_db();

            $addToList = $db->prepare("INSERT INTO movie (title, year, cover) VALUES (:title, :year, :backdrop)");
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':year', $year);
            $stmt->bindValue(':backdrop', $backdrop);
            $addToList->execute();

            $addToList = $db->prepare("INSERT INTO list (user_id, movie_id) VALUES (:UID, :id)");
            $stmt->bindValue(':user_id', $UID);
            $stmt->bindValue(':movie_id', $id);

            $addToList->execute();

        }
        if(isset($_POST['seriesAdd']))
        {
            $db = get_db();

            $addToList = $db->prepare("INSERT INTO movie (title, year, cover) VALUES ($title, $year, $backdrop)");
            $addToList->execute();

            $addToList = $db->prepare("INSERT INTO list (user_id, movie_id) VALUES ($UID, $id)");
            $addToList->execute();
        }   
        
        ?>

    </body>
   
</html>