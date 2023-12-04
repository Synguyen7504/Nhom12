<?php
function truyVanLoai()
{
    $sql = "SELECT * FROM loaiphong";
    return pdo_truyVanAll($sql);
}
function truyVan1Loai($maLoaiPhong)
{
    $sql = "SELECT * FROM `loaiPhong` WHERE `maLoaiPhong` = $maLoaiPhong;";
    return pdo_truyVan1($sql);
}
