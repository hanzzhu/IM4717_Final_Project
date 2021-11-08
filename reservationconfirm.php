<?php  //reservationconfirm.php
include "reservation_email.php";
$link = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if($link === false) {
	die(("ERROR: Could not connect. " . mysqli_connect_error()));
}
foreach ($_POST as $post){

$name = $_POST["name"];
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$pax = $_POST["pax"];

}
echo $name;
echo $email;
echo $date;
echo $time;
echo $pax;
$sql = "INSERT INTO reservationform (name, email, date, time, pax) VALUES ('$name', '$email', '$date', '$time', '$pax')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


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
<section class = "banner-section">
<div class="reservationconfirm">
<div class = "reservationconfirm-text">
		
<h1>Confirmation Page for Reservation</h1>

<p>Thank you for submitting this form. 

<p>We have successfully received it. 

<p>Below is a summary of the information you provided.<br><br> 
<?php
echo 'Name: ' . $_POST ["name"] .'<br>';
echo "<br/>";
echo 'Date: ' . $_POST ["date"] .'<br>'; 
echo "<br/>";
echo 'Time: ' . $_POST ["time"] .'<br>'; 


?>
</div>
</div>
</section>

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
 
