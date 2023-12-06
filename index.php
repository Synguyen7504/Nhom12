<?php
include "./PDO/khachhang.php";
include "./PDO/sanpham.php";
include "./PDO/donghang.php";
$get = "";
session_start();
if (!$_SESSION['tk']) {
    header("Location: ./layout/dangnhap.php");
}
if (isset($_GET['act'])) {
    $get = $_GET['act'];
}
if ($get != "login") {
    extract($_SESSION['tk']);
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
            $thongBao = false;
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                lienHe($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);
                $thongBao = true;
            }
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
            if (isset($_POST['ngayNhan'])  && isset($_POST['ngayTra'])) {
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
            //bình luận
            $loi = [];
            if (isset($_POST['subp'])) {
                $rating = $_POST['rating'];
                $noidung = $_POST['nd'];
                if (empty($rating)) {
                    $rating = 0;
                }
                if (empty($_SESSION['tk'])) {
                    $loi[] = "Vui lòng đăng nhập để sử dụng tính năng này";
                    goto thoi2;
                }
                if (empty($noidung)) {
                    $loi[] = "Vui lòng nhập bình luận";
                    goto thoi2;
                }
                if (empty($loi)) {
                    extract($_SESSION['tk']);
                    binhluan($rating, $noidung, $maKhachSan, $maKhachHang);
                    $loi[] = "Cảm ơn bạn đã đánh giá $rating sao";
                }
                thoi2:
            }
            $allbl = laybl($maKhachSan);
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
            include "layout/order.php";
            break;

        case 'pay':
            $layMa = layMaDonHangLonNhat();
            $layMa['maDonHang'] = $layMa['maDonHang'] + 1;
            if (isset($_SESSION['tk'])) {
                $maKh = $_SESSION['tk']['maKhachHang'];
            } else {
                $_SESSION['layMa'][] = $layMa;
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
            extract($_SESSION['tk']);
            if (isset($_POST['sup'])) {
               $diachi=$_POST['diachi'];
               $email=$_POST['email'];
               $sdt=$_POST['sdt'];
               $gioithieu=$_POST['gioithieu'];
               $hoten=$_POST['hoten'];
               $_SESSION['dc']=$diachi;
               $_SESSION['gt']=$gioithieu;
                updatetk($hoten, $email, $sdt, $diachi, $gioithieu, $maKhachHang);
            }

            include 'layout/user.php';

            break;
        case 'donhang':
            if (isset($_SESSION['tk'])) {
                $maKhachHang = $_SESSION['tk']['maKhachHang'];
                $rows = layDonHangDaDat($maKhachHang);
                // } else {
                //     if (isset($_SESSION['layMa'])) {
                //         foreach ($_SESSION['layMa'] as $key => $value) {
                //             $lay = layDonHangBangMa($value);
                //             $rows[] = $lay;
                //         }
                //     }
            }

            include 'layout/donhang.php';
            break;
        case 'donhang':
            include 'layout/donhang.php';
            break;
        case 'doimk':
            extract($_SESSION['tk']);
            $loi = [];
            if (isset($_POST['sub'])) {
                $mkc = $_POST['mkc'];
                $mk1 = $_POST['mk1'];
                $mk2 = $_POST['mk2'];
                if (empty($mkc)) {
                    $loi[] = "Vui lòng nhập mật khẩu cũ";
                    goto thoi;
                }
                if (empty($mk1)) {
                    $loi[] = "Vui lòng nhập mật khẩu mới";
                    goto thoi;
                }
                if (empty($mk2)) {
                    $loi[] = "Vui lòng nhập lại mật khẩu mới";
                    goto thoi;
                }
                if ($mk1 !== $mk2) {
                    $loi[] = "2 mật khẩu không khớp";
                    goto thoi;
                }
                $matKhau;
                if ($mkc == $matKhau) {
                    doimk($mk1, $maKhachHang);
                    $matKhau = $mk1;
                    $loi[] = "Đổi mật khẩu thành công";
                } else {
                    $loi[] = "Sai mật khẩu cũ";
                }
                thoi:
            }
            include 'layout/change.php';
            break;
        case 'quenmk':
            include 'layout/quenmk.php';
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
