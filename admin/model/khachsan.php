<?php
function truyVanKhachSan()
{
    $sql = "SELECT *
    FROM khachsan 
    ORDER BY khachsan.maKhachSan;";
    return pdo_truyVanAll($sql);
}
function addkhachsan($tenKhachSan,$diaDiem, $tinhThanh, $khoangGia, $danhGia, $anh1, $anh2, $anh3 , $anh4, $nhaHang, $hoBoi, $phongGym, $wifi, $mayLanh, $hutThuoc){
    $sql="INSERT INTO khachsan (tenKhachSan,diaDiem, tinhThanh, khoangGia, danhGia, anh1, anh2, anh3 ,anh4, nhaHang, hoBoi, phongGym, wifi, mayLanh, hutThuoc)
    VALUES ('$tenKhachSan','$diaDiem',' $tinhThanh', '$khoangGia', '$danhGia', '$anh1', '$anh2', '$anh3' , '$anh4', '$nhaHang', '$hoBoi', '$phongGym', '$wifi', '$mayLanh', '$hutThuoc')
    ";
    pdo_execute($sql);
}
