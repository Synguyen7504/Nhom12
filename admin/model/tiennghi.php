<?php
function truyVanTienNghi()
{
    $sql = "SELECT * FROM `tiennghi`";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
