<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Trang chủ</h1>

    <a href="signIn.php">về trang đăng nhập</a>

<?php
    echo '<h2>Danh sách user đã đăng ký:</h2>';

include "ketnoi.php";

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

?>


   
<a href="formSignUp.php">về trang đăng ký</a>
</br>





</body>
</html>