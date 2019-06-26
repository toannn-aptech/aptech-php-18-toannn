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
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
$sql = "INSERT INTO users (name, email, password)
VALUES ('$name', '$email', '$password')";

// $sql = "INSERT INTO users (name, email, password)
// VALUES ('jon4', 'jon4@', '444')";

echo 'hello2';

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully - Đăng ký thành công. <a href='index.php'> Về Trang Chủ </a>";
} else {
    echo "Error- Có lỗi trong quá trình đăng ký: " . $sql . "<br>" . mysqli_error($conn);
}


echo '<h2>Danh sách user đã đăng ký:</h2>';


$sql = "SELECT id, name, email, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. " " . $row["password"]. "<br>";
}
} else {
echo "0 results";
}

mysqli_close($conn);

?>
<h2>Đăng ký thêm thành viên:</h2>
<a href="formSignUp.php">về trang đăng ký</a>
