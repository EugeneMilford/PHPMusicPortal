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
            header("Location: home.php");
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
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="assets/css/home.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/apple-chancery" rel="stylesheet">
</head>
<body>
          <!-- Register Start -->
<div class="container-fluid py-4">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Register</h4>
            <h1 class="display-5 mb-4">Create Your Account</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="contact-img d-flex justify-content-center">
                    <div class="contact-img-inner" style="max-width: 100%; overflow: hidden;">
                        <img src="assets/img/register.jpeg" class="img-fluid w-100" alt="Image" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div>
                    <h4 class="text-primary">Register Your Account</h4>
                    <p class="mb-4">Fill in the details below to create your account.</p>
                    <form method="POST" id="register-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="name" id="name" placeholder="Name">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="surname" id="surname" placeholder="Surname">
                                    <label for="surname">Surname</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" name="email" id="email" placeholder="Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" name="username" id="username" placeholder="Username">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" name="password" id="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0" name="confirm_password" id="confirm_password" required />
                                    <label for="password">Confirm Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select border-0" name="role" id="role">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                    <label for="role">Role</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="button_2 w-50 py-3">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
