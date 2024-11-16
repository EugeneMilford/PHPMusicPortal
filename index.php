<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Music Portal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/music.css" rel="stylesheet">
        <style>
    /* Ensure the background image covers the entire section */
    .welcome {
        background-size: cover;
        background-position: center;
        height: 100vh; /* Full viewport height */
        position: relative;
        display: flex;
        align-items: center; /* Center content vertically */
        color: white; /* Change text color for better visibility */
    }

    /* Optional: Adding an overlay for readability */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Dark overlay for contrast */
        z-index: 1; /* Place overlay behind text */
    }

    /* Content inside the section */
    .container {
        position: relative; /* Position relative to allow the overlay to go behind */
        z-index: 2; /* Ensure content is above the overlay */
    }

    /* Adjust button styling as needed */
    .button-group .button_1,
    .button-group .button_2,
    .button-group .button_3 {
        margin-right: 10px; /* Spacing between buttons */
    }
</style>
    </head>
    
    <body>
        <div id="canvas">
            <div id="box_wrapper">
    <!-- Hero Section -->
    <section id="welcome" class="welcome section dark-background" style="background-image: url('assets/img/44.jpg');">
        <div class="overlay"></div>
        
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4">Welcome to Music Portal</h1>
                    <p class="lead">Discover, Enjoy, and Share the Sounds of Tomorrow.</p>
                    <div class="button-group">
                        <button class="button_1" onclick="window.location.href='login.php'">Login</button>
                <button class="button_2" onclick="window.location.href='register.php'">Register</button>
                <button class="button_3" onclick="window.location.href='demo.php'">Try Demo</button>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>















