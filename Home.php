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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #EAE7DC;
            color: black;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: #D8C3A5;
            border-radius: 10px;
            margin-top: 20px;
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

        .product-section {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
            text-align: center;
        }

        .card img {
            width: 100%;
            transition: opacity 0.5s ease;
        }

        .card .hover-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .card:hover .hover-img {
            opacity: 1;
        }

        .label {
            position: absolute;
            top: 10px;
            right: 10px;
            background: red;
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 5px;
        }

        .product-description {
            padding: 10px;
            background-color: #f1f1f1;
            color: black;
            font-size: 16px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-weight: bold;
        }

        .card {
            width: 200px;
            height: 250px;
            margin: 1rem auto;
            perspective: 1000px;
            cursor: pointer;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .card:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.5rem;
        }

        .card-front {
            background: white;
            border: 1px solid #e5e7eb;
        }

        .card-back {
            background: #8b5cf6;
            color: white;
            transform: rotateY(180deg);
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

    <div class="container">
        <div class="slider">
            <img src="images/slider1.jpg" alt="Product 1" class="active">
            <img src="images/slider2.jpg" alt="Product 2">
            <img src="images/slider3.jpg" alt="Product 3">
        </div>

        <div class="product-section">
            <?php 
            for($i = 1; $i <= 10; $i++): ?>
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <span class="label"><i>New</i></span>
                        <img src="images/product<?php echo $i; ?>_front.jpg" alt="Product <?php echo $i; ?>">
                    </div>
                    <div class="card-back">
                        <img src="images/product<?php echo $i; ?>_back.jpg" alt="Product <?php echo $i; ?> Back">
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <footer>
        <div class="social-links">
            <a href="https://www.facebook.com/MetroDistrictDesigns">Facebook</a>
            <a href="https://www.instagram.com/metrodistrict_ig/">Instagram</a>
            <a href="#">Twitter</a>
        </div>
        <p>&copy; 2025 Metro District Designs. All Rights Reserved.</p>
    </footer>

    <script>
        let images = document.querySelectorAll('.slider img');
        let current = 0;

        function nextSlide() {
            images[current].classList.remove('active');
            current = (current + 1) % images.length;
            images[current].classList.add('active');
        }

        setInterval(nextSlide, 3000); 
    </script>

</body>
</html>