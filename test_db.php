<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
// Create table
$sql = "CREATE TABLE IF NOT EXISTS Users (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50) NOT NULL,
 email VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
 echo "Table Users created successfully";
} else {
 echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);