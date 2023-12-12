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
    $sql = "DELETE FROM `donhangchitiet` WHERE maDonHang = $maDonHang; DELETE FROM `donhang` WHERE maDonHang = $maDonHang;";
    pdo_thucThi($sql);
}
function truyVan1DonHang($maDonHang)
{
    $sql = "SELECT * FROM `donhang` INNER JOIN donhangchitiet ON donhang.maDonHang = donhangchitiet.maDonHang WHERE donhang.maDonHang = $maDonHang";
    return pdo_truyVan1($sql);
}
function addDotToNumber($number)
{
    $number_parts = explode('.', $number); // Tách phần nguyên và phần thập phân (nếu có)
    $integer_part = $number_parts[0]; // Lấy phần nguyên

    $formatted_number = number_format($integer_part); // Định dạng phần nguyên với dấu chấm

    if (isset($number_parts[1])) {
        // Nếu có phần thập phân, thêm lại vào chuỗi kết quả
        $formatted_number .= '.' . $number_parts[1];
    }

    return $formatted_number;
}
