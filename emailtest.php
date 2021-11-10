<?php  //registration.php
$link = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if($link === false) {
    die(("ERROR: Could not connect. " . mysqli_connect_error()));
}


$search_query = 'SELECT `id` FROM Email WHERE email = "huo@gmail.com"';
$result = mysqli_query($link, $search_query);
echo $result[0];
echo"hello???";



// Close connection
mysqli_close($link);
?>