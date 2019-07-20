<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'epaycenter2019@gmail.com';
    $mail->Password = 'WIT2019project';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('epaycenter2019@gmail.com', 'epay support center');
    $mail->addAddress($email_ad, '');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    =$body;
    $mail->send();
?>
