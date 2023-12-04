<?php
function truyVanDonHang()
{
    $sql = "SELECT donhang.maDonHang,maKhachHang,tongDonHang,ngayDat,image,ten,email,soDienThoai,donhangchitiet.maPhong,donhangchitiet.ngayNhanPhong,donhangchitiet.ngayTraPhong,trangThai FROM `donhang` INNER JOIN donhangchitiet ON donhangchitiet.maDonHang = donhang.maDonHang ORDER BY `donhang`.`trangThai` ASC";
    return pdo_truyVanAll($sql);
}
function updateDonHang($maDonHang)
{
    $sql = "UPDATE `donhang` SET `trangThai`='1' WHERE maDonHang = $maDonHang";
    pdo_thucThi($sql);
}
function deleteDonHang($maDonHang)
{
    $sql = "DELETE FROM `donhang` WHERE maDonHang = $maDonHang";
    pdo_thucThi($sql);
}
function truyVan1DonHang($maDonHang)
{
    $sql = "SELECT * FROM `donhang` INNER JOIN donhangchitiet ON donhang.maDonHang = donhangchitiet.maDonHang WHERE donhang.maDonHang = $maDonHang";
    return pdo_truyVan1($sql);
}
