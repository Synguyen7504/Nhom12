-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2023 lúc 11:03 AM
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
  `ma_bl` tinyint(4) NOT NULL,
  `so_sao` int(2) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_khs` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ma_bl`, `so_sao`, `noi_dung`, `ma_khs`, `ma_kh`) VALUES
(8, 0, 'khách sạn rất đẹp', 1, 1),
(11, 5, 'raats ko ook luon', 1, 1),
(12, 5, 'raats ko ook luon', 1, 1),
(13, 5, 'khách sạn rất đẹp', 1, 1),
(14, 4, 'anvnfjnsv', 1, 1),
(15, 3, '213213123', 1, 2),
(16, 3, '213213123', 1, 2),
(17, 3, '213213123', 1, 2),
(18, 1, 'sy', 1, 2);

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
(17, 2, 1000000, '2023-12-01', 'images/404_31_dn3.jpg', 'sy', 'syvannguyen4747@gmail.com', 123154, b'0'),
(18, 2, 1000000, '2023-12-01', 'images/646_familly.jpg', 'sy', 'syvannguyen4747@gmail.com', 123154, b'0'),
(19, 2, 1000000, '2023-12-02', 'images/267_314_test.jpg', 'sy', 'syvannguyen4747@gmail.com', 123154, b'0'),
(20, 2, 1000000, '2023-12-02', 'images/626_314_test.jpg', 'sy', 'syvannguyen4747@gmail.com', 123154, b'0');

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
(31, 17, 5, '2023-12-01', '2023-12-02'),
(32, 18, 5, '2023-12-05', '2023-12-06'),
(36, 19, 6, '2023-12-02', '2023-12-03');

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
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_p-tl` (`ma_khs`),
  ADD KEY `fk_bl_kh` (`ma_kh`);

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
  MODIFY `ma_bl` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `maDonHangChiTiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khachhang` (`maKhachHang`),
  ADD CONSTRAINT `fk_p-tl` FOREIGN KEY (`ma_khs`) REFERENCES `khachsan` (`maKhachSan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
