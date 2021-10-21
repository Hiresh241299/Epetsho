<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
//$mail = new PHPMailer;
    try {
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'epetshopbse@gmail.com';                     // SMTP username
    $mail->Password   = 'bse19aft';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;       
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );// TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //Recipients
        $mail->setFrom('epetshopbse@gmail.com', 'E-petshop');
        $mail->addAddress($email, $fname . " " . $lname);

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        // Content
        /*$body="Here is your key: $apikey <br>
        Please append it to all of your API requests, <br>
        Bookstore API: http://localhost/book_api_server/index.php?apikey=$apikey& <br>
        Click <a href=\"http://localhost/book_api_server/activateApiKey.php?apikey=$apikey\" target=\"_blank\">here</a> to activate your key <br><br>
        If you did not make this request, please disregard this email."; */

        $mail->isHTML(true);// Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        //echo 'Mail Sent.';
        $mailstatus = 1; //mail sent
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $mailstatus = 0; //mail not sent
    }
?>