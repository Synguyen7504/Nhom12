<?php
function truyVanLoai()
{
    $sql = "SELECT * FROM loaiphong";
    return pdo_truyVanAll($sql);
}
// 
function addloai($tenLoai, $nhaHang, $hoBoi, $phongGym	,$wifi, $mayLanh, $hutThuoc){
    $sql="INSERT INTO loaiphong (tenLoai, nhaHang, hoBoi, phongGym	,wifi, mayLanh, hutThuoc)
            VALUES ('$tenLoai', '$nhaHang', '$hoBoi', '$phongGym' ,'$wifi', '$mayLanh', '$hutThuoc')";
             pdo_execute($sql);
}
function truyvanloaiphong($id){
    $sql = "SELECT *
    FROM loaiphong 
    WHERE maLoaiPhong =$id;";
    return pdo_truyVanAll($sql);
}
function sualoai($tenLoai, $nhaHang, $hoBoi, $phongGym	,$wifi, $mayLanh, $hutThuoc, $id){
    $sql="UPDATE loaiphong 
    SET tenLoai = '$tenLoai',
        nhaHang = '$nhaHang',
        hoBoi = '$hoBoi',
        phongGym = '$phongGym',
        wifi = '$wifi',
        mayLanh = '$mayLanh',
        hutThuoc = '$hutThuoc'
    WHERE maLoaiPhong = $id";
    pdo_execute($sql);
}
function xoaloai($id){
    $sql="DELETE FROM loaiphong WHERE  maLoaiPhong = $id";
    return pdo_thucThi($sql);
}