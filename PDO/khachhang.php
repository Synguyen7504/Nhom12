<?php
include "pdo.php";
// đn
function khachhang($tk, $mk){
$sql ="SELECT * FROM khachhang WHERE tenDangNhap = $tk AND matKhau = $mk";
return pdo_query_one($sql);
}
?>