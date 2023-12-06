<?php
session_start();
include "../PDO/khachhang.php";
$loi = [];
if (isset($_POST['email'])) {
    $check = false;
    $rows = emailKhachHang();
    foreach ($rows as $key => $value) {
        if ($_POST['email'] == $value['email']) {
            $check = true;
            $row = $value;
            break;
        }
    }
    if ($check == true) {
        sendEmail($row['email'], $row['tenKhachHang'], $row['matKhau']);
        $loi[] = 'Gửi thành công !';
    } else {
        $loi[] = 'Email của bạn không tồn tại !';
    }
} else {
    $loi[] = "Vui lòng nhập email để tìm";
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
        .header h2 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="header">
                <h2>Chào mừng! đến với Sogo</h2>
                <?php
                echo "<h4 class='loidn'>" . implode($loi) . "</h4>";
                ?>
            </div>
            <form action="" method="post">
                <div class="input">
                    <input type="text" placeholder="Email của bạn" name="email">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="btn">
                    <button><a href="dangnhap.php">Đăng nhập</a></button>
                    <button type="submit" name="quenmk">Lấy lại mật khẩu</button>
                </div>
            </form>
        </div>
        <div class="right">
            <img src="../images/dn3.jpg">
        </div>
    </div>
</body>

</html>