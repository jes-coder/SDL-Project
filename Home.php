<?php
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
            background-color: #000; /* Black background */
            color: #fff; /* White text */
        }
        /* Header Styling */
        header {
            background-color: #8A2BE2; /* Violet background */
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header .logo {
            height: 50px; /* Adjust based on your logo size */
        }
        header nav {
            display: flex;
            align-items: center;
            gap: 20px; /* Space between links */
            margin-left: 20px; /* Move navigation links to the left */
        }
        header nav a {
            color: #fff;
            text-decoration: none;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        .search-bar {
            flex-grow: 1;
            margin: 0 20px;
        }
        .search-bar input {
            padding: 5px;
            width: 100%;
            max-width: 300px;
            background-color: #444; /* Dark input field */
            color: #fff; /* White text */
            border: 1px solid #555;
            border-radius: 4px;
        }
        .login-dropdown {
            position: relative;
            display: inline-block;
        }
        .login-dropdown-content {
            display: none;
            position: absolute;
            background-color: #6A1B9A; /* Darker violet for dropdown */
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0; /* Align dropdown to the right */
        }
        .login-dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .login-dropdown-content a:hover {
            background-color: #7B1FA2; /* Slightly lighter violet on hover */
        }
        .login-dropdown:hover .login-dropdown-content {
            display: block;
        }
        /* Slider Styling */
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
        <!-- Logo -->
        <a href="index.php"> <!-- Link to home page -->
            <img src="images/logo.jpg" alt="Logo" class="logo"> <!-- Replace with your logo -->
        </a>

        <!-- Navigation Links -->
        <nav>
            <a href="index.php">Home</a> <!-- Link to home page -->
            <a href="premade-designs.php">Pre-made Designs</a>
            <a href="commissioned-work.php">Commissioned Work</a>
            <a href="showcasing.php">Showcasing</a>
        </nav>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search for designs...">
        </div>

        <!-- Log-in Dropdown -->
        <div class="login-dropdown">
            <a href="login.php">Log-in</a>
            <div class="login-dropdown-content">
                <a href="signup.php">Create an account</a>
            </div>
        </div>
    </header>

    <!-- Slider -->
    <div class="slider">
        <img src="images/product1.jpg" alt="Product 1" class="active">
        <img src="images/product2.jpg" alt="Product 2">
        <img src="images/product3.jpg" alt="Product 3">
    </div>

    <!-- Background -->
    <div style="height: 500px; background-color: #000;">
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