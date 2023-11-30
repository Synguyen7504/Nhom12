<?php
function truyVanPhong()
{
    $sql = "SELECT maPhong,tenKhachSan,tenLoai,image,giaPhong,giuong FROM `phong` INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong ORDER BY maPhong;";
    return pdo_truyVanAll($sql);
}
