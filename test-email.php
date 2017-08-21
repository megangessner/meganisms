<?php
include 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(false);
$mail->Username = "megangessner@gmail.com";
$mail->Password = ".emilie1";
$mail->SetFrom("megangessner@me.com");
$mail->Subject = "Test";
$mail->AddAddress("megangessner@gmail.com");
$mail->Body = "This is the plain text version of the email content";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->Send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message has been sent";
}

?>
