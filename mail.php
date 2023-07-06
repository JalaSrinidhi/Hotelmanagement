<?php
require "C:/new2/htdocs/vehicle/PHPMailer-6.8.0/src/PHPMailer.php";
require "C:/new2/htdocs/vehicle/PHPMailer-6.8.0/src/Exception.php";
require "C:/new2/htdocs/vehicle/PHPMailer-6.8.0/src/SMTP.php";
require "C:/new2/htdocs/vehicle/vendor/autoload.php";

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'your_username';
$mail->Password = 'your_password';






?>