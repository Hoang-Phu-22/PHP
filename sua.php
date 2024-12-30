<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'qlbg') or die ('loi ket noi');
        mysqli_set_charset($conn, "utf8");
        $taikhoan = $_GET['taikhoan'];
        $query = mysqli_query($conn, "SELECT * FROM user WHERE taikhoan = '$taikhoan'");
        $row = mysqli_fetch_assoc($query);

    ?>

    <form action="" method="post" class="form">
        <h2>Sửa thành viên</h2>
        <label for="">Tài khoản: </label>
        <input type="text" name="taikhoan" value="<?php echo $row['taikhoan']; ?>"><br>
        <label for="">Mật khẩu: </label>
        <input type="text" name="matkhau" value="<?php echo $row['matkhau']; ?>"><br>
        <label for="">Số điện thoại: </label>
        <input type="text" name="sdt" value="<?php echo $row['sdt']; ?>"><br>
        <label for="">Năm sinh: </label>
        <input type="text" name="ngaysinh" value="<?php echo $row['ngaysinh']; ?>"><br>
        <label for="">Giới tính: </label>
        <input type="text" name="gioitinh" value="<?php echo $row['gioitinh']; ?>"><br>
        <label for="">Quê quán: </label>
        <input type="text" name="quequan" value="<?php echo $row['quequan']; ?>"><br>
        <label for="">Email: </label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
        <label for="">Ngày đăng ký: </label>
        <input type="text" name="ngaydk" value="<?php echo $row['ngaydk']; ?>"><br>
        <input type="submit" name="update_user" value="Update>">
    

    <?php
        if(isset($_POST['update_user'])){
            $taikhoan = $_POST['taikhoan'];
            $matkhau = $_POST['matkhau'];
            $sdt = $_POST['sdt'];
            $ngaysinh = $_POST['ngaysinh'];
            $gioitinh = $_POST['gioitinh'];
            $quequan = $_POST['quequan'];
            $email = $_POST['email'];
            $ngaydk = $_POST['ngaydk'];

            $conn = new mysqli("localhost", "root", "", "qlbg");

            if($conn->connect_error){
                die("Connection failed: ". $conn->connect_error);

            }

            $sql = "UPDATE `user` SET matkhau = '$matkhau', sdt = '$sdt', ngaysinh = '$ngaysinh', gioitinh = '$gioitinh', quequan = '$quequan', email = '$email', ngaydk = '$ngaydk' WHERE taikhoan = '$taikhoan'";

            if($conn->query($sql) === TRUE){
                header("Location: hienthi.php");
                exit;
            }else{
                echo "Error updating record: ". $conn->error;
            }

            $conn->close();
        }
    ?>
    </form>
    
</body>
</html>
