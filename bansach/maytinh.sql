-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 07:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maytinh`
--

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idLSP` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThuTu` tinyint(11) NOT NULL DEFAULT '0',
  `UrlHinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DanhGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLSP`, `Ten`, `ThuTu`, `UrlHinh`, `DanhGia`) VALUES
(1, 'BITIS', 1, 'img/hunter/bitis.jpg', 4),
(2, 'BALENCIAGA', 2, 'img/balenciaga/balenciaga.jpg', 5),
(3, 'ADIDAS', 3, 'img/adidas/adidas.jpg', 3),
(4, 'NIKE', 4, 'img/nike/nike.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `idTLSP` int(11) NOT NULL DEFAULT '0',
  `idLSP` int(11) NOT NULL,
  `TenSP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayCapNhat` date NOT NULL DEFAULT '0000-00-00',
  `Gia` int(11) NOT NULL DEFAULT '0',
  `UrlHinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `SoLuongTonKho` int(11) DEFAULT '0',
  `SoLanMua` int(11) NOT NULL DEFAULT '0',
  `DanhGia` int(11) NOT NULL,
  `SaleOff` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idTLSP`, `idLSP`, `TenSP`, `MoTa`, `NgayCapNhat`, `Gia`, `UrlHinh`, `SoLuongTonKho`, `SoLanMua`, `DanhGia`, `SaleOff`) VALUES
(1, 1, 1, 'Giày Thể Thao Nam Bitis Hunter Marvel Captain', '', '2019-06-07', 859000, 'img/hunter/HT1.jpg', 100, 10, 5, 20),
(2, 1, 1, 'Giày Thể Thao Nam Bitis Hunter X Retro Essential Pack', '', '2019-06-07', 899000, 'img/hunter/ht2.jpg', 100, 10, 0, 0),
(3, 1, 1, 'Giày Thể Thao Nam Bitis Hunter Nam Equality | Go For Love - Gentle Love ', '', '2019-06-07', 750000, 'img/hunter/ht2.jpg', 100, 275, 4, 0),
(4, 1, 1, 'Bitis Hunter X Midnight Mystery', 'Giày Thể Thao Cao Cấp Nam Biti\'s Hunter X Midnight Mystery DSUH00400TIM (Tím) ', '2019-06-05', 900000, 'img/hunter/ht4.jpg', 50, 40, 4, 0),
(5, 1, 1, ' Bitis Hunter Nam Choco', 'Giày Thể Thao Biti s Hunter Nam Choco DSMH00601DEN (Đen) - BST Festive On Every Move ', '2019-06-02', 950000, 'img/hunter/ht5.jpg', 60, 40, 5, 0),
(6, 2, 1, ' Sandal Si Cao Su Xám Bitis', '', '2019-05-13', 300000, 'img/sandal/sd1.jpg', 200, 50, 4, 30),
(7, 2, 1, ' Sandal Si Cao Su Xám - Bitis', '', '2019-05-13', 300000, 'img/sandal/sd1.jpg', 200, 50, 0, 0),
(8, 2, 1, '  Sandal Xốp Trẻ Em Biti Mickey Bitis', '', '2019-05-14', 298000, 'img/sandal/sd2.jpg', 300, 80, 4, 10),
(9, 2, 1, ' Sandal Si PU Nam Bitis Đen', '', '2019-05-16', 400000, 'img/sandal/sd3.jpg', 100, 50, 0, 0),
(10, 3, 2, 'BLACK SPEED TRAINER BALENCIAGA', 'Stretch knit trainer with black textured sole', '2019-03-07', 2000000, 'img/balenciaga/speed/sp1.jpg', 300, 200, 3, 0),
(11, 3, 2, 'BLACK/YELLOW SPEED TRAINER BALENCIAGA', 'Trainers with tricolor sole Composition: \r\n80% Polyamide, 20% Elastane', '2019-03-08', 1980000, 'img/balenciaga/speed/sp2.jpg', 100, 100, 5, 0),
(12, 3, 2, 'RED SPEED TRAINER BALENCIAGA', 'Stretch knit trainer with tone-on-tone textured sole', '2019-03-09', 4980000, 'img/balenciaga/speed/sp3.jpg', 400, 150, 4, 0),
(13, 3, 2, 'BLUE SPEED TRAINER BALENCIAGA', 'Trainers with bicolor sole', '2019-03-07', 980000, 'img/balenciaga/speed/sp4.jpg', 100, 150, 4, 0),
(14, 4, 2, 'BLACK TRIPLE S BALENCIAGA', 'Oversized multimaterial sneakers with air bubble inside the sole', '2019-05-07', 3000000, 'img/balenciaga/tripples/tp1.jpg', 2000, 10, 3, 0),
(15, 4, 2, 'YELLOW TRIPLE S BALENCIAGA', 'Oversized multimaterial sneakers with air bubble inside the sole', '2019-05-07', 9010000, 'img/balenciaga/tripples/tp2.jpg', 100, 98, 0, 0),
(16, 4, 2, 'WHITE TRIPLE S BALENCIAGA', 'Oversized multimaterial sneakers with air bubble inside the sole', '2019-05-07', 2400000, 'img/balenciaga/tripples/tp3.jpg', 1000, 400, 3, 0),
(17, 5, 2, 'WHITE TRACK BALENCIAGA', 'Track is made of nylon and mesh for a 100% non leather sneaker', '2019-05-13', 9000000, 'img/balenciaga/track/t1.jpg', 198, 57, 0, 0),
(18, 5, 2, 'BLACK TRACK BALENCIAGA', 'Dynamic sole design with an augmented back to propel feet forward\r\n50mm arch', '2019-05-14', 9000000, 'img/balenciaga/track/t2.jpg', 278, 123, 4, 0),
(19, 5, 2, 'WHITE/ORANGE TRACK BALENCIAGA', 'Written size at the edge of the toe Track embossed at the back of the heel', '2019-04-13', 9000000, 'img/balenciaga/track/t3.jpg', 982, 276, 0, 0),
(20, 6, 2, 'Black Race Runner Sneakers BALENCIAGA', 'Low-top mesh, bonded jersey, and buffed calfskin sneakers in black. Rubberized trim in white at round toe. Tonal elasticized strap at vamp. Lace-up closure. Webbing pull-loop at tongue. Embossed logo at heel tab. Tonal suede trim at heel. Treaded rubber s', '2019-05-17', 5000000, 'img/balenciaga/racerunner/rr1.jpg', 57, 12, 5, 0),
(21, 6, 2, 'Black Race Runner Sneakers BALENCIAGA', 'Low-top mesh, bonded jersey, and buffed calfskin sneakers in black. Rubberized trim in white at round toe. Tonal elasticized strap at vamp. Lace-up closure. Webbing pull-loop at tongue. Embossed logo at heel tab. Tonal suede trim at heel. Treaded rubber s', '2019-05-17', 5000000, 'img/balenciaga/racerunner/rr1.jpg', 57, 12, 0, 0),
(22, 6, 2, 'Grey Race Runner Sneakers BALENCIAGA', 'Low-top mesh, neoprene, and buffed calfskin sneakers in  grey. Rubberized trim in white at round toe. Elasticized strap in blue at vamp. Tonal lace-up closure. Webbing pull-loop in navy at tongue. Embossed logo at heel tab. Tonal suede trim at heel. Foam ', '2019-04-17', 13000000, 'img/balenciaga/racerunner/rr2.jpg', 76, 4, 4, 0),
(23, 7, 3, 'Ultraboost CLIMA x MISSONI Sneakers  Addidas', 'Color: White/White/Activere', '2019-05-17', 1000000, 'img/adidas/ultraboost/ub1.jpg', 100, 78, 4, 0),
(24, 7, 3, 'Giày Adidas chính hãng UltraBoost Clima - ADW901 ', 'Color: Black', '2019-05-10', 1500000, 'img/adidas/ultraboost/ub2.jpg', 126, 300, 5, 0),
(25, 8, 3, 'Adidas Yeezy Boost 700 Addidas', 'Adidas Yeezy 700 chỉ mất chưa đầy 01 năm, từ Tuần lễ thời trang Yeezy Season năm 2017 đến nay, để trở thành đôi sneaker adidas tiếp theo tạo các kỷ lục doanh thu lẫn bản phối chunky sneaker đình đám nhất hiện nay. Yeezy 700 có tên gọi đầy đủ là adidas Yee', '2019-05-11', 500000, 'img/adidas/yeezy/yz1.jpg', 206, 18, 0, 0),
(26, 8, 3, 'Yeezy 350 Static V2 Addidas', 'Electrify your sneaker rotation with the adidas Yeezy Boost 350 V2 Static. This Yeezy 350 V2 comes with a grey and white upper and a white sole. These sneakers released in December 2018 and retailed for $220. You can see what socks you’re wearing in this ', '2019-05-11', 4500000, 'img/adidas/yeezy/yz2.jpg', 121, 14, 5, 0),
(31, 9, 3, 'Giày Adidas Stan Smith Unisex Sneakers Da Trơn Màu Trắng Gót Xanh ', 'Adidas Stan Smith là mẫu giày huyền thoại nổi tiếng bậc nhất của adidas. Xuất hiện lần đầu tiên vào năm 1973 trải qua hơn 45 năm lịch sử nó đã ghi dấu ấn tới hàng triệu người trên thế giới.', '2019-05-13', 1500000, 'img/adidas/stansmith/sm1.jpg', 239, 13, 0, 0),
(32, 10, 3, 'Giày Adidas Alphabounce Instinct Trainers/Runners Sneakers Unisex in Black/Đen/Full Black ', 'Adidas Alphabounce Beyond là mẫu giày chạy trung tính được thiết kế nâng cấp hỗ trợ cho việc tập luyện và hoạt động hằng ngày. Upper với thiết kế lưới nguyên khối hỗ trợ tuyệt vời cho các chuyển động đa chiều. Đệm midsole “phản ứng nhanh” ở phần mu trước ', '2019-05-13', 1011500, 'img/adidas/alphabounce/ab2.jpg', 300, 25, 0, 0),
(33, 11, 4, 'Nike Luna Racer 4 Lightweight Running Black Ghost Green Nike', '', '2019-07-05', 600000, 'img/nike/lunaracer/lr1.jpg', 283, 84, 4, 0),
(34, 12, 4, 'Giày bóng rổ Nike Air Jordan 1 x \"Off-white\" Sneaker unisex nam nữ red/white - đỏ/trắng', 'Giày Off White X Nike Air Jordan là một sản phẩm kết hợp xu hướng Off White đang thống trị xu thế đường phố vẫn với tinh thần Giày Nike Air Jordan kèm với một số chi tiết nổi bật đặc trưng cùa Off White.Chính những điều đó đã mang đến nét mới lạ cho Air J', '2019-04-13', 4000000, 'img/nike/airjordan/aj1.jpg', 213, 81, 0, 0),
(35, 12, 4, 'Air Jordan 6 Retro Nike', 'Originally released in the year Michael Jordan won his first championship ring, the Air Jordan 6 Retro features a sculpted midsole for cushioned stability.', '2019-04-13', 15000000, 'img/nike/airjordan/aj2.jpg', 13, 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `theloaisanpham`
--

CREATE TABLE `theloaisanpham` (
  `idTLSP` int(11) NOT NULL,
  `tenTLSP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `ThuTu` tinyint(11) DEFAULT '0',
  `idLSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theloaisanpham`
--

INSERT INTO `theloaisanpham` (`idTLSP`, `tenTLSP`, `ThuTu`, `idLSP`) VALUES
(1, 'Hunter', 1, 1),
(2, 'Sandal', 2, 1),
(3, 'Speed', 1, 2),
(4, 'Tripple S', 2, 2),
(5, 'Track', 3, 2),
(6, 'Race Runner', 4, 2),
(7, 'Ultra boost', 1, 3),
(8, 'Yeezy', 2, 3),
(9, 'Adidas stansmith', 3, 3),
(10, 'Alphabounce', 4, 3),
(11, 'Luna Racer', 1, 4),
(12, 'Air Jordan', 1, 4),
(23, 'SDASDASMAMA', 121, 0),
(25, 'NANA12', 127, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `HoTen` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dienthoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgayDangKy` date DEFAULT '0000-00-00',
  `idGroup` int(11) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` tinyint(1) DEFAULT NULL,
  `role` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `HoTen`, `Username`, `Password`, `DiaChi`, `Dienthoai`, `Email`, `NgayDangKy`, `idGroup`, `NgaySinh`, `GioiTinh`, `role`) VALUES
(1, 'Nguyễn Văn Tí', 'ti', 'c4ca4238a0b923820dcc509a6f75849b', '456, abc chấm  cơm chấm vê en', '089874563', 'ti@gmail.com', '2019-05-17', 1, '1998-02-10', 1, 1),
(2, 'Lê Văn Tèo', 'teo', 'c4ca4238a0b923820dcc509a6f75849b', '68 Xuan Diệu', '0782333821', 'vanteo@gmail.com', '2016-07-08', 1, '1998-07-08', 2, 1),
(3, 'admin', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, 'admin@gmail.com', '0000-00-00', 0, NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idLSP`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Indexes for table `theloaisanpham`
--
ALTER TABLE `theloaisanpham`
  ADD PRIMARY KEY (`idTLSP`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `theloaisanpham`
--
ALTER TABLE `theloaisanpham`
  MODIFY `idTLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
