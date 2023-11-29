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
            $rows = truyVanAll();
            $rows1 = truyVan2();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['location'])) {
                    $diaDiem = $_POST['location'];
                } else {
                    $diaDiem = null;
                }
                if (isset($_POST['price'])) {
                    $gia = $_POST['price'];
                } else {
                    $gia = null;
                }
                if (isset($_POST['stars'])) {
                    $sao = $_POST['stars'];
                } else {
                    $sao = null;
                }
                $rows = locAll($sao, $diaDiem, $gia);
            }

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
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $maDelete = [];
                if (isset($_POST['loai'])) {
                    $rows = locTheoLoai($maKhachSan, $_POST['loai']);
                }
                $check = layDateDonHangChiTietCoMaPhong($maKhachSan);
                foreach ($check as $key => $value) {
                    if (($_POST['ngayNhan'] < $value['ngayNhanPhong'] && $_POST['ngayTra'] < $value['ngayNhanPhong']) || ($_POST['ngayNhan'] > $value['ngayTraPhong'] &&  $_POST['ngayTra'] > $value['ngayTraPhong'])) {
                    } else {
                        foreach ($rows as $index => $giaTri) {
                            if ($giaTri['maPhong'] == $value['maPhong']) {
                                $maDelete[] = $index;
                            }
                        }
                    }
                }
                foreach ($maDelete as $key => $value) {
                    unset($rows[$value]);
                }
            }
            $row = truyVan1($maKhachSan);
            include 'layout/product.php';
            break;
        case 'card':
            include "layout/card.php";
            break;
        case 'order':
            $row = addToCard($_SESSION['maPhong']);
            $tongTien = 0;
            $ngayTra = $_POST['ngayTra'];
            $ngayNhan = $_POST['ngayNhan'];
            $dateSau =   (strtotime($ngayTra) - strtotime($ngayNhan));
            $countDay = 0;
            $_SESSION['ngayTra'] = $ngayTra;
            $_SESSION['ngayNhan'] = $ngayNhan;
            for ($i = $dateSau; $i >= 86400; $i++) {
                $i = $i - 86400;
                $countDay++;
            }
            $tongTien = $row['giaPhong'] * $countDay;
            $phaiTra = $tongTien / 2;
            echo $tongTien;
            include "layout/order.php";
            break;

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
            datDonHang($layMa['maDonHang'], $maKh, $_POST['tongDonHang'], $ngayDat, $dir, $_POST['name'], $_POST['email'], $_POST['phoneNumber']);
            $row = addToCard($_SESSION['maPhong']);
            datDonHangChiTiet($layMa['maDonHang'], $row['maPhong'], $_SESSION['ngayNhan'], $_SESSION['ngayTra']);
            unset($_SESSION['maPhong'], $_SESSION['ngayNhan'], $_SESSION['ngayTra']);
            include "layout/home.php";
            break;
            // quản lý tài khoản
        case 'user':
            include 'layout/user.php';
            break;
        case 'changepass':
            include 'layout/change.php';
            break;
        case 'donhang':
            include 'layout/donhang.php';
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
