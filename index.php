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
            
                <!-- Header Section -->
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
            
                <!-- Hero Section -->
                <section class="intro_section page_mainslider ds">
                    <div class="flexslider" data-dots="true" data-nav="ture">
                        <ul class="slides">
                            <li>
                                <img src="images/slide01.jpg" alt="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer" data-animation="fadeInUp">
						    <h2 class="text-uppercase"> Welcome </h2>
                                                    </div>                              
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <p class="small-text"> Love is my weapon, music is my religion,<br> peace is in my soul.<br><br><h5>Scroll down for more!!</h5></p>
                                                    </div>
                                                </div>										
                                            </div>									
                                        </div>								
                                    </div>							
                                </div>				
                            </li>      
                            <li>
                                <img src="images/slide02.jpg" alt="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase"> <span class="small">Browse through the <br>catalog of music </h2>
                                                    </div>                        
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <p class="small-text"> Discover all your favourite tracks, albums<br> and so much more </p>
                                                    </div>                                             
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <p class="topmargin_30">
                                                            <a href="shop-right.html" class="theme_button inverse min_width_button">
                                                            Official merch
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>										
                                            </div>									
                                        </div>								
                                    </div>							
                                </div>						
                            </li>                 
                            <li>
                                <img src="images/slide03.jpg" alt="">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase"> <span class="small">Check our</span> Featured video </h2>
                                                    </div>                                            
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <p class="small-text"> Music speaks to the heart in ways words annot express.<br> Music, the mosaic of the air. </p>
                                                    </div>                                     
                                                    <div class="intro-layer" data-animation="fadeInUp">
                                                        <p class="topmargin_30">
                                                            <a href="#featured-video" class="theme_button inverse min_width_button">
                                                                Watch now
                                                            </a>
                                                        </p>
                                                    </div>
                                                </div>									
                                            </div>								
                                        </div>							
                                    </div>							
                                </div>							
                            </li>
			</ul>
                    </div>
		</section>
                
                <!-- About Section -->
                <section id="about" class="ls section_padding_top_40 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30">
                    <div class="container">
			<div class="row">
                            <div class="col-md-7 col-md-push-5"> <img src="images/" alt=""> </div>
                            <div class="col-md-5 col-md-pull-7">
				<h2 class="section_header"> <span class="small">About </span> The Music Portal </h2>
				<hr class="header_divider">
				<p class="small-text big">
                                    "If Music is a Place — then Jazz is the City, Folk is the Wilderness, Rock is the Road, Classical is a Temple."
                                    <br>
                                    <br>
                                    - Vera Nazarin
				</p>
				<p>
                                    This music portal was created to connect the user through the world of music. Explore all of your favourite tracks, artists, playlists and more.<br><br>
                                    Feel free to stay in touch and remember to keep the music flame burning bright!!							
				</p>
				<div class="content-justify vertical-center content-margins topmargin_25">
                                    <a href="about.html" class="theme_button color min_width_button">Read more</a> 
                                    <span class="divided-content outside-dividers">
                                        <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span> 
                                        <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span> 
                                        <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>								<span><a class="social-icon socicon-google" href="#" title="Google"></a></span>
                                    </span>
				</div>
                            </div>
			</div>
                    </div>
		</section>
         
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

