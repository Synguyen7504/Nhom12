<?php
function truyVanTienNghi()
{
    $sql = "SELECT * FROM `tiennghi`";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function truyVan1TienNghi($maTienNghi)
{
    $sql = "SELECT * FROM `tiennghi` WHERE maTienNghi = $maTienNghi";
    $rows = pdo_truyVan1($sql);
    return $rows;
}
