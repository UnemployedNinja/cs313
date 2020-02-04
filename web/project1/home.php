
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
                <form action="/action_page.php" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>
    </div>

        <?php

            $client = new http\Client;
            $request = new http\Client\Request;
            
            $request->setRequestUrl('https://movie-database-imdb-alternative.p.rapidapi.com/');
            $request->setRequestMethod('GET');
            $request->setQuery(new http\QueryString(array(
                'page' => '1',
                'r' => 'json',
                's' => 'Avengers Endgame' // $_GET(search);
            )));
            
            $request->setHeaders(array(
                'x-rapidapi-host' => 'movie-database-imdb-alternative.p.rapidapi.com',
                'x-rapidapi-key' => 'SIGN-UP-FOR-KEY'
            ));
            
            $client->enqueue($request)->send();
            $response = $client->getResponse();
            
            echo $response->getBody();
    
        ?>

    </body>
   
</html>