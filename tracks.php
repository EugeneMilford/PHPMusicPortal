<?php
session_start(); // Start the session to access session variables

require 'config/db.php'; // Include database connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get the logged-in user's username/email
$userId = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Execute the query and fetch results
$stmt->execute();
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tracks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="assets/css/home.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head>
<body>
    <div id="canvas">
        <div id="box_wrapper">
            <header class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home.php">Music Portal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="faves.php">Favourites</a></li>
                <li class="nav-item"><a class="nav-link" href="artists.php">Artists</a></li>
                <li class="nav-item"><a class="nav-link" href="tracks.php">Tracks</a></li>
                <li class="nav-item"><a class="nav-link" href="albums.php">Albums</a></li>
                <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
            <ul class="navbar-nav ms-auto"> <!-- New ul for user greeting -->
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'user'): ?>
                    <li class="nav-item">
                        <a class="nav-link">Hello Demo User!</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                    <li class="nav-item">
                        <a class="nav-link">Hello Demo Admin!</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</header>

            <section class="page_breadcrumbs cs gradient section_padding_top_40 section_padding_bottom_25 table_section table_section_md" style="margin-top: 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <h2 class="small">Tracks</h2>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tracks</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section_padding_top_40 section_padding_bottom_100">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-sm-8 col-md-4 col-lg-4 order-sm-1 order-md-2 order-lg-2">
                            <div class="widget widget_search">
                                <h3 class="widget-title">Search Artist for Tracks</h3>
                                <form method="get" class="searchform" action="">
                                    <div class="form-group">
                                        <label for="name">Enter Artist Name:</label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="track">Enter Track:</label>
                                        <input type="text" id="track" name="track" required>
                                    </div>
                                    <br>
                                    <button type="submit" class="button_1">Search</button>
                                </form>
                            </div>
                        </div>
                        </div>  
                    </div>
                </div>
            </section>
                
            <?php include 'data/trackData.php'?>
            
            <br>
            
            <!-- Track Features Start -->
<div class="container-fluid track-feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Find Your Favorite Tracks</h4>
            <h1 class="display-5 mb-4">Search, Play, and Save the Best Music Tracks.</h1>
            <p class="mb-0">
                Our platform provides a seamless search experience for music aficionados. Whether you’re seeking new tracks or looking to rediscover old favorites, you’ve come to the right destination.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="track-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-search fa-4x text-primary"></i>
                    </div>
                    <h4>Advanced Track Search</h4>
                    <p class="mb-4">
                        Utilize our advanced search tool to find a broad spectrum of music tracks across all genres. Discover hidden gems and revisit your all-time favorites.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="track-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-info-circle fa-4x text-primary"></i>
                    </div>
                    <h4>Track Details</h4>
                    <p class="mb-4">
                        Access detailed information about each track, including lyrics, credits, and the stories behind the music, enriching your listening experience.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="track-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-play fa-4x text-primary"></i>
                    </div>
                    <h4>Stream Tracks</h4>
                    <p class="mb-4">
                        Stream individual tracks directly from our platform. Enjoy high-quality audio and create your personal playlist seamlessly.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="track-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-heart fa-4x text-primary"></i>
                    </div>
                    <h4>Add to Favorites</h4>
                    <p class="mb-4">
                        Easily add tracks to your favorites list and curate your personalized collection. Stay updated with alerts on new releases and upcoming tracks related to your favorites.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Footer -->
            <footer class="bg-dark text-white pt-4 pb-2 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>About Us</h5>
                            <p>Your go-to platform for discovering new music and artists. Join us as we explore the world of sound.</p>
                        </div>
                        <div class="col-md-4">
                            <h5>Follow Us</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="text-white"><i class="fab fa-facebook"></i> Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
                                </li>
                                <li>
                                    <a href="#" class="text-white"><i class="fab fa-youtube"></i> YouTube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="bg-white">
                    <div class="text-center">
                        <p class="mb-0">© 2024 Your Music Website. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
function addToFavorites(trackName, albumName, trackImg, trackStyle) {
    var favorites = JSON.parse(localStorage.getItem('favoriteTracks')) || [];
    favorites.push({ name: trackName, album: albumName, img: trackImg, style: trackStyle });
    localStorage.setItem('favoriteTracks', JSON.stringify(favorites));
    alert('Track added to favorites');
}
</script>
</body>
</html>