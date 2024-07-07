<?php
session_start(); // Start session if not already started

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['artistData'])) {
    $artistData = json_decode($_POST['artistData'], true);

    // Example of saving to session (you may want to save to database instead)
    $_SESSION['favorite_artists'][] = $artistData;

    echo "Artist added to favorites!";
} else {
    echo "Error: No artist data received.";
}
?>

