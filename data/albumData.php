<?php

if (isset($_POST['artist_name'])) {

$artist_name = urlencode($_POST['artist_name']);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://theaudiodb.p.rapidapi.com/searchalbum.php?s=$artist_name");
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
	    ]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
    } else {
        
    }
    
$search = json_decode($response, true);

//print_r($search); 
    
echo "<div class='container'>";
for ($i = 0; $i < 4; $i++) {
echo "<div class='row'>";
echo "<p>Artist: ".$search['album'][$i]['strArtist']."</p>";
echo "<p>Album: ".$search['album'][$i]['strAlbum']."</p>";
echo "<p>Year Released: ".$search['album'][$i]['intYearReleased']."</p>";
echo "</div>";
    } 
echo "</div>";
} 
    







