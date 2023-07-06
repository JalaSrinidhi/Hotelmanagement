<?php
// admin.php (Admin Dashboard)
// Display a list of registered users
/*$conn = new mysqli("localhost","root","","test.db",3307);
$query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "User contactno: " . $row['contactno'] . "<br>";
        echo "Username: " . $row['username'] . "<br>";
        // Display other user details
        echo "<br>";
    }
} else {
    
    echo "No users found.";
}
exit();


*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>Uploaded Documents</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <h1>A-ROOMS</h1>
  
  <?php
    // Connect to the database
    $conn = new mysqli("localhost","root","","test.db",3307);
    
    // Query the database for the uploaded documents
    $query = "SELECT r_name,status FROM all_rooms";
    $result = mysqli_query($conn, $query);
    
    
    // Display the results in a table
    echo "<table>";
    echo "<tr><th>USERNAME</th><th>EMAIL</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["r_name"] . "</td>";
      echo "<td>" . $row["status"] . "</td>";
      
      echo "</tr>";
    }
    echo "</table>";
    
    // Close the database connection
    mysqli_close($conn);
  ?>

</body>
</html>


<?php
// Add a new room
if (isset($_POST['add_room'])) {
    $roomNumber = $_POST['r_name'];
    $roomType = $_POST['room_type'];
    // Insert the new room into the database
    // ...
}
?>

<!-- HTML form to add a new room -->
<form method="POST" action="admin.php">
    <input type="text" name="r_name" placeholder="Room Number" required><br>
    <input type="submit" name="add_room" value="Add Room">
</form>


<?php
// admin.php (Admin Dashboard)
// Display a list of registered users
/*$conn = new mysqli("localhost","root","","test.db",3307);
$query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "User contactno: " . $row['contactno'] . "<br>";
        echo "Username: " . $row['username'] . "<br>";
        // Display other user details
        echo "<br>";
    }
} else {
    
    echo "No users found.";
}
exit();


*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>Uploaded Documents</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <h1>B_ROOMS</h1>
  
  <?php
    // Connect to the database
    $conn = new mysqli("localhost","root","","test.db",3307);
    
    // Query the database for the uploaded documents
    $query = "SELECT r_name,status FROM btype";
    $result = mysqli_query($conn, $query);
    
    
    // Display the results in a table
    echo "<table>";
    echo "<tr><th>USERNAME</th><th>EMAIL</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["r_name"] . "</td>";
      echo "<td>" . $row["status"] . "</td>";
      
      echo "</tr>";
    }
    echo "</table>";
    
    // Close the database connection
    mysqli_close($conn);
  ?>

</body>
</html>


<?php
// Add a new room
if (isset($_POST['add_room'])) {
    $roomNumber = $_POST['r_name'];
    $roomType = $_POST['room_type'];
    // Insert the new room into the database
    // ...
}
?>

<!-- HTML form to add a new room -->
<form method="POST" action="admin.php">
    <input type="text" name="r_name" placeholder="Room Number" required><br>
    <input type="submit" name="add_room" value="Add Room">
</form>

<?php
// admin.php (Admin Dashboard)
// Display a list of registered users
/*$conn = new mysqli("localhost","root","","test.db",3307);
$query = "SELECT * FROM registration";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "User contactno: " . $row['contactno'] . "<br>";
        echo "Username: " . $row['username'] . "<br>";
        // Display other user details
        echo "<br>";
    }
} else {
    
    echo "No users found.";
}
exit();


*/
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <h1>C-ROOMS</h1>
  
  <?php
    // Connect to the database
    $conn = new mysqli("localhost","root","","test.db",3307);
    
    // Query the database for the uploaded documents
    $query = "SELECT r_name,status FROM ctype";
    $result = mysqli_query($conn, $query);
    
    
    // Display the results in a table
    echo "<table>";
    echo "<tr><th>USERNAME</th><th>EMAIL</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["r_name"] . "</td>";
      echo "<td>" . $row["status"] . "</td>";
      
      echo "</tr>";
    }
    echo "</table>";
    
    // Close the database connection
    mysqli_close($conn);
  ?>

</body>
</html>


<?php
// Add a new room
if (isset($_POST['add_room'])) {
    $roomNumber = $_POST['r_name'];
    $roomType = $_POST['room_type'];
    // Insert the new room into the database
    // ...
}
?>

<!-- HTML form to add a new room -->
<form method="POST" action="admin.php">
    <input type="text" name="r_name" placeholder="Room Number" required><br>
    <input type="submit" name="add_room" value="Add Room">
</form>



