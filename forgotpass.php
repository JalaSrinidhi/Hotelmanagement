<?php

require "includes/PHPMailer.php";
require "includes/SMTP.php";
require "includes/Exception.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


include "index.php";

$email  = $_POST['email'];
$randomNumber = rand(100000, 999999);


$conn = new mysqli("localhost","root","","test.db",3307);
$query =  "SELECT * from registration where email = '$email'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
 sendMail($email,$randomNumber);       



}else{
        echo 'check email';

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action= "> method= "post" novalidate="novalidate">
    <label for="email"><b>email</b></label><br>
    <input type="text" placeholder="Enter email" name="email" id="uname" required><br><br>
    <button type="submit" class="registerbtn">Register</button>
    
</body>
</html>

