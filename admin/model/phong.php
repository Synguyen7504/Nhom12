<?php
function truyVanPhong()
{
    $sql = "SELECT maPhong,tenKhachSan,tenLoai,image,giaPhong,giuong FROM `phong` INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong ORDER BY maPhong;";
    return pdo_truyVanAll($sql);
}
function addPhong($maKhachSan, $maLoaiPhong, $giaPhong, $giuong, $dienTich, $anh)
{
    $sql = "INSERT INTO `phong`( `maKhachSan`,`maLoaiPhong`, `giaPhong`, `giuong`, `dienTich`, `image`) VALUES ('$maKhachSan','$maLoaiPhong','$giaPhong','$giuong','$dienTich','$anh')";
    pdo_thucThi($sql);
}
function deletePhong($maPhong)
{
    $sql = "DELETE FROM `phong` WHERE `maPhong` = $maPhong;";
    pdo_thucThi($sql);
}
function truyVan1Phong($maPhong)
{
    $sql = "SELECT maPhong,tenKhachSan,tenLoai,image,giaPhong,giuong,khachsan.maKhachSan,loaiphong.maLoaiPhong,dienTich FROM `phong` INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong WHERE maPhong = $maPhong;";
    return pdo_truyVan1($sql);
}
function updatePhongImage($maKhachSan, $maLoaiPhong, $giaPhong, $giuong, $dienTich, $image, $maPhong)
{
    $sql = "UPDATE `phong` SET `maKhachSan`='$maKhachSan',`maLoaiPhong`='$maLoaiPhong',`giaPhong`='$giaPhong',`giuong`='$giuong',`dienTich`='$dienTich',`image`='$image',`trangThai`='[value-9]' WHERE maPhong = $maPhong";
    pdo_thucThi($sql);
}

function updatePhong($maKhachSan, $maLoaiPhong, $giaPhong, $giuong, $dienTich, $maPhong)
{
    $sql = "UPDATE `phong` SET `maKhachSan`='$maKhachSan',`maLoaiPhong`='$maLoaiPhong',`giaPhong`='$giaPhong',`giuong`='$giuong',`dienTich`='$dienTich',`trangThai`='[value-9]' WHERE maPhong = $maPhong";
    pdo_thucThi($sql);
}
