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
    <label for="otp"><b>enter otp</b></label><br>
    <input type="text" placeholder="Enter otp" name="otp" id="uname" required><br><br>
    <button type="submit" class="registerbtn">enter</button>
    </div>
</form> 
</body>
</html>

<?php
error_reporting(0);
if(isset($_POST['otp']))
$otp = $_POST['otp'];
$conn = new mysqli("localhost","root","","test.db",3307);
$query =  "SELECT * from forgotpass where otp = '$otp'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){
    header("location:newpass.php");
}
?>




 






