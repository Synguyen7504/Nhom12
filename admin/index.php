<?php
include '../PDO/pdo.php';
include 'model/user.php';
include 'model/phong.php';
include 'model/khachsan.php';
include 'model/loai.php';
include 'view/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'user':
            $rows = truyVanUser();
            include 'view/listuser.php';
            break;
        case 'phong':
            $rows = truyVanPhong();
            include 'view/phong.php';
            break;
        case 'khachsan':
            $rows = truyVanKhachSan();
            include 'view/khachsan.php';
            break;
        case 'loaiphong':
            $rows = truyVanLoai();
            include 'view/loaiphong.php';
            break;
        case 'themks':
            include 'view/themks.php';
            break;
        default:
            include 'view/thongke.php';
            break;
    }
} else {
    include 'view/thongke.php';
}
include 'view/footer.php';
