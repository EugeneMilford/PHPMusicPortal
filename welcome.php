<!DOCTYPE html>

<?php
session_start();
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/music.css" rel="stylesheet">
    </head>
    <body>
        <!-- Welcome Section -->
        <section id="welcome" class="d-flex align-items-center">
            <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Welcome to <span>Music Portal</span></h1>
                        <h2>A Place where music becomes reality</h2>
                        <div class="btns">
                            <a href="login.php" class="btn-menu animated fadeInUp scrollto">Login</a>
                            <a href="register.php" class="btn-menu animated fadeInUp scrollto">Register</a>
                            <a href="#" class="btn-menu animated fadeInUp scrollto">Demo User</a>
                            <a href="#" class="btn-menu animated fadeInUp scrollto">Demo Admin</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
