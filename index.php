<!DOCTYPE html>

<html>
    <head>
        <title>Music Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link href="assets/css/home.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
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
                                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="faves.php">Favourites</a></li>
                                <li class="nav-item"><a class="nav-link" href="artists.php">Artists</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracks.php">Tracks</a></li>
                                <li class="nav-item"><a class="nav-link" href="albums.php">Albums</a></li>
                                <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </header>

                <!-- Carousel Start -->
                <div class="carousel-header">
                    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="assets/img/carousel_01.jpeg" class="img-fluid" alt="Music Image 1">
                                <div class="carousel-caption d-flex align-items-center justify-content-center flex-column">
                                    <div class="text-center p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Discover New Music</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">Unleash Your Rhythm!</h1>
                                        <p class="mb-5 fs-5">Dive into the world of melodies and harmonies that will transform your experience.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/carousel_02.jpeg" class="img-fluid" alt="Music Image 2">
                                <div class="carousel-caption d-flex align-items-center justify-content-center flex-column">
                                    <div class="text-center p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Find Your Beat</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">Your Playlist Awaits!</h1>
                                        <p class="mb-5 fs-5">Explore handpicked tracks tailored to your taste.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/carousel_03.jpeg" class="img-fluid" alt="Music Image 3">
                                <div class="carousel-caption d-flex align-items-center justify-content-center flex-column">
                                    <div class="text-center p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Live Music Events</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">Join the Vibe!</h1>
                                        <p class="mb-5 fs-5">Experience the thrill of live performances and the joy of music festivals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- About Section -->
                <section id="about" class="ls section_padding_top_50 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30" data-aos="fade-up">
                    <div class="container">
                        <div class="row">
                            <div class="bg-img col-md-6">
                                <img src="assets/img/img-about.jpg" alt="" class="img-fluid" style="width: 80%;">
                            </div>
                            <div class="col-md-6">
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
            
                <!-- About Continue -->
                <div class="container-fluid bg-light about pb-5">
                    <div class="container pb-5">
                        <div class="row g-5">
                            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="about-item-content bg-white rounded p-5 h-100">
                                    <h1 class="display-4 mb-4">Discover the World of Music</h1>
                                    <p>Welcome to our music hub, where passion meets creativity. Dive into an extensive range of genres, artists, and sounds that resonate with your soul.</p>
                                    <p>Explore our curated playlists, discover emerging artists, and immerse yourself in the vibrant music community. Whether you're a casual listener or a dedicated aficionado, there's something for everyone!</p>
                                    <p>Music has the unique power to evoke emotions and create lasting memories, transcending boundaries of culture and language. It serves as a universal language that connects people from all walks of life, fostering understanding and unity.</p>
                                    <p>From the rhythmic beats of hip-hop to the soothing melodies of classical, each genre tells a story waiting to be uncovered. Join us as we celebrate music’s rich tapestry and the artists who continuously shape its evolution.</p>
                                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Uncover new tracks and timeless classics.</p>
                                    <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Get insights into the latest music trends.</p>
                                    <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Join a flexible community of music lovers.</p>
                                </div>
                            </div>
                            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                                <div class="bg-white rounded p-5 h-100">
                                    <div class="row g-4 justify-content-center">
                                        <div class="col-12">
                                            <div class="rounded bg-light">
                                                <img src="assets/img/img_about02.jpeg" class="img-fluid rounded w-100" alt="Music Scene">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">150</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Genres Available</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Awards Won</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">700</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Artists Represented</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="counter-item bg-light rounded p-3 h-100">
                                                <div class="counter-counting">
                                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">1200</span>
                                                    <span class="h1 fw-bold text-primary">+</span>
                                                </div>
                                                <h4 class="mb-0 text-dark">Community Members</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <!-- Features Start -->
                <div class="container-fluid feature pb-5 ls section_padding_top_15">
                    <div class="container pb-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                            <h2 class="section_header">Bringing Music, Artists, and Fans Together</h2>
                            <p class="mb-0">Explore a vibrant world of creativity where artists express themselves, fans connect with their favorites, and businesses engage in the rhythm of the music industry. Join us in celebrating the sounds that inspire and unite us all.</p>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-users fa-4x text-primary"></i>
                                    </div>
                                    <h4>Artists</h4>
                                    <p class="mb-4">Dive into the diverse world of our featured artists—each with their unique sound and story. Discover emerging talents and seasoned performers who are shaping the music landscape.</p>
                                    <button class="button_3" onclick="window.location.href='artists.php'">
                                        Explore Artists
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-headphones fa-4x text-primary"></i>
                                    </div>
                                    <h4>Albums</h4>
                                    <p class="mb-4">Uncover an extensive collection of albums from various genres. From timeless classics to the latest releases, immerse yourself in a curated selection of music that resonates.</p>
                                    <button class="button_3" onclick="window.location.href='albums.php'">
                                        Browse Albums
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-music fa-4x text-primary"></i>
                                    </div>
                                    <h4>Tracks</h4>
                                    <p class="mb-4">Listen to top tracks spanning every genre. Our collection features both established hits and breakthrough songs that are destined to climb the charts.</p>
                                    <button class="button_3" onclick="window.location.href='tracks.php'">
                                        View Tracks
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fas fa-star fa-4x text-primary"></i>
                                    </div>
                                    <h4>Trending Music</h4>
                                    <p class="mb-4">Stay ahead of the curve with our trending music section. Discover what’s hot right now and find out which artists are topping the charts.</p>
                                    <button class="button_3" onclick="window.location.href='trending.php'">
                                        See What's Trending
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Artists Section -->
                <section class="ls section_padding_top_50 section_padding_bottom_100 columns_padding_25">
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
                            <?php include 'data/indexData.php' ?>
                        </div>
                    </div>
                </section>

                <!-- Albums Section -->
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
                                <div class="item-media-wrap"> 
                                    <img src="assets/img/album1.jpg" alt="">
                                    <div class="item-media back-media"> 
                                        <img src="assets/img/cd.png" alt=""> 
                                    </div>
                                    <div class="item-media"> 
                                        <img class="album-image" src="assets/img/album1.jpg" alt="">   
                                    </div>
                                </div>
                                <br>
                                    <div class="item-content topmargin_30">
                                        <h4 class="entry-title bottommargin_0"> 
                                            <a href="single-album.html">World's apart (2016)</a> 
                                        </h4> 
                                        <span class="price">$99,85</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item slide-media text-center loop-color">
                                    <div class="item-media-wrap"> 
                                        <img src="assets/img/album2.jpeg" alt="">
                                        <div class="item-media back-media"> 
                                            <img src="assets/img/cd.png" alt=""> 
                                        </div>
                                        <div class="item-media"> 
                                            <img class="album-image" src="assets/img/album2.jpeg" alt="">   
                                        </div>
                                    </div>
                                    <div class="item-content topmargin_30">
                                        <h4 class="entry-title bottommargin_0"> 
                                            <a href="single-album.html">Take My Soul (2017)</a> 
                                        </h4> 
                                        <span class="price">$109,95</span> 
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="vertical-item slide-media text-center loop-color">
                                <div class="item-media-wrap"> 
                                    <img src="assets/img/album3.jpeg" alt="">
                                    <div class="item-media back-media"> 
                                        <img src="assets/img/cd.png" alt=""> 
                                    </div>
                                    <div class="item-media"> 
                                        <img class="album-image" src="assets/img/album3.jpeg" alt="">   
                                    </div>
                                </div>
                                <div class="item-content topmargin_30">
                                    <h4 class="entry-title bottommargin_0"> 
                                        <a href="single-album.html">Folk Stories (2018)</a> 
                                    </h4> 
                                    <span class="price">$89,85</span> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="vertical-item slide-media text-center loop-color">
                                <div class="item-media-wrap"> 
                                    <img src="assets/img/album4.jpeg" alt="">
                                    <div class="item-media back-media"> 
                                        <img src="assets/img/cd.png" alt=""> 
                                    </div>
                                    <div class="item-media"> 
                                        <img class="album-image" src="assets/img/album4.jpeg" alt="">   
                                    </div>
                                </div>
                                <div class="item-content topmargin_30">
                                    <h4 class="entry-title bottommargin_0"> 
                                        <a href="single-album.html">Feel the Beat (2019)</a> 
                                    </h4> 
                                    <span class="price">$119,90</span> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="vertical-item slide-media text-center loop-color">
                                <div class="item-media-wrap"> 
                                    <img src="assets/img/album5.jpeg" alt="">
                                    <div class="item-media back-media"> 
                                        <img src="assets/img/cd.png" alt=""> 
                                    </div>
                                    <div class="item-media"> 
                                        <img class="album-image" src="assets/img/album5.jpeg" alt="">   
                                    </div>
                                </div>
                                <div class="item-content topmargin_30">
                                    <h4 class="entry-title bottommargin_0"> 
                                        <a href="single-album.html">Heart of Gold (2020)</a> 
                                    </h4> 
                                    <span class="price">$129,90</span> 
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
                
                <!-- Testimonial Start -->
                <div class="container text-center my-5">
                    <h2 class="mb-5">What Our Users Are Saying</h2>
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center">
                                    <div class="card text-center mx-2 testimonial-card">
                                        <div class="card-body">
                                            <h5 class="card-title">John Doe</h5>
                                            <p class="card-text">"This music portal changed the way I discover new artists. The curated playlists are a lifesaver!"</p>
                                            <p class="card-text">"I appreciate the user-friendly interface that makes finding music a breeze."</p>
                                        </div>
                                    </div>
                                    <div class="card text-center mx-2 testimonial-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Jane Smith</h5>
                                            <p class="card-text">"I love the user interface and the variety of genres available. Highly recommend it to all music lovers!"</p>
                                            <p class="card-text">"The recommendation algorithm is spot on; I discover new favorites every week!"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div class="card text-center mx-2 testimonial-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Emily Johnson</h5>
                                            <p class="card-text">"As an independent artist, I find this platform incredibly useful for sharing my music!"</p>
                                            <p class="card-text">"The feedback I receive from listeners is invaluable for my growth." </p>
                                        </div>
                                    </div>
                                    <div class="card text-center mx-2 testimonial-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Michael Brown</h5>
                                            <p class="card-text">"The community is fantastic! I’ve met so many amazing musicians here." </p>
                                            <p class="card-text">"It feels great to connect with others who share my passion for music!"</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center">
                                    <div class="card text-center mx-2 testimonial-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Lisa White</h5>
                                            <p class="card-text">"Great music recommendations! I always find hidden gems." </p>
                                            <p class="card-text">"It’s my go-to platform for relaxing and enjoying quality music." </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Blog Section -->
                <section class="ls section_padding_top_50 section_padding_bottom_15 columns_margin_bottom_30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header">Latest Blog Posts</h2>
                                <hr class="header_divider">
                                <p class="small-text big">Stay updated with our latest news and updates.</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="assets/img/music01.jpeg" alt="">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="entry-title">The Evolution of Music</h4>
                                        <p class="entry-summary">Explore how music has evolved over the centuries and the impact of modern technology on traditional sounds.</p>
                                        <button class="button_2" data-bs-toggle="modal" data-bs-target="#blogModal1">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="assets/img/music02.jpeg" alt="">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="entry-title">Top 10 Trending Tracks of the Year</h4>
                                        <p class="entry-summary">Check out the top tracks that have taken the music industry by storm this year.</p>
                                        <button class="button_2" data-bs-toggle="modal" data-bs-target="#blogModal2">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="assets/img/music03.jpeg" alt="">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="entry-title">Music Genres You Should Explore</h4>
                                        <p class="entry-summary">Dive into various music genres that you might not have heard of but are definitely worth exploring.</p>
                                        <button class="button_2" data-bs-toggle="modal" data-bs-target="#blogModal3">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="assets/img/music04.jpeg" alt="">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="entry-title">How to Create Your Own Playlist</h4>
                                        <p class="entry-summary">Learn how to curate the perfect playlist for any occasion, from workouts to relaxation.</p>
                                        <button class="button_2" data-bs-toggle="modal" data-bs-target="#blogModal4">Read More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="assets/img/music05.jpeg" alt="">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="entry-title">The Impact of Streaming Services</h4>
                                        <p class="entry-summary">How streaming services have changed the way we listen to and discover music.</p>
                                        <button class="button_2" data-bs-toggle="modal" data-bs-target="#blogModal5">Read More</button>
                                    </div>
                                </div>
                            </div>     
                            <div class="col-md-4 col-sm-6">
                                <div class="vertical-item">
                                    <div class="item-media">
                                        <img src="assets/img/music06.jpeg" alt="">
                                    </div>
                                    <div class="item-content">
                                        <h4 class="entry-title">The Role of Music in Mental Health</h4>
                                        <p class="entry-summary">Explore how music can influence and improve mental well-being and emotional health.</p>
                                        <button class="button_2" data-bs-toggle="modal" data-bs-target="#blogModal5">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
                <!-- FAQs Start -->
                <div class="container-fluid faq-section bg-light py-5">
                    <div class="container py-5">
                        <div class="row g-5 align-items-center">
                            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="h-100">
                                    <div class="mb-5">
                                        <h4 class="text-primary">Frequently Asked Questions</h4>
                                        <h1 class="display-4 mb-0">Your Music Queries Answered</h1>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Q: What types of music can I find on this website?
                                                </button>
                                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body rounded">
                                    A:  Our website offers a diverse range of music genres, including pop, rock, hip-hop, electronic, jazz, classical, and more
                                </div>
                            </div>
                                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: Can I share my favourites with others?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A:  Absolutely! Once you create your favourites list, you can share the link with friends or on social media
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: Who can I contact for customer support?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: For customer support, please visit our "Contact Us" page where you'll find various options, including live chat, email support, and a help center.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Where can I find upcoming music events and concerts?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: You can find a list of upcoming music events and concerts on our Events page. We regularly update the schedule, so make sure to check back often for the latest performances and venues.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: How can I submit my music for consideration?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We welcome music submissions! You can send your tracks through our submission form located on the Submit Music page. Please ensure to include all relevant details about your music and a brief biography.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="assets/img/faq.jpeg" class="img-fluid w-100" alt="FAQs Image">
            </div>
        </div>
    </div>
                </div>
        
                <!-- Subscribe Start = MusicSite -->
                <div class="container-fluid subscribe py-5 background-image">
                    <div class="container text-center py-5">
                        <div class="mx-auto text-center" style="max-width: 900px;">
                            <h5 class="subscribe-title px-3">Subscribe</h5>
                            <h1 class="text-white mb-4">Music Updates</h1>
                            <p class="text-white mb-5">Stay in the loop with the latest music releases, exclusive content, and upcoming events. Join our community of music lovers and never miss out on what's new!</p>
                            <div class="position-relative mx-auto">
                                <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email" required>
                                <button type="submit" class="button_1 rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="bg-dark text-white pt-4 pb-2 mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                            <p>Your go-to platform for discovering new music and artists. Join us as we explore the world of sound.</p>
                            </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-white"><i class="fab fa-facebook"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="text-white"><i class="fab fa-youtube"></i> YouTube</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="bg-white">
            <div class="text-center">
                <p class="mb-0">© 2024 Your Music Portal. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

        </div>
    </div>

                <!-- Blog Modals -->
    <div class="modal fade" id="blogModal1" tabindex="-1" aria-labelledby="blogModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModal1Label">The Evolution of Music</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Music has been a part of human culture for thousands of years, evolving from simple drum beats to complex 
                        symphonies. In the early days, music was used in rituals and ceremonies, often accompanied by primitive 
                        instruments. Over time, the development of musical notation and the invention of new instruments expanded 
                        the possibilities of musical expression.
                    </p>
                    <p>
                        The Renaissance period marked a significant transformation in music, with the introduction of polyphony and 
                        greater use of harmony. The Baroque era followed, bringing intricate compositions and the birth of opera. 
                        In the 20th century, technological advancements, such as the phonograph and digital recording, revolutionized 
                        how music is produced and consumed.
                    </p>
                    <p>
                        Today, modern technology continues to shape music, with digital platforms allowing artists to reach global audiences 
                        instantly. The fusion of traditional and contemporary styles has created diverse genres, reflecting the ever-changing 
                        landscape of musical innovation.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
                </div>

                <div class="modal fade" id="blogModal2" tabindex="-1" aria-labelledby="blogModal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModal2Label">Top 10 Trending Tracks of the Year</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        This year has seen a diverse array of music making waves on the charts. From catchy pop anthems to soulful ballads, 
                        the top tracks reflect a broad spectrum of styles and influences. Artists from various genres have topped the charts, 
                        demonstrating the richness of the current musical landscape.
                    </p>
                    <p>
                        Among the standout tracks, several have gained widespread acclaim for their innovative sound and captivating lyrics. 
                        These songs have not only topped the charts but also resonated deeply with listeners, becoming anthems for the year. 
                        The influence of streaming platforms has played a significant role in shaping these trends.
                    </p>
                    <p>
                        As we move through the year, new releases continue to push boundaries and set new trends. Music lovers can expect 
                        an exciting array of fresh sounds and emerging artists making their mark on the industry, 
                        promising even more variety in the coming months.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="blogModal3" tabindex="-1" aria-labelledby="blogModal3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="blogModal3Label">Music Genres You Should Explore</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Music is a vast and diverse field, with countless genres waiting to be explored. While popular genres like pop and 
                        rock are widely known, there are many lesser-known genres that offer unique listening experiences. Exploring 
                        these genres can provide a deeper appreciation of music's richness and diversity.
                    </p>
                    <p>
                        Genres such as blues, jazz, and folk have deep historical roots and offer rich, expressive styles. Other genres, 
                        like electronic and experimental music, push the boundaries of traditional sound and production techniques. 
                        Each genre has its own distinct characteristics and cultural significance.
                    </p>
                    <p>
                        Venturing beyond mainstream music can uncover hidden gems and broaden your musical horizons. Whether it's the 
                        intricate rhythms of Afrobeat or the soothing melodies of lo-fi, there’s a world of music waiting to be discovered.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

        <div class="modal fade" id="blogModal4" tabindex="-1" aria-labelledby="blogModal4Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="blogModal4Label">How to Create Your Own Playlist</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Creating a playlist can be a fun and rewarding way to curate music for specific moments or moods. Start by defining 
                            the purpose of the playlist, whether it's for a workout, a party, or a relaxing evening. Choose songs that align 
                            with the intended atmosphere and flow smoothly from one track to the next.
                        </p>
                        <p>
                            Consider the pacing and energy levels of the songs you select. For a workout playlist, you might want high-energy 
                            tracks with a strong beat. For a relaxing playlist, opt for soothing melodies and slower tempos. Mixing different 
                            genres and artists can also add variety and keep the playlist engaging.
                        </p>
                        <p>
                            Don't forget to update your playlist regularly to keep it fresh and relevant. With a well-curated playlist, you 
                            can enhance any experience and enjoy a personalized soundtrack that suits your unique tastes and needs.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="blogModal5" tabindex="-1" aria-labelledby="blogModal5Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="blogModal5Label">The Impact of Streaming Services</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Music has long been recognized for its ability to affect our emotions and mental state. Studies have shown that listening 
                            to music can have a range of psychological benefits, from reducing stress and anxiety to improving mood and cognitive function.
                        </p>
                        <p>
                            Different types of music can elicit various responses; for example, calming melodies can help soothe nerves, while upbeat 
                            tunes can energize and uplift. Music therapy is an established practice that uses musical interventions to support mental 
                            health and enhance overall well-being.
                        </p>
                        <p>
                            Incorporating music into daily life, whether through listening, playing an instrument, or attending live performances, can 
                            contribute to a healthier and more balanced emotional state. As we continue to understand the impact of music on mental 
                            health, its role as a therapeutic tool remains an exciting and valuable area of exploration.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    </body>
</html>


