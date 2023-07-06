<?php
echo "hello";
//if(isset($email) || isset($psw) ) {
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact_no  = $_POST['contact_no'];
//db connection
$conn = new mysqli("localhost","root","","test.db");
if($conn-> connect_error){
    die("connection failed".$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO registration(username,email,password,contact_no)
    VALUES(?,?,?,?)");
    $stmt->bind_param("sssi",$username,$email,$password,$contact_no);
    $stmt->execute();
    echo "registered successful";
    header("location:home.html");
    $stmt->close();
    $conn->close();
    
}

?>