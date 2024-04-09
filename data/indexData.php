<?php

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://theaudiodb.p.rapidapi.com/trending.php?country=us&type=itunes&format=singles");
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

$trending = json_decode($response, true);

//print_r($trending);

for ($i = 0; $i < 6; $i++) {
    
    $img = $trending['trending'][$i]['strTrackThumb'];
    $imageData = base64_encode(file_get_contents($img));
    
    
    echo "<div class='col-md-6'>";
    echo "<article class='post format-small-image'>";
    echo "<div class='side-item side-md content-padding big-padding shadow'>";
    echo "<div class='row'>";
    echo "<div class='col-md-5'>";
    echo "<div class='item-media entry-thumbnail'>";
    echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
    echo "</div>";
    echo "</div>";
    echo "<div class='col-md-7'>";
    echo "<div class='item-content'>";
    echo "<header class='entry-header'>";
    echo "<h4 class='entry-title'> <a href='event-single-left.html'>".$trending['trending'][$i]['strArtist']."</a></h4>";
    echo "</header>";
    echo "<div class='entry-content'>";
    echo "<p>Pork chop pig prosciuttod round andouille.</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</article>";
    echo "<br>";
    echo "</div>";
}




