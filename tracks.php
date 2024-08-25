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
                <p class="mb-0">© 2023 Your Music Website. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
        </div>
    </div>
</body>
</html>