<?php

//admin.php (Admin Dashboard)
// Display a list of reservations
$conn = new mysqli("localhost","root","","test.db",3307);
$query = "SELECT * FROM reservations";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Reservation ID: " . $row['reservation_id'] . "<br>";
        echo "Guest Name: " . $row['guest_name'] . "<br>";
        // Display other reservation details
        echo "<br>";
    }
} else {
    echo "No reservations found.";
}

// Update reservation status
if (isset($_POST['update_status'])) {
    $reservationId = $_POST['reservation_id'];
    $newStatus = $_POST['new_status'];
    // Update the reservation status in the database
    // ...
}
?>

<!-- HTML form to update reservation status -->
<form method="POST" action="admin.php">
    <input type="text" name="reservation_id" placeholder="Reservation ID" required><br>
    <input type="text" name="new_status" placeholder="New Status" required><br>
    <input type="submit" name="update_status" value="Update Status">
</form>
