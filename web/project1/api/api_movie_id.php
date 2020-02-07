<?php

    $apikey = "ef7339152eff424955433540cf591fc4";

    $cm = curl_init();
    curl_setopt($cm, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id_movie."?api_key=" . $apikey);
    curl_setopt($cm, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($cm, CURLOPT_HEADER, FALSE);
    curl_setopt($cm, CURLOPT_HTTPHEADER, array("Accept: application/json"));
    $response7 = curl_exec($cm);
    curl_close($cm);
    $movie_id = json_decode($response7);

?>