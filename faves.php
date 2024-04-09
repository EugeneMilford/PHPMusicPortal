<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div id="canvas">
            <div id="box_wrapper">
            <!-- template sections -->    
                <header class="navbar navbar-expand-lg navbar-dark bg-aqua fixed-top" style="font-size: 18px;">
    <div class="container">
        <a class="navbar-brand" href="index.php">MUSIC PORTAL</a>
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
                    <a class="nav-link" href="albums.php">Albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="merchandise.php">Merchandise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="playlists.php">Playlists</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Extras</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
            
                <section class="page_breadcrumbs cs gradient section_padding_top_5 section_padding_bottom_25 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <h2 class="small">Products</h2>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
            
            <section id="blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
				<h2 class="section_header">Blog Posts</h2>
				<hr class="header_divider">
				<p class="small-text big">Check out our newest music albums. You can easily purchase our music albums on <span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
                            </div>
			</div>
                        <div class="row" id="faves">
                            
                        </div>
                    </div>
            </section>
                        
                
                <!-- Contact Section -->
		
                        
                <!-- Footer Section -->
		<section class="ds page_copyright section_padding_25 fixed-bottom">
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
