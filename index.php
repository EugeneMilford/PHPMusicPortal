<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/music.css" rel="stylesheet">
</head>
<body>
    <!-- Welcome Section -->
    <section id="welcome" class="d-flex align-items-center justify-content-center">
        <div class="container text-center">
            <h1>Welcome to <span>Music Portal</span></h1>
            <h2>A Place where music becomes reality</h2>
            <?php if (isset($_SESSION['user_id'])): ?>
                <p>Your role: <?php echo $_SESSION['role']; ?></p>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            <?php else: ?>
                <h1>Please Login or Register</h1>
                <a href="login.php" class="btn btn-primary">Login</a> | 
                <a href="register.php" class="btn btn-secondary">Register</a> | 
                <a href="demo.php" class="btn btn-info">Demo</a>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>

