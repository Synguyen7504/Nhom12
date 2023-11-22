<?php 
function truyVanGioiHan(){
    $sql = "SELECT * FROM `khachsan` LIMIT 6";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function truyVan1($maKhachSan){
    $sql = "SELECT * FROM `khachsan` WHERE maKhachSan = '$maKhachSan'";
    $row = pdo_truyVan1($sql);
    return $row;
}
function truyVanPhong($maKhachSan){
    $sql = "SELECT * FROM phong  INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong WHERE maKhachSan = '$maKhachSan' ";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function addToCard($maPhong){
    $sql = "SELECT * FROM `phong` INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan WHERE maPhong = $maPhong;";
    $row = pdo_truyVan1($sql);
    return $row;
}
?>