<?php


session_start();

// Check if the session variable is not set or empty
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    // Redirect to another page or display an error message
    header("Location: registration.php"); // Redirect to login page
    exit(); // Stop further execution
}

// Continue with the rest of the page code
// ...



require "createDb.php";
include "B_out.php";











?>






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
      </style>
</head>
<body>
    
    <div class=container>

     <h3>TYPE B<h3>
    <form action= <?php echo $_SERVER["PHP_SELF"];?> method= "post" novalidate="novalidate">
    <label for="username"><b>username</b></label><br>
      <input type="text" placeholder="Enter username" name="username" id="uname" required><br><br>

      <label for="check-in"><b>check-in</b></label><br>
      <input type="date"  name="checkin" id="checkin" required><br><br>
    

      <label for="check-out"><b>check-out</b></label><br>
      <input type="date"  name="checkout" id="checkout" required><br><br>

      <label for="no_of_rooms"><b>no_of_rooms</b></label><br>
      <input type="text"  name=" no_of_rooms" id="no_of_rooms" required><br><br>

      <button type="submit" class="registerbtn">Register</button>

    </form>


<?php
error_reporting(0);
$username = $_POST['username'];
$checkin = date('y-m-d',strtotime($_POST['checkin']));
$checkout =  date('y-m-d',strtotime($_POST['checkout']));
$no_of_rooms=$_POST['no_of_rooms'];
$roomno;
//db connection
$conn = new mysqli("localhost","root","","test.db",3307);

if($conn-> connect_error){
die("connection failed".$conn->connect_error);
}else
{
    $conn = new mysqli("localhost","root","","test.db",3307);
    $query =  "SELECT * from btype where status = 'AVAILABLE'";
    $result = mysqli_query($conn,$query);
    echo  mysqli_num_rows($result); 
    if($no_of_rooms <= mysqli_num_rows($result))
    echo "hello";
    $row = $result->fetch_assoc();
        $roomname = $row["r_name"];
    $stmt = $conn->prepare("INSERT INTO reservation(username,checkin,checkout,no_of_rooms,roomname)
     VALUES(?,?,?,?,?)");
     $stmt->bind_param("sssis",$username,$checkin,$checkout,$no_of_rooms,$roomname);
     $stmt->execute();
     updateRoomCount($conn, $no_of_rooms);
     updateRoomStatusb($conn, $roomname) ;
     
        $stmt->close();     
        $conn->close();



}
?>


<?php

    /*$checkin = date('y-m-d',strtotime($_POST['checkin']));
    $currentDate = date("Y-m-d");
    $conn = new mysqli("localhost","root","","test.db",3307);
    $query =  "SELECT * from reservation where checkin = '$currentDate'";
    $result = mysqli_query($conn,$query);
    if($result) echo mysqli_num_rows($result). "rows";
    while ($row = $result->fetch_assoc()) {
        // Process each row here
        // You can access column values using $row['column_name']
            $query="UPDATE reservation SET status = 'In' where checkin = '$currentDate'";
            mysqli_query($conn, $query);
        }        

   /* $query =  "SELECT * from reservation where checkout = '$currentDate'";
    $result = mysqli_query($conn,$query);
    while ($row = $result->fetch_assoc()) {
        // Process each row here
         //You can access column values using $row['column_name']
            echo "hi";
            echo $row['username'];
            $query="UPDATE reservation SET status = 'done' where checkout = '$currentDate'";
            mysqli_query($conn, $query);
        }        */
         
    
    
    ?>


    </div>
</body>
</html>
