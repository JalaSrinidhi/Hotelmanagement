<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
  <title>Room Booking</title>
</head>
<body>
  <h1>Room Booking</h1>
  <form action="book_room.php" method="post">
    <label for="room_number">Room Number:</label>
    <input type="text" id="room_number" name="room_number" required><br>

    <label for="booking_date">Booking Date:</label>
    <input type="date" id="booking_date" name="booking_date" required><br>

    <label for="booking_duration">Booking Duration (in days):</label>
    <input type="number" id="booking_duration" name="booking_duration" required><br>

    <input type="submit" value="Book Room">
  </form>
</body>
</html>
