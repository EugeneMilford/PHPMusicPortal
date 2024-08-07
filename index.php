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
        <style>
            .carousel-item img {
                height: 500px;
                object-fit: cover;
            }
        
            .item-media img {
                width: 100%; /* Adjust this value if needed */
                height: auto; /* Maintain aspect ratio */
                max-width: 100%; /* Ensure the image does not exceed the container width */
                object-fit: cover; /* Ensure the image covers the area without distortion */
            }
        </style>
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
                            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/1.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Discover Music</h5>
                            <p>Explore our extensive collection of music across various genres.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/2.jpeg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Artists Spotlight</h5>
                            <p>Get to know the top artists in the industry and their latest works.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/im3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Trending Tracks</h5>
                            <p>Stay updated with the latest trending tracks and albums.</p>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- About Section -->
            <section id="about" class="ls section_padding_top_100 section_padding_bottom_40 table_section table_section_md columns_margin_bottom_30" data-aos="fade-up">
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
                        <?php include 'data/indexData.php' ?>
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

            <!-- Blog Section -->
            <!-- Blog Section -->
    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_margin_bottom_30">
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
                <!-- Blog Post 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="vertical-item">
                        <div class="item-media">
                            <img src="assets/img/music01.jpeg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">The Evolution of Music</h4>
                            <p class="entry-summary">Explore how music has evolved over the centuries and the impact of modern technology on traditional sounds.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal1">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="vertical-item">
                        <div class="item-media">
                            <img src="assets/img/music02.jpeg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">Top 10 Trending Tracks of the Year</h4>
                            <p class="entry-summary">Check out the top tracks that have taken the music industry by storm this year.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal2">Read More</button>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="vertical-item">
                        <div class="item-media">
                            <img src="assets/img/music03.jpeg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">Music Genres You Should Explore</h4>
                            <p class="entry-summary">Dive into various music genres that you might not have heard of but are definitely worth exploring.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal3">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <!-- Blog Post 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="vertical-item">
                        <div class="item-media">
                            <img src="assets/img/music04.jpeg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">How to Create Your Own Playlist</h4>
                            <p class="entry-summary">Learn how to curate the perfect playlist for any occasion, from workouts to relaxation.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal4">Read More</button>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="vertical-item">
                        <div class="item-media">
                            <img src="assets/img/music05.jpeg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">The Impact of Streaming Services</h4>
                            <p class="entry-summary">How streaming services have changed the way we listen to and discover music.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal5">Read More</button>
                        </div>
                    </div>
                </div>     
                <!-- Blog Post 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="vertical-item">
                        <div class="item-media">
                            <img src="assets/img/music06.jpeg" alt="">
                        </div>
                        <div class="item-content">
                            <h4 class="entry-title">The Role of Music in Mental Health</h4>
                            <p class="entry-summary">Explore how music can influence and improve mental well-being and emotional health.</p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#blogModal5">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            
            <!-- Footer Section -->
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
    </body>
</html>


