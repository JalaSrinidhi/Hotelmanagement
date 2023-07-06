<?php
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact_no = $_POST['contact_no'];

    $con = new mysqli("localhost","root","","test.db",3307);

    session_start();


    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data["password"] == $password) 
            {
                $_SESSION["email"]=$email;
                echo "<h2> valid </h2>";
                
            } else {
                echo "<h2> valid </h2>";
            }
        } else {
            echo "<h2> valid </h2>";
      }
    }
?>