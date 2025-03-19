<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000; /* Black background */
            color: #fff; /* White text */
        }
        header {
            background-color: #8A2BE2; /* Violet background for the header */
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
        .login-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 40px); /* Adjust height to account for header */
        }
        .login-form {
            background-color: #333; /* Dark gray form background */
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        .login-form h2 {
            margin-bottom: 20px;
        }
        .input-container {
            position: relative;
            margin-bottom: 15px;
        }
        .input-container input {
            width: 100%;
            padding: 10px 10px 10px 15px; /* Add padding for icons */
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #444; /* Dark input field */
            color: #fff; /* White text */
        }
        .input-container i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #8A2BE2; /* Violet icon color */
        }
        .login-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #8A2BE2; /* Violet button */
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #7B1FA2; /* Darker violet on hover */
        }
        .login-form a {
            color: #8A2BE2; /* Violet link */
            text-decoration: none;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
        .form-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-logo img {
            height: 80px; /* Adjust based on your logo size */
        }
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .continue-with {
            margin-top: 20px;
        }
        .continue-with button {
            width: 100%;
            padding: 10px;
            background-color: #fff; /* White background */
            border: 1px solid #ccc;
            border-radius: 4px;
            color: #000; /* Black text */
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .continue-with button:hover {
            background-color: #f0f0f0; /* Light gray on hover */
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <!-- Log-in Form -->
    <div class="login-form-container">
        <div class="login-form">
            <!-- Logo on top of the form -->
            <div class="form-logo">
                <img src="images/logo.jpg" alt="Login Logo"> <!-- Replace with your login logo -->
            </div>
            <h2>Metro District Designs</h2>
            <form action="login-process.php" method="post">
                <!-- Username Field -->
                <div class="input-container">
                    <i class="fas fa-envelope"></i> <!-- Message icon -->
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <!-- Password Field -->
                <div class="input-container">
                    <i class="fas fa-lock"></i> <!-- Lock icon -->
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="forgot-password.php">Forgot password?</a>
                </div>

                <!-- Log-in Button -->
                <input type="submit" value="Log In">

                <!-- Continue with Google -->
                <div class="continue-with">
                    <p>--------Continue with--------</p>
                    <button type="button">
                    <img src="images/google-logo.jpg" alt="Google Logo" style="height: 20px;">
                        Continue with Google
                    </button>
                </div>
            </form>
            <p>Don't have an account? <a href="signup.php">Create one</a></p>
        </div>
    </div>
</body>
</html>