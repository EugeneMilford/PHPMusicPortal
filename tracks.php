<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
    </head>
    <body>
        <div class="preloader">
            <div class="preloader_image"></div>
        </div>

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
            
                <header class="page_header header_darkgrey header_transparent background_cover divided_items with_menu_icon">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- main nav start -->
                                <nav class="mainmenu_wrapper">
                                    <ul class="mainmenu nav sf-menu">
                                        <li class="active">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
					<a href="albums.html">Music</a>
                                            <ul>
                                                <li> <a href="albums.php">Albums</a> </li>
                                                <li> <a href="tracks.php">Tracks</a> </li>
                                                <li> <a href="playlists.php">Playlists</a> </li>
                                            </ul>
                                        </li>                          
                                        <li>
                                            <a href="artists.php">Artists</a>								
                                        </li>                               
                                        <li>
                                            <a href="videos.php">Music Videos</a>								
                                        </li>								
                                        <li>
                                            <a href="gallery.php">Gallery</a>
                                        </li>							
                                        <li>
                                            <a href="blog.php">Blog</a>
                                        </li>
                                        <li>
                                            <a href="playlists.php">Playlists</a>
                                        </li>
                                        <li>
                                            <a href="">Extras</a>
                                            <ul>
                                                <li><a href="trending.php">Trending Music</a></li>
                                                <li><a href="top_10.php">Top 10 Albums Of All Time</a></li>
                                            </ul>
                                        </li>			
                                        <li>
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>				
                            </div>
                        </div>
                    </div>
                </header>
            
                <hr>
		<h4>Tracks Section</h4>
		<hr>
                
                <!-- Tracks Section -->
                        
                <!-- Footer Section -->
		<section class="ds page_copyright section_padding_25">
                    <div class="container">
			<div class="row">
                            <div class="col-sm-12 text-center">
				<div class="divided-content bottommargin_5"> <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>								<span><a class="social-icon socicon-google" href="#" title="Google"></a></span> </div>
				<p class="small-text big-spacing">&copy; Copyright 2023. All Rights Reserved.</p>
                            </div>
			</div>
                    </div>
		</section>
            </div>
        </div>   
    </body>
</html>