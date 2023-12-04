<?php
function truyVanKhachSan()
{
    $sql = "SELECT *
    FROM khachsan 
    ";
    return pdo_truyVanAll($sql);
}
function addkhachsan($tenKhachSan, $diaDiem, $tinhThanh, $khoangGia, $danhGia, $anh1, $anh2, $anh3, $anh4, $nhaHang, $hoBoi, $phongGym, $wifi, $mayLanh, $hutThuoc)
{
    $sql = "INSERT INTO khachsan (tenKhachSan,diaDiem, tinhThanh, khoangGia, danhGia, anh1, anh2, anh3 ,anh4, nhaHang, hoBoi, phongGym, wifi, mayLanh, hutThuoc)
    VALUES ('$tenKhachSan','$diaDiem',' $tinhThanh', '$khoangGia', '$danhGia', '$anh1', '$anh2', '$anh3' , '$anh4', '$nhaHang', '$hoBoi', '$phongGym', '$wifi', '$mayLanh', '$hutThuoc')
    ";
    pdo_execute($sql);
}
function truyVan1KhachSan($maKhachSan)
{
    $sql = "SELECT * FROM `khachsan` WHERE `maKhachSan` = $maKhachSan;";
    return pdo_truyVan1($sql);
}
