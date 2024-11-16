<?php

session_start();

require 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username']; // Store the username in session
        $_SESSION['role'] = $user['role'];
        header("Location: home.php");
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <link href="assets/css/home.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
    </head>
    
    <body>
        <!-- Login Start -->
        <div class="container-fluid py-4">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Login</h4>
                    <h1 class="display-5 mb-4">Welcome Back</h1>
                </div>
                <div class="row g-3">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="contact-img d-flex justify-content-center">
                            <div class="contact-img-inner" style="max-width: 100%; overflow: hidden;">
                                <img src="assets/img/login.jpeg" class="img-fluid w-100" alt="Image" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="text-primary">Login To Your Account</h4>
                    <p class="mb-4">Fill in the details below to login to your account.</p>
                    <form method="POST">
                        <div class="row g-3">    
                            <div class="col-sm-6">
                                <div class="form-group mb-0">
                                    <label for="name" class="form-label">User Name <span class="required">*</span></label>
                                    <i class="fa fa-user highlight2" aria-hidden="true"></i>
                                    <input type="text" aria-required="true" size="30" value="" name="username" id="username" class="form-control" placeholder="User Name">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group mb-0">
                                    <label for="name" class="form-label">Password<span class="required">*</span></label>
                                    <i class="fa fa-user highlight2" aria-hidden="true"></i>
                                    <input type="password" aria-required="true" size="30" value="" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="button_2 w-40 py-3">Login</button>
                                <button class="button_5 w-40 py-3">Reset</button>
                            <!-- <input type="submit" value="Login" class="button_2" id="submit" name="submit" />
                            <input type="reset" value="Reset" class="submit" id="reset" name="reset" /> -->
                            </div>
                        <?php
                        // Display error message if login fails
                        if (isset($error_message)) {
                            echo '<div class="alert alert-danger mt-3">' . $error_message . '</div>';
                        }
                        ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

