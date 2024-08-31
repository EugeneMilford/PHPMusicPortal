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

// Start the Bootstrap table
echo '<table class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">#</th>';
echo '<th scope="col">Track</th>';
echo '<th scope="col">Artist</th>';
echo '<th scope="col">Thumbnail</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

for ($i = 0; $i < min(6, count($trending['trending'])); $i++) {
    $trackName = htmlspecialchars($trending['trending'][$i]['strTrack']);
    $artistName = htmlspecialchars($trending['trending'][$i]['strArtist']);
    $img = htmlspecialchars($trending['trending'][$i]['strTrackThumb']);
    
    // Display each row of the table
    echo '<tr>';
    echo '<th scope="row">' . ($i + 1) . '</th>';
    echo '<td>' . $trackName . '</td>';
    echo '<td>' . $artistName . '</td>';
    echo '<td><img src="' . $img . '" alt="' . $trackName . '" width="100" height="100"></td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';





