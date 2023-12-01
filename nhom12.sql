-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 08:38 AM
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
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `maBinhLuan` int(11) NOT NULL,
  `maKhachHang` int(11) NOT NULL,
  `binhLuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDonHang` int(11) NOT NULL,
  `maKhachHang` int(11) DEFAULT NULL,
  `tongDonHang` float NOT NULL,
  `ngayDat` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `soDienThoai` int(11) NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDonHang`, `maKhachHang`, `tongDonHang`, `ngayDat`, `image`, `ten`, `email`, `soDienThoai`, `trangThai`) VALUES
(8, 0, 8, '2023-11-28', 'images/103_1.jpg', 'synguyen', 'syxnguyen754@gmail.com', 971052629, b'0'),
(9, 0, 16, '2023-11-28', 'images/582_3.jpg', 'Sỹ 0 suy', '2', 971052629, b'0'),
(10, 0, 2, '2023-11-28', 'images/530_103_1.jpg', '21321', '2', 971052629, b'0'),
(11, 0, 1000000, '2023-11-28', 'images/378_about_feature_image.png', 'synguyen', 'syvannguyen4747@gmail.com', 971052629, b'0'),
(12, 0, 3000000, '2023-11-28', 'images/174_530_103_1.jpg', 'Sỹ 0 suy', 'syvannguyen4747@gmail.com', 971052629, b'0'),
(13, 0, 2000000, '2023-11-28', 'images/567_1.jpg', 'synguyen', '1231231', 971052629, b'0'),
(14, 0, 2000000, '2023-11-28', 'images/885_378_about_feature_image.png', 'synguyen', 'syvannguyen4747@gmail.com', 971052629, b'0'),
(15, 0, 1000000, '2023-11-28', 'images/56_174_530_103_1.jpg', 'synguyen', 'syvannguyen4747@gmail.com', 971052629, b'0');

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

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`maDonHangChiTiet`, `maDonHang`, `maPhong`, `ngayNhanPhong`, `ngayTraPhong`) VALUES
(17, 8, 1, '2023-12-02', '2023-12-10'),
(18, 9, 2, '2023-12-09', '2023-12-17'),
(19, 10, 2, '2023-12-01', '2023-12-02'),
(20, 11, 1, '2023-11-30', '2023-12-01'),
(21, 12, 4, '2023-11-28', '2023-11-29'),
(22, 13, 3, '2023-11-28', '2023-11-29'),
(23, 14, 3, '2023-12-08', '2023-12-09'),
(24, 15, 3, '2023-12-10', '2023-12-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `maGioHang` int(11) NOT NULL,
  `maPhong` int(11) NOT NULL
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
  `matKhau` int(11) NOT NULL,
  `quyen` varchar(50) NOT NULL DEFAULT 'user',
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`maKhachHang`, `tenKhachHang`, `email`, `soDienThoai`, `tenDangNhap`, `matKhau`, `quyen`, `avatar`) VALUES
(1, 'anhquangday', '', 973320198, 'anhquangday', 121212, 'user', 'images/khachsan1a.jpg'),
(2, 'sy', '', 123154, 'sy', 123456, 'user', 'images/khachsan1a.jpg'),
(3, 'admin', '321312', 321312, 'admin', 1, 'admin', 'images/khachsan1a.jpg'),
(4, 'Sỹ', 'email', 1234567, 'syadmin', 1, '1', 'images/1.jpg'),
(5, 'Test', 'email', 1234567, 'test', 1, '0', 'images/1.jpg'),
(6, 'Admin', 'email', 1234567, 'test', 1, '0', 'images/1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachsan`
--

CREATE TABLE `khachsan` (
  `maKhachSan` int(11) NOT NULL,
  `tenKhachSan` varchar(50) NOT NULL,
  `diaDiem` varchar(250) NOT NULL,
  `tinhThanh` varchar(255) NOT NULL,
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

INSERT INTO `khachsan` (`maKhachSan`, `tenKhachSan`, `diaDiem`, `tinhThanh`, `khoangGia`, `danhGia`, `anh1`, `anh2`, `anh3`, `anh4`, `nhaHang`, `hoBoi`, `phongGym`, `wifi`, `mayLanh`, `hutThuoc`) VALUES
(1, 'Khách sạn Hoa Hồng', 'Tây Hồ - Hà Nội', 'Hà Nội', 1000000, 1, 'images/khachsan1a.jpg', 'images/khachsan1b.jpg', 'images/khachsan1c.jpg', 'images/khachsan1d.jpg', b'1', b'1', b'1', b'1', b'1', b'1'),
(2, 'Khách sạn phượng múa', 'Hà đông - Hà Nội', 'Hà Nội', 2000000, 3, 'images/khachsan2a.jpg', 'images/khachsan2d.jpg', 'images/khachsan2c.jpg', 'images/khachsan2d.jpg', b'1', b'1', b'1', b'0', b'1', b'1'),
(3, 'Khách sạn Hoa Hồng', 'Hà Đông - Ha Nội', 'Hà Nội', 1000000, 1, 'images/khachsan1a.jpg', 'images/khachsan1b.jpg', 'images/khachsan1c.jpg', 'images/khachsan1d.jpg', b'0', b'1', b'1', b'1', b'1', b'1'),
(4, 'Khách sạn rồng bay', 'Đà lạt - Lâm Đồng', 'Lâm Đồng', 1000000, 1, 'images/khachsan2a.jpg', 'images/khachsan2c.jpg', 'images/khachsan2c.jpg', 'images/khachsan2d.jpg', b'1', b'1', b'0', b'1', b'1', b'1'),
(5, 'Khách sạn Biển Cả', 'Chu Du - Lâm Đồng', 'Lâm Đồng', 1000000, 1, 'images/khachsan3b.jpg', 'images/khachsan3b.jpg', 'images/khachsan3c.jpg', 'images/khachsan3d.jpg', b'1', b'1', b'1', b'1', b'1', b'1'),
(6, 'Khách sạn đồng quê', 'Tây Hồ - Hà Nội', 'Hà Nội', 1000000, 1, 'images/khachsan4b.jpg', 'images/khachsan4b.jpg', 'images/khachsan4c.jpg', 'images/khachsan2a.jpg', b'1', b'1', b'1', b'1', b'1', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `maLoaiPhong` int(11) NOT NULL,
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

INSERT INTO `loaiphong` (`maLoaiPhong`, `tenLoai`, `nhaHang`, `hoBoi`, `phongGym`, `wifi`, `mayLanh`, `hutThuoc`) VALUES
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
  `giuong` varchar(255) NOT NULL,
  `dienTich` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`maPhong`, `maKhachSan`, `soPhong`, `maLoaiPhong`, `giaPhong`, `giuong`, `dienTich`, `image`, `trangThai`) VALUES
(1, 1, 1, 1, 1000000, '1 giường đôi', 30, 'images/1phonng,1giuongdoi,khachsan3.jpg', b'0'),
(2, 1, 2, 2, 2000000, '1 giường đôi', 30, 'images/phong1,1giuongdoi,khachsan1.jpg', b'0'),
(3, 1, 2, 2, 2000000, '2 giường đơn', 30, 'images/phong1,1giuongdoi,khachsan1.jpg', b'0'),
(4, 1, 3, 3, 3000000, 'Nhiều giường', 30, 'images/canho,khachsan3.jpg', b'0'),
(5, 1, 4, 4, 1000000, 'Nhiều giường', 30, 'images/canho,khachsan3.jpg', b'0'),
(6, 2, 1, 1, 1000000, '1 giường đôi', 300, 'images/phong1,1giuongdoi,khachsan2.jpg', b'0'),
(7, 2, 2, 2, 2000000, '1 giường đôi', 30, 'images/phong1,1giuongdoi,khachsan2.jpg', b'0'),
(8, 2, 3, 3, 3000000, 'Nhiều giường', 30, 'images/canho,khachsan2.jpg', b'0'),
(9, 2, 4, 4, 4000000, 'Nhiều giường', 30, 'images/canho,khachsan2.jpg', b'0'),
(10, 3, 1, 1, 1000000, '1 giường đôi', 30, 'images/phong1,1giuongdoi,khachsan2.jpg', b'0'),
(11, 3, 2, 2, 2000000, '1 giường đôi', 30, 'images/phong1,1giuongdoi,khachsan1.jpg', b'0'),
(12, 3, 3, 3, 3000000, 'Nhiều giường', 30, 'images/canho,khachsan3.jpg', b'0'),
(13, 3, 4, 4, 4000000, 'Nhiều giường', 30, 'images/canho,khachsan2.jpg', b'0'),
(14, 4, 4, 4, 4000000, 'Nhiều giường', 30, 'images/canho,khachsan3.jpg', b'0'),
(15, 4, 3, 3, 3000000, 'Nhiều giường', 30, 'images/canho,khachsan1.jpg', b'0'),
(16, 4, 2, 2, 2000000, '1 giường đôi', 30, 'images/phong1,1giuongdoi,khachsan2.jpg', b'0'),
(17, 4, 1, 1, 1000000, '1 giường đôi', 30, 'images/phong1,1giuongdoi,khachsan1.jpg', b'0');

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
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBinhLuan`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDonHang`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`maDonHangChiTiet`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`maGioHang`);

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
  ADD PRIMARY KEY (`maLoaiPhong`);

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
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBinhLuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `maDonHangChiTiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `maGioHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khachsan`
--
ALTER TABLE `khachsan`
  MODIFY `maKhachSan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `maLoaiPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
