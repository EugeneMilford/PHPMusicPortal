<?php
session_start(); // Start the session to access session variables

require 'config/db.php'; // Include database connection file

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Get the logged-in user's username/email
$userId = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Execute the query and fetch results
$stmt->execute();
$todos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="home.php">Music Portal</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="faves.php">Favourites</a></li>
                            <li class="nav-item"><a class="nav-link" href="artists.php">Artists</a></li>
                            <li class="nav-item"><a class="nav-link" href="tracks.php">Tracks</a></li>
                            <li class="nav-item"><a class="nav-link" href="albums.php">Albums</a></li>
                            <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        </ul>
                        <ul class="navbar-nav ms-auto"> <!-- New ul for user greeting -->
                            <?php if (isset($_SESSION['username'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </header>

            <!-- Breadcrumbs Section -->
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

                            <hr class="my-5">

                            <h2 class="section_header big">Upcoming Events</h2>
                        </div>
                    </div>

                    <!-- Cards for Upcoming Events -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#jazzModal">
                                <img src="assets/img/event01.jpeg" class="card-img-top" alt="Jazz Under the Stars">
                                <div class="card-body">
                                    <h5 class="card-title">Jazz Under the Stars</h5>
                                    <p class="card-text"><strong>Date:</strong> Friday, November 10, 2023</p>
                                    <p class="card-text"><strong>Location:</strong> City Park Amphitheater, New Orleans</p>
                                    <a href="#" class="btn btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#rockModal">
                                <img src="assets/img/event02.jpg" class="card-img-top" alt="Rock Fest 2023">
                                <div class="card-body">
                                    <h5 class="card-title">Rock Fest 2023</h5>
                                    <p class="card-text"><strong>Date:</strong> Saturday, December 2, 2023</p>
                                    <p class="card-text"><strong>Location:</strong> Downtown Arena, Chicago</p>
                                    <a href="#" class="btn btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#classicalModal">
                                <img src="assets/img/event03.jpeg" class="card-img-top" alt="Classical Music Gala">
                                <div class="card-body">
                                    <h5 class="card-title">Classical Music Gala</h5>
                                    <p class="card-text"><strong>Date:</strong> Sunday, December 10, 2023</p>
                                    <p class="card-text"><strong>Location:</strong> Opera House, San Francisco</p>
                                    <a href="#" class="btn btn-secondary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Jazz Event -->
                    <div class="modal fade" id="jazzModal" tabindex="-1" aria-labelledby="jazzModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="jazzModalLabel">Jazz Under the Stars</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/event01.jpeg" alt="Jazz Under the Stars" class="img-fluid mb-3">
                                    <p><strong>Date:</strong> Friday, November 10, 2023</p>
                                    <p><strong>Location:</strong> City Park Amphitheater, New Orleans</p>
                                    <p><strong>Featured Artists:</strong> Experience the magic of live jazz music featuring renowned artists such as John Doe, Jane Smith, and the Jazz All-Stars.</p>
                                    <p><strong>Details:</strong> Bring a blanket and enjoy a night full of captivating performances. Enjoy delicious food from local vendors, and don't miss the craft beer garden! Tickets available online for $20.</p>
                                    <p><strong>Additional Information:</strong> The doors open at 6 PM, and the first act starts at 7 PM. Parking is available nearby, and we encourage carpooling.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Buy Tickets</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Rock Fest -->
                    <div class="modal fade" id="rockModal" tabindex="-1" aria-labelledby="rockModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rockModalLabel">Rock Fest 2023</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/event02.jpg" alt="Rock Fest 2023" class="img-fluid mb-3">
                                    <p><strong>Date:</strong> Saturday, December 2, 2023</p>
                                    <p><strong>Location:</strong> Downtown Arena, Chicago</p>
                                    <p><strong>Featured Artists:</strong> Join us for a day of rocking out with top bands like The Rockers, Metal Down, and Punk Nation!</p>
                                    <p><strong>Details:</strong> This all-day festival will feature top-tier musical acts, delicious food trucks, and merchandise stalls. Grab your tickets now to secure your spot in the crowd! General admission is $50 per person.</p>
                                    <p><strong>Additional Information:</strong> This is an outdoor event, and rain or shine, we're ready to rock! Doors open at 11 AM, and music plays until 11 PM. Be sure to check out our website for parking info and festival FAQs.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Buy Tickets</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for Classical Music Gala -->
                    <div class="modal fade" id="classicalModal" tabindex="-1" aria-labelledby="classicalModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="classicalModalLabel">Classical Music Gala</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="assets/img/event03.jpeg" alt="Classical Music Gala" class="img-fluid mb-3">
                                    <p><strong>Date:</strong> Sunday, December 10, 2023</p>
                                    <p><strong>Location:</strong> Opera House, San Francisco</p>
                                    <p><strong>Featured Artists:</strong> Enjoy performances by the city’s top orchestras, including the San Francisco Symphony and special soloists.</p>
                                    <p><strong>Details:</strong> Join us for an elegant evening celebrating classical music. Enjoy gourmet dining as you listen to sonatas and symphonies performed live. This event is perfect for classical music lovers and newcomers alike. Tickets start at $75.</p>
                                    <p><strong>Additional Information:</strong> Doors open at 5 PM, and the concert begins at 6 PM. Dress code is semi-formal. Valet parking will be available.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Buy Tickets</button>
                                </div>
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
                                <li><a href="#" class="text-white"><i class="fab fa-facebook"></i> Facebook</a></li>
                                <li><a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                                <li><a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                                <li><a href="#" class="text-white"><i class="fab fa-youtube"></i> YouTube</a></li>
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
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>