-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 08:31 AM
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
  `khoangGia` float DEFAULT NULL,
  `danhGia` int(1) NOT NULL DEFAULT 1,
  `anh1` varchar(255) NOT NULL,
  `anh2` varchar(255) DEFAULT NULL,
  `anh3` varchar(250) DEFAULT NULL,
  `anh4` varchar(255) DEFAULT NULL,
  `nhaHang` bit(1) NOT NULL DEFAULT b'0',
  `hoBoi` bit(1) NOT NULL DEFAULT b'0',
  `phongGym` bit(1) NOT NULL DEFAULT b'0',
  `wifi` bit(1) NOT NULL DEFAULT b'0',
  `mayLanh` bit(1) NOT NULL DEFAULT b'0',
  `hutThuoc` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachsan`
--

INSERT INTO `khachsan` (`maKhachSan`, `tenKhachSan`, `diaDiem`, `khoangGia`, `danhGia`, `anh1`, `anh2`, `anh3`, `anh4`, `nhaHang`, `hoBoi`, `phongGym`, `wifi`, `mayLanh`, `hutThuoc`) VALUES
(1, 'Khách sạn Hoa Hồng', 'Tây Hồ - Hà Nội', NULL, 1, '../images/khachsan1a', '../images/khachsan1b', '../images/khachsan1c', '../images/khachsan1d', b'1', b'1', b'1', b'1', b'1', b'1'),
(2, 'Khách sạn rồng bay phượng múa', 'Hà đông - Hà Nội', NULL, 1, '../images/khachsan2a', '../images/khachsan2b', '../images/khachsan2c', '../images/khachsan2d', b'1', b'1', b'1', b'0', b'1', b'1'),
(3, 'Khách sạn Hoa Hồng', 'Hà Đông - Ha Nội', NULL, 1, '../images/khachsan1a', '../images/khachsan1b', '../images/khachsan1c', '../images/khachsan1d', b'0', b'1', b'1', b'1', b'1', b'1'),
(4, 'Khách sạn rồng bay phượng múa', 'Đà lạt - Lâm Đồng', NULL, 1, '../images/khachsan2a', '../images/khachsan2b', '../images/khachsan2c', '../images/khachsan2d', b'1', b'1', b'0', b'1', b'1', b'1'),
(5, 'Khách sạn Biển Cả', 'Chu Du - Lâm Đồng', NULL, 1, '../images/khachsan3a', '../images/khachsan3b', '../images/khachsan3c', '../images/khachsan3d', b'1', b'1', b'1', b'1', b'1', b'1'),
(6, 'Khách sạn đồng quê', 'Tây Hồ - Hà Nội', 1, 1, '../images/khachsan4a', '../images/khachsan4b', '../images/khachsan4c', '', b'1', b'1', b'1', b'1', b'1', b'0');

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

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`maLoai`, `tenLoai`, `nhaHang`, `hoBoi`, `phongGym`, `wifi`, `mayLanh`, `hutThuoc`) VALUES
(1, 'Phòng đơn', b'1', b'0', b'0', b'1', b'1', b'1'),
(2, 'Phòng đôi', b'1', b'1', b'1', b'1', b'1', b'1'),
(3, 'Căn Hộ', b'1', b'1', b'1', b'1', b'1', b'1'),
(4, 'Dãy phòng', b'1', b'1', b'1', b'1', b'1', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `maPhong` int(11) NOT NULL,
  `maKhachSan` int(11) NOT NULL,
  `soPhong` int(11) NOT NULL,
  `maLoaiPhong` int(11) NOT NULL,
  `giaPhong` float NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`maPhong`, `maKhachSan`, `soPhong`, `maLoaiPhong`, `giaPhong`, `trangThai`) VALUES
(1, 1, 1, 1, 1000000, b'0'),
(2, 1, 2, 2, 2000000, b'0'),
(3, 1, 2, 2, 2000000, b'0'),
(4, 1, 3, 3, 3000000, b'0'),
(5, 1, 4, 4, 1000000, b'0'),
(6, 2, 1, 1, 1000000, b'0'),
(7, 2, 2, 2, 2000000, b'0'),
(8, 2, 3, 3, 3000000, b'0'),
(9, 2, 4, 4, 4000000, b'0'),
(10, 3, 1, 1, 1000000, b'0'),
(11, 3, 2, 2, 2000000, b'0'),
(12, 3, 3, 3, 3000000, b'0'),
(13, 3, 4, 4, 4000000, b'0'),
(14, 4, 4, 4, 4000000, b'0'),
(15, 4, 3, 3, 3000000, b'0'),
(16, 4, 2, 2, 2000000, b'0'),
(17, 4, 1, 1, 1000000, b'0');

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
-- Chỉ mục cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  ADD PRIMARY KEY (`maKhachSan`);

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
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `maKhachSan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phong`
--
ALTER TABLE `phong`
  MODIFY `maPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tiennghi`
--
ALTER TABLE `tiennghi`
  MODIFY `maTienNghi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
