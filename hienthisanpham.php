<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị sản phẩm</title>
</head>
<body>
    <h2>Sản Phẩm</h2>
    <table border='1px'>
        <tr>
            <td>Mã sản phẩm </td>
            <td>Tên sản phẩm </td>
            <td>Mã cung cấp </td>
            <td>Giá </td>
            <td>Ghi chú</td>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "qlbg");
            
            $sql = "SELECT * FROM sanpham";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row['Masp']?></td>
                    <td><?php echo $row['TenSP']?></td>
                    <td><?php echo $row['Macc']?></td>
                    <td><?php echo $row['Dongia']?></td>
                    <td><?php echo $row['Ghichu']?></td>
                </tr>
                <?php
            }
        ?>
    </table><br>

    <form action="dathang.php" method="get">
        <label>Tìm kiếm: </label>
        <input type="search" name="timkiem"><br><br>
        <input type="submit" value="Đặt Hàng" name="dathang">
    </form><br>

    <form action="dangnhapuser.php" method="get">
            <input type="submit" value="Đăng xuất">
    </form><br>        

</body>
</html>