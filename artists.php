<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="assets/css/music.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
    </head>
    <body>
        <div id="canvas">
            <div id="box_wrapper">
                <!-- Navbar Section-->
            <header class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                        <a class="navbar-brand" href="index.php">Your Brand Name</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="albums.php">Music</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="albums.php">Albums</a></li>
                                        <li><a class="dropdown-item" href="tracks.php">Tracks</a></li>
                                        <li><a class="dropdown-item" href="playlists.php">Playlists</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="artists.html">Artists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="videos.html">Music Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="playlists.html">Playlists</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Extras</a>
                                <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="trending.html">Trending Music</a></li>
                                        <li><a class="dropdown-item" href="top_10.html">Top 10 Albums Of All Time</a></li>
                                </ul>
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
                            <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                        </div>
                        <button type="submit" class="submit_button">Search</button>
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

                
                
                
                <section class="ds page_copyright py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="d-flex justify-content-center align-items-center mb-2">
                                    <a class="social-icon socicon-facebook me-2" href="#" title="Facebook"></a>
                                    <a class="social-icon socicon-twitter me-2" href="#" title="Twitter"></a>
                                    <a class="social-icon socicon-youtube me-2" href="#" title="Youtube"></a>
                                    <a class="social-icon socicon-google me-2" href="#" title="Google"></a>
                                </div>
                                <p class="small-text mb-0">&copy; Copyright 2024. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
    <script>
        function addToFavorites() {
            // Get the content to be saved
            var content = document.getElementById('art').innerHTML;
            // Save content to localStorage
            localStorage.setItem('faves', content);
            // Redirect to page 2
            window.location.href = 'artists.php';
        }
    </script>
</html>