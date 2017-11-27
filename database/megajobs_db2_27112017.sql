-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 10:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megajobs_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) DEFAULT '0',
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `permission` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `phone`, `created`, `username`, `password`, `status`, `permission`) VALUES
(2, 'Hà Hồng Hoa', 'Thanh Hóa, Yên Định', '0985548325', 0, 'hahonghoa53', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(6, 'Nguyễn Thành An', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '0979823452', 0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL),
(7, 'Tran Tuan Tu', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '0979823452', 0, 'module123', 'e10adc3949ba59abbe56e057f20f883e', 1, '{\"category\":[\"index\"],\"product\":[\"index\",\"add\",\"edit\",\"del\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `status`) VALUES
(1, 'Bán hàng', 0),
(2, 'Biên tập / báo chí / truyền hình', 0),
(3, 'Bảo hiểm/ Tư vấn bảo hiểm', 0),
(4, 'Bảo vệ/ An ninh/ Vệ sỹ', 0),
(5, 'Phiên dịch/ Ngoại ngữ', 0),
(6, 'Bưu chính', 0),
(7, 'Chứng khoán - Vàng', 0),
(8, 'Cơ khí - Chế tạo', 0),
(9, 'Công chức - Viên chức', 0),
(10, 'Công nghệ cao', 0),
(11, 'Công nghiệp', 0),
(12, 'Dầu khí - Hóa chất', 0),
(13, 'Dệt may - Da giày', 0),
(14, 'Dịch vụ', 0),
(15, 'Du lịch', 0),
(16, 'Đầu tư', 0),
(17, 'Điện - Điện tử - Điện lạnh', 0),
(18, 'Điện tử viễn thông', 0),
(19, 'Freelance', 0),
(20, 'Games', 0),
(21, 'Giáo dục - Đào tạo', 0),
(22, 'Giao nhận/ Vận chuyển/ Kho bãi ', 0),
(23, 'Hàng gia dụng', 0),
(24, 'Hàng hải', 0),
(25, 'Hàng không', 0),
(26, 'Hành chính - Văn phòng', 0),
(27, 'Hóa học - Sinh học', 0),
(28, 'Hoạch định - Dự án', 0),
(29, 'IT phần cứng/mạng', 0),
(30, 'IT phần mềm', 0),
(31, 'In ấn - Xuất bản', 0),
(32, 'Kế toán - Kiểm toán', 0),
(33, 'Khách sạn - Nhà hàng', 0),
(34, 'Kiến trúc - Thiết kế nội thất', 0),
(35, 'Bất động sản', 0),
(36, 'Kỹ thuật', 0),
(37, 'Kỹ thuật ứng dụng', 0),
(38, 'Làm bán thời gian', 0),
(39, 'Làm đẹp/ Thể lực/ Spa ', 0),
(40, 'Lao động phổ thông', 0),
(41, 'Marketing - PR', 0),
(42, 'Môi trường', 0),
(43, 'Mỹ phẩm - Trang sức', 0),
(44, 'Phi chính phủ/ Phi lợi nhuận', 0),
(45, 'Ngân hàng/ Tài Chính', 0),
(46, 'Ngành nghề khác', 0),
(47, 'Nghệ thuật - Điện ảnh', 0),
(48, 'Người giúp việc/ Phục vụ/ Tạp vụ', 0),
(49, 'Nhân sự', 0),
(50, 'Nhân viên kinh doanh', 0),
(51, 'Nông - Lâm - Ngư nghiệp', 0),
(52, 'Ô tô - Xe máy', 0),
(53, 'Pháp luật/ Pháp lý', 0),
(54, 'Phát triển thị trường ', 0),
(55, 'Promotion Girl/ Boy (PG-PB)', 0),
(56, 'QA-QC/ Thẩm định/ Giám định', 0),
(57, 'Quan hệ đối ngoại', 0),
(58, 'Quản trị kinh doanh', 0),
(59, 'Sinh viên làm thêm', 0),
(60, 'Startup', 0),
(61, 'Thể dục/ Thể thao ', 0),
(62, 'Thiết kế - Mỹ thuật', 0),
(63, 'Thiết kế đồ họa - Web', 0),
(64, 'Thời trang', 0),
(65, 'Thủ công mỹ nghệ', 0),
(66, 'Thư ký - Trợ lý', 0),
(67, 'Thực phẩm - Đồ uống', 0),
(68, 'Thực tập', 0),
(69, 'Thương mại điện tử', 0),
(70, 'Tiếp thị - Quảng cáo', 0),
(71, 'Tổ chức sự kiện - Quà tặng', 0),
(72, 'Tư vấn/ Chăm sóc khách hàng', 0),
(73, 'Vận tải - Lái xe/ Tài xế', 0),
(74, 'Nhân viên trông quán internet', 0),
(75, 'Vật tư/Thiết bị/Mua hàng', 0),
(76, 'Việc làm cấp cao', 0),
(77, 'Việc làm Tết', 0),
(78, 'Xây dựng', 0),
(79, 'Xuất - Nhập khẩu', 0),
(80, 'Xuất khẩu lao động', 0),
(81, 'Y tế - Dược', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `transaction_id` int(10) NOT NULL DEFAULT '0',
  `product_id` int(255) NOT NULL DEFAULT '0',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,2) NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `parent` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` int(1) NOT NULL DEFAULT '0',
  `is_online` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent`, `name`, `cat_name`, `is_order`, `is_online`) VALUES
(6, 0, 'Giáo viên mầm non', 'giao-vien-mam-non', 1, 1),
(15, 0, 'Marketing', 'marketing', 99, 1),
(8, 0, 'Chuyên viên sale', 'chuyen-vien-sale', 1, 1),
(9, 0, 'Giáo viên TOEIC', 'giao-vien-toeic', 2, 1),
(10, 0, 'Giáo viên IELT', 'giao-vien-ielt', 3, 1),
(11, 0, 'Giáo viên tiểu học', 'giao-vien-tieu-hoc', 99, 1),
(12, 0, 'Trưởng phòng đào tạo', 'truong-phong-dao-tao', 99, 1),
(13, 0, 'Trưởng phòng kinh doanh', 'truong-phong-kinh-doanh', 99, 1),
(14, 0, 'Trưởng phòng marketing', 'truong-phong-marketing', 99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catnews`
--

CREATE TABLE `catnews` (
  `id` int(10) NOT NULL,
  `parent` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` tinyint(2) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `lang_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'vn'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='danh mục tin tức';

--
-- Dumping data for table `catnews`
--

INSERT INTO `catnews` (`id`, `parent`, `name`, `cat_name`, `is_order`, `status`, `lang_code`) VALUES
(1, 0, 'Tin tức sự kiện', 'tin-tuc-su-kien', 1, 1, 'vn'),
(4, 0, 'Dịch vụ ', 'dich-vu', 3, 1, 'vn');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `major` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'chuyên ngành',
  `level` tinyint(4) NOT NULL COMMENT 'xếp loại',
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `info` int(11) NOT NULL COMMENT 'thông tin bổ sung'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chứng chỉ' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `code`, `latitude`, `longitude`) VALUES
(1, 'Sơn La', '212', 0, 0),
(2, 'Lai Châu', '213', 0, 0),
(3, 'Lào Cai', '214', 0, 0),
(4, 'Điện Biên', '215', 0, 0),
(5, 'Yên Bái', '216', 0, 0),
(6, 'Quảng Bình', '232', 0, 0),
(7, 'Quảng Trị', '233', 0, 0),
(8, 'Thừa Thiên - Huế', '234', 0, 0),
(9, 'Quảng Nam', '235', 0, 0),
(10, 'Đà Nẵng', '236', 0, 0),
(11, 'Thanh Hoá', '237', 0, 0),
(12, 'Nghệ An', '238', 0, 0),
(13, 'Hà Tĩnh', '239', 0, 0),
(14, 'Quảng Ninh', '203', 0, 0),
(15, 'Bắc Giang', '204', 0, 0),
(16, 'Lạng Sơn', '205', 0, 0),
(17, 'Cao Bằng', '206', 0, 0),
(18, 'Tuyên Quang', '207', 0, 0),
(19, 'Thái Nguyên', '208', 0, 0),
(20, 'Bắc Cạn', '209', 0, 0),
(21, 'Hải Dương', '220', 0, 0),
(22, 'Hưng Yên', '221', 0, 0),
(23, 'Bắc Ninh', '222', 0, 0),
(24, 'Hải Phòng', '225', 0, 0),
(25, 'Hà Nam', '226', 0, 0),
(26, 'Thái Bình', '227', 0, 0),
(27, 'Nam Định', '228', 0, 0),
(28, 'Ninh Bình', '229', 0, 0),
(29, 'Cà Mau', '290', 0, 0),
(30, 'Bạc Liêu', '291', 0, 0),
(31, 'Cần Thơ', '292', 0, 0),
(32, 'Hậu Giang', '293', 0, 0),
(33, 'Trà Vinh', '294', 0, 0),
(34, 'An Giang', '296 ', 0, 0),
(35, 'Kiên Giang', '297', 0, 0),
(36, 'Sóc Trăng', '299', 0, 0),
(37, 'Hà Nội', '24', 0, 0),
(38, 'Hồ Chí Minh', '28', 0, 0),
(39, 'Đồng Nai', '251', 0, 0),
(40, 'Bình Thuận', '252', 0, 0),
(41, 'Bà Rịa - Vũng Tàu', '254', 0, 0),
(42, 'Quảng Ngãi', '255', 0, 0),
(43, 'Bình Định', '256', 0, 0),
(44, 'Phú Yên', '257', 0, 0),
(45, 'Khánh Hoà', '258', 0, 0),
(46, 'Ninh Thuận', '259', 0, 0),
(47, 'Kon Tum', '260', 0, 0),
(48, 'Đắk Nông', '261', 0, 0),
(49, 'Đắk Lắk', '262', 0, 0),
(50, 'Lâm Đồng', '263', 0, 0),
(51, 'Gia Lai', '269', 0, 0),
(52, 'Vĩnh Long', '270', 0, 0),
(53, 'Bình Phước', '271', 0, 0),
(54, 'Long An', '272', 0, 0),
(55, 'Tiền Giang', '273', 0, 0),
(56, 'Bình Dương', '274', 0, 0),
(57, 'Bến Tre', '275', 0, 0),
(58, 'Tây Nin', '276', 0, 0),
(59, 'Đồng Tháp', '277', 0, 0),
(60, 'Khác', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_size`
--

CREATE TABLE `company_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company_size`
--

INSERT INTO `company_size` (`id`, `name`, `status`) VALUES
(1, 'Dưới 10 người', 1),
(2, '10-25', 1),
(3, '25-50', 1),
(4, '50-100', 1),
(5, '100-200', 1),
(6, '200-500', 1),
(7, '500-1000', 1),
(8, '1000-5000', 1),
(9, '5000-10000', 1),
(10, 'Hơn 10000 người', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_name`, `user_email`, `user_phone`, `user_address`, `content`, `title`, `created`, `status`) VALUES
(2, 'Trần Tuấn Anh', 'tuananh@lienketso.vn', '0985548328', 'Hà Nội', 'Vòng cuối Shriners Hospitals for Children Open mang tới kịch bản không thể hấp dẫn hơn cho người xem. Cựu vô địch Asiad 2010 Kim Whee ghi sáu birdie để dẫn đầu với thành tích tổng -9 trước khi bước vào hố 17. Cùng thời điểm, Patrick Cantlay đánh mất lợi thế cực lớn với hai bogey liên tiếp ở hố 17 và 18, khiến tổng điểm giảm xuống -9.', 'Tư vấn về sản phẩm tại công ty', 0, 1),
(3, 'Nguyễn Thành An', 'annt@lienketso.vn', '0979823452', 'Thái Nguyên', 'Thi đấu trước, ngôi sao kỳ cựu người Đức Alex Cejka gây áp lực lên hai đối thủ đàn em bằng màn trình diễn siêu hạng với chín birdie để kết thúc bốn vòng với điểm -9. Lúc này, quyền tự quyết vẫn nằm trong tay Kim Whee bởi chỉ cần đạt par ở hai hố cuối, anh sẽ đoạt danh hiệu PGA Tour đầu tiên trong sự nghiệp. Nhưng tài năng người Hàn Quốc chỉ hoàn thành một nửa nhiệm vụ. Kim đạt par hố 17 và mắc bogey hố cuối. Từ điểm -10, thành tích tổng của anh giảm xuống cùng -9 như Cantlay và Cejka.\r\n\r\nBa golfer hay nhất giải phải bước vào hố phụ để tranh chức vô địch. Tại hố phụ đầu tiên, cả ba cùng đạt điểm par5. Sang hố phụ thứ hai, Cantlay bứt lên ghi birdie nhờ gậy thứ ba đưa bóng vào green sát hố. Cùng lúc, Cejka đạt par còn Kim Whee mắc bogey. Ngôi sao người Mỹ vỡ òa niềm vui với chiếc cúp PGA Tour đầu tiên sau nửa thập kỷ chơi chuyên nghiệp.', 'Làm sao để sử dụng dịch vụ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `desired_job`
--

CREATE TABLE `desired_job` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL COMMENT 'mã thành phố (nơi làm việc)',
  `career_id` int(11) NOT NULL COMMENT 'mã ngành nghề',
  `type_id` int(11) NOT NULL COMMENT 'mã loại hình công việc',
  `salary` int(11) NOT NULL COMMENT 'mức lương mong muốn',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `name`, `status`) VALUES
(1, 'Toàn thời gian cố định', 1),
(3, 'Bán thời gian cố định', 1),
(4, 'Bán thời gian tạm thời', 1),
(5, 'Theo hợp đồng / tư vấn', 1),
(6, 'Thực tập', 1);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên cấp bậc',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `status`) VALUES
(9, 'Chuyên viên', 1),
(10, 'Trưởng nhóm', 0),
(11, 'Trưởng phòng', 0),
(12, 'Phó giám đốc', 0),
(13, 'Giám đốc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `literacy`
--

CREATE TABLE `literacy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `literacy`
--

INSERT INTO `literacy` (`id`, `name`, `status`) VALUES
(1, 'Đại học', 1),
(2, 'Cao đẳng', 1),
(3, 'Trung cấp', 1),
(4, 'Trung học phổ thông', 1),
(5, 'Trung học cơ sở', 1),
(6, 'Khác', 1);

-- --------------------------------------------------------

--
-- Table structure for table `map_candidate_recruitment`
--

CREATE TABLE `map_candidate_recruitment` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL COMMENT 'id ứng viên',
  `recruitment_id` int(11) NOT NULL COMMENT 'id tin tuyển dụng',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `apply_date` date NOT NULL COMMENT 'ngày ứng tuyển'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `map_cadidate_skill`
--

CREATE TABLE `map_cadidate_skill` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL COMMENT 'mã ứng viên',
  `skill_id` int(11) NOT NULL COMMENT 'mã kĩ năng',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `map_recruitment_careers`
--

CREATE TABLE `map_recruitment_careers` (
  `id` int(11) NOT NULL,
  `recruitment_id` int(11) NOT NULL COMMENT 'mã tin tuyển dụng',
  `career_id` int(11) NOT NULL COMMENT 'mã ngành nghề',
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_candidates`
--

CREATE TABLE `member_candidates` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(15) NOT NULL DEFAULT '0',
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT 'giới tính',
  `birthday` datetime DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(255) DEFAULT '1',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mã facebook của ứng viên',
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mã google của ứng viên',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'đường đẫn link ảnh avatar',
  `cv_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'đường dẫn file CV đã upload'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng lưu thông tin thành viên là ứng viên';

--
-- Dumping data for table `member_candidates`
--

INSERT INTO `member_candidates` (`id`, `email`, `password`, `created`, `full_name`, `gender`, `birthday`, `city_id`, `phone`, `address`, `status`, `created_date`, `modified_date`, `facebook`, `google`, `avatar`, `cv_url`) VALUES
(1, 'annt@lienketso.com.vn', 'e10adc3949ba59abbe56e057f20f883e', 1510305371, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-11-21 10:00:32', '2017-11-21 10:00:32', NULL, NULL, NULL, NULL),
(2, 'hoahh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1510314455, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-11-21 10:00:32', '2017-11-21 10:00:32', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_companies`
--

CREATE TABLE `member_companies` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(15) DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `city_id` int(11) DEFAULT NULL,
  `company_size_id` int(11) DEFAULT NULL COMMENT 'mã quy mô công ty',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mô tả về công ty',
  `logo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'đường dẫn ảnh logo công ty',
  `company_fax` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'người liên hệ (đại diện)',
  `contact_phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'sô điện thoại liên hệ'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng lưu thông tin thành viên là công ty';

--
-- Dumping data for table `member_companies`
--

INSERT INTO `member_companies` (`id`, `email`, `password`, `company_name`, `company_address`, `company_phone`, `created`, `status`, `city_id`, `company_size_id`, `description`, `logo_url`, `company_fax`, `company_contact`, `contact_phone`) VALUES
(1, 'thanhan1507@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 1510304019, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'annt@lienketso.vn', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 1510304287, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `parent` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `category_id` int(10) NOT NULL DEFAULT '0',
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` tinyint(2) NOT NULL DEFAULT '0',
  `is_online` tinyint(2) NOT NULL DEFAULT '1',
  `lang_code` varchar(25) COLLATE utf8_unicode_ci DEFAULT 'vn'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent`, `name`, `cat_id`, `category_id`, `link`, `is_order`, `is_online`, `lang_code`) VALUES
(11, 0, 'Giới thiệu', 0, 0, '', 1, 1, 'vn'),
(12, 0, 'Tin tức sự kiện', 1, 0, '', 2, 1, 'vn'),
(13, 0, 'Dịch vụ ', 0, 0, '', 3, 1, 'vn');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(11) NOT NULL DEFAULT '0',
  `updated` int(15) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `view` int(10) DEFAULT '0',
  `lang_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'vn'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `news_name`, `description`, `content`, `image`, `created`, `updated`, `status`, `view`, `lang_code`) VALUES
(5, 1, 'Ông Trump đặt vòng hoa tại đài tưởng niệm ở Trân Châu Cảng', 'ong-trump-dat-vong-hoa-tai-dai-tuong-niem-o-tran-chau-cang', 'Tổng thống Mỹ ngày 3/11 tới đặt vòng hoa tại đài tưởng niệm USS Arizona ở Trân Châu Cảng, tưởng nhớ các binh sĩ thiệt mạng trong Thế chiến 2.', '<p>Tổng thống Mỹ Donald Trump v&agrave; Đệ nhất phu nh&acirc;n Melania tham gia một buổi lễ đặt v&ograve;ng hoa b&ecirc;n trong đ&agrave;i tưởng niệm USS Arizona,&nbsp;điểm đ&aacute;nh dấu nơi y&ecirc;n nghỉ của hơn 1.000 thuỷ thủ v&agrave; l&iacute;nh thuỷ đ&aacute;nh bộ chết tr&ecirc;n t&agrave;u chiến, trong cuộc tấn c&ocirc;ng bất ngờ của ph&aacute;t x&iacute;t Nhật ng&agrave;y 7/12/1941,&nbsp;<em>ABC News</em>&nbsp;đưa tin.</p>\r\n\r\n<p>Tổng thống Mỹ v&agrave; phu nh&acirc;n sau đ&oacute; n&eacute;m những c&aacute;nh hoa trắng l&ecirc;n x&aacute;c con t&agrave;u đắm USS Arizona. Th&aacute;p tung vợ chồng &ocirc;ng chủ Nh&agrave; Trắng c&ograve;n c&oacute; Đ&ocirc; đốc Harry Harris, Tư lệnh Bộ chỉ huy Th&aacute;i B&igrave;nh Dương (PACOM) của Mỹ.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; lần đầu ti&ecirc;n &ocirc;ng Trump tới thăm Tr&acirc;n Ch&acirc;u Cảng. Trước đ&oacute;, Tổng thống Mỹ cho biết &ocirc;ng &quot;đ&atilde; được đọc, nghe, n&oacute;i v&agrave; học&quot; về Tr&acirc;n Ch&acirc;u Cảng nhưng &quot;chưa bao giờ tận mắt nh&igrave;n thấy&quot;. Tổng thống Trump th&ecirc;m rằng &ocirc;ng tin chuyến thăm sẽ &quot;rất th&uacute; vị&quot;.</p>\r\n\r\n<p>Ng&agrave;y mai, Tổng thống Mỹ sẽ tới Nhật Bản. Đ&acirc;y l&agrave; điểm dừng ch&acirc;n đầu ti&ecirc;n trong chuyến c&ocirc;ng du ch&acirc;u &Aacute; k&eacute;o d&agrave;i 14 ng&agrave;y của &ocirc;ng chủ Nh&agrave; Trắng, đi qua 5 nước gồm Nhật Bản, H&agrave;n Quốc, Trung Quốc, Việt Nam v&agrave; Philippines.</p>\r\n', 'AP-USS1-DC-110417-4x3-992-8169-1509780475.jpg', 1509783609, 1509783622, 1, 23, 'vn'),
(4, 1, 'Triều Tiên kêu gọi chấm dứt \'các lệnh trừng phạt tàn bạo\'', 'trieu-tien-keu-goi-cham-dut-cac-lenh-trung-phat-tan-bao', 'Triều Tiên mô tả các biện pháp trừng phạt nước này là \"tàn bạo, tạo thành tội diệt chủng\", kêu gọi lập tức xóa bỏ chúng.', '<p>&quot;Những lệnh trừng phạt t&agrave;n bạo do Mỹ dẫn đầu v&agrave; &aacute;p lực đối với DPRK cấu th&agrave;nh tội x&acirc;m phạm nh&acirc;n quyền v&agrave; diệt chủng&quot;,&nbsp;<em>Reuters</em>&nbsp;dẫn th&ocirc;ng b&aacute;o từ ph&aacute;i đo&agrave;n Triều Ti&ecirc;n tại Li&ecirc;n Hợp Quốc ng&agrave;y 3/11 cho biết. C&aacute;c lệnh trừng phạt &quot;đe dọa v&agrave; ngăn cản người d&acirc;n DPRK được hưởng nh&acirc;n quyền trong mọi lĩnh vực&quot;.</p>\r\n\r\n<p>DPRK l&agrave; viết tắt của Cộng h&ograve;a D&acirc;n chủ Nh&acirc;n d&acirc;n Triều Ti&ecirc;n.</p>\r\n\r\n<p>&quot;Một số quốc gia v&ocirc; lương t&acirc;m đ&atilde; chặn việc chuyển giao thiết bị y tế c&ugrave;ng thuốc men&quot; cho trẻ em v&agrave; c&aacute;c b&agrave; mẹ ở Triều Ti&ecirc;n, theo th&ocirc;ng b&aacute;o. &quot;Mọi lệnh trừng phạt vi phạm nh&acirc;n quyền, v&ocirc; nh&acirc;n t&iacute;nh nhằm v&agrave;o DPRK cần được x&oacute;a bỏ ho&agrave;n to&agrave;n v&agrave; ngay lập tức&quot;.</p>\r\n\r\n<p>Th&ocirc;ng b&aacute;o tr&ecirc;n được đưa ra trong bối cảnh Tổng thống Mỹ Donald Trump bắt đầu chuyến thăm ch&acirc;u &Aacute;, trong đ&oacute; c&oacute; c&aacute;c nước Trung Quốc, H&agrave;n Quốc v&agrave; Nhật Bản, t&igrave;m kiếm sự hỗ trợ để g&acirc;y &aacute;p lực với Triều Ti&ecirc;n, buộc B&igrave;nh Nhưỡng từ bỏ chương tr&igrave;nh hạt nh&acirc;n.</p>\r\n\r\n<p>Triều Ti&ecirc;n gần đ&acirc;y hứng chịu h&agrave;ng loạt lệnh trừng phạt từ cộng đồng quốc tế, sau khi nước n&agrave;y thử hạt nh&acirc;n lần 6 h&ocirc;m 3/9. Mỹ th&aacute;ng 10 đơn phương trừng phạt 7 c&aacute; nh&acirc;n Triều Ti&ecirc;n v&agrave; ba tổ chức với l&yacute; do &quot;x&acirc;m phạm nh&acirc;n quyền nghi&ecirc;m trọng&quot;.</p>\r\n\r\n<p>Hội đồng Bảo an Li&ecirc;n Hợp Quốc trong th&aacute;ng 9 tăng cường trừng phạt Triều Ti&ecirc;n, bao gồm cấm Triều Ti&ecirc;n xuất khẩu h&agrave;ng may mặc, hạn chế nhập khẩu c&aacute;c sản phẩm từ dầu mỏ, kh&iacute; thi&ecirc;n nhi&ecirc;n h&oacute;a lỏng v&agrave; ngưng tụ, hạn chế thu&ecirc; lao động Triều Ti&ecirc;n tại nước ngo&agrave;i, đ&oacute;ng băng t&agrave;i sản v&agrave; cấm đi lại với một số quan chức.</p>\r\n', 'download-4-4850-1509765596.jpg', 1509767079, 0, 1, 9, 'vn');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(10) NOT NULL,
  `transaction_id` int(10) NOT NULL DEFAULT '0',
  `product_id` int(10) NOT NULL DEFAULT '0',
  `qty` int(10) NOT NULL DEFAULT '0',
  `amount` int(25) NOT NULL DEFAULT '0',
  `data` text COLLATE utf8_unicode_ci,
  `status` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Đơn đặt hàng chi tiết';

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `transaction_id`, `product_id`, `qty`, `amount`, `data`, `status`) VALUES
(1, 1, 12, 1, 14000000, NULL, 0),
(2, 2, 5, 3, 6000000, NULL, 0),
(3, 3, 1, 5, 10000000, NULL, 0),
(4, 3, 5, 2, 4000000, NULL, 0),
(5, 4, 11, 1, 5000000, NULL, 0),
(6, 5, 11, 1, 5000000, NULL, 0),
(7, 6, 5, 1, 2000000, NULL, 0),
(8, 7, 5, 1, 2000000, NULL, 0),
(9, 8, 5, 1, 2000000, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Liên kết đối tác, khách hàng';

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `is_order`, `status`) VALUES
(1, 'Liên kết số', 'logohome.png', 'http://lienketso.vn', 1, 1),
(2, 'Snaga jobs', 'client-logo01.png', 'http://lienketso.vn', 2, 1),
(3, 'Hunter Doulas', 'client-logo05.png', 'http://lienketso.vn', 3, 1),
(4, 'Job talk america', 'client-logo02.png', 'http://lienketso.vn', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT '0',
  `discount` int(10) DEFAULT '0',
  `intro` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_list` text COLLATE utf8_unicode_ci,
  `created` int(11) NOT NULL DEFAULT '0',
  `is_online` int(1) NOT NULL DEFAULT '1',
  `is_hot` tinyint(2) NOT NULL DEFAULT '0',
  `view` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `cat_name`, `price`, `discount`, `intro`, `content`, `image`, `image_list`, `created`, `is_online`, `is_hot`, `view`) VALUES
(1, 6, 'Computer duo core', 'computer-duo-core', 2000000, 0, 'Test mô tả', '<p>Test nội dung</p>\r\n', '21.jpg', NULL, 0, 1, 0, 1),
(2, 6, 'Công tắc ba 1 chiều uten V3.0', 'cong-tac-ba-1-chieu-uten-v30', 67000, 0, 'Test', '', '11.jpg', NULL, 0, 1, 0, 0),
(5, 6, 'Công tắc ba 1 chiều uten V37', 'cong-tac-ba-1-chieu-uten-v37', 2000000, 0, '', '<div><strong>Product Details</strong></div>\r\n\r\n<div>\r\n<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>\r\n\r\n<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>\r\n\r\n<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>\r\n\r\n<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>\r\n</div>\r\n', '1.jpg', '[\"2.jpg\",\"3.jpg\"]', 0, 1, 0, 5),
(11, 6, 'Điều hòa Toshiba 2 chiều', 'dieu-hoa-toshiba-2-chieu', 5000000, 20, '', '', '7.jpg', '[]', 1508301064, 1, 0, 4),
(12, 6, 'Điện thoại vtur dát vàng', 'dien-thoai-vtur-dat-vang', 14000000, 10, 'test', '<p>test</p>\r\n', '31.jpg', '[]', 1509786305, 0, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci COMMENT 'mô tả công việc',
  `literacy_id` int(11) DEFAULT NULL COMMENT 'trình độ học vấn',
  `level_id` int(11) DEFAULT NULL COMMENT 'cấp bậc',
  `amount` int(255) DEFAULT NULL COMMENT 'số lượng cần tuyển',
  `benefit` text COLLATE utf8_unicode_ci COMMENT 'quyền lợi được hưởng',
  `profile` text COLLATE utf8_unicode_ci COMMENT 'Thông tin hồ sơ yêu cầu',
  `language` tinyint(255) DEFAULT NULL COMMENT '1-tiếng việt;2-english;3-cả 2',
  `start_date` datetime DEFAULT NULL COMMENT 'ngày bắt đầu đăng tin',
  `end_date` datetime DEFAULT NULL COMMENT 'ngày kết thúc đăng tin',
  `require_experience_id` tinyint(255) DEFAULT NULL COMMENT 'trình độ yêu cầu',
  `type_id` int(11) DEFAULT NULL COMMENT 'job_type (loại công việc)',
  `status` tinyint(255) DEFAULT '1',
  `company_id` int(11) DEFAULT NULL COMMENT 'mã nhà tuyển dụng',
  `refresh_date` datetime DEFAULT NULL COMMENT 'ngày làm mới tin tức'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='thông tin tuyển dụng';

-- --------------------------------------------------------

--
-- Table structure for table `require_experience`
--

CREATE TABLE `require_experience` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Kinh nghiệm yêu cầu cho tin tuyển dụng';

--
-- Dumping data for table `require_experience`
--

INSERT INTO `require_experience` (`id`, `name`, `status`) VALUES
(1, 'Không yêu cầu', 1),
(2, 'Dưới 1 năm', 1),
(3, 'Dưới 3 năm', 1),
(4, 'Trên 3 năm', 1),
(5, 'Trên 5 năm', 1),
(6, 'Trên 10 năm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Cấu hình trang ';

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `meta_desc`, `meta_keyword`, `email`, `phone`, `address`, `footer`, `image`) VALUES
(1, 'Website liên kết số 4.0', 'Liên kết số là đơn vị thiết kế website số 1 việt nam', 'liên kết số, lienketso, lien ket so, thiet ke website', 'info@lienketso.vn', '0979823452', 'Số 09 nghách 59/21 đường Mễ Trì, Nam Từ Liêm', '<p>Chưa cập nhật</p>\r\n', '15879.png');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `status`) VALUES
(0, 'C#', 1),
(0, 'PHP', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `lang_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'vn'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`, `content`, `link`, `is_order`, `status`, `lang_code`) VALUES
(2, 'Slide 2', 'product3-1.jpg', 'test', NULL, 1, 1, 'vn'),
(3, 'Dịch vụ ', 'product1.jpg', '', NULL, 3, 0, 'vn'),
(4, 'slide 3', 'product1-1.jpg', '', NULL, 0, 0, 'vn'),
(5, 'slide 4', 'product4.jpg', 'test', 'http://lienketso.vn', 0, 0, 'vn');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tags cloude';

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `link`, `status`) VALUES
(2, 'Job teacher', 'http://lienketso.vn', 1),
(3, 'IELT', 'http://lienketso.vn', 1),
(4, 'TOEICT', 'http://lienketso.vn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` decimal(15,2) NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `sercurity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `user_name`, `user_email`, `user_phone`, `address`, `amount`, `payment`, `payment_info`, `message`, `sercurity`, `status`, `created`) VALUES
(1, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '14000000.00', 'nganluong', NULL, 'Chưa có nội dung', NULL, 0, 1510116686),
(2, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '16000000.00', 'chuyenkhoan', NULL, 'Test thôi', NULL, 0, 1510116914),
(3, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '14000000.00', 'tructiep', NULL, 'test', NULL, 0, 1510117179),
(4, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '5000000.00', 'baokim', NULL, '', NULL, 0, 1510122555),
(5, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '5000000.00', 'baokim', NULL, '', NULL, 0, 1510122602),
(6, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '2000000.00', 'baokim', NULL, '', NULL, 0, 1510122744),
(7, 2, 'Trần Văn Toàn', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', '2000000.00', 'baokim', NULL, '', NULL, 0, 1510122816),
(8, 0, 'Nguyen Thanh An', 'annt@lienketso.vn', '0979823452', 'Thái Nguyên, Đại Từ', '2000000.00', 'tructiep', NULL, '', NULL, 0, 1510126070);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permission` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `created` int(15) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='người dùng front end';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `phone`, `address`, `permission`, `status`, `created`) VALUES
(1, 'Nguyễn Thành An', '123', 'annt@lienketso.vn', '079856541', 'Thái Nguyên', NULL, 1, 0),
(2, 'Trần Văn Toàn', 'e10adc3949ba59abbe56e057f20f883e', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', NULL, 1, 1509979323);

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(11) NOT NULL,
  `position` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'chức vụ',
  `company_id` int(11) NOT NULL COMMENT 'mã công ty',
  `description` int(11) NOT NULL COMMENT 'mô tả công việc',
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `is_current_job` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'là công việc hiện tại?',
  `candidate_id` int(11) NOT NULL COMMENT 'mã ứng viên',
  `level_id` int(11) NOT NULL COMMENT 'cấp bậc công việc',
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catnews`
--
ALTER TABLE `catnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_size`
--
ALTER TABLE `company_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desired_job`
--
ALTER TABLE `desired_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `literacy`
--
ALTER TABLE `literacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_cadidate_recruitment`
--
ALTER TABLE `map_cadidate_recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_cadidate_skill`
--
ALTER TABLE `map_cadidate_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_recruitment_careers`
--
ALTER TABLE `map_recruitment_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_candidates`
--
ALTER TABLE `member_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_companies`
--
ALTER TABLE `member_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `require_experience`
--
ALTER TABLE `require_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `catnews`
--
ALTER TABLE `catnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `company_size`
--
ALTER TABLE `company_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `desired_job`
--
ALTER TABLE `desired_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `literacy`
--
ALTER TABLE `literacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `map_cadidate_recruitment`
--
ALTER TABLE `map_cadidate_recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `map_cadidate_skill`
--
ALTER TABLE `map_cadidate_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `map_recruitment_careers`
--
ALTER TABLE `map_recruitment_careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member_candidates`
--
ALTER TABLE `member_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_companies`
--
ALTER TABLE `member_companies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `require_experience`
--
ALTER TABLE `require_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
