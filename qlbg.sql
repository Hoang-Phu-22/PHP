-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 29, 2023 lúc 10:14 AM
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
-- Cơ sở dữ liệu: `qlbg`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnhap`
--

CREATE TABLE `chitietnhap` (
  `Manhap` varchar(10) NOT NULL,
  `Masp` varchar(10) NOT NULL,
  `Soluong` int(20) NOT NULL,
  `Ngaynhap` date NOT NULL,
  `Macc` varchar(10) NOT NULL,
  `Manv` varchar(10) NOT NULL,
  `Gianhap` int(20) NOT NULL,
  `Thanhtien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietnhap`
--

INSERT INTO `chitietnhap` (`Manhap`, `Masp`, `Soluong`, `Ngaynhap`, `Macc`, `Manv`, `Gianhap`, `Thanhtien`) VALUES
('NH01', 'AD', 1000, '2023-04-15', 'CC01', 'N01', 800000, 800000000),
('NH02', 'NK', 1000, '2023-04-15', 'CC02', 'N01', 900000, 900000000),
('NH03', 'PM', 1000, '2023-04-20', 'CC03', 'N02', 700000, 700000000),
('NH04', 'FL', 1000, '2023-04-20', 'CC04', 'N02', 700000, 700000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietxuat`
--

CREATE TABLE `chitietxuat` (
  `Maxuat` varchar(10) NOT NULL,
  `Masp` varchar(10) NOT NULL,
  `Soluong` int(20) NOT NULL,
  `Ngayxuat` date NOT NULL,
  `Giaxuat` int(20) NOT NULL,
  `Manv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietxuat`
--

INSERT INTO `chitietxuat` (`Maxuat`, `Masp`, `Soluong`, `Ngayxuat`, `Giaxuat`, `Manv`) VALUES
('XH01', 'AD', 600, '2023-05-10', 850000, 'N03'),
('XH02', 'NK', 700, '2023-05-10', 900000, 'N03'),
('XH03', 'PM', 700, '2023-05-10', 800000, 'N03'),
('XH04', 'FL', 500, '2023-05-10', 800000, 'N03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDH` varchar(10) NOT NULL,
  `Ngaydathang` date NOT NULL,
  `Masp` varchar(10) NOT NULL,
  `Soluong` int(20) NOT NULL,
  `MaKH` varchar(10) NOT NULL,
  `Thanhtien` int(20) NOT NULL,
  `Ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`MaDH`, `Ngaydathang`, `Masp`, `Soluong`, `MaKH`, `Thanhtien`, `Ghichu`) VALUES
('DH01', '2023-04-25', 'AD', 200, 'K01', 170000000, ''),
('DH02', '2023-04-25', 'NK', 200, 'K01', 18000000, ''),
('DH03', '2023-04-24', 'PM', 300, 'K03', 24000000, ''),
('DH04', '2023-04-24', 'FL', 400, 'K02', 32000000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(10) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `Diachi` varchar(50) NOT NULL,
  `SDT` int(10) NOT NULL,
  `Ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Diachi`, `SDT`, `Ghichu`) VALUES
('K01', 'Truc Ly', 'Phong Dien, Can Tho', 125648645, ''),
('K02', 'Vu Em', 'Hong Dan, Bac Lieu', 246856113, ''),
('K03', 'Yen Truc', 'Ninh Kieu, Can Tho', 166899444, ''),
('K04', 'Phuc Sang', 'Cai Rang, Can Tho', 432729882, ''),
('K05', 'Thanh Quan', 'Ninh Kieu, Can Tho', 479515665, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `Macc` varchar(20) NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `Diachi` varchar(50) NOT NULL,
  `SDT` int(10) NOT NULL,
  `Ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`Macc`, `TenNCC`, `Diachi`, `SDT`, `Ghichu`) VALUES
('CC01', 'Adidas', 'Viet Nam', 326561489, ''),
('CC02', 'Nike', 'My', 312654725, ''),
('CC03', 'Puma', 'Dai Loan', 2147483647, ''),
('CC04', 'Fila', 'Han Quoc', 133356789, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Manv` varchar(10) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `Diachi` varchar(50) NOT NULL,
  `SDT` int(10) NOT NULL,
  `Gioitinh` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`Manv`, `TenNV`, `Diachi`, `SDT`, `Gioitinh`) VALUES
('N01', 'Thuy Vi', 'Vinh Long', 168933322, 'Nu'),
('N02', 'Van Anh', 'Can Tho', 738293729, 'Nu'),
('N03', 'Diem Huong', 'Hau Giang', 862645687, 'Nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `Masp` varchar(10) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `Macc` varchar(10) NOT NULL,
  `Dongia` int(20) NOT NULL,
  `Ghichu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`Masp`, `TenSP`, `Macc`, `Dongia`, `Ghichu`) VALUES
('AD', 'Giay Adidas', 'CC01', 850000, ''),
('FL', 'Giay Fila', 'CC04', 800000, ''),
('NK', 'Giay Nike', 'CC02', 900000, ''),
('PM', 'Giay Puma', 'CC03', 800000, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  ADD PRIMARY KEY (`Manhap`),
  ADD KEY `Macc` (`Macc`),
  ADD KEY `Manv` (`Manv`),
  ADD KEY `Masp` (`Masp`);

--
-- Chỉ mục cho bảng `chitietxuat`
--
ALTER TABLE `chitietxuat`
  ADD PRIMARY KEY (`Maxuat`),
  ADD KEY `Masp` (`Masp`),
  ADD KEY `Manv` (`Manv`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `Masp` (`Masp`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`Macc`),
  ADD KEY `TenNCC` (`TenNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Manv`),
  ADD KEY `TenNV` (`TenNV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Masp`),
  ADD KEY `Macc` (`Macc`),
  ADD KEY `TenSP` (`TenSP`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  ADD CONSTRAINT `chitietnhap_ibfk_1` FOREIGN KEY (`Masp`) REFERENCES `sanpham` (`Masp`),
  ADD CONSTRAINT `chitietnhap_ibfk_2` FOREIGN KEY (`Macc`) REFERENCES `nhacungcap` (`Macc`),
  ADD CONSTRAINT `chitietnhap_ibfk_3` FOREIGN KEY (`Manv`) REFERENCES `nhanvien` (`Manv`);

--
-- Các ràng buộc cho bảng `chitietxuat`
--
ALTER TABLE `chitietxuat`
  ADD CONSTRAINT `chitietxuat_ibfk_1` FOREIGN KEY (`Masp`) REFERENCES `sanpham` (`Masp`),
  ADD CONSTRAINT `chitietxuat_ibfk_2` FOREIGN KEY (`Manv`) REFERENCES `nhanvien` (`Manv`);

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`Masp`) REFERENCES `sanpham` (`Masp`),
  ADD CONSTRAINT `dondathang_ibfk_2` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Macc`) REFERENCES `nhacungcap` (`Macc`);


--
-- Siêu dữ liệu
--
USE `phpmyadmin`;

--
-- Siêu dữ liệu cho bảng chitietnhap
--

--
-- Siêu dữ liệu cho bảng chitietxuat
--

--
-- Siêu dữ liệu cho bảng dondathang
--

--
-- Siêu dữ liệu cho bảng khachhang
--

--
-- Siêu dữ liệu cho bảng nhacungcap
--

--
-- Siêu dữ liệu cho bảng nhanvien
--

--
-- Siêu dữ liệu cho bảng sanpham
--

--
-- Siêu dữ liệu cho cơ sở dữ liệu qlbg
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
