-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2018 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoatuoialumbale`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `idCTDH` int(20) NOT NULL,
  `idDH` int(20) NOT NULL,
  `idSP` int(20) NOT NULL,
  `giaSP` int(20) NOT NULL,
  `soluongDH` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`idCTDH`, `idDH`, `idSP`, `giaSP`, `soluongDH`) VALUES
(1, 1, 6, 1000000, 1),
(2, 1, 24, 500000, 2),
(3, 3, 36, 750000, 1),
(4, 4, 15, 450000, 2),
(5, 4, 12, 600000, 2),
(6, 4, 3, 500000, 1),
(7, 5, 31, 1600000, 99),
(8, 6, 34, 650000, 1),
(9, 6, 40, 750000, 1),
(10, 6, 41, 1100000, 1),
(11, 7, 21, 900000, 1),
(12, 7, 17, 800000, 1),
(13, 7, 35, 1500000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(20) NOT NULL,
  `idUser` int(20) NOT NULL,
  `nameDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailDH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tongtienDH` int(20) NOT NULL,
  `ngayDH` date NOT NULL,
  `statusDH` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `idUser`, `nameDH`, `phoneDH`, `addressDH`, `emailDH`, `tongtienDH`, `ngayDH`, `statusDH`) VALUES
(1, 5, 'Nguyễn Hữu Thiên', '01234567890', 'Số 10 đường 13, Thiên Đàng, TP. Cửu U', 'huuthien@gmail.com', 2000000, '2018-03-08', 3),
(3, 6, 'Trần Ái Vi', '01234567890', 'Số 1 Trúc Lâu, đường Thăng Thiên', 'aivitran@gmail.com', 750000, '2018-03-11', 3),
(4, 7, 'Trần Lê Ngọc Diễm', '01234567890', 'Trúc Lâu số 1, Tinh Linh Sâm Lâm', 'ngocdiem@gmail.com', 2600000, '2018-03-19', 2),
(5, 9, 'Hoa Lam Thần', '01234567890', 'Cửu Thiên Thánh Địa', 'hoalamthan@gmail.com', 158400000, '2018-03-23', 2),
(6, 8, 'Phan Thiên Tâm', '01234567890', 'Số 10 đường 13, Thiên Đàng, TP. Cửu U', 'thientam@gmail.com', 2500000, '2018-04-01', 1),
(7, 10, 'Hứa Bán Thần', '01234567890', 'tiểu miếu sông Vong Thủy', 'huatiensinh@gmail.com', 3200000, '2018-04-22', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idCL` int(20) NOT NULL,
  `tenCL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutuCL` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idCL`, `tenCL`, `thutuCL`) VALUES
(1, 'Hoa Bó', 1),
(2, 'Hoa Chậu', 2),
(3, 'Hoa Giỏ', 3),
(4, 'Hoa Hộp', 4),
(5, 'Hoa Kỷ Niệm', 5),
(6, 'Hoa Sinh Nhật', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `idPH` int(20) NOT NULL,
  `idUser` int(20) NOT NULL,
  `namePH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addressPH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonePH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tieudePH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motaPH` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayPH` date NOT NULL,
  `statusPH` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`idPH`, `idUser`, `namePH`, `addressPH`, `phonePH`, `tieudePH`, `motaPH`, `ngayPH`, `statusPH`) VALUES
(1, 2, 'Tuấn Hùng', 'Số 7 đường 13, Thiên Đàng, TP. Cửu U', '1234567890', 'Tuyệt Vời', '<p><strong>Hoa của shop rất&nbsp;ư l&agrave; tuyệt vời&nbsp;ạ.</strong></p>\r\n', '2017-05-19', 1),
(2, 0, 'Dân Thường', 'nhà đối diện', '2147483647', 'Shop đẹp', '<p><em>Nh&igrave;n bề ngo&agrave;i cứ ngỡ l&agrave; cung&nbsp;điện...</em></p>\r\n', '2017-06-01', 0),
(3, 0, 'Cô hàng xóm', 'sát vách', '2147483647', 'Anh chủ shop đẹp trai', '<p>Cho hỏi anh chủ shop c&oacute; người y&ecirc;u chưa&nbsp;ạ?</p>\r\n', '2018-04-16', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(20) NOT NULL,
  `idCL` int(20) NOT NULL,
  `maSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenSP_kd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giaSP` int(20) NOT NULL,
  `motaSP` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idCL`, `maSP`, `tenSP`, `tenSP_kd`, `giaSP`, `motaSP`, `hinhanhSP`) VALUES
(1, 6, 'SN001', 'Màu Xanh Mê Hoặc', 'mau xanh me hoac', 650000, '<p>- <strong>Hoa tươi Alumbale</strong> - Nếu bạn chưa bao giờ tin rằng, c&oacute; thể &ocirc;m được những khoảng trời xanh ngắt b&igrave;nh y&ecirc;n v&agrave; thơ mộng v&agrave;o l&ograve;ng m&igrave;nh th&igrave; b&oacute; hoa M&Agrave;U XANH M&Ecirc; HOẶC sẽ khiến bạn tin điều đ&oacute;.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm</strong>:</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng trắng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Green Wicky (5 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero xanh (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao biển (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; trang tr&iacute;, giấy g&oacute;i, nơ rơm độc đ&aacute;o.</p>\r\n', 'mauxanhmehoac.png'),
(3, 2, 'HC001', 'Cẩm Tú Cầu Hoa', 'cam tu cau hoa', 500000, '<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Chậu sứ tr&ograve;n.</p>\r\n\r\n<p>&nbsp; &nbsp; + Sỏi trang tr&iacute;.</p>\r\n\r\n<p>&nbsp; &nbsp; + Nơ Sản phẩm Cẩm T&uacute; Cầu Chậu May Mắn.</p>\r\n', 'camtucauhoa.png'),
(4, 4, 'HH001', 'Khoảng Trời Mộng Mơ', 'khoang troi mong mo', 360000, '<p>- <strong>L&atilde;ng hoa bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + 1 chậu Hoa hồng v&agrave;ng trung.</p>\r\n\r\n<p>&nbsp; &nbsp; + 1 chậu Sống&nbsp;đời k&eacute;p hồng mini.</p>\r\n\r\n<p>&nbsp; &nbsp; + 1 chậu Nguyệt quế mini.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hộp gỗ vu&ocirc;ng.</p>\r\n', 'khoangtroimongmo.png'),
(5, 3, 'HG001', 'Mong Ước Kỷ Niệm Xưa', 'mong uoc ky niem xua', 400000, '<p><strong>- Giỏ hoa gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng nh&aacute;nh cam - 10 c&agrave;nh</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng c&agrave;nh hồng - 20 c&agrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp; + C&aacute;t tường trắng - 5 c&agrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; dương sỉ.</p>\r\n\r\n<p>&nbsp; &nbsp; + Giỏ m&acirc;y trắng.</p>\r\n', 'monguockyniemxua.png'),
(6, 5, 'KN001', 'Hoa Chúc Mừng', 'hoa chuc mung', 1000000, '<p><strong>- Hoa tươi Alumbale</strong> - Sinh nhật, khai trương, thăng chức hay một dịp đặc biệt, bất kỳ ai cũng muốn kh&ocirc;ng gian quanh m&igrave;nh rực rỡ sắc hoa để mang đến những điều may mắn, tốt đẹp. Một giỏ hoa ch&uacute;c mừng với t&ocirc;ng m&agrave;u v&agrave;ng của hướng dương kết hợp c&ugrave;ng những đ&oacute;a hồng v&agrave;ng, cam như &aacute;nh mặt trời tỏa s&aacute;ng l&agrave; m&oacute;n qu&agrave; tuyệt vời để bạn gửi lời ch&uacute;c tốt đẹp của m&igrave;nh.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + 5 c&agrave;nh Hướng dương.</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh hoa hồng v&agrave;ng.</p>\r\n\r\n<p>&nbsp; &nbsp; + 20 c&agrave;nh hoa hồng cam.</p>\r\n\r\n<p>&nbsp; &nbsp; + 5 c&agrave;nh Green Wicky.</p>\r\n\r\n<p>&nbsp; &nbsp; + 5 c&agrave;nh lan vũ nữ.</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh l&aacute; chanh.</p>\r\n\r\n<p>&nbsp; &nbsp; + 20 c&agrave;nh dương x&iacute;.</p>\r\n\r\n<p>&nbsp; &nbsp; + Foam, giỏ m&acirc;y.</p>\r\n', 'chucmung.png'),
(7, 1, 'HB002', 'Bước Nhảy Hoàn Vũ', 'buoc nhay hoan vu', 600000, '<p>- <strong>B&oacute; hoa bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Rose Peach Avalanche</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh Rose Sweet Avalanche</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh C&aacute;t tường trắng</p>\r\n\r\n<p>&nbsp; &nbsp; + 5 c&agrave;nh Calimero trắng</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh L&aacute; chanh</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh Giấy v&acirc;n long hồng nhạt</p>\r\n\r\n<p>&nbsp; &nbsp; + Giấy lưới hồng Nơ kem 2cm.</p>\r\n', 'buocnhayhoanvu.png'),
(8, 1, 'HB003', 'Bó Hoa Chân Tình', 'bo hoa chan tinh', 450000, '<p>- <strong>Hoa tươi Alumbale</strong> - Một B&oacute; ch&acirc;n t&igrave;nh tươi thắm, chất lượng được mang đến trực tiếp từ trang trại của Hoa tươi Alumbale nhưng gi&aacute; cả lại v&ocirc; c&ugrave;ng phải chăng lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu d&agrave;nh cho bạn v&agrave;o những ng&agrave;y lễ, tết hay những dịp quan trọng để tặng thầy c&ocirc;, đồng nghiệp, bạn b&egrave; trong mức ng&acirc;n s&aacute;ch cho ph&eacute;p.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong> 3 b&ocirc;ng hướng dương, hoặc 7 b&ocirc;ng bồng Hoa tươi Alumbale; c&aacute;c loại hoa phụ: Calimero hoặc Thủy Ti&ecirc;n hoặc Cẩm Chướng hoặc Sao biển hoặc C&aacute;t tường hoặc Green Wicky; l&aacute; trang tr&iacute;.</p>\r\n', 'bochantinh.png'),
(9, 1, 'BH004', 'Cảm Ơn Tình Yêu', 'cam on tinh yeu', 400000, '<p>- <strong>Hoa tươi Alumbale</strong> - Cuộc sống n&agrave;y ngắn lắm, nếu bạn thật l&ograve;ng thương y&ecirc;u ai đ&oacute; th&igrave; h&atilde;y tr&acirc;n trọng v&agrave; biết ơn người đ&oacute; v&igrave; đ&atilde; cho bạn biết thế n&agrave;o l&agrave; t&igrave;nh y&ecirc;u. H&atilde;y cảm ơn cuộc đời v&igrave; đ&atilde; mang người đ&oacute; đến b&ecirc;n bạn, để những khi đau buồn hay khi cần một chỗ dựa, vẫn c&oacute; họ cạnh b&ecirc;n để gi&uacute;p đ&ocirc;i ch&acirc;n bạn vững v&agrave;ng hơn.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + C&aacute;t tường (5 c&agrave;nh).&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao biển (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Lan chi (1 b&oacute;).</p>\r\n\r\n<p>&nbsp; &nbsp; + Đế nhựa, giấy g&oacute;i, nơ.</p>\r\n', 'camontinhyeu.png'),
(10, 1, 'HB005', 'Bà Xã Yêu', 'ba xa yeu', 1300000, '<p>- <strong>Hoa tươi Alumbale</strong> - Hạnh ph&uacute;c nhất trong t&igrave;nh y&ecirc;u kh&ocirc;ng phải l&agrave; nắm giữ được b&agrave;n tay của một người nhất nhất kh&ocirc;ng rời, m&agrave; l&agrave; khi trải qua bao nhi&ecirc;u mất m&aacute;t đổi thay, họ vẫn trở về nắm lấy tay bạn. Hiểu điều đ&oacute;, b&oacute; hoa B&Atilde; X&Atilde; Y&Ecirc;U được thiết kế như b&agrave;i t&igrave;nh ca &ecirc;m &aacute;i thay cho lời h&aacute;t ngọt ng&agrave;o nhắn nhủ người y&ecirc;u thương rằng &ldquo;D&ugrave; cho mưa t&ocirc;i xin đưa em đến cuối cuộc đời&rdquo;.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm: </strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng t&iacute;m (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero t&iacute;m (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; +&nbsp; Thủy ti&ecirc;n trắng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Giấy g&oacute;i, nơ.</p>\r\n', 'baxayeu.png'),
(11, 2, 'HC002', 'Cánh Bướm Hồ Điệp', 'canh buom ho diep', 350000, '<p>- <strong>Hoa tươi Alumbale</strong> &ndash; Lan hồ điệp l&agrave; lo&agrave;i hoa đại diện cho vẻ đẹp ho&agrave;n hảo bởi sự đối xứng giữa c&aacute;c c&aacute;nh hoa giống như những ch&uacute; bướm đang đập c&aacute;nh trong kh&ocirc;ng trung. Nhẹ nh&agrave;ng nhưng kh&ocirc;ng ủy mị, sang trọng nhưng vẫn gần gũi, C&Aacute;NH BƯỚM HỒ ĐIỆP chinh phục người y&ecirc;u hoa ngay c&aacute;i nh&igrave;n đầu ti&ecirc;n.<br />\r\n- <strong>Sản phẩm bao gồm: </strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp; </strong>+<strong> </strong>Lan tiểu hồ điệp (4 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + chậu sứ, trang tr&iacute;.</p>\r\n', 'canhbuomhodiep.png'),
(12, 2, 'HC003', 'Nụ Cười Đáng Yêu', 'nu cuoi dang yeu', 600000, '<p>- <strong>Hoa tươi Alumbale</strong> - Những b&ocirc;ng hoa c&uacute;c Pico nhỏ nhắn, xinh xinh như nụ cười duy&ecirc;n d&aacute;ng đem đến cho người nhận một ng&agrave;y đầy niềm vui. Sắc v&agrave;ng rực rỡ của hoa c&ograve;n l&agrave;m bừng s&aacute;ng kh&ocirc;ng gian, tạo điểm nhấn cho căn ph&ograve;ng căng tr&agrave;n sức sống.&nbsp;</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + C&uacute;c pico trung (4 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + C&uacute;c pico mini (2 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Nguyệt quế (2 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Giỏ m&acirc;y.</p>\r\n\r\n<p>- Qu&yacute; kh&aacute;ch vui l&ograve;ng đặt trước 2 ng&agrave;y đối với mẫu n&agrave;y để đảm bảo mẫu m&atilde; v&agrave; số lượng hoa như &yacute;.</p>\r\n', 'nucuoidangyeu.png'),
(13, 2, 'HC004', 'Mùa Hè Rực Rỡ', 'mua he ruc ro', 550000, '<p>- <strong>Hoa tươi Alumbale</strong> - Khi diện t&iacute;ch những căn nh&agrave; phố kh&aacute; chật chội, bạn c&oacute; thể mang một khu vườn m&ugrave;a h&egrave; rực rỡ bằng những loại hoa chậu tuyệt đẹp v&agrave;o nh&agrave; để thỏa m&atilde;n niềm y&ecirc;u th&iacute;ch chăm s&oacute;c c&acirc;y cối của m&igrave;nh. Đặt khu vườn hoa n&agrave;y tr&ecirc;n b&agrave;n kh&aacute;ch hay ban c&ocirc;ng sẽ g&oacute;p phần tạo kh&ocirc;ng kh&iacute; trong l&agrave;nh, xanh m&aacute;t khi bước v&agrave;o nh&agrave;.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Chậu thu hải đường (1 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Sống đời trung k&eacute;p (1 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; +&nbsp; Sống đời mini k&eacute;p (2 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + C&uacute;c pico mini (2 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hộp gỗ vu&ocirc;ng 20cm.</p>\r\n\r\n<p>- <strong>Ghi ch&uacute;:</strong> Qu&yacute; kh&aacute;ch vui l&ograve;ng đặt trước 2 ng&agrave;y đối với mẫu n&agrave;y để đảm bảo mẫu m&atilde; v&agrave; số lượng hoa như &yacute;.</p>\r\n', 'muaherucro.png'),
(14, 2, 'HC005', 'Nhịp Cầu Trái Tim', 'nhip cau trai tim', 500000, '<p>- <strong>Hoa Tươi Alumbale</strong> - C&ograve;n g&igrave; tuyệt vời hơn khi giữa nhịp sống hối hả v&agrave; c&ocirc;ng việc bận rộn, căng thẳng, được thư gi&atilde;n tinh thần bằng m&agrave;u xanh dịu m&aacute;t v&agrave; m&agrave;u đỏ ấm nồng của những b&ocirc;ng hoa Hồng M&ocirc;n? Ngo&agrave;i &yacute; nghĩa biểu tượng cho t&igrave;nh cảm ch&acirc;n th&agrave;nh th&igrave; một điều th&uacute; vị nữa khiến Hồng M&ocirc;n rất được ưa chuộng đ&oacute; l&agrave; c&oacute; thể tặng cho tất cả mọi người trong tất cả c&aacute;c dịp như nhịp cầu của tr&aacute;i tim vậy.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hồng M&ocirc;n 2 th&acirc;n (3 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + giỏ m&acirc;y tr&ograve;n.</p>\r\n\r\n<p>- <strong>Ghi ch&uacute;:</strong> Qu&yacute; kh&aacute;ch vui l&ograve;ng đặt trước 2 ng&agrave;y đối với mẫu n&agrave;y để đảm bảo mẫu m&atilde; v&agrave; số lượng hoa như &yacute;.</p>\r\n', 'nhipcautraitim.png'),
(15, 2, 'HC006', 'Vườn Yêu Thương', 'vuon yeu thuong', 450000, '<p>- <strong>Hoa tươi Alumbale</strong> - Với những ai y&ecirc;u hoa th&igrave; VƯỜN Y&Ecirc;U THƯƠNG l&agrave; &yacute; tưởng tuyệt vời gi&uacute;p t&acirc;m hồn của bạn dịu d&agrave;ng v&agrave; y&ecirc;n b&igrave;nh hơn khi c&oacute; thể linh hoạt đặt ch&uacute;ng ở bất cứ nơi n&agrave;o bạn th&iacute;ch. Đặc biệt, VƯỜN Y&Ecirc;U THƯƠNG được kết hợp từ những loại hoa rất dễ chăm s&oacute;c, độ bền cao c&ugrave;ng m&agrave;u sắc sống động, bạn sẽ cảm thấy thật thoải m&aacute;i khi tự tay chăm s&oacute;c v&agrave; thưởng thức vẻ đẹp của ch&uacute;ng mỗi ng&agrave;y.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Sống đời mini k&eacute;p (4 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + C&uacute;c pico mini (3 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Giỏ m&acirc;y.</p>\r\n\r\n<p>- <strong>Ghi ch&uacute;:</strong> Qu&yacute; kh&aacute;ch vui l&ograve;ng đặt trước 2 ng&agrave;y đối với mẫu n&agrave;y để đảm bảo mẫu m&atilde; v&agrave; số lượng hoa như &yacute;.</p>\r\n', 'vuonyeuthuong.png'),
(16, 3, 'HG002', 'Bụi Phấn Kỷ Niệm', 'bui phan ky niem', 650000, '<p>- <strong>Giỏ hoa bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh C&uacute;c nh&aacute;nh trắng.</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh C&uacute;c nh&aacute;nh cam.</p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh Dương sỉ - 10 c&agrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp; + Giỏ giấy.</p>\r\n', 'buiphankiniem.png'),
(17, 4, 'HH002', 'Thu Hải Đường Yêu Thương', 'thu hai duong yeu thuong', 800000, '<p>- <strong>Hoa tươi Alumbale</strong> - Một chậu Thu hải đường tr&ecirc;n b&agrave;n l&agrave;m việc hay căn ph&ograve;ng kh&ocirc;ng những l&agrave;m bừng s&aacute;ng kh&ocirc;ng gian m&agrave; c&ograve;n mang đến niềm vui v&agrave; may mắn cho gia chủ. Sắc m&agrave;u rực rỡ của <em>THU HẢI ỜNG Y&Ecirc;U THƯƠNG</em> như ngọn lửa nh&oacute;m l&ecirc;n niềm tin v&agrave; hạnh ph&uacute;c sẽ l&agrave; m&oacute;n qu&agrave; tuyệt vời để d&agrave;nh tặng bạn b&egrave; hay người th&acirc;n trong những dịp lễ hay những ng&agrave;y đặc biệt.<br />\r\n- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Thu hải đường (1 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hộp giấy vu&ocirc;ng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Nơ trang tr&iacute;.</p>\r\n', 'thuhaiduongyeuthuong.png'),
(18, 4, 'HH003', 'Ly Ly Kiêu Hãnh', 'ly ly kieu hanh', 200000, '<p>- <strong>Hoa Tươi Alumbale</strong> - Như những ng&ocirc;i sao mang đến may mắn v&agrave; hy vọng, hoa Ly kh&ocirc;ng chỉ tượng trưng cho sự tinh tế, sang trọng m&agrave; c&ograve;n vươn cao đầy ki&ecirc;u h&atilde;nh, thắp s&aacute;ng cả kh&ocirc;ng gian sống. Với thiết kế độc đ&aacute;o đặt trong chậu giấy xinh xắn, d&ugrave; l&agrave;m qu&agrave; tặng hay trang tr&iacute;, <em>LILY KI&Ecirc;U H&Atilde;NH</em> lu&ocirc;n khiến người kh&aacute;c kh&ocirc;ng thể n&agrave;o rời mắt v&igrave; vẻ đẹp tuyệt vời của m&igrave;nh.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Chậu lily thường.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hộp giấy hoặc chậu nhựa nhập khẩu.</p>\r\n', 'lylykieuhanh.png'),
(19, 4, 'HH004', 'Những Mặt Trời Nhỏ', 'nhung mat troi nho', 600000, '<p>- <strong>Hoa tươi Alumbale </strong>- Nếu được hỏi lo&agrave;i hoa n&agrave;o l&agrave; m&oacute;n qu&agrave; của &aacute;nh mặt trời, c&acirc;u trả lời sẽ l&agrave; những đ&oacute;a hướng dương. Bởi thế, hoa mang đến cho người nhận niềm vui, nụ cười v&agrave; một ng&agrave;y tỏa nắng. Trong c&aacute;c buổi tiệc sinh nhật hay ch&uacute;c mừng, mọi người thường tặng nhau hoa hướng dương vừa để thể hiện cảm ch&acirc;n th&agrave;nh vừa l&agrave; l&agrave; th&ocirc;ng điệp cầu ch&uacute;c người nhận được lu&ocirc;n rực rỡ, tỏa s&aacute;ng như mặt trời.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hướng dương (5 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng v&agrave;ng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng cam (10 c&agrave;nh)</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao t&iacute;m (1 b&oacute;).</p>\r\n\r\n<p>&nbsp; &nbsp; + Đu&ocirc;i chồn (1 b&oacute;)</p>\r\n\r\n<p>&nbsp; &nbsp; + Dương xỉ (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hộp gỗ, foam.</p>\r\n', 'nhungmattroibecon.png'),
(20, 4, 'HH005', 'Giấc Mơ Ngọt Ngào', 'giac mo ngot ngao', 600000, '<p>- <strong>Hoa tươi Alumbale</strong>- Dễ thương, đ&aacute;ng y&ecirc;u với m&agrave;u hồng tinh tế, c&ugrave;ng sắc t&iacute;m mộng mơ, lẵng hoa l&agrave; n&eacute;t đẹp được vẽ n&ecirc;n từ những GIẤC MƠ NGỌT NG&Agrave;O của đ&ocirc;i lứa y&ecirc;u nhau.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng m&agrave;u hồng (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero t&iacute;m (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + M&otilde;m s&oacute;i (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; trang tr&iacute;, Hộp gỗ.</p>\r\n', 'giacmongotngao.png'),
(21, 4, 'HH006', 'Vòng Tay Tặng Mẹ', 'vong tay tang me', 900000, '<p>- <strong>Hoa tươi Alumbale</strong> - V&ograve;ng tay mẹ l&agrave; h&igrave;nh ảnh th&acirc;n thương nhất trong l&ograve;ng mỗi ch&uacute;ng ta những khi nhớ về mẹ. Giỏ hoa<em> V&Ograve;NG TAY MẸ</em> với sự kết hợp từ m&agrave;u xanh hy vọng của Green Wicky bao quanh &ocirc;m lấy sắc đỏ tươi thắm của thủy ti&ecirc;n, hoa hồng Red Naomi, cẩm chướng như t&aacute;i hiện một c&aacute;ch sống động k&yacute; ức ngọt ng&agrave;o của một thuở ấu thơ b&ecirc;n mẹ. Đ&acirc;y l&agrave; m&oacute;n qu&agrave; mang b&agrave;y tỏ l&ograve;ng biết ơn v&agrave; những cảm x&uacute;c ch&acirc;n th&agrave;nh để bạn tặng cho đấng sinh th&agrave;nh trong những dịp đặc biệt, nhất l&agrave; Ng&agrave;y của Mẹ.&nbsp;</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng Red Naomi (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Green Wicky (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Thủy ti&ecirc;n đỏ (10 c&agrave;nh,).</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng đơn đỏ (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao biển (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; trang tr&iacute;, phụ liệu.</p>\r\n', 'vongtayme.png'),
(22, 6, 'SN002', 'Màu Trắng Tinh Khôi', 'mau trang tinh khoi', 350000, '<p>- <strong>Hoa tươi Alumbale</strong> - Phụ nữ cũng giống như m&agrave;u trắng - tưởng chừng v&ocirc; c&ugrave;ng đơn giản, dễ kh&aacute;m ph&aacute; nhưng lại l&agrave; thứ sắc m&agrave;u phức tạp nhất trong tất cả gam m&agrave;u. Thế n&ecirc;n, khi bạn gửi đến người phụ nữ m&igrave;nh y&ecirc;u thương đ&oacute;a hoa <em>M&Agrave;U TRẮNG TINH KH&Ocirc;I</em> n&agrave;y cũng đồng nghĩa với lời nhắn nhủ: &quot;Em như một kh&uacute;c ca trong veo nhưng cũng đầy b&iacute; ẩn với anh đấy!&quot;</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng trắng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao biển (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + C&aacute;t tường trắng (5 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Lan chi (1 b&oacute;).</p>\r\n\r\n<p>&nbsp; &nbsp; + Đế nhựa, Giấy g&oacute;i, nơ.</p>\r\n', 'mautrangtinhkhoi.png'),
(23, 6, 'SN003', 'Một Ngày Để Nhớ', 'mot ngay de nho', 700000, '<p>- <strong>Hoa tươi Alumbale</strong> - Những x&uacute;c cảm tuyệt vời, những lời ch&uacute;c ngọt ng&agrave;o, những khoảnh khắc l&atilde;ng mạn, những y&ecirc;u thương ch&acirc;n th&agrave;nh, tất cả sẽ được ghi dấu lại bằng b&oacute; hoa <em>MỘT NG&Agrave;Y ĐỂ NHỚ</em>. Chẳng ai c&oacute; thể giấu nổi x&uacute;c động khi nhận được m&oacute;n qu&agrave; độc đ&aacute;o n&agrave;y trong một ng&agrave;y đặc biệt.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng hồng nhạt (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng đậm (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Thủy ti&ecirc;n (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero - 10 c&agrave;nh.</p>\r\n\r\n<p>&nbsp; &nbsp; + Lan chi (1 b&oacute;).</p>\r\n\r\n<p>&nbsp; &nbsp; + Đế nhựa, giấy g&oacute;i, nơ</p>\r\n', 'motngaydenho.png'),
(24, 5, 'KN002', 'Chuyện Cổ Tích', 'chuyen co tich', 500000, '<p>- <strong>Hoa tươi Alumbale</strong> - T&igrave;nh y&ecirc;u của ch&uacute;ng ta như một c&acirc;u chuyện cổ t&iacute;ch. C&oacute; l&uacute;c s&oacute;ng gi&oacute;, c&oacute; l&uacute;c đau buồn, c&oacute; l&uacute;c ghen tu&ocirc;ng nhưng cuối c&ugrave;ng, hạnh ph&uacute;c sẽ đến. Đ&oacute; l&agrave; những g&igrave; m&agrave; b&oacute; hoa <em>CHUYỆN CỔ T&Iacute;CH</em> muốn gửi gắm.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng nh&aacute;nh (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Thủy ti&ecirc;n (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao biển (10 c&agrave;nh),</p>\r\n\r\n<p>&nbsp; &nbsp; + Lan chi (1 b&oacute;).</p>\r\n\r\n<p>&nbsp; &nbsp; + Đế nhựa, giấy g&oacute;i, nơ.</p>\r\n', 'chuyencotich.png'),
(25, 3, 'HG003', 'Ấm Áp Yêu Thương', 'am ap yeu thuong', 500000, '<p>- <strong>Giỏ hoa gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + 10 c&agrave;nh Cẩm chướng nh&aacute;nh cam.</p>\r\n\r\n<p>&nbsp; &nbsp; + 20 c&agrave;nh Cẩm chướng c&agrave;nh hồng.</p>\r\n\r\n<p>&nbsp; &nbsp; + 5 c&agrave;nh C&aacute;t tường trắng.</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; dương sỉ.</p>\r\n\r\n<p>&nbsp; &nbsp; + Giỏ m&acirc;y trắng.</p>\r\n', 'amapyeuthuong.png'),
(26, 5, 'KN003', 'Ngàn Lời Yêu Thương', 'ngan loi yeu thuong', 1300000, '<p>- <strong>Hoa tươi Alumbale</strong> - Một lời tỏ t&igrave;nh lộng lẫy được kết hợp từ h&agrave;ng trăm đ&oacute;a hồng xinh đẹp, rực rỡ b&ugrave;ng ch&aacute;y như t&igrave;nh cảm nồng n&agrave;n, đầy nhiệt huyết thay cho <em>NG&Agrave;N LỜI Y&Ecirc;U THƯƠNG</em> của con tim y&ecirc;u s&ocirc;i nổi.<br />\r\n- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Sao biển.</p>\r\n\r\n<p>&nbsp; &nbsp; + Giấy g&oacute;i,nơ.</p>\r\n', 'nganloiyeuthuong.png'),
(27, 5, 'KN004', 'Nụ Hôn Đầu Tiên', 'nu hon dau tien', 2300000, '<p>- <strong>Hoa tươi Alumbale</strong> &ndash; Y&ecirc;u l&agrave; khi tr&aacute;i tim rung động, l&agrave; những cảm x&uacute;c kh&ocirc;ng t&ecirc;n khi nghĩ về ai đ&oacute;, hay thậm ch&iacute; l&agrave; nụ h&ocirc;n đầu khiến ta m&atilde;i kh&ocirc;ng qu&ecirc;n. H&atilde;y để những k&iacute; ức đẹp ấy m&atilde;i trong tim, h&atilde;y để <em>NỤ H&Ocirc;N ĐẦU TI&Ecirc;</em>N c&ugrave;ng bạn s&aacute;nh bước trong những cung bậc tuyệt vời của t&igrave;nh y&ecirc;u.<br />\r\n- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng đỏ (50 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng m&agrave;u hồng (50 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng nh&aacute;nh trắng (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Giấy g&oacute;i, nơ.</p>\r\n', 'nuhondautien.png'),
(28, 5, 'KN005', 'Tình Yêu Cháy Bổng', 'tinh yeu chay bong', 1800000, '<p>- <strong>Hoa tươi Alumble</strong> &ndash; Tựa như &aacute;nh nắng ban mai rực rỡ, <em>T&Igrave;NH Y&Ecirc;U CH&Aacute;Y BỎNG</em> l&agrave; sự kết hợp giữa h&agrave;i h&ograve;a giữa sắc v&agrave;ng của những đ&oacute;a hướng dương, hoa hồng v&agrave; lan vũ nữ mang đến cả một bầu kh&ocirc;ng khi vui tươi như muốn thay bạn gửi gắm v&agrave;o đ&oacute; những ấp ủ về một tương lai tr&agrave;n đầy hạnh ph&uacute;c.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm</strong>:</p>\r\n\r\n<p>&nbsp; &nbsp; + Hướng dương (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng v&agrave;ng (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero trắng (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Vũ nữ (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; dương xỉ, giấy g&oacute;i, nơ.</p>\r\n', 'tinhyeuchaybong.png'),
(29, 1, 'HB006', 'Mãi Yêu Em', 'mai yeu em', 850000, '<p>- <strong>Hoa tươi Alumbale </strong>&ndash; Người ta thường n&oacute;i, 50 đ&oacute;a hồng tượng trưng cho một t&igrave;nh y&ecirc;u v&ocirc; điều kiện, cũng l&agrave; lời hứa nguyện y&ecirc;u m&atilde;i một người. Hiểu được &yacute; nghĩa ấy, c&aacute;c florist của Dalat Hasfarm đ&atilde; tạo n&ecirc;n b&oacute; hoa <em>M&Atilde;I Y&Ecirc;U EM</em> kết hợp 50 đ&oacute;a hồng điểm xuyết c&ugrave;ng những đ&oacute;a Calimero nhỏ xinh tựa như sứ giả truyền đi th&ocirc;ng điệp của t&igrave;nh y&ecirc;u.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Rose Peach Avalanche (50 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero trắng (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; chanh, dương xỉ, Giấy g&oacute;i, nơ.</p>\r\n', 'maiyeuem.png'),
(30, 1, 'HB007', 'Tình Yêu Không Lời', 'tinh yeu khong loi', 1400000, '<p>- <strong>Hoa tươi Alumbale</strong> &ndash; T&igrave;nh y&ecirc;u đ&ocirc;i khi bắt đầu bởi một nụ cười, chớm nở bằng một nụ h&ocirc;n. Hạnh ph&uacute;c khi y&ecirc;u đ&ocirc;i khi kh&ocirc;ng cần cất th&agrave;nh lời. Hiểu được điều đ&oacute;, h&atilde;y để<em> T&Igrave;NH Y&Ecirc;U KH&Ocirc;NG LỜI</em> thay bạn gửi đến một nửa những y&ecirc;u thương ngọt ng&agrave;o nhất.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm: </strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Rose Sweet Avalanche (50 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; chanh, dương xỉ, Giấy g&oacute;i, nơ.</p>\r\n', 'tinhyeukhongloi.png'),
(31, 1, 'HB008', 'Tình Yêu Nồng Cháy', 'tinh yeu nong chay', 1600000, '<p>- <strong>Hoa tươi Alumbale</strong> &ndash; Hoa hồng đỏ lu&ocirc;n l&agrave; ng&ocirc;n ngữ trọn vẹn nhất của con tim. C&ograve;n g&igrave; tuyệt hơn khi tặng người thương một b&oacute; hồng đỏ thay bạn b&agrave;y tỏ một<em> T&Igrave;NH Y&Ecirc;U NỒNG CH&Aacute;Y </em>để người ấy biết bạn y&ecirc;u họ nhiều đến nhường n&agrave;o.<br />\r\n- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hồng đỏ cao cấp (50 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; chanh, dương xỉ.</p>\r\n\r\n<p>&nbsp; &nbsp; + Giấy g&oacute;i, nơ.</p>\r\n', 'tinhyeunongchay.png'),
(32, 2, 'HC007', 'Lời Thì Thầm Mùa Thu', 'loi thi tham mua thu', 800000, '<p>-<strong> Hoa Tươi Alumbale </strong>- Sở hữu h&igrave;nh d&aacute;ng v&agrave; sắc m&agrave;u độc đ&aacute;o, những b&ocirc;ng hoaThu Hải Đường mang đến vẻ đẹp đầy l&atilde;ng mạn v&agrave; n&ecirc;n thơ.<em> LỜI TH&Igrave; THẦM M&Ugrave;A THU</em> với sự kết hợp tinh tế giữa Thu Hải Đường đỏ thắm v&agrave; Sống đời k&eacute;p dễ thương tạo n&ecirc;n bức tranh phong cảnh m&ugrave;a thu trữ t&igrave;nh; thay bạn gửi đến người m&igrave;nh qu&yacute; mến những lời y&ecirc;u thương nồng n&agrave;n.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Thu Hải Đường (3 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + Sống đời trung k&eacute;p (3 chậu).</p>\r\n\r\n<p>&nbsp; &nbsp; + B&igrave;nh sứ trắng.</p>\r\n', 'loithithammuaxuan.png'),
(33, 2, 'HC008', 'Cảm Ơn Mẹ', 'cam on me', 550000, '<p>- <strong>Hoa tươi Alumbale</strong> - Những b&ocirc;ng hoa cẩm chướng ấp ủ bao t&igrave;nh cảm ch&acirc;n th&agrave;nh tạo điểm nhấn cho m&agrave;u hồng ngọt ng&agrave;o của thủy ti&ecirc;n khoe sắc gợi l&ecirc;n một kh&uacute;c ca tha thiết để bạn tỏ l&ograve;ng biết ơn t&igrave;nh y&ecirc;u bao la của mẹ.&nbsp;</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng đơn t&iacute;m (20 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Thủy ti&ecirc;n hồng (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng đơn viền (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; trang tr&iacute;, phụ liệu.</p>\r\n', 'camonme.png'),
(34, 2, 'HC009', 'Mẹ Yêu', 'me yeu', 650000, '<p>-<strong> Hoa tươi Alumbale </strong>- Những đ&oacute;a Cẩm chướng xinh xắn khoe sắc c&ugrave;ng Calimero xanh ng&aacute;t như t&igrave;nh y&ecirc;u d&agrave;nh cho mẹ m&atilde;i đong đầy trong tr&aacute;i tim của con. Một lời y&ecirc;u thương dễ thương d&agrave;nh tặng mẹ y&ecirc;u!&nbsp;</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm: </strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng nh&aacute;nh (30 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Calimero xanh (10 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; trang tr&iacute;, b&igrave;nh sứ.</p>\r\n', 'meyeu.png'),
(35, 4, 'HH007', 'Yêu Thương Còn Mãi', 'yeu thuong con mai', 1500000, '<p>- <strong>B&oacute; hoa bao gồm:</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; + Rose Avalanche - 10 c&agrave;nh</p>\r\n\r\n<p>&nbsp; &nbsp; + Rose Baby Love - 10 c&agrave;nh</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm t&uacute; cầu hồng - 3 chậu</p>\r\n\r\n<p>&nbsp; &nbsp; + Baby DLH - 1 b&oacute;</p>\r\n\r\n<p>&nbsp; &nbsp; + Green Wicky - 5 c&agrave;nh</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; tai lừa (l&aacute; mốc) - 5 c&agrave;nh</p>\r\n\r\n<p>&nbsp; &nbsp; + L&aacute; chanh - 10 c&agrave;nh</p>\r\n\r\n<p>&nbsp; &nbsp; + Foam</p>\r\n\r\n<p>&nbsp; &nbsp; + Hộp gỗ 20cm x 20 cm</p>\r\n', 'yeuthuongconmai.png'),
(36, 6, 'SN004', 'Sinh Nhật Hồng', 'sinh nhat hong', 750000, '<p>- <strong>Hoa tươi Alumbale </strong>- Sinh nhật hồng l&agrave; sự kết hợp tinh tế giữa m&agrave;u hồng ngọt ng&agrave;o của những đ&oacute;a hồng c&ugrave;ng sắc đỏ m&ecirc; hoặc của cẩm chướng. B&igrave;nh hoa l&agrave; m&oacute;n qu&agrave; sinh nhật đẹp, dễ thương mang đến những kỷ niệm tuyệt vời cho người nhận khi bước sang tuổi mới.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm: </strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp; </strong>+ Hoa hồng hồng (20 c&agrave;nh).</p>\r\n\r\n<p><strong>&nbsp; &nbsp; </strong>+ Cẩm chướng đơn đỏ (20 c&agrave;nh).</p>\r\n\r\n<p><strong>&nbsp; &nbsp; </strong>+ Calimero trắng (10 c&agrave;nh).</p>\r\n\r\n<p><strong>&nbsp; &nbsp; </strong>+ L&aacute; chanh (10 c&agrave;nh), b&igrave;nh sứ, phụ liệu.</p>\r\n', 'sinhnhathong.png'),
(37, 2, 'HC010', 'Màu Nỗi Nhớ', 'mau noi nho', 1000000, '<p>- <strong>Hoa tươi Alumbale</strong> - M&agrave;u t&iacute;m l&agrave; m&agrave;u của sự nhớ nhung, của những cảm x&uacute;c khi chợt nghĩ về nhau. B&igrave;nh hoa với chủ đạo l&agrave; m&agrave;u t&iacute;m như nỗi nhớ của anh về em từng ng&agrave;y tr&ocirc;i qua kh&ocirc;ng bao giờ phai. Chỉ muốn đến b&ecirc;n cạnh em v&agrave; n&oacute;i rằng: &quot;Anh rất nhớ em, c&ocirc; g&aacute;i ơi&quot;.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + 8 hoa hồng da.</p>\r\n\r\n<p>&nbsp; &nbsp; + 12 hoa hồng sen.</p>\r\n\r\n<p>&nbsp; &nbsp; + C&aacute;t tường t&iacute;m.</p>\r\n\r\n<p>&nbsp; &nbsp; + Cẩm chướng t&iacute;m viền.</p>\r\n\r\n<p>&nbsp; &nbsp; + Địa lan xanh.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa kỳ l&acirc;n.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa l&aacute; phụ kh&aacute;c.</p>\r\n', 'maunoinho.png'),
(38, 2, 'HC011', 'Dịu Dàng Lan Hồ Điệp', 'diu dang lan ho diep', 2100000, '<p>- <strong>Hoa tươi Alumbale</strong> - Với sự h&ograve;a quyện độc đ&aacute;o của sắc t&iacute;m b&iacute; ẩn v&agrave; m&agrave;u trắng tinh kh&ocirc;i, <em>Dịu D&agrave;ng Lan Hồ Điệp </em>kho&aacute;c l&ecirc;n m&igrave;nh bộ c&aacute;nh t&iacute;m dịu d&agrave;ng m&agrave; mộng mơ. Một chậu Lan hồ điệp được thiết kế tinh tế, h&agrave;i h&ograve;a tr&ecirc;n chậu sứ sang trọng sẽ th&ecirc;m nổi bật kh&ocirc;ng gian, đem đến cho ng&ocirc;i nh&agrave; sức sống v&agrave; cảm hứng bất tận.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Lan hồ điệp lớn (6 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Chậu sứ, hoa trang tr&iacute;.</p>\r\n', 'diudanglanhodiep.png'),
(39, 2, 'HC012', 'Nắng Màu Hạ', 'nang mua ha', 130000, '<p>- <strong>Giỏ hoa bao gồm:</strong></p>\r\n\r\n<p><strong>&nbsp; &nbsp;</strong> + Chậu sống đời trung k&eacute;p - 1 chậu.</p>\r\n\r\n<p>&nbsp; &nbsp; + Giỏ bố.</p>\r\n', 'hoamuaha.png'),
(40, 2, 'HC013', 'Hồ Điệp Thanh Tao', 'ho diep thanh tao', 750000, '<p>- <strong>Hoa tươi Alumbale </strong>- <em>Hồ Điệp Thanh Tao</em> l&agrave; sự kết hợp h&agrave;i h&ograve;a giữa n&eacute;t đẹp đột ph&aacute; của hiện đại v&agrave; vẻ đẹp s&acirc;u lắng của cổ điển. Ch&iacute;nh sức h&uacute;t v&ocirc; h&igrave;nh ấy những c&agrave;nh lan tiểu hồ điệp mang đến một kh&ocirc;ng gian trang nh&atilde; kh&ocirc;ng k&eacute;m phần sang trọng cho kh&ocirc;ng gian sống của bạn.</p>\r\n\r\n<p>- <strong>Sản phẩm bao gồm:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Lan tiểu hồ điệp (3 c&agrave;nh).</p>\r\n\r\n<p>&nbsp; &nbsp; + Chậu sứ, trang tr&iacute;.</p>\r\n', 'hodiepthanhtao.png'),
(41, 2, 'HC014', 'Lời Chúc Thành Công', 'loi chuc thanh cong', 1100000, '<p>- <strong>Hoa tươi Alumbale</strong> - Hoa hồng đỏ kết hợp c&ugrave;ng hoa hồng sen, c&ugrave;ng c&aacute;t tường được cắm tr&ograve;n đầy tượng trưng cho sự th&agrave;nh đạt, vi&ecirc;n m&atilde;n, sung t&uacute;c trong sự nghiệp v&agrave; cuộc sống. K&egrave;m theo đ&oacute; l&agrave; những c&agrave;nh lan vươn d&agrave;i l&ecirc;n tượng trưng cho ngọn lửa của sự kh&aacute;t khao v&agrave; &yacute; ch&iacute; vươn l&ecirc;n mạnh mẽ. Mẫu hoa l&agrave; lời ch&uacute;c th&agrave;nh c&ocirc;ng th&iacute;ch hợp d&agrave;nh tặng cho bạn b&egrave;, người th&acirc;n, kh&aacute;ch h&agrave;ng nh&acirc;n dịp sinh nhật, khai trương, kỉ niệm.</p>\r\n\r\n<p>- <strong>Bao gồm c&aacute;c loại hoa:</strong></p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng đỏ.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa hồng sen.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa lan b&ograve; cạp đỏ.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa c&aacute;t tường.</p>\r\n\r\n<p>&nbsp; &nbsp; + B&igrave;nh th&ugrave;y tinh cao cấp.</p>\r\n', 'loichucthanhcong.png'),
(42, 3, 'HG004', 'Điều Giản Dị', 'dieu gian di', 400000, '<p>- <strong>Hoa tươi Alumbale</strong> - Giỏ hoa được cắm tr&ograve;n 2 mặt với thiết kế chủ đạo l&agrave; hoa hồng sen m&agrave;u hồng phấn nhẹ nh&agrave;ng v&agrave; tao nh&atilde;, c&ugrave;ng cẩm chướng hồng phối hợp xen kẽ nhau tạo n&ecirc;n một sản phẩm hoa thu h&uacute;t ngay từ &aacute;nh nh&igrave;n đầu ti&ecirc;n. Tuy giản dị, mộc mạc nhưng chắc chắn sẽ l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa tuyệt vời d&agrave;nh tặng cho những người th&acirc;n y&ecirc;u của m&igrave;nh.</p>\r\n\r\n<p>-<strong> Giỏ hoa tươi&nbsp;</strong>Điều Giản Dị&nbsp;gồm c&aacute;c loại hoa:</p>\r\n\r\n<p>&nbsp; &nbsp; + 15 hoa hồng sen.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa cẩm chướng hồng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Thạch thảo trắng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa l&aacute; phụ kh&aacute;c.</p>\r\n', 'dieugiandi.png'),
(43, 3, 'HG005', 'Tình Yêu Diệu Kỳ', 'tinh yeu dieu ky', 500000, '<p>- <strong>Hoa tươi Alumbale</strong> - T&igrave;nh y&ecirc;u l&agrave; thứ cảm x&uacute;c đẹp đẽ v&agrave; mạnh mẽ nhất. T&igrave;nh y&ecirc;u cho ch&uacute;ng ta sống giữa mộng mơ v&agrave; thực tại, cho ch&uacute;ng ta nếm trải đầy đủ cung bậc cảm x&uacute;c: Hỉ - nộ - &aacute;i - ố. Phức tạp l&agrave; vậy nhưng n&agrave;o c&oacute; ai tr&aacute;ch v&igrave; m&igrave;nh được y&ecirc;u qu&aacute; nhiều bao giờ, người ta chỉ buồn v&igrave; chưa t&igrave;m ra t&igrave;nh y&ecirc;u của đời m&igrave;nh m&agrave; th&ocirc;i. Giỏ hoa l&agrave; lời ch&uacute;c, l&agrave; sự t&ocirc;n vinh cho sự diệu kỳ của t&igrave;nh y&ecirc;u.</p>\r\n\r\n<p>-<strong> Giỏ hoa tươi &quot;</strong>T&igrave;nh Y&ecirc;u Diệu Kỳ&quot; gồm c&aacute;c loại hoa:</p>\r\n\r\n<p>&nbsp; &nbsp; + 20 hồng v&agrave;ng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa thủy ti&ecirc;n v&agrave;ng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Salem/ thạch thảo/ mimi trắng.</p>\r\n\r\n<p>&nbsp; &nbsp; + Hoa l&aacute; phụ kh&aacute;c.</p>\r\n', 'tinhyeudieuky.png'),
(44, 4, 'HH008', 'Sắc Hồng Xinh', 'sac hong xinh', 500000, '<p>- <strong>Hoa tươi Alumbale</strong> -&nbsp;Hộp hoa với tone m&agrave;u hồng pastel chủ đạo đ&atilde; l&agrave;m say đắm bao c&ocirc; n&agrave;ng đ&aacute;ng y&ecirc;u. Hộp hoa n&agrave;y chắc chắn sẽ l&agrave; m&oacute;n qu&agrave; tuyệt vời d&agrave;nh tặng cho c&aacute;c fangirl c&oacute; sự y&ecirc;u th&iacute;ch đặc biệt d&agrave;nh cho m&agrave;u hồng.</p>\r\n\r\n<p>- <strong>Hộp hoa tươi </strong>Sắc Hồng Xinh&nbsp;gồm c&aacute;c loại hoa:</p>\r\n\r\n<p>&nbsp;&nbsp; + 18 hoa hồng sen.</p>\r\n\r\n<p>&nbsp;&nbsp; + 8 c&uacute;c ping pong t&iacute;m nhạt.</p>\r\n\r\n<p>&nbsp;&nbsp; + Cẩm chướng hồng.</p>\r\n\r\n<p>&nbsp;&nbsp; + Hoa l&aacute; phụ kh&aacute;c.</p>\r\n', 'sachongxinh.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` int(12) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `note` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`idUser`, `username`, `password`, `name`, `cmnd`, `address`, `email`, `phone`, `level`, `note`) VALUES
(1, 'khang', '27a6f8a5d4385cd161adba2879da5d8a', 'Phan Chí Khang', 123456789, 'Số 6 đường 13, Thiên Đàng, TP. Cửu U', 'khangchuate456@yahoo.com.vn', '01699870434', 2, 0),
(2, 'tuanhung', '9f3e394d4bcb30796507f9e6b0d78d8c', 'Tuấn Hùng', 1234567890, 'Số 7 đường 13, Thiên Đàng, TP. Cửu U', 'tuanhung@gmail.com', '01234567890', 1, 0),
(3, 'lequangsi', 'e12c2e3e1f9bf16cb811bfd82b60be58', 'Quang Sĩ', 1234567890, 'Số 8 đường 13, Thiên Đàng, TP. Cửu U', 'quangsi@gmail.com', '01234567890', 1, 0),
(4, 'thanhhuy', 'd84117f865284348c6ecff8670ec3fb2', 'Thanh Huy', 123456789, 'Số 9 đường 13, Thiên Đàng, TP. Cửu U', 'thanhhuy@gmail.com', '01234567890', 1, 0),
(5, 'huuthien', 'f94e8b74d24895ed774aa3ef771372e5', 'Nguyễn Hữu Thiên', 123456789, 'Số 10 đường 13, Thiên Đàng, TP. Cửu U', 'huuthien@gmail.com', '01234567890', 0, 0),
(6, 'vivi_xinhdep', 'd683a8b309148cebc5d406e1b3853fda', 'Trần Ái Vi', 123456789, 'Số 1 Trúc Lâu, đường Thăng Thiên', 'aivitran@gmail.com', '01234567890', 0, 0),
(7, 'ngocdiem', '97b9e37186eb564d53ecfa7137206737', 'Trần Lê Ngọc Diễm', 123456789, 'Trúc Lâu số 1, Tinh Linh Sâm Lâm', 'ngocdiem@gmail.com', '01234567890', 0, 0),
(8, 'thientam', 'b58c6ee1f5147f41204f3225a3039e99', 'Phan Thiên Tâm', 123456789, 'Số 10 đường 13, Thiên Đàng, TP. Cửu U', 'thientam@gmail.com', '01234567890', 0, 0),
(9, 'hoalamthan', '8955c4ff50c08dece68224fa0f6e8c20', 'Hoa Lam Thần', 123456789, 'Cửu Thiên Thánh Địa', 'hoalamthan@gmail.com', '01234567890', 0, 0),
(10, 'huatiensinh', 'ccef8c9a83e883430038c91805b316ed', 'Hứa Bán Thần', 123456789, 'tiểu miếu sông Vong Thủy', 'huatiensinh@gmail.com', '01234567890', 0, 1),
(11, 'bangtam', '0ca0f03ca8cca13ac68acecb8f2b4085', 'Băng Tâm', 1234567890, 'Xích Thiên Long Vực', 'bangtamtientu@gmaiil.com', '01234567890', 0, 0),
(12, 'tuyetnhi', 'ebbdeaa4b48089a2ec06b077b67f1792', 'Tuyết Nhi', 1234567890, 'Thiên Vực tầng 1 ', 'tuyetnhi@gmail.com', '01234567890', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `idTT` int(20) NOT NULL,
  `tenTT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenTT_kd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idUser` int(20) NOT NULL,
  `ngaydangTT` date NOT NULL,
  `ngaytuTT` date NOT NULL,
  `ngaydenTT` date NOT NULL,
  `motaTT` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhTT` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idTT`, `tenTT`, `tenTT_kd`, `idUser`, `ngaydangTT`, `ngaytuTT`, `ngaydenTT`, `motaTT`, `hinhanhTT`) VALUES
(1, 'Sự kiện giảm giá hoa tươi Alumbale nhân dịp 8/3', 'su kien giam gia hoa tuoi alumbale nhan dip 8/3', 1, '2017-03-05', '2017-03-07', '2017-03-10', '<p><strong>Mừng ng&agrave;y quốc tế phụ nữ 8-3 giảm tới 40% với nhiều sản phẩm hấp dẫn như hoa hồng ngoại b&oacute; c&agrave;nh c&ugrave;ng hơn 300 giống hoa hồng ngoại nổi tiếng tới từ nhiều nước tr&ecirc;n thế giới.</strong></p>\r\n', 'tintuc1.jpg'),
(2, 'Lễ tình nhân trắng 14/3', 'le tinh nhan trang 14/3', 1, '2017-03-10', '2017-03-12', '2017-03-16', '<p><strong>Lễ t&igrave;nh nh&acirc;n trắng 14/3.</strong></p>\r\n', 'tintuc2.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`idCTDH`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idCL`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`idPH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idUser`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `idCTDH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idCL` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `idPH` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idTT` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
