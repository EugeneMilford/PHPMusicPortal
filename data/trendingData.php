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

echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-sm-12 text-center'>";
echo "</div>";
echo "</div>";
echo "<div class='row'>";
echo "<div class='col-sm-12'>";
echo "<table class='table table-bordered table-hover table-striped'>";
echo "<thead>";
echo "<tr>";
echo "<th>Album</th>";
echo "<th>Artist</th>";
echo "<th>Chart Place</th>";
echo "<th>Country</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    echo "<td>".$search['trending'][$i]['strAlbum']."</td>";
    echo "<td>".$search['trending'][$i]['strArtist']."</td>";
    echo "<td>".$search['trending'][$i]['intChartPlace']."</td>";
    echo "<td>".$search['trending'][$i]['strCountry']."</td>";
    echo "<td><button type='button' class='button_2' onclick='addToFavorites()' class='btn btn-primary'>Save to Favorites</button></td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
echo "</div>"; // Close column
echo "</div>"; // Close row
echo "</div>"; // Close container
?>