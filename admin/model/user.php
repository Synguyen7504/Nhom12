<?php
function truyVanUser()
{
    $sql = "SELECT * FROM `khachhang`;";
    return pdo_truyVanAll($sql);
}
function truyVanUserKhachHang()
{
    $sql = "SELECT * FROM `khachhang` WHERE quyen = 'user';";
    return pdo_truyVanAll($sql);
}
function truyVan1UserKhachHang($maKhachHang)
{
    $sql = "SELECT * FROM `khachhang` WHERE maKhachHang = $maKhachHang And quyen = 'user';";
    return pdo_truyVan1($sql);
}

function addUser($tenKhachHang, $email, $soDienThoai, $tenDangNhap, $matKhau, $quyen, $avatar)
{
    $sql = "INSERT INTO `khachhang`( `tenKhachHang`, `email`, `soDienThoai`, `tenDangNhap`, `matKhau`, `quyen`, `avatar`) VALUES ('$tenKhachHang','$email','$soDienThoai','$tenDangNhap','$matKhau','$quyen','$avatar')";
    pdo_thucThi($sql);
}
function deleteUser($maKhachHang)
{
    $sql = "DELETE FROM `khachhang` WHERE `maKhachHang` = $maKhachHang;";
    pdo_thucThi($sql);
}
function truyVan1User($maKhachHang)
{
    $sql = "SELECT * FROM `khachhang` WHERE maKhachHang = $maKhachHang;";
    return pdo_truyVan1($sql);
}
function updateUserImage($tenKhachHang, $email, $soDienThoai, $tenDangNhap, $matKhau, $quyen, $avatar, $maKhachHang)
{
    $sql = "UPDATE `khachhang` SET`tenKhachHang`='$tenKhachHang',`email`='$email',`soDienThoai`='$soDienThoai',`tenDangNhap`='$tenDangNhap',`matKhau`='$matKhau',`quyen`='$quyen',`avatar`='$avatar' WHERE maKhachHang = $maKhachHang";
    pdo_thucThi($sql);
}

function updateUser($tenKhachHang, $email, $soDienThoai, $tenDangNhap, $matKhau, $quyen,  $maKhachHang)
{
    $sql = "UPDATE `khachhang` SET`tenKhachHang`='$tenKhachHang',`email`='$email',`soDienThoai`='$soDienThoai',`tenDangNhap`='$tenDangNhap',`matKhau`='$matKhau',`quyen`='$quyen' WHERE maKhachHang = $maKhachHang";
    pdo_thucThi($sql);
}
