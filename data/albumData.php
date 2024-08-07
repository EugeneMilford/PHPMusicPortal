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

// Print the search results
//print_r($search); 

echo "<div class='container'>";
echo "<div class='row'>";

for ($i = 0; $i < 4; $i++) {
    $img = $search['album'][$i]['strAlbumThumb'];
    $imageData = base64_encode(file_get_contents($img));
    
    echo "<div class='col-md-3'>";  // 4 cards per row
    echo "<div class='card mb-4'>";
    echo "<img src='data:image/jpeg;base64,$imageData' class='card-img-top' alt='Album Image'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>".$search['album'][$i]['strAlbum']."</h5>";
    echo "<p class='card-text'><strong>Artist:</strong> ".$search['album'][$i]['strArtist']."</p>";
    echo "<p class='card-text'><strong>Year Released:</strong> ".$search['album'][$i]['intYearReleased']."</p>";
    echo "<p class='card-text'><strong>Style:</strong> ".$search['album'][$i]['strStyle']."</p>";
    echo "<button type='button' class='button_5' data-bs-toggle='modal' data-bs-target='#albumDetailModal$i'>View Details</button>";
    echo "<br>";
    echo "<br>";
    echo "<button type='button' onclick='addToFavorites()' class='button_2'>Save to Favorites</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    
    // Modal for each album
    echo "<div class='modal fade' id='albumDetailModal$i' tabindex='-1' aria-labelledby='albumDetailLabel$i' aria-hidden='true'>";
    echo "<div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>";
    echo "<div class='modal-content'>";
    echo "<div class='modal-header'>";
    echo "<h5 class='modal-title' id='albumDetailLabel$i'>".$search['album'][$i]['strAlbum']."</h5>";
    echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<p><strong>Artist:</strong> ".$search['album'][$i]['strArtist']."</p>";
    echo "<p><strong>Year Released:</strong> ".$search['album'][$i]['intYearReleased']."</p>";
    echo "<p><strong>Style:</strong> ".$search['album'][$i]['strStyle']."</p>";
    echo "<p><strong>Description:</strong> ".$search['album'][$i]['strDescriptionEN']."</p>";  // Assuming there's a description
    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "<button type='button' class='button_3' data-bs-dismiss='modal'>Close</button>";
    echo "<button type='button' onclick='addToFavorites()' class='button_4'>Save to Favorites</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

echo "</div>";
echo "</div>";
}
