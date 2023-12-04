<?php
function truyVanKhachSan()
{
    $sql = "SELECT *
    FROM khachsan 
    ";
    return pdo_truyVanAll($sql);
}
function truyVanKhachSan_1($id)
{
    $sql = "SELECT *
    FROM khachsan 
    WHERE maKhachSan =$id;";
    return pdo_truyVanAll($sql);
}
function addkhachsan($tenKhachSan,$diaDiem, $tinhThanh, $khoangGia, $danhGia, $anh1, $anh2, $anh3 , $anh4, $nhaHang, $hoBoi, $phongGym, $wifi, $mayLanh, $hutThuoc){
    $sql="INSERT INTO khachsan (tenKhachSan,diaDiem, tinhThanh, khoangGia, danhGia, anh1, anh2, anh3 ,anh4, nhaHang, hoBoi, phongGym, wifi, mayLanh, hutThuoc)
    VALUES ('$tenKhachSan','$diaDiem',' $tinhThanh', '$khoangGia', '$danhGia', '$anh1', '$anh2', '$anh3' , '$anh4', '$nhaHang', '$hoBoi', '$phongGym', '$wifi', '$mayLanh', '$hutThuoc')
    ";
    pdo_execute($sql);
}
function anhks($tenKhachSan,$diaDiem, $tinhThanh, $khoangGia, $danhGia, $anh1, $nhaHang, $hoBoi, $phongGym, $wifi, $mayLanh, $hutThuoc, $idks){
$sql="UPDATE khachsan 
SET tenKhachSan = '$tenKhachSan',
    diaDiem = '$diaDiem',
    tinhThanh = '$tinhThanh',
    khoangGia = '$khoangGia',
    danhGia = '$danhGia',
    anh1 = '$anh1',
    nhaHang = '$nhaHang',
    hoBoi = '$hoBoi',
    phongGym = '$phongGym',
    wifi = '$wifi',
    mayLanh = '$mayLanh',
    hutThuoc = '$hutThuoc'
WHERE maKhachSan = $idks
";
pdo_execute($sql);
}
function noanhks($tenKhachSan,$diaDiem, $tinhThanh, $khoangGia, $danhGia, $nhaHang, $hoBoi, $phongGym, $wifi, $mayLanh, $hutThuoc, $idks){
$sql="UPDATE khachsan 
SET tenKhachSan = '$tenKhachSan',
    diaDiem = '$diaDiem',
    tinhThanh = '$tinhThanh',
    khoangGia = '$khoangGia',
    danhGia = '$danhGia',
    nhaHang = '$nhaHang',
    hoBoi = '$hoBoi',
    phongGym = '$phongGym',
    wifi = '$wifi',
    mayLanh = '$mayLanh',
    hutThuoc = '$hutThuoc'
WHERE maKhachSan = $idks;
";
pdo_execute($sql);
}
function xoaks($id){
    $sql="DELETE FROM khachsan WHERE maKhachSan =$id";
    return pdo_thucThi($sql);
}
function truyVan1KhachSan($maKhachSan)
{
    $sql = "SELECT * FROM `khachsan` WHERE `maKhachSan` = $maKhachSan;";
    return pdo_truyVan1($sql);
}