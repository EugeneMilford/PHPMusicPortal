<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body>

        <div id="canvas">
            <div id="box_wrapper">
            <!-- template sections -->
            
                <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-size: 18px;">
    <div class="container">
        <a class="navbar-brand" href="index.php">Your Brand Name</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
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
                    <a class="nav-link" href="artists.php">Artists</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="videos.php">Music Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playlists.php">Playlists</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Extras</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="trending.php">Trending Music</a></li>
                        <li><a class="dropdown-item" href="top_10.php">Top 10 Albums Of All Time</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</header>
            
                <section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
                    <div class="container">
			<div class="row">
                            <div class="col-md-6 text-center text-md-left">
				<h2 class="small">Artists</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-right">
				<p>Artists Section</p>
                            </div>
			</div>
                    </div>
		</section>
                
                <div class="col-sm-3 widget widget_search">
                    <form method="get" class="searchform" action="">
                        <div class="input-group">
                            <input id="widget-search" type="text" name="find" class="form-control" placeholder="Search Artist" aria-label="Search for">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>

  
                <?php include 'data/artistData.php'?>
                        
                <!-- Footer Section -->
		<section class="ds page_copyright section_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="small-text big-spacing">&copy; Copyright 2023. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
            </div>
        </div>    
    </body>
</html>