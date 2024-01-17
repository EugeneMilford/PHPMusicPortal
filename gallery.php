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
                <section class="page_toplogo with_bottom_overlap_logo ls with_top_color_border columns_padding_0">
                    <div class="container">
                        <div class="row flex-wrap v-center">
                            <div class="col-sm-2 col-sm-push-5 text-left text-sm-center">
                                <div class="bottom_overlap_logo">
                                    <a href="./" class="logo">
                                        <img src="images/logo.png" alt="">
                                    </a>  
                                </div>
                                <span class="toggle_menu"><span></span></span>
                            </div>               
                            <div class="col-sm-5 text-left text-sm-right">
                                <div class="divided-content small-text greylinks color2">
                                    <div>
                                        <div class="dropdown">
                                            <a href="#0" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                My account
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="account-dropdown">
                                                <li> <a href="#0">Sign In</a> </li>
                                                <li> <a href="#0">Sign Up</a> </li>
                                            </ul>
                                        </div>
                                    </div>                            
                                    <div class="hidden-xs hidden-sm">
                                        <div class="dropdown inline-block">
                                            <a href="" id="search-dropdown" class="theme_button no_bg_button square_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>                                 
                                            <div class="dropdown-menu" aria-labelledby="search-dropdown">
                                                <div class="widget widget_search">
                                                    <form method="get" class="searchform form-inline" action="./">
                                                        <div class="form-group-wrap">
                                                            <div class="form-group margin_0"> <label class="sr-only" for="topline-search">Search for:</label> <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword"> </div> 
                                                            <button type="submit" class="theme_button no_bg_button">Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
	        </section>
            
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
            
                <hr>
		<h4>Gallery Section</h4>
		<hr>
                
                <!-- Gallery Section -->
		
                        
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