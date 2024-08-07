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

$search = json_decode($response, true);

// Print the search results
//print_r($search); 

echo "<div class='container'>";
echo "<div class='row'>";
for ($i = 0; $i < 6; $i++) {   

echo "<div class='col-md-3'>";  // 4 cards per row
echo "<div class='card mb-4'>";
echo "<div class='card-body'>";
echo "<h5 class='card-title'>".$search['trending'][$i]['strAlbum']."</h5>";
echo "<p class='card-text'><strong>Artist:</strong> ".$search['trending'][$i]['strArtist']."</p>";
echo "<p class='card-text'><strong>Chart Place:</strong> ".$search['trending'][$i]['intChartPlace']."</p>";
echo "<p class='card-text'><strong>Country:</strong> ".$search['trending'][$i]['strCountry']."</p>";
echo "<br>";
echo "<button type='button' onclick='addToFavorites()' class='button_2'>Save to Favorites</button>";
echo "</div>";
echo "</div>";
echo "</div>";
}
echo "</div>";
echo "</div>";