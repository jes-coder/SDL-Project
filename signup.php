<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000; /* Black background */
            color: #fff; /* White text */
        }
        /* Header CSS (same as above) */
        .signup-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 80px); /* Adjust height to account for header */
        }
        .signup-form {
            background-color: #333; /* Dark gray form background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        .signup-form h2 {
            margin-bottom: 20px;
        }
        .input-container {
            position: relative;
            margin-bottom: 15px;
        }
        .input-container input {
            width: 100%;
            padding: 10px 10px 10px 40px; /* Add padding for icons */
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
        .signup-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #8A2BE2; /* Violet button */
            border: none;
            border-radius: 4px;
            color: #fff;
            cursor: pointer;
        }
        .signup-form input[type="submit"]:hover {
            background-color: #7B1FA2; /* Darker violet on hover */
        }
        .signup-form a {
            color: #8A2BE2; /* Violet link */
            text-decoration: none;
        }
        .signup-form a:hover {
            text-decoration: underline;
        }
        .form-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-logo img {
            height: 80px; /* Adjust based on your logo size */
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Sign-up Form -->
    <div class="signup-form-container">
        <div class="signup-form">
            <!-- Logo on top of the form -->
            <div class="form-logo">
                <img src="images/logo.jpg" alt="Sign-up Logo"> <!-- Replace with your logo -->
            </div>
            <h2>Sign-up</h2>
            <form action="signup-process.php" method="post">
                <!-- Username Field -->
                <div class="input-container">
                    <i class="fas fa-user"></i> <!-- User icon -->
                    <input type="text" name="username" placeholder="Username" required>
                </div>

                <!-- Email Field -->
                <div class="input-container">
                    <i class="fas fa-envelope"></i> <!-- Email icon -->
                    <input type="email" name="email" placeholder="Email" required>
                </div>

                <!-- Password Field -->
                <div class="input-container">
                    <i class="fas fa-lock"></i> <!-- Lock icon -->
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <!-- Confirm Password Field -->
                <div class="input-container">
                    <i class="fas fa-lock"></i> <!-- Lock icon -->
                    <input type="password" name="confirm-password" placeholder="Confirm Password" required>
                </div>

                <!-- Sign-up Button -->
                <input type="submit" value="Sign Up">
            </form>
            <p>Already have an account? <a href="login.php">Log in</a></p>
        </div>
    </div>
</body>
</html>