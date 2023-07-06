<?php
echo "hello";
//if(isset($email) || isset($psw) ) {
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contactno  = $_POST['contactno'];
//db connection
$conn = new mysqli("localhost","root","","test.db");

if($conn-> connect_error){
    die("connection failed".$conn->connect_error);
}else
{
   /* $nameErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"])) {
        $nameErr = "enter the name";
        die ( "enter the name.$nameErr");

    }
}*/
 
    $stmt = $conn->prepare("INSERT INTO registration(username,email,password,contactno)
    VALUES(?,?,?,?)");
    $stmt->bind_param("sssi",$username,$email,$password,$contactno);
    $stmt->execute();
    echo "successful";
    header("location:index.html");
    $stmt->close();
    $conn->close();
 }
    


?>