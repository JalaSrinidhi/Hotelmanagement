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
<body>
  <?php

  error_reporting(0);
  $nameErr = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["username"])) {
         $nameErr = "Name is not entered" ;
     }
     elseif(!preg_match("/^[a-zA-Z-']*$/",$_POST["username"])){
          $nameErr = "only letters and white spaces are allowed";
     }
 }
 $passErr = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["password"])) {
         $passErr = "password not entered" ;
     }
     elseif(strlen($_POST["password"])<8){
       $passErr= " less than 8";
     }
 }
 $cpassErr = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["cpassword"])) {
         $cpassErr = "password not entered" ;
     }
   }
 
 $mailErr = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["email"])) {
         $mailErr = "email not entered" ;
     }
 }$conErr = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["contactno"])) {
         $conErr = "not entered" ;
     }
 }


//if(isset($email) || isset($psw) ) {


    



?>

 
<ul>
<li><a  href="index.html"> HOME </a></li>
</ul>
<div class="container">

    <form action= <?php echo $_SERVER["PHP_SELF"];?> method= "post" novalidate="novalidate">
    
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>username</b></label><br>
      <input type="text" placeholder="Enter username" name="username" id="uname" required><br><br>
      <span style= "color:red"> <?php echo $nameErr; ?></span><br>
      

      
            

       
      
  
      
      
      <label for="email"><b>email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" id="email" required><br><br>

  <span style= "color:red"> <?php echo $mailErr; ?></span><br>
      

  
      <label for="password"><b>password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" id="psw" required><br><br>
      <span style= "color:red"> <?php echo $passErr; ?></span><br>
      
      <label for="cpassword"><b> cofirm password</b></label><br>
      <input type="password" placeholder="enter Password" name="cpassword" id="cpsw" required><br><br>
      <span style= "color:red"> <?php echo $cpassErr; ?></span><br>
     
      <label for="contactno"><b>contact no.</b></label><br>
      <input type="text" placeholder="Enter number" name="contactno" id="cn" required><br>
      <span style= "color:red"> <?php echo $conErr; ?></span><br>
  
  
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn">Register</button>

      
    
      <p>Already have an account? <a href="signconn.php">Sign in</a>.</p>
    </div>
  
   
  </form>
  

<?php 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$contactno  = $_POST['contactno'];

//db connection
$conn = new mysqli("localhost","root","","test.db",3307);

if($conn-> connect_error){
die("connection failed".$conn->connect_error);
}else
{

$stmt = $conn->prepare("INSERT INTO registration(username,email,password,cpassword,contactno)
VALUES(?,?,?,?,?)");
$stmt->bind_param("ssssi",$username,$email,$password,$cpassword,$contactno);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location:index.html");

}






?>







  
   
</body>
</html> 