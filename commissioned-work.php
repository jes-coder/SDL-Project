<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commissioned Work</title>
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
        /* Upload Form Styling */
        .upload-form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #333; /* Dark gray form background */
        }
        .upload-form input[type="file"] {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Logo -->
        <a href="index.php">
            <img src="images/logo.jpg" alt="Logo" class="logo"> <!-- Replace with your logo -->
        </a>

        <!-- Navigation Links -->
        <nav>
            <a href="index.php">Home</a>
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

    <!-- Page Content -->
    <h1 style="text-align: center;">Commissioned Work</h1>
    <div class="upload-form">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="design">Upload Your Design:</label>
            <input type="file" name="design" id="design" required>
            <br>
            <input type="submit" value="Submit Design">
        </form>
    </div>
</body>
</html>