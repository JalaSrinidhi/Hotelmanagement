<?php
// Database connection details
$conn = new mysqli("localhost", "root", "", "test.db", 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all files from the database
$sql = "SELECT * FROM files";
$result = $conn->query($sql);

// Check if any files were found
if ($result->num_rows > 0) {
    // Output data for each file
    while ($row = $result->fetch_assoc()) {
        $fileName = $row['name'];
        $fileID = $row['id'];

        echo "<a href='view_file.php?id=$fileID'>$fileName</a><br>";
    }
} else {
    echo "No files found.";
}

// Close the result and database connection
$result->close();
$conn->close();
?>
