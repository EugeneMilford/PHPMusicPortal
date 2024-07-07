<?php

$name = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);

$xyz = urlencode(utf8_encode($name));

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://theaudiodb.p.rapidapi.com/search.php?s=$xyz");
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

$search = json_decode($response, true);

$img = $search['artists'][0]['strArtistThumb'];
$imageData = base64_encode(file_get_contents($img));

echo "<section class='ls section_padding_top_70 section_padding_bottom_130 columns_padding_25'>";
echo "<div class='container'>";

echo "<div class='row'>";
echo "<div class='col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4'>";

echo "<div class='row'>";
echo "<article id='art' class='vertical-item content-padding big-padding shadow-sm post format-standard'>";
echo "<div class='item-media entry-thumbnail'>";
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
echo "</div>";
echo "<div class='item-content'>";
echo "<header class='entry-header'>";
echo "<div class='entry-meta small-text no-spacing d-flex justify-content-between'>";
echo "</div>";
echo "<h4 class='entry-title'> <a href='event-single-left.html'>".$search['artists'][0]['strArtist']."</a></h4>";
echo "</header>";
echo "<div class='entry-content'>";
echo "<p>Genre: ".$search['artists'][0]['strGenre']."</p>";
echo "<p>Year Formed: ".$search['artists'][0]['intBornYear']."</p>";
echo"<button class='button_5' data-bs-toggle='modal' data-bs-target='#artistDetail'>View Description</button>";
echo "<button type='button' onclick='addToFavorites()' class='button_2'>Save to Favorites</button>";
echo "</div>";
echo "</div>";
echo "</article>";
echo "</div>";

echo "</div>";
echo "</div>";

echo "<div class='modal modal-xl fade' id='artistDetail' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
echo "<div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>";
echo "<div class='modal-content'>";
echo "<div class='modal-header'>";
echo "<h4 class='entry-title'> <a href='event-single-left.html'>".$search['artists'][0]['strArtist']."</a></h4>";
echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
echo "</div>";
echo "<div class='modal-body'>";
echo "<p>Year Formed : ".$search['artists'][0]['intFormedYear']."</p>";
echo "<p>Style : ".$search['artists'][0]['strStyle']."</p>";
echo "<p>Biography : ".$search['artists'][0]['strBiographyEN']."</p>";
echo "</div>";

echo "<div class='modal-footer'>";
echo "<button type='button' class='button_3' data-bs-dismiss='modal'>Close</button>";
echo "<button type='button' onclick='addToFavorites()' class='button_2'>Save to Favorites</button>";
echo "</div>";

echo "</div>";
echo "</div>";
echo "</div>";

echo "</div>";
echo "</section>";
?>