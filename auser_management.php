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
  <h1>REGISTERED USERS</h1>
  
  <?php
    // Connect to the database
    $conn = new mysqli("localhost","root","","test.db",3307);
    
    // Query the database for the uploaded documents
    $query = "SELECT username,email,contactno FROM registration";
    $result = mysqli_query($conn, $query);
    
    
    // Display the results in a table
    echo "<table>";
    echo "<tr><th>USERNAME</th><th>EMAIL</th><th>CONTACTNO</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["username"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["contactno"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
    
    // Close the database connection
    mysqli_close($conn);
  ?>

</body>
</html>

