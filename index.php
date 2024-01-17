<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animations.css">
        <style>
    .bg-aqua {
        background-color: #65ab2c; /* Aqua light blue color code */
    }
</style>
    </head>
    <body>
        <div id="canvas">
            <div id="box_wrapper">
            <!-- template sections -->
                <!-- Header Section -->
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
            
                <!-- Hero Section -->
                <section class="intro_section page_mainslider ds">
    <div id="mainSlider" class="carousel slide" data-bs-ride="carousel" data-bs-pause="hover">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/1.jpeg" class="d-block w-100" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <h2 class="text-uppercase"> <span class="small">Welcome</span> Music Portal </h2>
                                    </div>
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <p class="small-text"> Love is my weapon, music is my religion,<br> peace is in my soul. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/2.jpeg" class="d-block w-100" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <h2 class="text-uppercase"> <span class="small">Browse through the <br>catalog of music </span></h2>
                                    </div>
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <p class="small-text"> Discover all your favourite tracks, albums<br> and so much more </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/3.jpeg" class="d-block w-100" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <h2 class="text-uppercase"> <span class="small">Check our</span> Featured video </h2>
                                    </div>
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <p class="small-text"> Music speaks to the heart in ways words annot express.<br> Music, the mosaic of the air. </p>
                                    </div>
                                    <div class="intro-layer" data-bs-animation="fade-up">
                                        <p class="topmargin_30"> <a href="#featured-video" class="btn btn-outline-light">
                                            Watch now
                                        </a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

                
                <!-- About Section -->
                <section id="about" class="ls section_padding_top_40 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-md-6"> <!-- Change col-md-7 to col-md-6 -->
                <img src="assets/img/img-about.jpg" alt="" class="img-fluid" style="width: 80%;">
            </div>
            <div class="col-md-6"> <!-- Add a new col-md-6 for the text content -->
                <h2 class="section_header"><span class="small">About </span> The Music Portal</h2>
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
                <div class="content-justify vertical-center content-margins topmargin_25">
                    <button type="submit" name="contact_submit" class="btn theme_button color wide_button m-0">Read More</button>
                    <span class="divided-content outside-dividers">
                        <span><a class="social-icon socicon-facebook" href="#" title="Facebook"></a></span>
                        <span><a class="social-icon socicon-twitter" href="#" title="Twitter"></a></span>
                        <span><a class="social-icon socicon-youtube" href="#" title="Youtube"></a></span>
                        <span><a class="social-icon socicon-google" href="#" title="Google"></a></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
 
                <section id="albums" class="ls section_padding_top_130 section_padding_bottom_100 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section_header">Featured Music Albums</h2>
                <hr class="header_divider">
                <p class="small-text big">Check out our newest music albums. You can easily purchase our music albums on <span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
            </div>
        </div>
        <div class="row topmargin_30">
            <div class="col-md-4 col-sm-6">
                <div class="vertical-item slide-media text-center loop-color">
                    <div class="item-media-wrap">
                        <img src="assets/images/albums/01.jpg" alt="">
                        <div class="item-media back-media">
                            <img src="assets/images/albums/cd.png" alt="">
                        </div>
                        <div class="item-media">
                            <img src="assets/images/albums/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="item-content topmargin_30">
                        <h4 class="entry-title bottommargin_0">
                            <a href="single-album.html">World's apart (2016)</a>
                        </h4>
                        <span class="price">$99.85</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="vertical-item slide-media text-center loop-color">
                    <div class="item-media-wrap">
                        <img src="assets/images/albums/01.jpg" alt="">
                        <div class="item-media back-media">
                            <img src="assets/images/albums/cd.png" alt="">
                        </div>
                        <div class="item-media">
                            <img src="assets/images/albums/02.jpg" alt="">
                        </div>
                    </div>
                    <div class="item-content topmargin_30">
                        <h4 class="entry-title bottommargin_0">
                            <a href="single-album.html">Shake the Shudder (2017)</a>
                        </h4>
                        <span class="price">$160.20</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                <div class="vertical-item slide-media text-center loop-color">
                    <div class="item-media-wrap">
                        <img src="assets/images/albums/03.jpg" alt="">
                        <div class="item-media back-media">
                            <img src="assets/images/albums/cd.png" alt="">
                        </div>
                        <div class="item-media">
                            <img src="assets/images/albums/03.jpg" alt="">
                        </div>
                    </div>
                    <div class="item-content topmargin_30">
                        <h4 class="entry-title bottommargin_0">
                            <a href="single-album.html">Let's Build A Fire (2017)</a>
                        </h4>
                        <span class="price">$158.25</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
                <section class="ls section_padding_top_80 section_padding_bottom_130 columns_padding_25">
				<div class="container">
                <div class="row">
                    <div class="row">
            <div class="col-12 text-center">
                <h2 class="section_header">Featured Posts</h2>
                <hr class="header_divider">
                <p class="small-text big">Check out our posts on<span class="highlight3">iTunes</span> or <span class="highlight3">Google Play</span>.</p>
            </div>
        </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <article class="post format-small-image">
    <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
        <div class="row">
            <div class="col-md-5">
                <div class="item-media entry-thumbnail">
                    <img src="assets/images/events/04.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="item-content">
                    <header class="entry-header">
                        <div class="entry-meta small-text no-spacing content-justify">
                            <span class="highlightlinks">
                                <a href="blog-right.html">songs</a>
                            </span>
                            <span class="greylinks">
                                <a href="blog-single-right.html">
                                    <time datetime="2017-10-03T08:50:40+00:00">Sept 15, 2017</time>
                                </a>
                            </span>
                        </div>
                        <h4 class="entry-title">
                            <a href="blog-single-right.html" rel="bookmark">Post With Small Image</a>
                        </h4>
                    </header>
                    <div class="entry-content">
                        <p>Pork chop pig prosciutto beef ribs ribeye brisket doner corned beef cupim frankfurter. Pancetta shoulder jerky, tenderloin cupim tail ribeye bresaola short ribs pig frankfurter doner ground round andouille.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
                 
                    <article class="post format-small-image">
    <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
        <div class="row">
            <div class="col-md-5">
                <div class="item-media entry-thumbnail">
                    <img src="assets/images/events/04.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="item-content">
                    <header class="entry-header">
                        <div class="entry-meta small-text no-spacing content-justify">
                            <span class="highlightlinks">
                                <a href="blog-right.html">songs</a>
                            </span>
                            <span class="greylinks">
                                <a href="blog-single-right.html">
                                    <time datetime="2017-10-03T08:50:40+00:00">Sept 15, 2017</time>
                                </a>
                            </span>
                        </div>
                        <h4 class="entry-title">
                            <a href="blog-single-right.html" rel="bookmark">Post With Small Image</a>
                        </h4>
                    </header>
                    <div class="entry-content">
                        <p>Pork chop pig prosciutto beef ribs ribeye brisket doner corned beef cupim frankfurter. Pancetta shoulder jerky, tenderloin cupim tail ribeye bresaola short ribs pig frankfurter doner ground round andouille.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
                        </div>
                        <div class="col-md-6">
    <div class="widget widget_mailchimp">
        <h3 class="widget-title">Newsletter</h3>
        <form class="signup" action="./" method="get">
            <div class="input-group">
                            <input id="widget-search" type="text" name="find" class="form-control" placeholder="Enter Email" aria-label="Search for">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
            <br/>
            <p>Enter Email here to be updated. We promise not to send you spam!</p>
            <div class="response"></div>
        </form>
    </div>
    <div class="widget widget_recent_posts">
        <h3 class="widget-title">Recent Posts</h3>
        <ul class="list-unstyled">
            <li class="media loop-color">
                <div class="media-left media-middle">
                    <img src="assets/images/recent_post1.jpg" alt="" class="mr-3">
                </div>
                <div class="media-body media-middle">
                    <h4 class="entry-title">
                        <a href="blog-single-left.html">Free Philippine Real Estate Ads Forums</a>
                    </h4>
                    <div class="small-text no-spacing highlightlinks hover-color2">
                        <a href="blog-single-right.html">
                            <time datetime="2017-10-03T08:50:40+00:00">
                                Sept 15, 2017
                            </time>
                        </a>
                    </div>
                </div>
            </li>
            <li class="media loop-color">
                <div class="media-left media-middle">
                    <img src="assets/images/recent_post2.jpg" alt="" class="mr-3">
                </div>
                <div class="media-body media-middle">
                    <h4 class="entry-title">
                        <a href="blog-single-left.html">Study 800 Numbers Still Popular With Advertisers</a>
                    </h4>
                    <div class="small-text no-spacing highlightlinks hover-color3">
                        <a href="blog-single-right.html">
                            <time datetime="2017-10-03T08:50:40+00:00">
                                Sept 15, 2017
                            </time>
                        </a>
                    </div>
                </div>
            </li>
            <li class="media loop-color">
                <div class="media-left media-middle">
                    <img src="assets/images/recent_post3.jpg" alt="" class="mr-3">
                </div>
                <div class="media-body media-middle">
                    <h4 class="entry-title">
                        <a href="blog-single-left.html">Differentiate Yourself And Attract More</a>
                    </h4>
                    <div class="small-text no-spacing highlightlinks">
                        <a href="blog-single-right.html">
                            <time datetime="2017-10-03T08:50:40+00:00">
                                Sept 15, 2017
                            </time>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
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
                <p class="small-text big-spacing">&copy; Copyright 2023. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
            </div>
        </div> 
        
    </body>
</html>

