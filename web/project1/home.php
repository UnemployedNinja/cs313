
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="home.css">
        <title>Browse</title>
    </head>
    
    <body>
    
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>
    </div>

        <?php

        /* include the library */
        require 'phptvdb-1.0.2/TVDB.php';

        /* get the office! */
        $shows = TV_Shows::search('The Office UK');

        /* get the first show */
        $show = $shows[0];

        /* a few shortcuts / formatted vars */
        $firstAired = date('l, F j, Y',$show->firstAired);
        $imdb_url = "http://imdb.com/title/$show->imdbId";

        /* spit out the show information */
        echo "<h2>$show->seriesName</h2>
		<div class=\"meta\">
		<strong>Rating:</strong> $show->rating •
		<strong>Debuted:</strong> $firstAired on $show->network •
		<a href=\"$imdb_url\">$show->seriesName on IMDB</a>
		</div>
		<p>$show->overview</p>";
		
        /* my favorite episode info  */
        $episode = $show->getEpisode(1,4);
        echo "<div class=\"righty\">
			<h3>Favorite Episode:  $episode->name</h3>
			<p>$episode->overview</p>
		</div>";

        /* spit out the actors */
        echo '<h3>The Cast</h3><ul>';
        foreach($show->actors as $actor) {
	        echo "<li>$actor</li>";
        }
        echo '</ul><br />';

        /* learn more link */
        echo "<p><a href=\"http:/* imdb.com/title/\">Learn more about \"$imdb_url\" on IMDB</a></p>";
        
?>

    </body>
   
</html>