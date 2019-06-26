<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_18_4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(6) AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50),
email VARCHAR(100),
password VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully 4444";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>