<!DOCTYPE html>
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
      ul li{
    display: inline-block;
}
ul li a{
    color: beige;
    padding:  8px 20px;
    border: 1px solid #fff
}
ul li a:hover{
    background-color: aliceblue;
    color:black;
}
      
    </style>
</head>



<ul>
<li><a  href="index.html"> HOME </a></li>
</ul>
<body>
    <div class = container>
    <form action= "" method= "post" novalidate="novalidate">
    <input type="text" placeholder="Enter pass" name="npass" id="uname" required><br><br>
    <button type="submit" class="registerbtn">change password</button>
    
    </div>
    </form>
</body>
</html>

<?php
error_reporting(0);
session_start();
if(isset($_POST['npass']));
$npass = $_POST['npass'] ;
$email = $_SESSION['email'];
$conn = new mysqli("localhost","root","","test.db",3307);

$query="UPDATE registration SET password = '$npass' WHERE email = '$email'";
$result = mysqli_query($conn,$query);

if ($result) {
    // Query executed successfully
    // Perform further operations if needed
    echo "Query executed successfully!";
} else {
    // Query execution failed
    // Handle the error or display an error message
    echo "Query execution failed: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>





?>
