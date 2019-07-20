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
    $mail->Username = 'shwynebarbarservice@gmail.com';
    $mail->Password = 'shwyne@2019';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('shwynebarbarservice@gmail.com', 'Shwyne Barbar Service');

session_start();
include 'auth/configs.php';

$name=$_POST['username'];
$password=$_POST['password'];
$c_password=$_POST['c-password'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$sql3="SELECT * FROM marchants WHERE email='$email'";
$result=mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result);

if ($password!=$c_password || $row>=1) {
	echo "<script>alert('Password doesn't match or email already exists.')</script>";
}
else
{
	$pass=md5($password);
	$sql="INSERT INTO marchants (name,password,email,address,phone,created_date) VALUES ('$name','$pass','$email','$address','$phone',now())";
	mysqli_query($conn,$sql);
	$code=rand(1000,9999);

	$sql2="INSERT INTO confirmations (email,code) VALUES ('$email','$code')";
	mysqli_query($conn,$sql2);
	$subject="Verification";
	$body="Email Verification code is "+$code;


	$mail->addAddress($email, '');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    =$body;
    $mail->send();
    echo "<script>alert('Email has sent to your account.')</script>";
    header("location:confirmation.php");

	

}
 ?>