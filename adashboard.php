<?php
session_start();

// Check if admin is logged in, otherwise redirect to login page
if (!isset($_SESSION['username'])) {
    header("Location: aindex.php");
    exit();
}

// Get the logged-in admin's information from the database
// ...

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Admin_dashboard</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <header>
    <div class= "main" >
        <ul> 
            <li><a  href="index.html"> HOME </a></li>
            <li><a href="auser_management.php"> USER MANAGEMENT </a></li>
            <li><a  href="aroom_management.php"> ROOM MANAGEMENT</a></li>
        
        
        </ul>
    </div>
    <div class="title">
        <h1> Ewv </h1>
        <h4>exclusive access to unique experience</h4>
        <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
        
    </div>
    </header>
</body>
</html>

















