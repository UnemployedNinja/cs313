<!DOCTYPE html>
<html>
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

                <form action="" method="GET">

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
            
           include "info.php";
           $title="Couldn't think of a title ";

            include_once "api/api_toprated.php";
            foreach($toprated->results as $p){
                echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w200'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
            }

            // include_once "api/api_popular.php";

            // foreach($popular->results as $p){
            //     echo '<li><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></li>";
            // }
           
            // } else {

            //     $input = $_GET['search'];
            //     $channel = $_GET['channel'];
            //     $search = $input;
           
            //     include_once "api/api_search.php";

            //     foreach($search->results as $results){

            //         $title = $results->original_name;
            //         $id = $results->id;
            //         $release = $results->first_air_date;

            //         if (!empty($release) && !is_null($release)){

            //             $year = $tempyear[0];
            //             if (!is_null($year)){
            //                 $title = $title.' ('.$year.')';
            //             }
            //         }

            //         $backdrop = $results->backdrop_path;

            //         if (!empty($backdrop) && !is_null($backdrop)){

            //             echo "No Image ";

            //         } else {
            //             $backdrop = 'http://image.tmdb.org/t/p/w300'.$backdrop;
            //         }
            //         echo '<li><a href="tvshow.php?id=' . $id . '"><img src="'.$backdrop.'"><h4>'.$title.'</h4></a></li>';
            //     }
            // }
    
        ?>

    </body>
   
</html>