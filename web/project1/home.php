
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
                <form action="" method="GET">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
    </div>

        <?php

            $curl = curl_init();

            curl_setopt_array($curl, array(
	            CURLOPT_URL => "https://movie-database-imdb-alternative.p.rapidapi.com/?page=1&r=json&s=Avengers%20Endgame",
	            CURLOPT_RETURNTRANSFER => true,
	            CURLOPT_FOLLOWLOCATION => true,
	            CURLOPT_ENCODING => "",
	            CURLOPT_MAXREDIRS => 10,
	            CURLOPT_TIMEOUT => 30,
	            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	            CURLOPT_CUSTOMREQUEST => "GET",
	            CURLOPT_HTTPHEADER => array(
		            "x-rapidapi-host: movie-database-imdb-alternative.p.rapidapi.com",
		            "x-rapidapi-key: SIGN-UP-FOR-KEY"
	            ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
	            echo "cURL Error #:" . $err;
            } else {
	            echo $response;
            }

    
        ?>

    </body>
   
</html>