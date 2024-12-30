<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đặt Hàng</title>
</head>
<body>
<form method="post">
    <h1 align="center">Đơn Đặt Hàng</h1>
    <h3>***Lưu Ý***<br>
        Khách hàng vui lòng nhập đầy đủ thông tin đặt hàng!<br>
        Ghi ĐÚNG Tên sản phẩm và Mã cung cấp để đặt hàng THÀNH CÔNG
    </h3>
   Tên khách hàng: <input type="text" name="tenkh" value=""><br>
   Số điện thoại: <input type="text" name="sdt" value=""><br> 
   Địa chỉ:  <input type="text" name="dc" value=""><br>
   Email: <input type="text" name="email" value=""><br><br>

   Tên sản phẩm: <input type="text" name="tensp" value=""><br>
   Mã cung cấp: <input type="text" name="mcc" value=""><br><br>
    <input type="submit" name="form_click" value="Đặt hàng"><br><br>

    <?php
    error_reporting(0);
    $path="D:\dsdondathang.txt";
    $fg= @fopen($path,"a");
    if(!$fg){
        echo "Đơn đặt hàng thất bại!<br>Vui lòng điền đầy đủ thông tin!";
    }else{
        echo "Đơn hàng đã được xác nhận! <br><br>";
        $tenkh = $_POST['tenkh'];
        $sdt = $_POST['sdt'];
        $dc = $_POST['dc'];
        $email = $_POST['email'];
        $tensp = $_POST['tensp'];
        $mcc = $_POST['mcc'];
        $gia = $_POST['gia'];
        if($mcc=='cc01'){
            $gia = 850000;
        }else if($mcc=='cc02'){
            $gia = 900000;
        }else if($mcc=='cc03'){
            $gia = 800000;
        }else{
            $gia = 800000;
        }

        echo "Tên khách hàng ".$tenkh;
        echo "<br/>";
        echo "Số điện thoại: ".$sdt;
        echo "<br/>";
        echo "Địa chỉ giao hàng: ".$dc;
        echo "<br/>";
        echo "Email: ".$email;
        echo "<br/>";
        echo "Tên sản phẩm: ".$tensp;
        echo "<br/>";
        echo "Thành tiền: ".$gia;
        echo "<br/>";
        // echo "Điểm trung bình: ".$dtb;
        // echo "<br/>";
        fwrite($fg,"\nTên khách hàng: ".$tenkh."\n Số điện thoại: ".$sdt."\n Địa chỉ giao hàng: ".$dc."\n Email: ".$email."\n Tên sản phẩm: ".$tensp."\n Thành tiền: ".$gia);
        fclose($fg);
    }
    ?>
</form>
</body>
</html>