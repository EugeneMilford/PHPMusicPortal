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
                                    <a class="nav-link" href="faves.php">Favourites</a>
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
                                    <a class="nav-link" href="tracks.php">Tracks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="videos.html">Music Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
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
                                        <li><a class="dropdown-item" href="trending.html">Trending Music</a></li>
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
                
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/1.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>First slide label</h1>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img src="assets/img/2.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Second slide label</h1>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img src="assets/img/im3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Third slide label</h1>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                
                <!-- About Section -->
                <section id="about" class="ls section_padding_top_100 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30" data-aos="fade-up">
                    <div class="container">
                        <div class="row">
                            <div class="bg-img col-md-6"> <!-- Change col-md-7 to col-md-6 -->
                                <img src="assets/img/img-about.jpg" alt="" class="img-fluid" style="width: 80%;">
                            </div>
                            <div class="col-md-6"> <!-- Add a new col-md-6 for the text content -->
                                <h2><span class="small">About </span> The Music Portal</h2>
                                <hr class="header_divider">
                                <p class="small-text big">
                                    "If Music is a Place — then Jazz is the City, Folk is the Wilderness, Rock is the Road, Classical is a Temple."
                                    <br>
                                    <br>
                                    - Vera Nazarin
                                </p>
                                <p>
                                    This music portal was created to connect the user through the world of music. Explore all of your favorite tracks, artists, playlists, and more.<br><br>
                                    Feel free to stay in touch and remember to keep the music flame burning bright!!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Artists Section -->
                <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header">Featured Artists</h2>
                                <hr class="header_divider">
                                <p class="small-text big">Check out our newest music albums. You can easily purchase our music albums on <span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <?php include 'data/indexData.php'?>
                        </div>     
                    </div>
                </section>   

                <section id="albums" class="ls section_padding_top_100 section_padding_bottom_100 columns_margin_bottom_30">
                    <div class="container">
			<div class="row">
                            <div class="col-sm-12 text-center">
				<h2 class="section_header">Featured Music Albums</h2>
				<hr class="header_divider">
				<p class="small-text big">Check out our newest music albums. You can easily purchase our music albums on <span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
                            </div>
			</div>
                        <br>
			<div class="row topmargin_30">
                            <div class="col-md-4 col-sm-6">
				<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="assets/img/album1.jpg" alt="">
									<div class="item-media back-media"> <img src="assets/img/cd.png" alt=""> </div>
									<div class="item-media"> <img class="album-image" src="assets/img/album1.jpg" alt="">
										
									</div>
								</div>
                                                                <br>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
				</div>
                            </div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="assets/img/album2.jpeg" alt="">
									<div class="item-media back-media"> <img src="assets/img/cd.png" alt=""> </div>
									<div class="item-media"> <img class="album-image" src="assets/img/album2.jpeg" alt="">
										
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="assets/img/album3.jpeg" alt="">
									<div class="item-media back-media"> <img src="assets/img/cd.png" alt=""> </div>
									<div class="item-media"> <img class="album-image" src="assets/img/album3.jpeg" alt="">
										
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
							</div>
						</div>
                        </div>
                        <div class="row topmargin_30">
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item slide-media text-center loop-color">
                                    <div class="item-media-wrap"> <img src="assets/img/album1.jpg" alt="">
									<div class="item-media back-media"> <img src="assets/img/cd.png" alt=""> </div>
									<div class="item-media"> <img class="album-image" src="assets/img/album1.jpg" alt="">
										
									</div>
                                    </div>
                                    <div class="item-content topmargin_30">
                                        <h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a></h4> 
                                        <span class="price">
                                            $99,85                                   
                                        </span>
                                    </div>
                                </div>
                            </div>
						<div class="col-md-4 col-sm-6">
							<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="assets/img/album2.jpeg" alt="">
									<div class="item-media back-media"> <img src="assets/img/cd.png" alt=""> </div>
									<div class="item-media"> <img class="album-image" src="assets/img/album2.jpeg" alt="">
										
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
							</div>
						</div>
                            <div class="col-md-4 col-sm-6">
				<div class="vertical-item slide-media text-center loop-color">
								<div class="item-media-wrap"> <img src="assets/img/album3.jpeg" alt="">
									<div class="item-media back-media"> <img src="assets/img/cd.png" alt=""> </div>
									<div class="item-media"> <img class="album-image" src="assets/img/album3.jpeg" alt="">
										
									</div>
								</div>
								<div class="item-content topmargin_30">
									<h4 class="entry-title bottommargin_0"> <a href="single-album.html">World's apart (2016)</a> </h4> <span class="price">
							$99,85
						</span> </div>
				</div>
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
                        <div class="row">                     
                            <div class="col-sm-12">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
            <article class="post vertical-item content-padding with_shadow text-center">
                <div class="item-media entry-thumbnail">
                    <div class="embed-responsive embed-responsive-3by2">
                        <a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
                            <img src="assets/img/blog-01.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <h4 class="entry-title"><a href="blog-single-right.html">The crowd - life in other people's dreams</a></h4>
                    <div class="small-text greylinks inline-content">
                        <a href="#0"><i class="fa fa-heart rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">850</span></a>
                        <a href="#0"><i class="fa fa-comment rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">958</span></a>
                        <span><i class="fa fa-eye rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">3698</span></span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col">
            <article class="post vertical-item content-padding with_shadow text-center">
                <div class="item-media entry-thumbnail">
                    <div class="embed-responsive embed-responsive-3by2">
                        <a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
                            <img src="assets/img/blog-01.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <h4 class="entry-title"><a href="blog-single-right.html">The crowd - life in other people's dreams</a></h4>
                    <div class="small-text greylinks inline-content">
                        <a href="#0"><i class="fa fa-heart rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">850</span></a>
                        <a href="#0"><i class="fa fa-comment rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">958</span></a>
                        <span><i class="fa fa-eye rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">3698</span></span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col">
            <article class="post vertical-item content-padding with_shadow text-center">
                <div class="item-media entry-thumbnail">
                    <div class="embed-responsive embed-responsive-3by2">
                        <a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
                            <img src="assets/img/blog-01.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <h4 class="entry-title"><a href="blog-single-right.html">The crowd - life in other people's dreams</a></h4>
                    <div class="small-text greylinks inline-content">
                        <a href="#0"><i class="fa fa-heart rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">850</span></a>
                        <a href="#0"><i class="fa fa-comment rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">958</span></a>
                        <span><i class="fa fa-eye rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">3698</span></span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col">
            <article class="post vertical-item content-padding with_shadow text-center">
                <div class="item-media entry-thumbnail">
                    <div class="embed-responsive embed-responsive-3by2">
                        <a href="https://www.youtube.com/embed/mcixldqDIEQ" class="embed-placeholder">
                            <img src="assets/img/blog-01.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <h4 class="entry-title"><a href="blog-single-right.html">The crowd - life in other people's dreams</a></h4>
                    <div class="small-text greylinks inline-content">
                        <a href="#0"><i class="fa fa-heart rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">850</span></a>
                        <a href="#0"><i class="fa fa-comment rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">958</span></a>
                        <span><i class="fa fa-eye rightpadding_5" aria-hidden="true"></i><span class="value fontcolor">3698</span></span>
                    </div>
                </div>
            </article>
        </div>
        <!-- Add more similar columns as needed -->
    </div>
    <!-- eof .row -->
    <!-- eof .row -->
</div>
                        </div>
                    </div>
                </section>
                
                <section id="playlists">
                    
                </section>
                
                <section id="trending">
                    
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
</html>
