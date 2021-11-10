
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation Page of Web Form</title>
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

        <div class="reservation-result">
            <h1 style="padding: 20px">Thank you for joining us!</h1>

            <?php  //registration.php
            $link = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

            if($link === false) {
                die(("ERROR: Could not connect. " . mysqli_connect_error()));
            }
            foreach ($_POST as $post){

                $name = $_POST["name"];
                $email = $_POST["email"];
            }

            $search_query = "SELECT `id` FROM `Email` WHERE email = '$email'";
            $result = mysqli_query($link, $search_query);
            if($result->num_rows == 0) {
                $sql = "INSERT INTO Email (name, email) VALUES ('$name', '$email')";
                mysqli_query($link, $sql);


                $to = "f32ee@localhost";
                $subject = 'Thank you for joining our membership';
                $from = 'info@grillhouse.sg';

                // To send HTML mail, the Content-type header must be set
                $headers = 'From: info@grillhouse.sg' . "\r\n" .
                    'Reply-To: f32ee@localhost' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                // Compose a simple HTML email message
                $message = "Hi ".$name.", thank you for being a valuable member with us!\r\n ";
                $message .= "Your email address is:".$email ;

                // Sending email
                echo "Dear ".$name.", thank you for the membership application.";
                if(mail($to, $subject, $message, $headers, '-ff32ee@localhost')){
                    echo 'An email has been sent to '.$email;
                } else{
                    echo 'Unable to send email. Please try again.';
                }
            } else {
                echo "You are already an member!";
            }


            // Close connection
            mysqli_close($link);
            ?>
        </div>

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

