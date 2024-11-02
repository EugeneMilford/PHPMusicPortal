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
        <title>Albums</title>
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
                            <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </header>  

                <section class="page_breadcrumbs cs gradient section_padding_top_40 section_padding_bottom_25 table_section table_section_md" style="margin-top: 50px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <h2 class="small">Albums</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Albums</li>
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
                                        <h3 class="widget-title">Search Artist for Album Data</h3>
                                        <form method="post" class="searchform" action="">
                                            <div class="form-group">
                                                <label for="artist_name">Enter Artist Name:</label>
                                                <input type="text" id="artist_name" name="artist_name" required>
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

                <br>
                <div class="row">
                    <section id="albums" class="ls section_padding_top_100 section_padding_bottom_100 columns_margin_bottom_30">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h2 class="section_header">Featured Music Albums</h2>
                                    <hr class="header_divider">
                                    <p class="small-text big">Check out our newest music albums. You can easily purchase our music albums on <span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
                                </div>
                            </div>
                            <br>                      
                            
                            <?php include 'data/albumData.php'?>
                        </div>
                    </section>
                </div>
                
                <!-- Album Features Start -->
<div class="container-fluid album-feature pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Discover Your Next Favorite Album</h4>
            <h1 class="display-5 mb-4">Search, Explore, and Save Your Favorite Albums.</h1>
            <p class="mb-0">
                Our platform offers an effortless search experience for music lovers. Whether you’re on the hunt for new albums or you want to dive deeper into the collection of an established artist, you're in the right place.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="album-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-search fa-4x text-primary"></i>
                    </div>
                    <h4>Album Search</h4>
                    <p class="mb-4">
                        Use our robust search functionality to uncover a wide array of albums across all genres. Find new favorites and revisit timeless classics.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="album-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-info-circle fa-4x text-primary"></i>
                    </div>
                    <h4>In-Depth Album Profiles</h4>
                    <p class="mb-4">
                        Access detailed album profiles featuring track listings, production credits, artwork, and the stories behind your favorite records.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="album-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-play fa-4x text-primary"></i>
                    </div>
                    <h4>Listen Instantly</h4>
                    <p class="mb-4">
                        Stream albums directly from our platform. Enjoy singles, collections, and curated playlists all in one accessible spot.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="album-feature-item p-4">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-heart fa-4x text-primary"></i>
                    </div>
                    <h4>Save to Favorites</h4>
                    <p class="mb-4">
                        Easily save your favorite albums and create a personal library. Stay updated with notifications about new releases and special events related to your saved albums.
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
                            <p class="mb-0">© 2024 Music Portal. All Rights Reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            function addToFavorites(album) {
                var favorites = JSON.parse(localStorage.getItem('favoriteAlbums')) || [];
                favorites.push(album);
                localStorage.setItem('favoriteAlbums', JSON.stringify(favorites));
                alert('Album added to favorites');
            }
        </script>
    </body>
</html>
