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
	"x-rapidapi-host: theaudiodb.p.rapidapi.com",
	"x-rapidapi-key: 2dbc831825msh84a073d47a621bap17f4cfjsn8a5f2a3cea0d"
	]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$top10 = json_decode($response, true);

print_r($top10);


for ($i = 0; $i < 10; $i++) {  
    
$img = $top10['trending'][$i]['strTrackThumb'];
$imageData = base64_encode(file_get_contents($img));
    
echo "<section class='ls section_padding_top_150 section_padding_bottom_130 columns_padding_25'>";
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4'>";

echo "<article class='post side-item side-md content-padding with_shadow'>";
echo "<div class='row'>";
echo "<div class='col-md-5'>";
echo "<div class='item-media'>";
echo '<img src="data:image/jpeg;base64,'.$imageData.'" width="200" height="200">';
echo "<div class='media-links'> <a class='abs-link' title='' href='event-single-left.html'></a> </div>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-7'>";
echo "<div class='item-content'>";
echo "<h4 class='entry-title'> <a href='event-single-left.html'>Artist: ".$top10['loved'][$i]['strArtist']."</a></h4>";
echo "<p class='card-text'> Artist: ".$top10['trending'][$i]['strArtist']."</p>";
echo "<p class='card-text'> Track: ".$top10['trending'][$i]['strTrack']."</p>";
echo "<p class='card-text'> Album: ".$top10['trending'][$i]['strAlbum']."</p>";
echo "<div> <a class='theme_button color' href='data-files/top10-description-data.php'>View Description</a></div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</article>";

echo "</div>";
echo "</div>";
echo "</div>";
echo "</section>";
echo "<hr>";
}







