<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị thông tin</title>
</head>
<body>
    <table border = "1">
        <tr>
            <h2>Danh sách các tài khoản đã đăng ký</h2>
            <td>Tài khoản </td>
            <td>Mật khẩu </td>
            <td>Số điện thoại </td>
            <td>Năm sinh </td>
            <td>Giới tính </td>
            <td>Quê quán </td>
            <td>Email </td>
            <td>Ngày đăng ký </td>
        </tr>
        <?php
            require "them.php";
            $query = mysqli_query($conn, "SELECT * FROM `user`");
            while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['taikhoan']; ?></td>
                    <td><?php echo $row['matkhau']; ?></td>
                    <td><?php echo $row['sdt']; ?></td>
                    <td><?php echo $row['ngaysinh']; ?></td>
                    <td><?php echo $row['gioitinh']; ?></td>
                    <td><?php echo $row['quequan']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['ngaydk']; ?></td>
                    <td><a href="sua.php?taikhoan=<?php echo $row['taikhoan'];?>">Sửa</a></td>
                    <td><a href="xoa.php?taikhoan=<?php echo $row['taikhoan'];?>">Xóa</a></td>
                </tr>
                <?php
            }
                ?>
            </table><br>
            <form action="dangky.php" method="post">
            <input type="submit" value="Thêm tài khoản">
            </form>
            <br>
            <form action="dangnhapuser.php" method="post">
            <input type="submit" value="Đăng xuất">
            </form>
</body>
</html>