<?php
error_reporting(0);
session_start();

require "includes/PHPMailer.php";
require "includes/SMTP.php";
require "includes/Exception.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['email']))
$email  = $_POST['email'];
$randomNumber = rand(100000, 999999);
$otp = $randomNumber;


$conn = new mysqli("localhost","root","","test.db",3307);
$query =  "SELECT * from registration where email = '$email'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'srinidhijala106@gmail.com';
$mail->Password = 'vuzmsmthydvewhgo';


$mail->setFrom('srinidhijala106@gmail.com');
$mail->addAddress($email);
$mail->Subject = 'Hello from PHPMailer';
$mail->Body = 'your otp is'.$randomNumber;



if ($mail->send()) {
    echo 'Email sent successfully.';
    $_SESSION['email']=$email;
    $stmt = $conn->prepare("INSERT INTO forgotpass(email,otp)
    VALUES(?,?)");
    $stmt->bind_param("si",$email,$otp);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("location: otp.php");
} else {
    echo 'Email sending failed: ' . $mail->ErrorInfo;
}
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
    background-image: url(img2.jpg.webp);
    height: 100vh;
    background-size: cover;
    background-position: center;

      }
      .container{
        position:absolute;
        top: 50%;
        left: 50%;
        transform:translate(-50%,-50%);
        background-color: rgba(0,0,0,0.4);
        padding: 5%;
        color: aliceblue;
      }
      .error{
       color: red; 
      }
      
    </style>
</head>
<body>
</head>
<body>
    <div class=container>
<form action= "" method= "post" novalidate="novalidate">
    <label for="email"><b>email</b></label><br>
    <input type="text" placeholder="Enter email" name="email" id="uname" required><br><br>
    <button type="submit" class="registerbtn">submit</button>
</form> 
    </div>
</body>
</html>
