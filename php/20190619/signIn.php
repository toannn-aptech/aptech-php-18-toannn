<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['btn'])) 
{
    //Kết nối tới database
    include('ketnoi.php');
     
    //Lấy dữ liệu nhập vào

    // $name = addslashes($_POST['name']);
    // $password = addslashes($_POST['password']);

    $name = $_POST['name'];
    $password = $_POST['password'];
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$name || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    echo "'$name'";
     
    echo "'$password'";
    // mã hóa pasword
    // $password = md5($password);
    echo "'$password'";
     
    //Kiểm tra tên đăng nhập có tồn tại không
    // $query = mysqli_query($success, "SELECT name, password FROM users WHERE name='$name'");

    $sql = "SELECT name, password FROM users WHERE name='$name'";
$query = mysqli_query($conn, $sql);


    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);

    
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['name'] = $name;
    echo "Xin chào " . $name . ". Bạn đã đăng nhập thành công. <a href='index.php'>Về trang chủ</a>";
    die();
}
?>

    
<h1>freetuts.net - ứng dụng đăng nhập</h1>
        <form method="post" action="signIn.php">
            Name: <input type="text" name="name" value=""/> <br/> <br/>
            Password: <input type="post" name="password" value=""/> <br/> <br/>
            <input type="submit" name="btn" value="Đăng Nhập"/>
            <a href="formSignUp.php">Đăng ký</a>
        </form>

<br>
        <a href='index.php'>Về trang chủ</a>



</body>
</html>