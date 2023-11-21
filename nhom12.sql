-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 02:37 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom12`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDonHang` int(11) NOT NULL,
  `maKhachHang` int(11) NOT NULL,
  `tongDonHang` float NOT NULL,
  `ngayDat` date NOT NULL,
  `soLuongPhong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `maDonHangChiTiet` int(11) NOT NULL,
  `maDonHang` int(11) NOT NULL,
  `maPhong` int(11) NOT NULL,
  `ngayNhanPhong` date NOT NULL,
  `ngayTraPhong` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `maKhachHang` int(11) NOT NULL,
  `tenKhachHang` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `soDienThoai` int(10) NOT NULL,
  `tenDangNhap` varchar(50) NOT NULL,
  `matKhau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `maKhachSan` int(11) NOT NULL,
  `tenKhachSan` varchar(50) NOT NULL,
  `diaDiem` varchar(250) NOT NULL,
  `khoangGia` varchar(50) NOT NULL,
  `danhGia` int(1) NOT NULL DEFAULT 1,
  `nhaHang` bit(1) NOT NULL DEFAULT b'0',
  `hoBoi` bit(1) NOT NULL DEFAULT b'0',
  `phongGym` bit(1) NOT NULL DEFAULT b'0',
  `wifi` bit(1) NOT NULL DEFAULT b'0',
  `mayLanh` bit(1) NOT NULL DEFAULT b'0',
  `hutThuoc` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(50) NOT NULL,
  `nhaHang` bit(1) NOT NULL DEFAULT b'0',
  `hoBoi` bit(1) NOT NULL DEFAULT b'0',
  `phongGym` bit(1) NOT NULL DEFAULT b'0',
  `wifi` bit(1) NOT NULL DEFAULT b'0',
  `mayLanh` bit(1) NOT NULL DEFAULT b'0',
  `hutThuoc` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `maPhong` int(11) NOT NULL,
  `maKhachSan` int(11) NOT NULL,
  `soPhong` int(11) NOT NULL,
  `loaiPhong` varchar(50) NOT NULL,
  `giaPhong` float NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tiennghi`
--

CREATE TABLE `tiennghi` (
  `maTienNghi` int(11) NOT NULL,
  `tenTienNghi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDonHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKhachHang`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`maLoai`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maPhong`);

--
-- Chỉ mục cho bảng `tiennghi`
--
ALTER TABLE `tiennghi`
  ADD PRIMARY KEY (`maTienNghi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDonHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKhachHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `maPhong` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tiennghi`
--
ALTER TABLE `tiennghi`
  MODIFY `maTienNghi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
