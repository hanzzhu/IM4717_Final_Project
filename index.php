<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <!-- ======= Header ======= -->
    <header>
        <div class="header">
            <!-- ======= Logo ======= -->
            <a href="index.php" class="logo">
                <img class="logoImage" src="img/logo.png" alt="Logo">
            </a>
            <!-- ======= Nav bar ======= -->
            <nav id="navbar" class="navbar">
                <ul class="nav-ul">
                    <li><a class="nav-li" href="index.php">Home</a></li>
                    <li><a class="nav-li" href="menu.php">Menu</a></li>
                    <li><a class="nav-li" href="order.php">Order</a></li>
                    <li><a class="nav-li" href="about.html">About</a></li>
                    <li><a class="nav-li" href="event.html">Event</a></li>
                </ul>
            </nav>
        </div>

    </header>
    <!-- ======= Banner Section ======= -->
    <section class="banner-section">
        <div class="container-main">
            <div class="banner">
                <div class="banner-text">
                    <h1>Enjoy Hot and Fresh Grills, <br/>Here!</h1>
                </div>

            </div>
        </div>

    </section>
    <!-- ======= Promo Section ======= -->
    <section class="promo-section">
        <div class="container-main">
            <div class="promo">
                <?php //catalog.php
                session_start();
                if (!isset($_SESSION['cart'])){
                    $_SESSION['cart'] = array();
                }
                if (isset($_GET['buy'])) {
                    $_SESSION['cart'][] = $_GET['buy'];
                    header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
                    exit();
                }
                ?>
                <ul>
                    <li><div class="card">
                        <img src="img/set1.jpg" alt="set1">
                        <div class="container-card">
                            <h4><b>Classic Set Meal</b></h4>
                            <p>Angus Beef Burger with Curly Fries and Drink</p>
                            <h4>$ 15.90</h4>
                            <?php echo "<a class = 'order-link' href='" .$_SERVER['PHP_SELF']. '?buy=0'. "'> Add to Cart</a> <br/><br/>";  ?>
                        </div>
                    </div></li>
                    <li><div class="card">
                        <img src="img/set2.jpg" alt="set2">
                        <div class="container-card">
                            <h4><b>Fishy Set Meal</b></h4>
                            <p>Fish Burger With Tartar Sauce with Potato Wedges</p>
                            <h4>$ 12.90</h4>
                            <?php echo "<a class = 'order-link' href='" .$_SERVER['PHP_SELF']. '?buy=1'. "'> Add to Cart</a> <br/><br/>";  ?>
                        </div>
                    </div></li>
                    <li><div class="card">
                        <img src="img/set3.jpg" alt="set3">
                        <div class="container-card">
                            <h4><b>Steak Platter</b></h4>
                            <p>Freshest Tomahawk steak seared on the super-heated Lava Stone.</p>
                            <h4>$ 22.90</h4>
                            <?php echo "<a class = 'order-link' href='" .$_SERVER['PHP_SELF']. '?buy=2'. "'> Add to Cart</a> <br/><br/>";  ?>
                        </div>
                    </div></li>
                </ul>


            </div>
        </div>

    </section>
    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer">
            <hr/>
            <div class="footer-nav">
                <nav class="navbar">
                    <ul class="nav-ul">
                        <li><a class="nav-li" href="index.php">Home</a></li>
                        <li><a class="nav-li" href="menu.php">Menu</a></li>
                        <li><a class="nav-li" href="order.php">Order</a></li>
                        <li><a class="nav-li" href="about.html">About</a></li>
                        <li><a class="nav-li" href="event.html">Event</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer-details">
                <ul class="footer-details-ul">
                    <li><p>
                            50 Nanyang Ave<br>SG 639798<br>
                            </strong> +65 6791 1744<br>
                            </strong> info@grillhouse.sg<br>
                            </strong> 11AM - 11PM
                        </p></li>
                    <li><img class="logoImage-footer" src="img/logo.png" alt="Logo"></li>

                </ul>
            </div>
            <div class="social-links">
                <h3>Follow Us!</h3>
                <a href="#" class="twitter"><img class="insta" src="img/insta.png"></a>
                <a href="#" class="facebook"><img class="facebook" src="img/facebook.png"></a>
                <a href="#" class="instagram"><img class="twitter" src="img/twitter.png"></i></a>
            </div>
        </div>
    </footer>


</div>

</body>
</html>