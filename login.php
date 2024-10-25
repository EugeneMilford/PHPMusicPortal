<!DOCTYPE html>

<?php
session_start();
require 'config/db.php'; // Update this as per your actual configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Prepare and execute the statement to find the user
    $stmt = $pdo->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // Check if user exists and verify password
    if ($user && password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['username'] = $username; // You can store other user data in the session as needed
        header("Location: index.php"); // Redirect to the main index page
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<html>
<head>
    <title>Music Demo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="assets/css/authentication.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="assets/img/login.jpeg" alt="">
                    <div class="signup-img-content">
                        <h2>Login</h2>
                        <p>while seats are available!</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="username" class="required">Username</label>
                                    <input type="text" name="username" id="username" required />
                                </div>
                                <div class="form-input">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" name="password" id="password" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Login" class="submit" id="submit" name="submit" />
                            <input type="reset" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                        <?php
                        // Display error message if login fails
                        if (isset($error_message)) {
                            echo '<div class="alert alert-danger mt-3">' . $error_message . '</div>';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

