<?php
function truyVanUser()
{
    $sql = "SELECT * FROM `khachhang`;";
    return pdo_truyVanAll($sql);
}
