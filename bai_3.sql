-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 09, 2019 lúc 07:45 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai_3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoi`
--

CREATE TABLE `khoi` (
  `ma_khoi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_khoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mon_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mon_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mon_3` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thi_sinh`
--

CREATE TABLE `thi_sinh` (
  `id` int(11) NOT NULL,
  `sbd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uutien` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `makhoi` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thi_sinh`
--

INSERT INTO `thi_sinh` (`id`, `sbd`, `hoten`, `diachi`, `uutien`, `makhoi`) VALUES
(2, 'TS002', 'Dương QUốc Tuấn', 'Hà Tây', '1', 'B'),
(3, 'TS003', 'Nguyễn Thị Vân', 'Hà Nội', '1', 'A'),
(4, 'TS004', 'Dương QUốc Tuấn', 'Hà Tây', '1', 'B'),
(5, 'TS005 ', 'Nguyễn Thị Vân ', 'Hà Nội ', '1', 'D '),
(6, 'TS006', 'Dương QUốc Tuấn', 'Hà Tây', '1', 'C'),
(7, 'TS007', 'hà', 'hồ chí minh', '0', 'A');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khoi`
--
ALTER TABLE `khoi`
  ADD PRIMARY KEY (`ma_khoi`);

--
-- Chỉ mục cho bảng `thi_sinh`
--
ALTER TABLE `thi_sinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thi_sinh`
--
ALTER TABLE `thi_sinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
