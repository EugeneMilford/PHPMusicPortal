<!DOCTYPE html>

<html>
    <head>
        <title>Music Demo</title>
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
                                <h2 class="small">Playlists</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Playlists</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Footer Section -->
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
</html>
