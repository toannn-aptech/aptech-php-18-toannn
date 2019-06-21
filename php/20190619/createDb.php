<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
echo "con chay ko?";
// Check connection
if (!$conn) {
    die("Connection failed Ket noi bi loi roi, day la loi cua no: " . mysqli_connect_error());
}
echo "Connected successfully 1111";


// Create database
$sql = "CREATE DATABASE aptech_php_18_4";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully2222";
} else {
    echo "Error creating database3333: " . mysqli_error($conn);
}

mysqli_close($conn);
?>