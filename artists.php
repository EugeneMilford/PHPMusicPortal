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
                        <div class="form-group"> 
                            <label class="sr-only" for="widget-search">Search for:</label> 
                            <input id="widget-search" type="text" name="find" class="form-control" placeholder="Search Artist"> 
                        </div> 
                        <button type="submit" class="theme_button color">Search</button>
                    </form>
	        </div>
  
                <?php include 'data/artistData.php'?>
                        
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