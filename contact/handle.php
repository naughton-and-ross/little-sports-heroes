<?php

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$message .= "<tr><td><strong>Contact:</strong> </td><td>" . strip_tags($_POST['contact']) . "</td></tr>";
$message .= "<tr><td><strong>Type of Centre:</strong> </td><td>" . strip_tags($_POST['type']) . "</td></tr>";
$message .= "<tr><td><strong>Other Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS

$to = 'contact@littlesportsheroes.com.au';

$subject = 'Inquiry from Website';

$headers = "From: " . strip_tags($_POST['name']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['contact']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if (mail($to, $subject, $message, $headers)) {
  header( 'Location: /contact/index.php?email=true' ) ;
} else {
  echo 'There was a problem sending the email. Please go back and try again';
}

// DON'T BOTHER CONTINUING TO THE HTML...
die();


?>
