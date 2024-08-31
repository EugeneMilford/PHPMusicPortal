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
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$searchTrack = json_decode($response, true);

// Check if track data is available
if (!empty($searchTrack['track'])) {
    // Output the track information
    echo "<div class='container'>";
    echo "<div class='row'>";

    // Initialize description variable
    $description = '';

    // Column for track details
    echo "<div class='col-md-6'>";
    echo "<p>Title: " . htmlspecialchars($searchTrack['track'][0]['strTrack']) . "</p>";
    echo "<p>Album: " . htmlspecialchars($searchTrack['track'][0]['strAlbum']) . "</p>";
    echo "<p>Style: " . htmlspecialchars($searchTrack['track'][0]['strStyle']) . "</p>";

    // Store the description if available
    if (!empty($searchTrack['track'][0]['strDescriptionEN'])) {
        $description = htmlspecialchars($searchTrack['track'][0]['strDescriptionEN']);
    }
    echo "</div>"; // Close track details column

    // Column for image and buttons
    echo "<div class='col-md-6'>";
    echo "<div class='row'>";
    
    // Image column
    echo "<div class='col-12 text-center mb-3'>";
    echo "<img src='" . htmlspecialchars($searchTrack['track'][0]['strTrackThumb']) . "' alt='Track Thumbnail' class='img-fluid' style='max-width: 300px;'>";
    echo "</div>";

    // Buttons column
    echo "<div class='col-12'>";
    echo "<div class='d-flex flex-column'>";
    echo "<button type='button' class='button_2' data-bs-toggle='modal' data-bs-target='#descriptionModal'>View Description</button>";
    echo "<br>";
    echo "<button type='button' onclick='addToFavorites(\"".htmlspecialchars($searchTrack['track'][0]['strTrack'])."\", \"".htmlspecialchars($searchTrack['track'][0]['strAlbum'])."\", \"".htmlspecialchars($searchTrack['track'][0]['strTrackThumb'])."\", \"".htmlspecialchars($searchTrack['track'][0]['strStyle'])."\")' class='button_1'>Add to Favorites</button>";
    echo "</div>";
    echo "</div>"; // Close buttons column

    echo "</div>"; // Close inner row for image and buttons
    echo "</div>"; // Close outer column for image and buttons

    // Check if strMusicVid is available
    if (!empty($searchTrack['track'][0]['strMusicVid'])) {
        $musicVidUrl = $searchTrack['track'][0]['strMusicVid']; // Get the YouTube URL
        // Extract the video ID to embed the video
        preg_match('/v=([^&]+)/', $musicVidUrl, $matches);
        $youtubeId = !empty($matches[1]) ? $matches[1] : '';

        if ($youtubeId) {
            echo "<h3 class='mt-4'>Music Video:</h3>"; // Add margin top for spacing
            echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$youtubeId' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
        }
    }

    echo "</div>"; // Close main row for track details and image/buttons
    echo "</div>"; // Close container div
}

// Modal for displaying the description
    echo "<div class='modal fade' id='descriptionModal' tabindex='-1' aria-labelledby='descriptionModalLabel' aria-hidden='true'>";
    echo "    <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>";
    echo "        <div class='modal-content'>";
    echo "            <div class='modal-header'>";
    echo "                <h5 class='modal-title' id='descriptionModalLabel'>Description</h5>";
    echo "                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
    echo "            </div>";
    echo "            <div class='modal-body'>";
    echo                $description; // Displaying the stored description
    echo "            </div>";
    echo "            <div class='modal-footer'>";
    echo "                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
    echo "            </div>";
    echo "        </div>";
    echo "    </div>";
    echo "</div>";
