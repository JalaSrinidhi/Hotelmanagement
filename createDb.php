<?php
// Assuming you have established a successful database connection
$conn = new mysqli("localhost","root","","test.db",3307);
// Function to get the current room count
/*function getRoomCount($conn) {
    $query = "SELECT total_rooms, occupied_rooms FROM room_info";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}*/

// Function to update the room count
function updateRoomCount($conn, $occupiedChange) {
    $query = "UPDATE room_info SET occupied_rooms = occupied_rooms + $occupiedChange";
    mysqli_query($conn, $query);
}

function updateRoomStatus($conn, $roomname) {
    $query = "UPDATE all_rooms SET status = 'booked' WHERE r_name = '$roomname'";
    mysqli_query($conn, $query);
}
function updateRoomStatusb($conn, $roomname) {
    $query = "UPDATE btype SET status = 'booked' WHERE r_name = '$roomname'";
    mysqli_query($conn, $query);
}





// Simulate releasing a room
updateRoomCount($conn, -1);


// Close the database connection
mysqli_close($conn);
?>


