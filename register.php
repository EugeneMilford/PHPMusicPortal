<!DOCTYPE html>

<?php
session_start();
require 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password']; // Get raw password for validation
    $confirm_password = $_POST['confirm_password'];
    $role = htmlspecialchars($_POST['role']);

    // Check if the passwords match
    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash if they match

        $stmt = $pdo->prepare("INSERT INTO users (name, surname, email, username, password, role) VALUES (?, ?, ?, ?, ?, ?)");
        if ($stmt->execute([$name, $surname, $email, $username, $hashed_password, $role])) {
            echo "Registration successful!";
            header("Location: index.php");
        } else {
            echo "Registration failed!";
        }
    } else {
        echo "Passwords do not match!";
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
    <link href="assets/css/home.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="assets/img/register.jpeg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="name" class="required">Name</label>
                                    <input type="text" name="name" id="name" required />
                                </div>
                                <div class="form-input">
                                    <label for="surname" class="required">Surname</label>
                                    <input type="text" name="surname" id="surname" required />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" name="email" id="email" required />
                                </div>
                                <div class="form-input">
                                    <label for="username" class="required">Username</label>
                                    <input type="text" name="username" id="username" required />
                                </div>
                                <div class="form-input">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" name="password" id="password" required />
                                </div>
                                <div class="form-input">
                                    <label for="confirm_password" class="required">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" required />
                                </div>
                                <div class="form-input">
                                    <label for="role" class="required">Role</label>
                                    <select name="role" id="role" required>
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="reset" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
