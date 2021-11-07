<?php  //registration.php
$link = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if($link === false) {
	die(("ERROR: Could not connect. " . mysqli_connect_error()));
}
foreach ($_POST as $post){

$name = $_POST["name"];
$email = $_POST["email"];
}
echo $name;
echo $email;
$sql = "INSERT INTO Email (name, email) VALUES ('$name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
