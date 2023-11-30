<?php
function layMaDonHangLonNhat()
{
    $sql = "SELECT * FROM `donhang` ORDER BY maDonHang DESC LIMIT 1;";
    $row = pdo_truyVan1($sql);
    return $row;
}
function datDonHang($maDonHang, $maKhachHang, $tongDonHang, $ngayDat,  $image, $ten, $email, $soDienThoai)
{
    $sql = "INSERT INTO `donhang`
    ( `maDonHang`,`maKhachHang`, `tongDonHang`, `ngayDat`, `image`, `ten`, `email`, `soDienThoai`) VALUES 
    ('$maDonHang','$maKhachHang','$tongDonHang','$ngayDat','$image','$ten','$email','$soDienThoai')";
    pdo_thucThi($sql);
}
function datDonHangChiTiet($maDonHang, $maPhong, $ngayNhanPhong, $ngayTraPhong)
{
    $sql = "INSERT INTO `donhangchitiet`(`maDonHang`, `maPhong`, `ngayNhanPhong`, `ngayTraPhong`) VALUES 
    ('$maDonHang','$maPhong','$ngayNhanPhong','$ngayTraPhong')";
    pdo_thucThi($sql);
}
function layDateDonHangChiTiet()
{
    $sql = "SELECT maPhong,ngayNhanPhong,ngayTraPhong FROM `donhangchitiet`;";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function layDateDonHangChiTietCoMaPhong($maKhachSan)
{
    $sql = "SELECT * FROM `donhangchitiet` INNER JOIN phong ON donhangchitiet.maPhong = phong.maPhong WHERE phong.maKhachSan = $maKhachSan;";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function layDonHangDaDat($maKhachHang)
{
    $sql = "SELECT donhang.maDonHang,khachsan.tenKhachSan, khachsan.maKhachSan,donhang.tongDonHang,donhang.trangThai,ngayDat,donhangchitiet.ngayNhanPhong,donhangchitiet.ngayTraPhong, tenLoai FROM `donHang` INNER JOIN `donhangchitiet` on donhang.maDonHang = donhangchitiet.maDonHang INNER JOIN phong ON donhangchitiet.maPhong = phong.maPhong INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong WHERE maKhachHang = $maKhachHang ORDER BY donhang.maDonHang;";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function layDonHangBangMa($maDonHang)
{
    $sql = "SELECT donhang.maDonHang,khachsan.tenKhachSan, khachsan.maKhachSan,donhang.tongDonHang,donhang.trangThai,ngayDat,donhangchitiet.ngayNhanPhong,donhangchitiet.ngayTraPhong, tenLoai FROM `donHang` INNER JOIN `donhangchitiet` on donhang.maDonHang = donhangchitiet.maDonHang INNER JOIN phong ON donhangchitiet.maPhong = phong.maPhong INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong WHERE donhang.maDonHang = $maDonHang";
$rows = pdo_truyVan1($sql);
}
