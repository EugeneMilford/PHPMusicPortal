<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "Error: You need to log in to save favorites.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['artistData'])) {
    $artistData = json_decode($_POST['artistData'], true);
    $userId = $_SESSION['user_id'];
    $artistId = $artistData['id'];
    $artistName = $artistData['name'];
    $artistGenre = $artistData['genre'];
    $artistImage = $artistData['image'];

    // Database connection
    $conn = new mysqli("host", "username", "password", "database");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Add favorite artist for the logged-in user
    $stmt = $conn->prepare("INSERT INTO favorite_artists (user_id, artist_id, artist_name, artist_genre, artist_image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $userId, $artistId, $artistName, $artistGenre, $artistImage);

    if ($stmt->execute()) {
        echo "Artist added to favorites!";
    } else {
        echo "Error: Could not add artist to favorites.";
    }

    $stmt->close();
    $conn->close();
}

