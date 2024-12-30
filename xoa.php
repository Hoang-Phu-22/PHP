<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xóa</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'qlbg') or die ('loi ket noi');
        mysqli_set_charset($conn, "utf8");
        if(isset($_REQUEST['taikhoan']) and $_REQUEST['taikhoan'] != ""){
            $taikhoan = $_GET['taikhoan'];
            $sql = "DELETE FROM `user` WHERE taikhoan = '$taikhoan'";
            if($conn->query($sql) === TRUE){
                echo "Xóa thành công";
            }else{
                echo "Error updating record: ".$conn->error;
            }
            $conn->close();
        }
    ?>
    <form action="xoa.php" method="post">
        <?php
            header("Location: hienthi.php");
            exit;
        ?>
    </form>
</body>
</html>
