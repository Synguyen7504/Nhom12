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
function truyVanDiaDiem()
{
    $sql = "SELECT * FROM `khachsan` GROUP BY tinhThanh;";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function truyVanGia()
{
    $sql = "SELECT * FROM `khachsan` GROUP BY khoangGia;";
    $rows = pdo_truyVanAll($sql);
    return $rows;
}
function locAll($sao, $diaDiem, $gia)
{
    if (isset($sao) && isset($diaDiem) && empty($gia)) {
        $sql = "SELECT * FROM `khachsan` WHERE tinhThanh = '$diaDiem' AND danhGia = $sao";
    } elseif (isset($sao) && empty($diaDiem) && isset($gia)) {
        $sql = "SELECT * FROM `khachsan` WHERE khoangGia = '$gia' AND danhGia = $sao";
    } elseif (empty($sao) && isset($diaDiem) && isset($gia)) {
        $sql = "SELECT * FROM `khachsan` WHERE tinhThanh = '$diaDiem' AND khoangGia = '$gia'";
    } elseif (isset($diaDiem) && empty($sao) && empty($gia)) {
        $sql = "SELECT * FROM `khachsan` WHERE tinhThanh = '$diaDiem'";
    } elseif (empty($diaDiem) && isset($sao) && empty($gia)) {
        $sql = "SELECT * FROM `khachsan` WHERE danhGia = $sao";
    } elseif (empty($diaDiem) && isset($gia) && empty($sao)) {
        $sql = "SELECT * FROM `khachsan` WHERE khoangGia = '$gia'";
    } elseif (empty($sao) && empty($diaDiem) && empty($gia)) {
        $sql = "SELECT * FROM `khachsan`";
    } else {
        $sql = "SELECT * FROM `khachsan` WHERE khoangGia = '$gia' AND tinhThanh = '$diaDiem' AND danhGia = $sao";
    }

    $rows = pdo_truyVanAll($sql);
    return $rows;
}
// bình luận sp
function binhluan($sao, $nd, $idks)
{
    $sql = "INSERT INTO binhluan (so_sao, noi_dung, ma_khs) VALUES ('$sao', '$nd', '$idks')";
    pdo_execute($sql);
}
