<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-made Designs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #EAE7DC;
            color: black;
        }

        header {
            background-color: #4E4E50;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        header .logo {
            height: 60px;
            width: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

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

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }

        .product-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .card {
            position: relative;
            width: 220px;
            padding: 15px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .hot-label {
            position: absolute;
            top: 10px;
            right: 10px;
            background: red;
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
            border-radius: 5px;
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }

        .card .description {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .card .price {
            color: #8b0000;
            font-size: 18px;
            font-weight: bold;
            margin-top: 5px;
        }

        footer {
            background-color: #4E4E50;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        .social-links a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        .social-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <div class="header-left">
            <a href="index.php">
                <img src="images/logo.jpg" alt="Logo" class="logo">
            </a>
            <nav>
                <a href="index.php">Home</a>
                <a href="premade-designs.php">Pre-made Designs</a>
                <a href="commissioned-work.php">Commissioned Work</a>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
            </nav>
        </div>
        <div class="header-right">
            <a href="login.php" style="color: white; text-decoration: none; font-size: 18px; font-weight: bold;">Log-in</a>
        </div>
    </header>

    <div class="product-section">
        <?php 
        $prices = [299, 199, 399, 249, 350, 220, 275, 320, 180, 410];
        for($i = 1; $i <= 10; $i++): ?>
        <div class="card">
            <span class="hot-label"><i>Hot</i></span>
            <img src="images/product<?php echo $i; ?>.jpg" alt="Product <?php echo $i; ?>">
            <div class="description">Design <?php echo $i; ?> - Unique & Trendy</div>
            <div class="price">₱<?php echo $prices[$i - 1]; ?></div>
            <button class="btn">Add to Cart</button>
        </div>
        <?php endfor; ?>
    </div>
    
    <footer>
        <div class="social-links">
            <a href="https://www.facebook.com/MetroDistrictDesigns">Facebook</a>
            <a href="https://www.instagram.com/metrodistrict_ig/">Instagram</a>
            <a href="#">Twitter</a>
        </div>
        <p>&copy; 2025 Metro District Designs. All Rights Reserved.</p>
    </footer>
</body>
</html>
