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
        <title>Trending</title>
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
                            <ul class="navbar-nav ms-auto">
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
 
                <!-- -Breadcrumbs Section -->
                <section class="page_breadcrumbs cs gradient section_padding_top_75 section_padding_bottom_25 table_section table_section_md" style="margin-top: 25px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <h2 class="small">Trending</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item active"><a href="#">Trending</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
                
                <br>
                <!-- Trending Section -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
				<h3 class="section_header">Trending Songs</h3>
				<hr class="header_divider">
                            </div>
			</div>
                        <div class="row">
                            <?php include 'data/trendingData.php'?>
                        </div>
                    </div>
                </section>

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
                                    <li><a href="#" class="text-white"><i class="fab fa-facebook"></i> Facebook</a></li>
                                    <li><a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                                    <li><a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                                    <li><a href="#" class="text-white"><i class="fab fa-youtube"></i> YouTube</a></li>
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
    </body>
</html>