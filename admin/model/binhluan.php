<?php
function truyVanBinhLuan()
{
    $sql = "SELECT * FROM `binhluan`";
    return pdo_truyVanAll($sql);
}
function deleteBinhLuan($maBinhLuan)
{
    $sql = "DELETE FROM `binhluan` WHERE ma_bl = $maBinhLuan";
    pdo_thucThi($sql);
}
function truyVan1BinhLuan($maBinhLuan)
{
    $sql = "SELECT * FROM `binhluan` WHERE ma_bl = $maBinhLuan";
    return pdo_truyVan1 ($sql);
}
