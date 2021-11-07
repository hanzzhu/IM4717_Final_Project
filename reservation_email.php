<?php
$to = $_POST["email"];
$subject = 'Confirmation For Reservation';
$from = 'info@grillhouse.sg';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi echo .$_POST["name"]. </h1>';
$message .= '<p style="color:#080;font-size:18px;">We have successfully received your reservation request for echo .$_POST["pax"]. </p>';
$message .= '<p style="color:#080;font-size:18px;">Below is a summary of the information you provided.</p>';
$string1 = "Name: ".$_POST ["name"];
$message .= '<p style="color:#080;font-size:18px;">echo $string1 .</p>';
$string2 = "Date: ".$_POST ["date"];
$message .= '<p style="color:#080;font-size:18px;">echo $string2 .</p>';
$string3 = "Time: ".$_POST ["time"];
$message .= '<p style="color:#080;font-size:18px;">echo $string3 .</p>';
$message .= '</body></html>';

// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>