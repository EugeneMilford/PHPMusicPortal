<!DOCTYPE html>
<html>
    <head>
        <title>Artists</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/js/bootstrap.bundle.min.js"></script>
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

                <section class="ds page_copyright py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p class="small-text mb-0">&copy; Copyright 2024. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script>
    function addToFavorites() {
        var artistName = "<?php echo $search['artists'][0]['strArtist']; ?>";
        var artistImg = "<?php echo $search['artists'][0]['strArtistThumb']; ?>";
        var artistGenre = "<?php echo $search['artists'][0]['strGenre']; ?>";
        var artistYear = "<?php echo $search['artists'][0]['intBornYear']; ?>";

        var favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        favorites.push({ name: artistName, img: artistImg, genre: artistGenre, year: artistYear });
        localStorage.setItem('favorites', JSON.stringify(favorites));

        alert('Artist added to favorites');
        console.log("Favorites: ", JSON.stringify(favorites)); // Debugging line
    }
</script>
    </body>
</html>