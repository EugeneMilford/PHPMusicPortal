<!DOCTYPE html>

<html>
    <head>
        <title>Artists</title>
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
                        <a class="navbar-brand" href="index.php">Music Portal</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="faves.php">Favourites</a></li>
                                <li class="nav-item"><a class="nav-link" href="artists.php">Artists</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracks.php">Tracks</a></li>
                                <li class="nav-item"><a class="nav-link" href="albums.php">Albums</a></li>
                                <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </header> 
                
                <section class="page_breadcrumbs cs gradient section_padding_top_40 section_padding_bottom_25 table_section table_section_md" style="margin-top: 50px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <h2 class="small">Artists</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Artists</a></li>
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
                                    <h3 class="widget-title">Search Artist</h3>
                                    <form method="get" class="searchform" action="">
                                        <div class="form-group">
                                            <label class="sr-only" for="widget-search">Search:</label>
                                            <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Artist">
                                        </div>
                                        <br>
                                        <button type="submit" class="button_1">Search</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                            <div class="col-6">
                                <?php include 'data/artistData.php'?>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Features Start -->
                <div class="container-fluid feature pb-5">
                    <div class="container pb-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                            <h4 class="text-primary">Explore Music Artists</h4>
                            <h1 class="display-5 mb-4">Discover, Connect, and Learn About Your Favorite Artists.</h1>
                            <p class="mb-0">
                                Our platform provides an intuitive search experience for music enthusiasts. Whether you’re looking for new talent or want to learn more about established artists, you’ve come to the right place.
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-search fa-4x text-primary"></i>
                                    </div>
                                    <h4>Artist Discovery</h4>
                                    <p class="mb-4">
                                        Use our powerful search tool to discover a diverse range of artists from various genres and backgrounds. Find new favorites and explore their music.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-info-circle fa-4x text-primary"></i>
                                    </div>
                                    <h4>Detailed Artist Profiles</h4>
                                    <p class="mb-4">
                                        Access comprehensive profiles that include biographies, discographies, social links, and the latest news about your favorite artists.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-play fa-4x text-primary"></i>
                                    </div>
                                    <h4>Listen to Music</h4>
                                    <p class="mb-4">
                                        Stream music directly from artist profiles. Enjoy singles, albums, and playlists all in one convenient location.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-users fa-4x text-primary"></i>
                                    </div>
                                    <h4>Fan Engagement</h4>
                                    <p class="mb-4">
                                        Follow your favorite artists and receive updates about their new releases, concerts, and events. Join a community of fans who share your passion.
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
                                <p>
                                    Your go-to platform for discovering new music and artists. Join us as we explore the world of sound.
                                </p>
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
                            <p class="mb-0">© 2024 Your Music Portal. All Rights Reserved.</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
    function addToFavorites() {
    // Ensure you are grabbing correct values
    var artistName = "<?php echo $search['artists'][0]['strArtist']; ?>";
    var artistImg = "<?php echo $search['artists'][0]['strArtistThumb']; ?>";
    var artistGenre = "<?php echo $search['artists'][0]['strGenre']; ?>";
    var artistYear = "<?php echo $search['artists'][0]['intBornYear']; ?>";

    var favorites = JSON.parse(localStorage.getItem('favoriteArtists')) || [];
    favorites.push({ name: artistName, img: artistImg, genre: artistGenre, year: artistYear });
    localStorage.setItem('favoriteArtists', JSON.stringify(favorites));

    alert('Artist added to favorites');
}
</script>
    </body>
</html>