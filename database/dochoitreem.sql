-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 03:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dochoitreem`
--

-- --------------------------------------------------------

--
-- Table structure for table `baocao`
--

CREATE TABLE `baocao` (
  `TV_MA` int(11) NOT NULL,
  `SP_MA` int(11) NOT NULL,
  `BC_NOIDUNG` varchar(80) DEFAULT NULL,
  `BC_THOIDIEM` datetime DEFAULT NULL,
  `BC_TRANGTHAI` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `TV_MA` int(11) NOT NULL,
  `SP_MA` int(11) NOT NULL,
  `DG_NOIDUNG` text DEFAULT NULL,
  `DG_THOIDEIM` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dotuoi`
--

CREATE TABLE `dotuoi` (
  `DT_MA` int(11) NOT NULL,
  `DT_TEN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dotuoi`
--

INSERT INTO `dotuoi` (`DT_MA`, `DT_TEN`) VALUES
(8, '2 đến 4 tuổi'),
(9, 'Sơ sinh đến 10 tuổi'),
(10, '5 đến 7 tuổi'),
(11, '8 đến 13 tuổi'),
(12, 'Tất cả');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `HINH_MA` int(11) NOT NULL,
  `HINH_SRC` varchar(200) NOT NULL,
  `SP_MA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `LOAISP_MA` int(11) NOT NULL,
  `LOAISP_TEN` varchar(12) NOT NULL,
  `LOAISP_TRANGTHAI` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`LOAISP_MA`, `LOAISP_TEN`, `LOAISP_TRANGTHAI`) VALUES
(3, 'Lắp Ráp', 1),
(4, 'Xe Robot', 1),
(5, 'Búp Bê', 1),
(6, 'Gấu Bông', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `NV_MA` int(11) NOT NULL,
  `NV_TEN` varchar(50) NOT NULL,
  `NV_NGAYSINH` date DEFAULT NULL,
  `NV_CMND` char(15) NOT NULL,
  `NV_SDT` char(11) DEFAULT NULL,
  `NV_DC` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`NV_MA`, `NV_TEN`, `NV_NGAYSINH`, `NV_CMND`, `NV_SDT`, `NV_DC`) VALUES
(2, 'Quych Di', '2021-12-24', '352444444444', '0399012157', 'Tri Ton - An Giang');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `SP_MA` int(11) NOT NULL,
  `SP_TEN` varchar(200) NOT NULL,
  `SP_MOTA` varchar(200) NOT NULL,
  `SP_SL` int(11) NOT NULL,
  `SP_DVT` varchar(8) NOT NULL,
  `SP_TRANGTHAI` int(2) NOT NULL,
  `SP_GIA` decimal(11,2) NOT NULL,
  `SP_TINHTRANG` varchar(200) DEFAULT NULL,
  `LOAISP_MA` int(11) NOT NULL,
  `DT_MA` int(11) NOT NULL,
  `TV_MA` int(11) NOT NULL,
  `avata` varchar(120) DEFAULT NULL,
  `NGAYDANG` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TK_TEN` varchar(20) NOT NULL,
  `TK_MATKHAU` text NOT NULL,
  `TK_LOAI` int(11) NOT NULL,
  `TK_TRANGTHAI` tinyint(1) NOT NULL,
  `TV_MA` int(11) DEFAULT NULL,
  `NV_MA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TK_TEN`, `TK_MATKHAU`, `TK_LOAI`, `TK_TRANGTHAI`, `TV_MA`, `NV_MA`) VALUES
('quychdi', '12345678', 0, 1, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `TV_MA` int(11) NOT NULL,
  `TV_TEN` varchar(50) NOT NULL,
  `TV_NGAYSINH` date NOT NULL,
  `TV_SDT` varchar(11) NOT NULL,
  `TV_DC` text NOT NULL,
  `TV_NGAYTHAMGIA` date DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`TV_MA`, `TV_TEN`, `TV_NGAYSINH`, `TV_SDT`, `TV_DC`, `TV_NGAYTHAMGIA`, `email`) VALUES
(15, 'QUÝCH ĐI ', '2000-12-24', '0399012157', 'Phường Xuân Khánh - Quận Ninh Kiều - TP.Cần Thơ', '2021-12-25', 'isiquch2014@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baocao`
--
ALTER TABLE `baocao`
  ADD PRIMARY KEY (`TV_MA`,`SP_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`TV_MA`,`SP_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Indexes for table `dotuoi`
--
ALTER TABLE `dotuoi`
  ADD PRIMARY KEY (`DT_MA`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`HINH_MA`),
  ADD KEY `SP_MA` (`SP_MA`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`LOAISP_MA`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`NV_MA`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`SP_MA`),
  ADD KEY `TV_MA` (`TV_MA`),
  ADD KEY `LOAISP_MA` (`LOAISP_MA`),
  ADD KEY `DT_MA` (`DT_MA`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TK_TEN`),
  ADD KEY `NV_MA` (`NV_MA`),
  ADD KEY `TV_MA` (`TV_MA`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`TV_MA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dotuoi`
--
ALTER TABLE `dotuoi`
  MODIFY `DT_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `HINH_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `LOAISP_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `NV_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `SP_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `TV_MA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baocao`
--
ALTER TABLE `baocao`
  ADD CONSTRAINT `baocao_ibfk_1` FOREIGN KEY (`TV_MA`) REFERENCES `thanhvien` (`TV_MA`),
  ADD CONSTRAINT `baocao_ibfk_2` FOREIGN KEY (`SP_MA`) REFERENCES `sanpham` (`SP_MA`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`TV_MA`) REFERENCES `thanhvien` (`TV_MA`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`SP_MA`) REFERENCES `sanpham` (`SP_MA`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`SP_MA`) REFERENCES `sanpham` (`SP_MA`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`TV_MA`) REFERENCES `thanhvien` (`TV_MA`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`LOAISP_MA`) REFERENCES `loaisp` (`LOAISP_MA`),
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`DT_MA`) REFERENCES `dotuoi` (`DT_MA`);

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`NV_MA`) REFERENCES `nhanvien` (`NV_MA`),
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`TV_MA`) REFERENCES `thanhvien` (`TV_MA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
