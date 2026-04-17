<?php
error_reporting(0);

$handle = fopen('sendmail.log', "a");
fwrite($handle, "\n" . date("Y-m-d H:i:s") . ":send_mail() begin");
fwrite($handle, "\nPOST Data:" . var_export($_POST, true));
fclose($handle);

//require 'phpmailer/PHPMailerAutoload.php';
use Phppot\Captcha;

require_once "php-captcha/Model/Captcha.php";
$captcha = new Captcha();

if (isset($_POST)) {
    $result = array();
    $from = $_POST["from"];
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

    $userCaptcha = filter_var($_POST["captcha_code"], FILTER_SANITIZE_STRING);
    $isValidCaptcha = $captcha->validateCaptcha($userCaptcha);
    if ($isValidCaptcha) {

        //print_r($_POST);
        /* $mail = new PHPMailer(true);
          //Tell PHPMailer to use SMTP
          $mail->isSMTP();
          //Enable SMTP debugging
          // 0 = off (for production use)
          // 1 = client messages
          // 2 = client and server messages
          $mail->SMTPDebug = 0;
          //Set the hostname of the mail server
          $mail->Host = 'smtp.zoho.com';
          //$mail->Host = 'smtp.gmail.com';
          //Set the SMTP port number - likely to be 25, 465 or 587
          $mail->Port = 465;
          //$mail->Port=25;
          //Whether to use SMTP authentication
          $mail->SMTPAuth = true;
          //Username to use for SMTP authentication
          $mail->Username = 'no-reply@infoskaters.com';
          //$mail->Username = 'pradeepbarik87@gmail.com';
          //Password to use for SMTP authentication
          $mail->Password = 'tech@Kare5!';
          $mail->SMTPSecure = 'ssl';
          $mail->setFrom("no-reply@infoskaters.com", "Enquiry");
          $mail->addAddress("$to");
          $mail->addReplyTo("$from");
          $mail->isHTML(true);
          $mail->Subject = $subject;
          $mail->Body = $body;
          $mail->AltBody = "Due to some server error mail body could not reached! please contact with site admin";

          //smtp not used due to openssl error
          //$sent = $mail->send();
         */



        $headers = "From:" . $from . "\r\n" . "Reply-To:" . $from . "\r\n" . "MIME-Version: 1.0" . "\r\n" . "Content-type: text/html; charset=iso-8859-1";
        mail($to, $subject, $body, $headers);
        $sent = 1;

        if ($sent) {
            $result["status"] = true;
            $result["message"] = "Message sent successfully!";
            $result["cssclass"] = "alert alert-success";
        } else {
              $result["status"] = false;
              $result["message"] = "Error Occured";
              $result["cssclass"] = "alert alert-danger";
        }
    } else {
        //Invalid Captcha
        $result["status"] = true;
        $result["message"] = "Captcha Error";
        $result["cssclass"] = "alert alert-danger";        
    }
    echo json_encode($result);
    exit;
}
