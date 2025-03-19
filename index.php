<?php
// Start the session (for login/logout functionality)
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .search-bar {
            margin-top: 10px;
            text-align: center;
        }
        .search-bar input {
            padding: 5px;
            width: 300px;
        }
        .slider {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-top: 20px;
        }
        .slider img {
            width: 100%;
            display: none;
        }
        .slider img.active {
            display: block;
            animation: fade 1.5s;
        }
        @keyframes fade {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="premade-designs.php">Pre-made Designs</a>
            <a href="commissioned-work.php">Commissioned Work</a>
            <a href="showcasing.php">Showcasing</a>
        </nav>
        <div>
            <a href="signup.php">Sign-up</a>
            <a href="login.php">Log-in</a>
        </div>
    </header>

    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" placeholder="Search for designs...">
    </div>

    <!-- Slider -->
    <div class="slider">
        <img src="design1.jpg" alt="Design 1" class="active">
        <img src="design2.jpg" alt="Design 2">
        <img src="design3.jpg" alt="Design 3">
    </div>

    <!-- Background -->
    <div style="height: 500px; background-color: #e0e0e0;">
        <!-- Add more content here later -->
    </div>

    <script>
        // Simple slider functionality
        let images = document.querySelectorAll('.slider img');
        let current = 0;

        function nextSlide() {
            images[current].classList.remove('active');
            current = (current + 1) % images.length;
            images[current].classList.add('active');
        }

        setInterval(nextSlide, 3000); // Change slide every 3 seconds
    </script>
</body>
</html>