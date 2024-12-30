<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Đăng Nhập</title>
</head>
<body>
    <fieldset>
        <legend>Đăng nhập</legend>
        <form action="dangnhapuser.php" method="get">
            <label>Tài khoản: </label>
            <input type="text" name="taikhoan"><br>
            <label>Mật khẩu: </label>
            <input type="password" name="matkhau"><br><br>
            <input type="submit" value="Đăng Nhập" name="dangnhap"><br>
        </form>
    </fieldset>

    <?php
        error_reporting(0);
        $user = $_GET['taikhoan'];
        $pass = $_GET['matkhau'];
        if(isset($_GET['dangnhap'])){
            if($user == "" || $pass == ""){
                echo "Tài khoản hoặc Mật khẩu không được để trống!";
            }else{
                if($user != "admin" || $pass != "123"){
                    header("Location: hienthisanpham.php");
                }else{
                    header("Location: hienthi.php");
                }
            }
        }
    ?>
</body>
</html>