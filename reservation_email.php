<?php
$to = "f32ee@localhost";
$subject = 'Confirmation For Reservation';
$from = 'info@grillhouse.sg';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

$name = $_POST ["name"];
$date = $_POST ["date"];
$time = $_POST ["time"];

$message = "Hi ".$name.", thank you for your booking !\r\n ";
$message .= "Your email address is:".$email ;
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>