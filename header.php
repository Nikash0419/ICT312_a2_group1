<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="primary-nav">
        <div class="logo-cursive">Welcome to Alphafootwear</div>
        <div class="auth-buttons">
            <?php if(isset($_SESSION['uid'])):?>
                <button onclick="location.href='myorders.php'">My Orders</button>
                <button onclick="location.href='mycart.php'">My Cart</button>
                <button onclick="location.href='logout.php'">Logout</button>
            <?php else:?>
                <button onclick="location.href='login.php'">Login</button>
                <button onclick="location.href='register.php'">Sign Up</button>
            <?php endif?>
        </div>
    </div>
    <header>
        <nav>
            <div class="logo"><img src="img/logo.png" alt=""></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="dropdown">
                    <a href="product.php">Products</a>
                    <div class="dropdown-content">
                        <a href="men.php">Men's</a>
                        <a href="women.php">Women's</a>
                        <a href="kids.php">Kids'</a>
                    </div>
                </li>
                <li><a href="store.php">Store Locator</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </nav>
    </header>