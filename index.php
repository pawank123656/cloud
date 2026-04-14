<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - E-commerce</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>My E-Commerce Store</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="buy_kids.php">Kids</a>
            <a href="#women">Women</a>
            <a href="buy_adult.php">Men</a>
        </nav>
    </header>

    <main>
        <section class="banner">
            <h2>Welcome to Our Store!</h2>
            <p>Explore our amazing products.</p>
        </section>

        <section id="kids" class="category">
            <h2>Kids Section</h2>
            <div class="product">
                <a href="buy_kids.html">
                    <img src="image1.jpg" alt="Kids Product 1">
                    <p>Kids Product 1</p>
                    <p>$20.00</p>
                </a>
            </div>
            <div class="product">
                <a href="buy_kids.html">
                    <img src="image2.jpeg" alt="Kids Product 2">
                    <p>Kids Product 2</p>
                    <p>$25.00</p>
                </a>
            </div>
            <div class="product">
                <a href="buy_kids.html">
                    <img src="image5.jpg" alt="Kids Product 3">
                    <p>Kids Product 3</p>
                    <p>$40.00</p>
                </a>
            </div>
            <div class="product">
                <a href="buy_kids.html">
                    <img src="image6.jpg" alt="Kids Product 4">
                    <p>Kids Product 4</p>
                    <p>$35.00</p>
                </a>
            </div>
        </section>
        

        <section id="women" class="category">
            <h2>Women Section</h2>
            <div class="product">
                <img src="image7.jpg" alt="Women Product 1">
                <p>Women Product 1</p>
                <p>$30.00</p>
            </div>
            <div class="product">
                <img src="image4.jpg" alt="Women Product 2">
                <p>Women Product 2</p>
                <p>$45.00</p>
            </div>
            <div class="product">
                <img src="image8.jpg" alt="Women Product 1">
                <p>Women Product 3</p>
                <p>$60.00</p>
            </div>
            <div class="product">
                <img src="image9.webp" alt="Women Product 2">
                <p>Women Product 4</p>
                <p>$50.00</p>
            </div>
        </section>

        <section id="men" class="category">
            <h2>Men Section</h2>
            <div class="product">
                <a href="buy_adult.html">
                    <img src="image10.webp" alt="Men Product 1">
                    <p>Men Product 1</p>
                    <p>$40.00</p>
                </a>
            </div>
            <div class="product">
                <a href="buy_adult.html">
                    <img src="image11.jpg" alt="Men Product 2">
                    <p>Men Product 2</p>
                    <p>$50.00</p>
                </a>
            </div>
            <div class="product">
                <a href="buy_adult.html">
                    <img src="image14.webp" alt="Men Product 3">
                    <p>Men Product 3</p>
                    <p>$60.00</p>
                </a>
            </div>
            <div class="product">
                <a href="buy_adult.html">
                    <img src="image13.webp" alt="Men Product 4">
                    <p>Men Product 4</p>
                    <p>$70.00</p>
                </a>
            </div>
        </section>
        
    <footer>
        <p>&copy; 2024 My E-Commerce Store</p>
        <p> Contact no.-9465790210</p>
        <p>Email id-akashsingh@gmail.com</p>
    </footer>
</body>
</html>
?>