<?php
// đăng kí
include "../PDO/pdo.php";
$loi=[];
if (isset($_POST['dangki'])) {
    $namedk=$_POST['namedk'];
    $pas=$_POST['pas1'];
    $pas2=$_POST['pas2'];
    $sdt=$_POST['sdt'];
    if (empty($namedk)) {
        $loi[]="Vui lòng nhập tên đăng nhập";
        goto thoi;
    }
    if (empty($pas)) {
        $loi[]="Vui lòng nhập mật khẩu";
        goto thoi;
    }
    if (empty($pas2)) {
        $loi[]="Vui lòng nhập lại mật khẩu";
        goto thoi;
    }
    if ($pas!= $pas2) {
        $loi[]="2 mật khẩu không trùng khớp";
        goto thoi;
    }
    if (empty($sdt)) {
        $loi[]="Vui lòng nhập số điện thoại";
        goto thoi;
    }
    if (empty($loi)) {
        try {
            $sx=$conn->prepare("INSERT INTO khachhang (tenKhachHang, soDienThoai, tenDangNhap, matKhau)	
            VALUES (:tenKhachHang, :soDienThoai, :tenDangNhap, :matKhau)");
            $sx->bindParam(":tenKhachHang", $namedk);
            $sx->bindParam(":soDienThoai", $sdt);
            $sx->bindParam(":tenDangNhap", $namedk);
            $sx->bindParam(":matKhau", $pas);
            $sx->execute();
        } catch (PDOException $e) {
            $loi[] = "Lỗi ghi CSDL: " . $e->getMessage();
        }
    }
thoi :    
//end đk
} 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mau.css">
    <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
    <title>Space</title>
    <style>
.header h2{
    margin-top: -40px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="header">
                <h2>Chào mừng! đến với Sogo</h2>
                <?php
                echo "<h4 class='loidn'>". implode($loi)."</h4>"; 
                ?>
            </div>
            <form action="" method="post">
           <div class="input">
                <input type="text" placeholder="Tên đăng nhập" name="namedk"  >
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input">
                <input type="password" placeholder="Mật khẩu" name="pas1" >
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input">
                <input type="password" placeholder="Nhập lại mật khẩu" name="pas2"  >
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input">
                <input type="text" placeholder="Số điện thoại" name="sdt"  >
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="forget">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <div class="btn">
            <button type="submit" name="dangki">Đăng Kí</button>
            <button><a href="dangnhap.php">Đăng Nhập</a></button>
            </div>
           </form>
        </div>
        <div class="right">
            <img src="../images/3.jpg">
        </div>
    </div>
</body>
</html>