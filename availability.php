<?php



$currentDate = date("Y-m-d");
//$nextDay = date("Y-m-d", strtotime("+1 day", strtotime($currentDate)));
//$yourDate = "2023-05-23"; // Replace with your specific date

/*if (strtotime($yourDate) < strtotime(date("Y-m-d"))) {
    echo "The date is in the past.";
} else {
    echo "The date is today or in the future.";
}
*/

//$current_time = date("H:i:s");
//echo $current_time;
//$desired_time = strtotime("11:59:00");





$checkin = date('y-m-d',strtotime($_POST['checkin']));
$checkout =  date('y-m-d',strtotime($_POST['checkout']));
$conn = new mysqli("localhost","root","","test.db",3307);
    // if check out date is == currentdate and current time ...then no.of rows having same date...will be subtracted from the count variable
    // if count is greater than 20 then book
// Create a MySQLi connection

// Check if the connection was successful
if($conn-> connect_error){
    die("connection failed".$conn->connect_error);
}
// Prepare your SQL query
$currentDate = date("Y-m-d");
$query = "SELECT * FROM reservation where $checkin == $currentdate";
//$sql = "SELECT * FROM reservation where $checkout==$currentdate";


// Execute the query
$result1 = $mysqli->query($query);
//$result2 = $mysqli->query($sql);

// Check if the query was successful
/*if (!$result2) {
    echo "Error executing the query: " . $mysqli->error;
    exit();
}
else{
// Iterate through each row
while ($row = $result2->fetch_assoc()) {
    // Process each row here
    // You can access column values using $row['column_name']
    if ($current_time>=$desired_time){
        $row['status'] =  "checkedOut" ;  

    }        
     
}
}

// Close the result set and the database connection
*/

if (!$result1) {
    echo "Error executing the query: " . $mysqli->error;
    exit();
}
else{
// Iterate through each row
while ($row = $result1->fetch_assoc()) {
    // Process each row here
    // You can access column values using $row['column_name']
        $row['status'] =  "checkedIn" ;  

    }        
     
}






$result2->close();
$mysqli->close();

?>