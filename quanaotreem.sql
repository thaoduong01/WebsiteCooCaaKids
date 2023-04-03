-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 03, 2023 lúc 08:24 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanaotreem`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Category`
--

CREATE TABLE `Category` (
  `Category_ID` int(11) NOT NULL,
  `CatName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `Category`
--

INSERT INTO `Category` (`Category_ID`, `CatName`) VALUES
(5, 'Jean'),
(6, 'Áo Thun'),
(27, '$c_name1'),
(28, 't1'),
(30, 'tq'),
(33, 'Áo Khoác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Order_`
--

CREATE TABLE `Order_` (
  `ID` int(11) NOT NULL,
  `Customer_ID` int(11) NOT NULL,
  `Total` float NOT NULL,
  `Date` datetime NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Product`
--

CREATE TABLE `Product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Price` double(10,2) NOT NULL DEFAULT 0.00,
  `Img` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `View` int(6) NOT NULL DEFAULT 0,
  `Supplier_ID` int(11) DEFAULT NULL,
  `Old_price` double(10,2) NOT NULL DEFAULT 0.00,
  `Special` tinyint(1) NOT NULL DEFAULT 0,
  `Des` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `Product`
--

INSERT INTO `Product` (`ID`, `Name`, `Category_ID`, `Price`, `Img`, `Detail`, `View`, `Supplier_ID`, `Old_price`, `Special`, `Des`) VALUES
(28, 't1', 5, 345.00, '../uploaded/b4.jpg', 'quan jean ', 567, NULL, 450.00, 0, 'KK'),
(30, 'ty', 27, 23.00, '../uploaded/b3.jpeg', NULL, 0, NULL, 0.00, 0, NULL),
(31, 'tu', 27, 34.00, '../uploaded/b4.jpg', 'FFSWEWEQ', 32, NULL, 43.00, 0, NULL),
(32, 'to', 28, 34.00, '../uploaded/b2.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(33, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(36, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(41, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(42, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(43, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(44, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(45, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(47, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(48, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(49, '4', 27, 2.00, '../uploaded/b6.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(52, 'tr', 27, 21.89, '../uploaded/b1.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(53, 'tr', 27, 21.89, '../uploaded/b1.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(54, 't', 28, 21.00, '../uploaded/b1.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(55, 't', 28, 21.00, '../uploaded/b1.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(56, 'tr', 27, 2.00, '../uploaded/b7.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(57, 'tr', 27, 2.00, '../uploaded/b7.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(58, 'tr', 27, 2.00, '../uploaded/b7.jpg', NULL, 0, NULL, 0.00, 0, NULL),
(59, 'r', 27, 21.89, '../uploaded/b7.jpg', NULL, 0, NULL, 0.00, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Supplier`
--

CREATE TABLE `Supplier` (
  `Supplier_ID` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `Supplier`
--

INSERT INTO `Supplier` (`Supplier_ID`, `Name`, `Email`, `Address`) VALUES
(1, 'K', 'k@gmail.com', 'TP HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(100) DEFAULT NULL,
  `Emaill` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Role` tinyint(1) NOT NULL DEFAULT 0,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `User`
--

INSERT INTO `User` (`ID`, `Fullname`, `Emaill`, `Address`, `Username`, `Password`, `Role`, `Status`) VALUES
(1, NULL, NULL, NULL, 'admin', '123', 1, ''),
(2, NULL, NULL, NULL, 'user', '123', 0, ''),
(3, 'Dương Ngọc Thảo', 'ngocthao@gmail.com', 'Cà Mau', 'ngocthao', '123', 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Chỉ mục cho bảng `Order_`
--
ALTER TABLE `Order_`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Supplier_ID` (`Supplier_ID`);

--
-- Chỉ mục cho bảng `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`Supplier_ID`);

--
-- Chỉ mục cho bảng `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Category`
--
ALTER TABLE `Category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `Order_`
--
ALTER TABLE `Order_`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `Category` (`Category_ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Supplier_ID`) REFERENCES `Supplier` (`Supplier_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
