<?php
function truyVanKhachSan()
{
    $sql = "SELECT *, COUNT(*) AS soLuong
    FROM khachsan 
    INNER JOIN phong ON khachsan.maKhachSan = phong.maKhachSan 
    GROUP BY khachsan.maKhachSan 
    ORDER BY khachsan.maKhachSan;";
    return pdo_truyVanAll($sql);
}
