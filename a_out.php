<?php
// Assuming you have established a database connection
$conn = new mysqli("localhost","root","","test.db",3307);

// Get the current date
$currentDate = date('Y-m-d');

// Query to update the status from "booked" to "available" where the checkout date has passed
$query = "UPDATE all_rooms
          INNER JOIN reservation ON all_rooms.r_name = reservation.roomname
          SET all_rooms.status = 'available'
          WHERE all_rooms.status = 'booked' AND reservation.checkout < '$currentDate'";

// Execute the query
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Status updated successfully.";
} else {
    echo "Error updating status: " . mysqli_error($conn);
}
?>
