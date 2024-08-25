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
                        <a class="navbar-brand" href="index.php">Music Portal</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faves.php">Favourites</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="artists.php">Artists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tracks.php">Tracks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="albums.php">Albums</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="playlists.php">Playlists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="trending.php">Trending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
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
                                        <li class="breadcrumb-item"><a href="#">Albums</a></li>
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
                <div class="container-fluid feature pb-5">
                    <div class="container pb-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                            <h4 class="text-primary">Explore Our Features</h4>
                            <h1 class="display-5 mb-4">Bringing together music, artistry, and communities for a shared experience.</h1>
                            <p class="mb-0">
                                Discover a world of music where creativity flourishes and connections thrive. Our platform empowers artists and listeners alike, fostering a vibrant environment for all music enthusiasts.
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-music fa-4x text-primary"></i>
                                    </div>
                                    <h4>Curated Playlists</h4>
                                    <p class="mb-4">
                                        Dive into expertly curated playlists that match any mood or occasion, helping you discover new favorites and revisit beloved classics.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-user-friends fa-4x text-primary"></i>
                                    </div>
                                    <h4>Community Engagement</h4>
                                    <p class="mb-4">
                                        Join a vibrant community of music lovers and artists, where sharing passion and insights enhances the listening experience.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-star fa-4x text-primary"></i>
                                    </div>
                                    <h4>Exclusive Content</h4>
                                    <p class="mb-4">
                                        Get access to exclusive tracks, behind-the-scenes footage, and interviews that bring you closer to your favorite artists.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-headphones-alt fa-4x text-primary"></i>
                                    </div>
                                    <h4>Seamless Streaming</h4>
                                    <p class="mb-4">
                                        Enjoy high-quality music streaming with an intuitive interface, making it easy to find and enjoy your favorite tunes anytime, anywhere.
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
    </body>
</html>
