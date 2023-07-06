<?php
// Database connection details
$conn = new mysqli("localhost", "root", "", "test.db", 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a file is uploaded
if(isset($_FILES['fileUpload']) && $_FILES['fileUpload']['error'] === UPLOAD_ERR_OK) {
    // Get the file details
    $file = $_FILES['fileUpload'];
    $fileName = $file['name'];
    $fileTmpPath = $file['tmp_name'];

    // Read the contents of the file
    $fileContent = file_get_contents($fileTmpPath);

    // Prepare and execute the database query
    $stmt = $conn->prepare("INSERT INTO files (name, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $fileName, $fileContent);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        echo "File uploaded and saved to the database successfully.";
    } else {
        echo "Failed to save the file to the database.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "File upload failed.";
}

// Close the database connection
$conn->close();
?>
