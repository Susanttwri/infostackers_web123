<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


/*echo "--------Testing mail()";
$from = "noreply@infoskaters.com";
$to = "santosh@infoskaters.com";
$subject = "PHP Mail Test script";
$message = "This is a test to check the PHP Mail functionality";
$headers = "From:" . $from;
mail($to, $subject, $message, $headers);
echo "<br>Test mail() sent";*/

echo "<br><br>--------Testing SMTP email";

require 'phpmailer2/src/Exception.php';
require 'phpmailer2/src/PHPMailer.php';
require 'phpmailer2/src/SMTP.php'

//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;



$subject = "SMTP Mail Test script";
$body = "This is a test to check the SMTP PHP Mail functionality";
$mail = new PHPMailer(true);
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 4;
//Set the hostname of the mail server
$mail->Host = 'smtp.zoho.com';
//$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;//587;
//$mail->Port=25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'noreply@infoskaters.com';
//Password to use for SMTP authentication
$mail->Password = 'cook@Zoho3';
$mail->SMTPSecure = 'ssl';// 'tls';
/*$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);*/
$mail->setFrom("noreply@infoskaters.com", "Test");
$mail->addAddress("$to");
$mail->addReplyTo("$from");
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = "Due to some server error mail body could not reached! please contact with site admin";

$sent = $mail->send();

$result = [];
if ($sent) {
    echo "<br>Message sent successfully";
} else {
    $error = $mail->ErrorInfo;
    echo "<br>Error: $error";
}
?>