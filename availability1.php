<?php

    $checkin = date('y-m-d',strtotime($_POST['checkin']));
    $currentDate = date("Y-m-d");
    $conn = new mysqli("localhost","root","","test.db",3307);
    $query =  "SELECT * from reservationdetails where checkin'$currentDate'";
    $result = mysqli_query($conn,$query);
    if($result) echo mysqli_num_rows($result). "rows";
    /*if(mysqli_num_rows($result)==1) {
        session_start();
        $_SESSION["test.db"]='true';
        header('location:index.html');
    } else{
        echo 'please register';

    }*/
    ?>