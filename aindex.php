<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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
    <h1>Admin Login</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
</body>
</html>







<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication and validate credentials
    // ...

    $conn = new mysqli("localhost","root","","test.db",3307);
    $query =  "SELECT * from admintable where username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$query);
    //if($result) echo mysqli_num_rows($result). "rows";
    if(mysqli_num_rows($result)==1) {
    // If authentication is successful, set session variables
    $_SESSION['username'] = $username;

    // Redirect to the admin dashboard
    header("Location: adashboard.php");
    exit();
}
}
?>

