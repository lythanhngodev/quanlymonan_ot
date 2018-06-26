-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2018 lúc 03:57 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlmonan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAKH` varchar(4) NOT NULL,
  `NAM` varchar(4) NOT NULL,
  `TGMUA` time NOT NULL,
  `SL` int(11) NOT NULL,
  `THANHTIEN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MAKH` varchar(4) NOT NULL,
  `HO` varchar(50) NOT NULL,
  `TEN` varchar(20) NOT NULL,
  `DIACHI` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`MAKH`, `HO`, `TEN`, `DIACHI`) VALUES
('KH02', 'Lý', 'Ngô1', 'VL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_mon`
--

CREATE TABLE `loai_mon` (
  `MAL` varchar(2) NOT NULL,
  `TENL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_mon`
--

INSERT INTO `loai_mon` (`MAL`, `TENL`) VALUES
('12', 'mới thêm'),
('L1', 'Canh'),
('L2', 'Kho'),
('L3', 'Cơm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon_an`
--

CREATE TABLE `mon_an` (
  `MAM` varchar(4) NOT NULL,
  `TENMON` varchar(100) NOT NULL,
  `HINH` text NOT NULL,
  `GIA` int(11) NOT NULL,
  `MAL` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAKH`,`NAM`,`TGMUA`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MAKH`);

--
-- Chỉ mục cho bảng `loai_mon`
--
ALTER TABLE `loai_mon`
  ADD PRIMARY KEY (`MAL`);

--
-- Chỉ mục cho bảng `mon_an`
--
ALTER TABLE `mon_an`
  ADD PRIMARY KEY (`MAM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
