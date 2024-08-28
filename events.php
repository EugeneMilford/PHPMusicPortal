<!DOCTYPE html>

<html>
    <head>
        <title>Events</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <link href="assets/css/home.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
        <style>
        #countdown {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .countdown-item {
            text-align: center;
        }
        .countdown-item span {
            display: block;
            font-size: 2rem;
            font-weight: bold;
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
                                <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
 
                <!-- -Breadcrumbs Section -->
                <section class="page_breadcrumbs cs gradient section_padding_top_75 section_padding_bottom_25 table_section table_section_md" style="margin-top: 25px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <h2 class="small">Events</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item active"><a href="#">Events</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Events Section -->
                <section id="comingsoon1" class="ls section_padding_top_15 section_padding_bottom_100">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="section_header big">Coming Soon!</h2>
                                <p class="underheading">Stay Tuned!</p>

                                <div id="countdown">
                                    <div class="countdown-item">
                                        <span id="days">00</span>
                                        <small>Days</small>
                                    </div>
                        <div class="countdown-item">
                            <span id="hours">00</span>
                            <small>Hours</small>
                        </div>
                        <div class="countdown-item">
                            <span id="minutes">00</span>
                            <small>Minutes</small>
                        </div>
                        <div class="countdown-item">
                            <span id="seconds">00</span>
                            <small>Seconds</small>
                        </div>
                    </div>

                    <img src="assets/img/1.jpeg" alt="Indie Nights Poster" class="img-fluid my-4">

                    <div class="event-details mt-4">
                        <h3>Indie Nights at The Rooftop</h3>
                        <p><strong>Date:</strong> Every Thursday, starting September 7, 2023</p>
                        <p><strong>Location:</strong> The Rooftop Lounge, Los Angeles</p>
                        <p><strong>Featured Artists:</strong> Discover talented local indie bands and artists each week, with a different lineup every Thursday.</p>
                        <p><strong>Details:</strong> Enjoy amazing views of the skyline while sipping signature cocktails. Free entry with RSVP, limited capacity!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3 text-center">
                    <div class="widget widget_mailchimp">
                        <p>Subscribe to our latest news to be updated, we promise not to spam!</p>
                        <br>
                        <form class="signup" action="./" method="get">
                            <div class="mb-3">
                                <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <button type="submit" class="button_4">Send</button>
                            <div class="response"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

                <!-- Footer -->
    <footer class="bg-dark text-white pt-4 pb-2 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
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
                <p class="mb-0">© 2024 Music Portal. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
            </div>
        </div>
        
        <script>
        // Set the target date
        const targetDate = new Date('November 15, 2024 00:00:00').getTime();

        // Update countdown every second
        const countdownFunction = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            // Time calculations
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the countdown element
            document.getElementById('days').innerHTML = days < 10 ? '0' + days : days;
            document.getElementById('hours').innerHTML = hours < 10 ? '0' + hours : hours;
            document.getElementById('minutes').innerHTML = minutes < 10 ? '0' + minutes : minutes;
            document.getElementById('seconds').innerHTML = seconds < 10 ? '0' + seconds : seconds;

            // If the countdown is finished, display some text
            if (distance < 0) {
                clearInterval(countdownFunction);
                document.getElementById('countdown').innerHTML = "The event has started!";
            }
        }, 1000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
