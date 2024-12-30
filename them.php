<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm</title>
</head>
<body>
<?php
    header('Content-Type: text/html; charset=utf-8');
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "qlbg";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(isset($_POST['dangky'])){
        $taikhoan = isset($_POST['taikhoan']) ? ($_POST['taikhoan']) : "";
        $matkhau = isset($_POST['matkhau']) ? ($_POST['matkhau']) : "";
        $sdt = isset($_POST['sdt']) ? ($_POST['sdt']) : "";
        $ngaysinh = isset($_POST['ngaysinh']) ? ($_POST['ngaysinh']) : "";
        $gioitinh = isset($_POST['gioitinh']) ? ($_POST['gioitinh']) : "";
        $quequan = isset($_POST['quequan']) ? ($_POST['quequan']) : "";
        $email = isset($_POST['email']) ? ($_POST['email']) : "";
        $ngaydk = isset($_POST['ngaydk']) ? ($_POST['ngaydk']) : "";

        $sql = "SELECT * FROM user WHERE taikhoan = '$taikhoan' OR email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            echo '<script language= "javascript"> alert("Tài khoản đã tồn tại"); window.location=".php"; </script>';
            die();
        }else{
            $sql = "INSERT INTO user (taikhoan, matkhau, sdt, ngaysinh, gioitinh, quequan, email, ngaydk) VALUES ('$taikhoan', '$matkhau', '$sdt', '$ngaysinh', '$gioitinh', '$quequan', '$email', '$ngaydk')";

            if(mysqli_query($conn, $sql)){
                header("Location: hienthi.php");
                exit;
            }else{
                echo '<script language="javascript">alert("Có lỗi trong quá trình xử lí");
                window.location="dangky.php";
                </script>';
            }
            
        }
    }
?>
</body>
</html>
