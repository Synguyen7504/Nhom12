<?php
function truyVanGioiHan()
{
    $sql = "SELECT * FROM `khachsan` LIMIT 6";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function truyVan1($maKhachSan)
{
    $sql = "SELECT * FROM `khachsan` WHERE maKhachSan = '$maKhachSan'";
    $row = pdo_truyVan1($sql);
    return $row;
}
function truyVanPhong($maKhachSan)
{
    $sql = "SELECT * FROM phong  INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong WHERE maKhachSan = '$maKhachSan' ";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function addToCard($maPhong)
{
    $sql = "SELECT * FROM `phong` INNER JOIN khachsan ON phong.maKhachSan = khachsan.maKhachSan WHERE maPhong = $maPhong;";
    $row = pdo_truyVan1($sql);
    return $row;
}
function truyVanAll()
{
    $sql = "SELECT * FROM `khachsan`";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function truyVan2()
{
    $sql = "SELECT * FROM `khachsan` LIMIT 2";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function addDotToNumber($number)
{
    $number_parts = explode('.', $number); // Tách phần nguyên và phần thập phân (nếu có)
    $integer_part = $number_parts[0]; // Lấy phần nguyên

    $formatted_number = number_format($integer_part); // Định dạng phần nguyên với dấu chấm

    if (isset($number_parts[1])) {
        // Nếu có phần thập phân, thêm lại vào chuỗi kết quả
        $formatted_number .= '.' . $number_parts[1];
    }

    return $formatted_number;
}
function locTheoLoai($maKhachSan, $maLoai)
{
    $sql = "SELECT * FROM phong  INNER JOIN loaiphong ON phong.maLoaiPhong = loaiphong.maLoaiPhong  WHERE phong.maKhachSan = $maKhachSan AND phong.maLoaiPhong =$maLoai;";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function layLoaiAll()
{
    $sql = "SELECT * FROM `loaiPhong`";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
// bình luận sp
function binhluan($sao, $nd, $idks){
    $sql="INSERT INTO binhluan (so_sao, noi_dung, ma_khs) VALUES ('$sao', '$nd', '$idks')";
    pdo_execute($sql);
}
