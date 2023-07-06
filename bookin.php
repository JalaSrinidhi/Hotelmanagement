<?php
//db connection
$conn = new mysqli("localhost","root","","test.db",3307);

if($conn-> connect_error){
die("connection failed".$conn->connect_error);
}


else
{
    $conn = new mysqli("localhost","root","","test.db",3307);
    $query =  "SELECT * from all_rooms where status = 'AVAILABLE'";
    $result = mysqli_query($conn,$query);
    $row = $result->fetch_assoc();
        $roomId = $row["r_name"];
        echo $roomId;



}
?>