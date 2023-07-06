<?php

    $email    = $_POST['email'];
    $password = $_POST['password'];
    $conn = new mysqli("localhost","root","","test.db");
    $query =  "SELECT * from registration where email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$query);
    if($result) echo mysqli_num_rows($result). "rows";
    if(mysqli_num_rows($result)==1) {
        session_start();
        $_SESSION["test.db"]='true';
        header('location:index.html');
    } else{
        echo 'please register';

    }
    ?>

