<?php
include "pdo.php";
// đn
function khachhang($tk, $mk)
{
    $sql = "SELECT * FROM khachhang WHERE tenDangNhap = '$tk' AND matKhau = '$mk'";
    return pdo_query_one($sql);
}
// foi mk
function doimk($mk,$id){
    $sql="UPDATE khachhang SET matKhau ='$mk' WHERE maKhachHang  = '$id'";
    return pdo_execute($sql);
}
// update
function updatetk($name, $emal, $sdt, $dc, $gt,$id){
    $sql="UPDATE khachhang SET
tenKhachHang='$name',
email='$emal',
soDienThoai='$sdt',	
diaChi='$dc',
gioThieu='$gt'
WHERE maKhachHang = '$id';
";
    return pdo_execute($sql);
}