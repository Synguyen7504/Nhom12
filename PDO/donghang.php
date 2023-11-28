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
