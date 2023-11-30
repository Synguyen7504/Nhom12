<?php
function truyVanKhachSan()
{
    $sql = "SELECT * FROM khachsan";
    return pdo_truyVanAll($sql);
}
