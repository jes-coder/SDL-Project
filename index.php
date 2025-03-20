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
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: black; /* Keep black but limit content width */
            color: white;
        }

        /* Container for content */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #111; /* Dark gray for contrast */
            border-radius: 10px;
            margin-top: 20px;
        }

        /* Header Styling */
        header {
            background-color: #8A2BE2; /* Violet */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo and Navigation Container */
        .header-left {
            display: flex;
            align-items: center;
            gap: 20px; /* Space between logo and navigation */
        }

        /* Logo */
        header .logo {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Navigation */
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Search Bar */
        .search-bar {
            margin-left: 20px; /* Align beside "Showcasing" */
        }

        .search-bar input {
            padding: 5px;
            width: 250px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #444;
            color: white;
        }

        /* Dropdown Menu */
        .login-dropdown {
            position: relative;
            display: inline-block;
        }

        .login-dropdown-content {
            display: none;
            position: absolute;
            background-color: #6A1B9A;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            right: 0;
        }

        .login-dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .login-dropdown-content a:hover {
            background-color: #7B1FA2;
        }

        .login-dropdown:hover .login-dropdown-content {
            display: block;
        }

        /* Slider */
        .slider {
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-top: 20px;
        }

        .slider img {
            width: 100%;
            height: 400px;
            object-fit: cover;
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
        <div class="header-left">
            <!-- Logo -->
            <a href="index.php">
                <img src="images/logo.jpg" alt="Logo" class="logo">
            </a>

            <!-- Navigation Links -->
            <nav>
                <a href="index.php">Home</a>
                <a href="premade-designs.php">Pre-made Designs</a>
                <a href="commissioned-work.php">Commissioned Work</a>
                <a href="showcasing.php">Showcasing</a>

                <!-- Search Bar beside "Showcasing" -->
                <div class="search-bar">
                    <input type="text" placeholder="Search for designs...">
                </div>
            </nav>
        </div>

        <!-- Login Dropdown -->
        <div class="login-dropdown">
            <a href="login.php">Log-in</a>
            <div class="login-dropdown-content">
                <a href="signup.php">Create an account</a>
            </div>
        </div>
    </header>

    <!-- Content Container -->
    <div class="container">
        
        <!-- Slider -->
        <div class="slider">
            <img src="images/background.jpg" alt="Product 1" class="active">
            <img src="images/product1.jpg" alt="Product 2">
            <img src="images/product2.jpg" alt="Product 3">
            <img src="images/product3.jpg" alt="Product 3">
        </div>

        <!-- Main Content -->
        <div class="content">
            <h1>Welcome to <b><i>Metro District Designs</i></b></h1>
            <p><i>"Explore unique designs, commission custom work, and showcase your creativity."</i></p>
        </div>

    </div>

    <script>
        // Image Slider Logic
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
