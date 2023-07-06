<?php
// Database connection details
$conn = new mysqli("localhost", "root", "", "test.db", 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get
