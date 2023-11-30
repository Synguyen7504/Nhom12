<?php
function truyVanLoai()
{
    $sql = "SELECT * FROM loaiphong";
    return pdo_truyVanAll($sql);
}
