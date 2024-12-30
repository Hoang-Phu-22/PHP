<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
</head>
<body>
    <form action="them.php" method="post">
        <h2>Đăng ký thành viên</h2>
        <label>Tài khoản: </label>
        <input type="text" name="taikhoan"><br>
        <label>Mật khẩu: </label>
        <input type="password" name="matkhau"><br>
        <label>Số điện thoại: </label>
        <input type="text" name="sdt"><br>
        <label>Ngày sinh: </label>
        <input type="text" name="ngaysinh"><br>
        <label>Giới tính: </label>
        <input type="text" name="gioitinh"><br>
        <label>Quê quán: </label>
        <input type="text" name="quequan"><br>
        <label>Email: </label>
        <input type="text" name="email"><br>
        <label>Ngày Đăng Ký: </label>
        <input type="text" name="ngaydk"><br>
        <input type="submit" value="Đăng ký" name="dangky"><br>
        <?php require 'them.php'; ?>
    </form>
    
</body>
</html>
