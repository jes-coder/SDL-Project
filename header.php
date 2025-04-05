<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro District Designs</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Common styles for all pages */
        body {
            font-family: Helvetica, sans-serif;
            font-weight: bold;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #1E1E1E;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            color: white !important;
            font-weight: bold;
        }

        .navbar-brand img {
            height: 30px;
            margin-right: 10px;
        }

        .navbar-nav {
            flex-grow: 1;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: white !important;
            text-transform: uppercase;
            font-family: Helvetica, sans-serif;
            font-weight: bold;
            margin: 0 10px;
        }

        .navbar-nav.ms-auto {
            margin-right: 0 !important;
            align-items: center;
        }

        /* Search Bar Styles */
        .search-container {
            position: relative;
            margin-left: 15px;
        }

        .nav-icons {
            display: flex;
            align-items: center;
            color: white;
        }

        .nav-icons i {
            cursor: pointer;
            margin-left: 15px;
        }

        .search-icon, .cart-icon {
            transition: color 0.3s ease;
        }

        .search-icon:hover, .cart-icon:hover {
            color: #aaa;
        }

        .search-popup {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            width: 300px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            margin-top: 10px;
        }

        .search-popup.show, .search-popup.active {
            display: block;
        }

        .search-popup input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: Helvetica, sans-serif;
            font-weight: normal;
        }

        .colorful-divider {
            height: 5px;
            background: gray;
        }

        /* Footer Styles */
        .footer {
            background-color: #1E1E1E;
            color: white;
            padding: 40px 0 20px;
            margin-top: 40px;
        }

        .footer h5 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            color: #4a90e2;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-right: 10px;
        }

        .social-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }

        .social-icon i {
            font-size: 30px;
            color: inherit;
        }

        .social-icon.facebook:hover {
            color: #3b5998;
        }

        .social-icon.instagram:hover {
            color: #e1306c;
        }
    </style>
    <!-- Page-specific styles can go here or be in separate files -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Homepage.php">
                <img src="/api/placeholder/40/40" class="rounded-circle">
                Metro District Designs
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'Homepage.php' ? 'active' : ''; ?>" href="Homepage.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'Products.php' ? 'active' : ''; ?>" href="Products.php">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'Inquiry.php' || basename($_SERVER['PHP_SELF']) == 'Commissioned.php' ? 'active' : ''; ?>" href="Inquiry.php">INQUIRY</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Signup.php">SIGN-UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">LOGIN</a>
                    </li>
                    <li class="nav-item nav-icons">
                        <i class="bi bi-cart cart-icon" id="cartIcon"></i>
                        <div class="search-container">
                            <i class="bi bi-search search-icon" id="searchToggle"></i>
                            <div class="search-popup" id="searchPopup">
                                <input type="text" placeholder="Search designs..." id="searchInput">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Colorful divider -->
    <div class="colorful-divider"></div>