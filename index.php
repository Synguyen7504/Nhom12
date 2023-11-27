<?php
include "./PDO/khachhang.php";
include "./PDO/sanpham.php";
include "./PDO/donghang.php";
$get = "";
session_start();
if (isset($_GET['act'])) {
    $get = $_GET['act'];
}
if ($get != "login") {
    include "layout/header.php";
}

if (isset($_GET['act'])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'rooms':
            include 'layout/rooms.php';
            break;
        case 'concat':
            include 'layout/concat.php';
            break;
        case 'history':
            include 'layout/history.php';
            break;
            // trang sản phẩm chi tiêts
        case 'product':
            $layLoai = layLoaiAll();
            $maKhachSan = $_GET['maKhachSan'];
            $_SESSION['maKhachSan'] = $maKhachSan;
            if (isset($_GET['maLoai'])) {
                $rows = locTheoLoai($maKhachSan, $_GET['maLoai']);
            } else {
                $rows = truyVanPhong($maKhachSan);
            }
            $row = truyVan1($maKhachSan);
            include 'layout/product.php';
            break;
        case 'addtocard':
            $maPhong =  $_GET['maPhongAdd'];
            $row = addToCard($maPhong);
            if (empty($_SESSION['card'][$maPhong])) {
                $_SESSION['card'][$maPhong] = $row;
            }
            $maKhachSan = $_SESSION['maKhachSan'];
            header("Location: index.php?act=product&maKhachSan=$maKhachSan");
            break;
        case 'deletecard':
            $maPhong =  $_GET['maPhongDelete'];
            unset($_SESSION['card'][$maPhong]);
            header("Location: index.php?act=card");
            break;
        case 'card':
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                foreach ($_POST as $key => $value) {
                    $layNgay = preg_replace('/[^a-zA-Z]/', '', $key);
                    $layMa = preg_replace('/[^0-9]/', '', $key);
                    $_SESSION['checkDate'][$layMa][$layNgay] = $value;
                }
                // print_r($_SESSION['checkDate']);
                $rows = layDateDonHangChiTiet();
                foreach ($rows as $key => $value) {
                    foreach ($_SESSION['checkDate'] as $index => $check) {
                        if ($value['maPhong'] == $index) {
                            if (($check['ngayNhan'] < $value['ngayNhanPhong'] && $check['ngayTra'] < $value['ngayNhanPhong']) || ($check['ngayNhan'] > $value['ngayNhanPhong'] && $check['ngayTra'] > $value['ngayNhanPhong'])) {
                                $thanhCong = true;
                                $thongBao = false;
                                // echo "Đúng";
                            } else {
                                // echo "Sai";
                                $thongBao = true;
                                $thanhCong = false;
                                goto den;
                            }
                        }
                    }
                }
                den:
                if (isset($thanhCong) && $thanhCong == true) {
                    foreach ($_POST as $key => $value) {
                        $layNgay = preg_replace('/[^a-zA-Z]/', '', $key);
                        $layMa = preg_replace('/[^0-9]/', '', $key);
                        $_SESSION['card'][$layMa][$layNgay] = $value;
                    }
                    header('location: index.php?act=order');
                }
            }
            include "layout/card.php";
            break;
            // order sản phẩm
        case 'order':
            $tongTien = 0;
            foreach ($_SESSION['card'] as $key => $value) {
                $dateSau =   (strtotime($value['ngayTra']) - strtotime($value['ngayNhan']));
                $countDay = 0;
                for ($i = $dateSau; $i >= 86400; $i++) {
                    $i = $i - 86400;
                    $countDay++;
                    $_SESSION['card'][$value['maPhong']]['tongTien'] = $value['giaPhong'] * $countDay;
                }
                $tongTien = $tongTien + $_SESSION['card'][$value['maPhong']]['tongTien'];
            }
            $phaiTra = $tongTien / 2;
            include "layout/order.php";
            break;

            // thanh toán đơn hàng
        case 'pay':
            $layMa = layMaDonHangLonNhat();
            $layMa['maDonHang'] = $layMa['maDonHang'] + 1;
            if (isset($_SESSION['kh']['ma'])) {
                $maKh = $_SESSION['login']['maKhachHang'];
            } else {
                $maKh = null;
            }
            $dir = 'images/' . rand(1, 1000) . '_' . $_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $dir);
            $ngayDat = date("Y-m-d H-i-e");
            $soPhong = count($_SESSION['card']);
            datDonHang($layMa['maDonHang'], $maKh, $_POST['tongDonHang'], $ngayDat, $soPhong, $dir, $_POST['name'], $_POST['email'], $_POST['phoneNumber']);
            foreach ($_SESSION['card'] as $key => $value) {
                datDonHangChiTiet($layMa['maDonHang'], $value['maPhong'], $value['ngayNhan'], $value['ngayTra']);
            }
            unset($_SESSION['card']);
            unset($_SESSION['checkDate']);
            include "layout/home.php";
            break;
            // quản lý tài khoản
        case 'user':
            include 'layout/user.php';
            break;
            // thoát
        case 'logout':
        include "layout/dx.php";
            break;
        default:
            include "layout/home.php";
            break;
    }
} else {
    include "layout/home.php";
}

if ($get != "login") {
    include "layout/footer.php";
}
// sét time
date_default_timezone_set('Asia/Ho_Chi_Minh');
