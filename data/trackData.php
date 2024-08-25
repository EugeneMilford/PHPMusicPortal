<?php

$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
        
$track = filter_input(INPUT_GET, 'track', FILTER_SANITIZE_STRING);

$abc = urlencode(utf8_encode($name));

$xyz = urlencode(utf8_encode($track));

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://theaudiodb.p.rapidapi.com/searchtrack.php?s=$abc&t=$xyz");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
curl_setopt($curl, CURLOPT_TIMEOUT, 30);
curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "X-RapidAPI-Host: theaudiodb.p.rapidapi.com",
            "X-RapidAPI-Key: 2dbc831825msh84a073d47a621bap17f4cfjsn8a5f2a3cea0d"
        ],
    );

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $searchTrack = json_decode($response, true);

    //print_r($searchTrack);
    
    echo "<div class='container'>";
    echo "<div class='row'>";
    
    echo "<p>Title: ".$searchTrack['track'][0]['strTrack']."</p>";
    echo "<p>Album: ".$searchTrack['track'][0]['strAlbum']."</p>";
    echo "<p>Style: ".$searchTrack['track'][0]['strStyle']."</p>";
    
    
    echo "</div>";
    echo "</div>";
