<?php

    $apikey = "ef7339152eff424955433540cf591fc4";
    $channel = $_GET['channel'];

    $imgurl_1 = "http://image.tmdb.org/t/p/w500";
    $imgurl_2 = "http://image.tmdb.org/t/p/w300";

    $cs = curl_init();
    curl_setopt($cs, CURLOPT_URL, "http://api.themoviedb.org/3/search/".$channel."?api_key=".$apikey."&query=".$search);
    curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($cs, CURLOPT_HEADER, FALSE);
    curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
    $response17 = curl_exec($cs);
    curl_close($cs);
    $search = json_decode($response17);
    
?>