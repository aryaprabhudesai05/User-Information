<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Contact VARCHAR(10) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Gender VARCHAR(10) NOT NULL,
    Address TEXT NOT NULL,
    Qualification VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
// SQL to add profile_image column if it doesn't exist
$sql_alter = "ALTER TABLE Users ADD COLUMN IF NOT EXISTS profile_image VARCHAR(255)";

if ($conn->query($sql_alter) === TRUE) {
    echo "Column profile_image added successfully<br>";
} else {
    echo "Error adding column: " . $conn->error;
}

// Close the connection for now, it will be reopened when inserting data
$conn->close();
?>
