<?php  //cart.php
session_start();
if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
    unset($_SESSION['cart']);
    header('location: ' . $_SERVER['PHP_SELF']);
    exit();

}
if (isset($_GET['buy'])) {
    $_SESSION['cart'][] = $_GET['buy'];
    header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
    exit();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order</title>
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
    <!-- ======= Order Container ======= -->
    <div class="container-main">
        <div class="order">
            <div class="order-suggestion">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You may also like...</h1><br/><br/>
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
                            <img src="img/set5.jpg" alt="set5">
                            <div class="container-card">
                                <h4><b>Mixed Grill</b></h4>
                                <p>Mixed types of lamb, pork chop and sausages.</p>
                                <h4>$ 19.90</h4>
                                <?php echo "<a class = 'order-link' href='" .$_SERVER['PHP_SELF']. '?buy=4'. "'> Add to Cart</a> <br/><br/>";  ?>
                            </div>
                        </div></li>
                    <li><div class="card">
                            <img src="img/set3.jpg" alt="set3">
                            <div class="container-card">
                                <h4><b>Steak Platter</b></h4>
                                <p>Freshest Tomahawk steak seared on Lava Stone.</p>
                                <h4>$ 22.90</h4>
                                <?php echo "<a class = 'order-link' href='" .$_SERVER['PHP_SELF']. '?buy=2'. "'> Add to Cart</a> <br/><br/>";  ?>
                            </div>
                        </div></li>
                </ul>


            </div>
            <div class="cart">

                <div class="cart-container">
                    <div class="header">
                        <h3>Shopping Cart</h3>
                        <h5><a href="<?php $sql_name_array = array();
                            $sql_price_array = array();
                            echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></h5>
                    </div>
                    <div class="cart-item">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="float: left;width: 100%">Item</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $servername = "localhost";
                            $username = "f32ee";
                            $password = "f32ee";
                            $dbname = "f32ee";
                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $item_array = array();
                            $price_array = array();
                            $description_array = array();

                            $sql_name_array = array();
                            $sql_price_array = array();

                            $query_get = "SELECT `id`, `name`, `description`, `price`, `quantity` FROM `cart`";
                            $result  = mysqli_query($conn, $query_get);

                            foreach ($result as $key => $value) {
                                array_push($item_array,$value["name"]);
                                array_push($description_array,$value["description"]);
                                array_push($price_array,floatval($value["price"]));
                            }
                            for ($i=0; $i < count($_SESSION['cart']); $i++){
                                array_push($sql_name_array,$item_array[$_SESSION['cart'][$i]]);
                                array_push($sql_price_array,$price_array[$_SESSION['cart'][$i]]);
                                echo "<tr>";
                                echo "<td><p style='font-family: Papyrus; font-weight: 999'>" .$item_array[$_SESSION['cart'][$i]]."</p>"."<p style='font-size: 12px;color: #2F3841;font-weight: bold;color: rgba(0, 0, 0, 0.3); '>".$description_array[$_SESSION['cart'][$i]]."</p>". "</td>";
                                echo "<td align='right'>$";
                                echo number_format($price_array[$_SESSION['cart'][$i]], 2). "</td>";
                                echo "</tr>";
                                $total = $total + $price_array[$_SESSION['cart'][$i]];
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th align='right'>Total:</th><br>
                                <th align='right' id="total_price">$<?php echo number_format($total, 2); ?>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <hr>
                    <div class="cart-checkout">
                        <div class="cart-checkout-total">
                            <form class="total-amount" method="post" onsubmit="checkout()">
                                <input type="submit" class="checkout-button" name="checkout-button" value="Checkout"/>
                            </form>
                            <?php
                            $servername = "localhost";
                            $username = "f32ee";
                            $password = "f32ee";
                            $dbname = "f32ee";
                            // Create connection
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            if(isset($_POST['checkout-button'])) {
                                $name = join(",",$sql_name_array);
                                $price = join(",",$sql_price_array);
                                $datetime = date('Y-m-d H:i:s');
                                $total = floatval($total);
                                $query_insert = "INSERT INTO `orders`( `name`, `price`, `datetime`,`total_sales`) VALUES ('$name','$price','$datetime','$total')";
                                $query_test ="INSERT INTO `orders`(`datetime`) VALUES ('$datetime')";
                                mysqli_query($conn, $query_insert);
                                $_SERVER['PHP_SELF']['empty'] = 1;
                            }
                            ?>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    </div>
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

    <script type="text/javascript" src="js/order.js"></script>
</div>
</body>
</html>
