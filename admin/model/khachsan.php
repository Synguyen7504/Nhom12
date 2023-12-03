<?php
function truyVanKhachSan()
{
    $sql = "SELECT *
    FROM khachsan 
    ORDER BY khachsan.maKhachSan;";
    return pdo_truyVanAll($sql);
}
