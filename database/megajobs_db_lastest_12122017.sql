-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 12, 2017 lúc 02:41 CH
-- Phiên bản máy phục vụ: 5.7.17-log
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `megajobs_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
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
  `permission` text COLLATE utf8_unicode_ci,
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `last_access_date` datetime DEFAULT NULL,
  `login_failed` tinyint(255) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `phone`, `created`, `username`, `password`, `status`, `permission`, `created_date`, `modified_date`, `last_access_date`, `login_failed`) VALUES
(2, 'Hà Hồng Hoa', 'Thanh Hóa, Yên Định', '0985548325', 0, 'hahonghoa53', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, NULL, NULL, NULL, 0),
(6, 'Nguyễn Thành An', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '0979823452', 0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, NULL, NULL, NULL, 0),
(7, 'Tran Tuan Tu', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '0979823452', 0, 'module123', 'e10adc3949ba59abbe56e057f20f883e', 1, '{\"category\":[\"index\"],\"product\":[\"index\",\"add\",\"edit\",\"del\"]}', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_order` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `careers`
--

INSERT INTO `careers` (`id`, `name`, `cat_name`, `is_order`, `status`) VALUES
(1, 'Trưởng phòng kinh doanh', 'truong-phong-kinh-doanh', 8, 0),
(2, 'Trưởng phòng đào tạo', 'truong-phong-dao-tao', 7, 0),
(3, 'Chuyên viên Marketing', 'chuyen-vien-marketing', 5, 0),
(4, 'Chuyên viên tư vấn khóa học / sales', 'chuyen-vien-tu-van-khoa-hoc--sales', 6, 0),
(6, ' Giáo viên TOEIC ', 'giao-vien-toeic', 3, 0),
(7, 'Giáo viên IELTS ', 'giao-vien-ielts', 2, 0),
(8, 'Giáo viên mầm non', 'giao-vien-mam-non', 1, 0),
(82, 'Trưởng phòng Marketing', 'truong-phong-marketing', 9, 0),
(83, 'Giám đốc trung tâm', 'giam-doc-trung-tam', 99, 0),
(84, 'Ciáo viên cấp 2', 'ciao-vien-cap-2', 99, 0),
(85, 'Giáo viên tiểu học', 'giao-vien-tieu-hoc', 99, 0),
(86, 'Giáo viên giao tiếp', 'giao-vien-giao-tiep', 99, 0),
(87, 'Giáo viên ngữ pháp', 'giao-vien-ngu-phap', 99, 0),
(88, 'Giáo viên phát âm', 'giao-vien-phat-am', 99, 0),
(89, 'Trợ giảng giáo viên nước ngoài', 'tro-giang-giao-vien-nuoc-ngoai', 99, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
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
-- Cấu trúc bảng cho bảng `category`
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
-- Đang đổ dữ liệu cho bảng `category`
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
-- Cấu trúc bảng cho bảng `catnews`
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
-- Đang đổ dữ liệu cho bảng `catnews`
--

INSERT INTO `catnews` (`id`, `parent`, `name`, `cat_name`, `is_order`, `status`, `lang_code`) VALUES
(1, 0, 'Tin tức sự kiện', 'tin-tuc-su-kien', 1, 1, 'vn'),
(4, 0, 'Dịch vụ ', 'dich-vu', 3, 1, 'vn'),
(5, 4, 'Dịch vụ Headhunting', 'dich-vu-headhunting', 1, 1, 'vn'),
(6, 7, 'Kinh nghiệm phát triển nhân sự', 'kinh-nghiem-phat-trien-nhan-su', 1, 0, 'vn'),
(7, 0, 'Tư vấn trung tâm', 'tu-van-trung-tam', 1, 1, 'vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `certificate`
--

CREATE TABLE `certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `major` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'chuyên ngành',
  `grade_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'xếp loại',
  `literacy_id` int(10) NOT NULL DEFAULT '0',
  `candidate_id` int(10) NOT NULL DEFAULT '0',
  `from_date` int(12) NOT NULL DEFAULT '0',
  `to_date` int(12) NOT NULL DEFAULT '0',
  `info` text COLLATE utf8_unicode_ci COMMENT 'thông tin bổ sung'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chứng chỉ' ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `status`, `major`, `grade_id`, `literacy_id`, `candidate_id`, `from_date`, `to_date`, `info`) VALUES
(1, 'Đại học ngoại ngữ', 1, 'Tiếng Anh', 0, 0, 3, 1242579600, 1272646800, 'B.B.A Bachelor of Business Administration in Tourism\nManagement. Models studied: Marketing, Accounting,\nTourism Product Development, Research methods,\nSpanish, Business English, Communication skills\nMinor: Sustainable Tourism and Destination\nManagement'),
(3, 'Đại học mở hà nội', 1, 'Lập trình', 0, 6, 3, 1512234000, 1513098000, 'Primary purpose: Achieve sales revenue assigned by the company by studying market need ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
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
(58, 'Tây Ninh', '276', 0, 0),
(59, 'Đồng Tháp', '277', 0, 0),
(60, 'Khác', '0', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company_size`
--

CREATE TABLE `company_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company_size`
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
-- Cấu trúc bảng cho bảng `contact`
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
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `user_name`, `user_email`, `user_phone`, `user_address`, `content`, `title`, `created`, `status`) VALUES
(2, 'Trần Tuấn Anh', 'tuananh@lienketso.vn', '0985548328', 'Hà Nội', 'Vòng cuối Shriners Hospitals for Children Open mang tới kịch bản không thể hấp dẫn hơn cho người xem. Cựu vô địch Asiad 2010 Kim Whee ghi sáu birdie để dẫn đầu với thành tích tổng -9 trước khi bước vào hố 17. Cùng thời điểm, Patrick Cantlay đánh mất lợi thế cực lớn với hai bogey liên tiếp ở hố 17 và 18, khiến tổng điểm giảm xuống -9.', 'Tư vấn về sản phẩm tại công ty', 0, 1),
(3, 'Nguyễn Thành An', 'annt@lienketso.vn', '0979823452', 'Thái Nguyên', 'Thi đấu trước, ngôi sao kỳ cựu người Đức Alex Cejka gây áp lực lên hai đối thủ đàn em bằng màn trình diễn siêu hạng với chín birdie để kết thúc bốn vòng với điểm -9. Lúc này, quyền tự quyết vẫn nằm trong tay Kim Whee bởi chỉ cần đạt par ở hai hố cuối, anh sẽ đoạt danh hiệu PGA Tour đầu tiên trong sự nghiệp. Nhưng tài năng người Hàn Quốc chỉ hoàn thành một nửa nhiệm vụ. Kim đạt par hố 17 và mắc bogey hố cuối. Từ điểm -10, thành tích tổng của anh giảm xuống cùng -9 như Cantlay và Cejka.\r\n\r\nBa golfer hay nhất giải phải bước vào hố phụ để tranh chức vô địch. Tại hố phụ đầu tiên, cả ba cùng đạt điểm par5. Sang hố phụ thứ hai, Cantlay bứt lên ghi birdie nhờ gậy thứ ba đưa bóng vào green sát hố. Cùng lúc, Cejka đạt par còn Kim Whee mắc bogey. Ngôi sao người Mỹ vỡ òa niềm vui với chiếc cúp PGA Tour đầu tiên sau nửa thập kỷ chơi chuyên nghiệp.', 'Làm sao để sử dụng dịch vụ', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `desired_job`
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
-- Cấu trúc bảng cho bảng `grade_certificate`
--

CREATE TABLE `grade_certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `grade_certificate`
--

INSERT INTO `grade_certificate` (`id`, `name`, `status`) VALUES
(1, 'Xuất sắc', 1),
(2, 'Giỏi', 1),
(3, 'Khá', 1),
(4, 'Trung bình khá', 1),
(5, 'Trung bình', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_type`
--

CREATE TABLE `job_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job_type`
--

INSERT INTO `job_type` (`id`, `name`, `status`) VALUES
(1, 'Toàn thời gian cố định', 1),
(3, 'Bán thời gian cố định', 1),
(4, 'Bán thời gian tạm thời', 1),
(5, 'Theo hợp đồng / tư vấn', 1),
(6, 'Thực tập', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'tên cấp bậc',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `levels`
--

INSERT INTO `levels` (`id`, `name`, `status`) VALUES
(9, 'Chuyên viên', 1),
(10, 'Trưởng nhóm', 0),
(11, 'Trưởng phòng', 0),
(12, 'Phó giám đốc', 0),
(13, 'Giám đốc', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `literacy`
--

CREATE TABLE `literacy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `literacy`
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
-- Cấu trúc bảng cho bảng `map_cadidate_skill`
--

CREATE TABLE `map_cadidate_skill` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL COMMENT 'mã ứng viên',
  `skill_id` int(11) NOT NULL COMMENT 'mã kĩ năng',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `map_candidate_recruitment`
--

CREATE TABLE `map_candidate_recruitment` (
  `id` int(12) NOT NULL,
  `candidate_id` int(11) NOT NULL COMMENT 'id ứng viên',
  `recruitment_id` int(11) NOT NULL COMMENT 'id tin tuyển dụng',
  `company_id` int(10) NOT NULL DEFAULT '0',
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_upload` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `apply_date` int(12) NOT NULL DEFAULT '0' COMMENT 'ngày ứng tuyển'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `map_candidate_recruitment`
--

INSERT INTO `map_candidate_recruitment` (`id`, `candidate_id`, `recruitment_id`, `company_id`, `phone`, `cv_upload`, `status`, `apply_date`) VALUES
(1, 3, 9, 3, '0979823452', 'Resume-Maire-Jacobs-2017.pdf', 1, 0),
(2, 3, 6, 3, '0979823452', 'megasite.pdf', 1, 1512792858);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `map_recruitment_careers`
--

CREATE TABLE `map_recruitment_careers` (
  `id` int(11) NOT NULL,
  `recruitment_id` int(11) NOT NULL DEFAULT '0' COMMENT 'mã tin tuyển dụng',
  `candidate_id` int(11) NOT NULL DEFAULT '0' COMMENT 'mã ngành nghề',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `map_recruitment_careers`
--

INSERT INTO `map_recruitment_careers` (`id`, `recruitment_id`, `candidate_id`, `status`) VALUES
(3, 5, 3, 1),
(4, 4, 3, 1),
(5, 2, 3, 1),
(6, 3, 3, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member_candidates`
--

CREATE TABLE `member_candidates` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(15) NOT NULL DEFAULT '0',
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT 'giới tính',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Chức danh ',
  `level_id` int(10) NOT NULL DEFAULT '0' COMMENT 'Câp bậc hiện tại',
  `experience_id` int(10) NOT NULL DEFAULT '0',
  `nationality` tinyint(2) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` int(12) DEFAULT '0',
  `city_id` int(11) DEFAULT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci COMMENT 'Mô tả bản thân',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mã facebook của ứng viên',
  `google` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mã google của ứng viên',
  `cv_upload` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actived` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mã kích hoạt tài khoản'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng lưu thông tin thành viên là ứng viên';

--
-- Đang đổ dữ liệu cho bảng `member_candidates`
--

INSERT INTO `member_candidates` (`id`, `email`, `password`, `created`, `full_name`, `gender`, `title`, `level_id`, `experience_id`, `nationality`, `image`, `birthday`, `city_id`, `phone`, `address`, `status`, `description`, `created_date`, `modified_date`, `facebook`, `google`, `cv_upload`, `actived`) VALUES
(1, 'annt@lienketso.com.vn', 'e10adc3949ba59abbe56e057f20f883e', 1510305371, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-11-21 10:00:32', '2017-11-21 10:00:32', NULL, NULL, NULL, NULL),
(2, 'hoahh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1510314455, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2017-11-21 10:00:32', '2017-11-21 10:00:32', NULL, NULL, NULL, NULL),
(3, 'thanhan1507@gmail.com', '96e79218965eb72c92a549dd5a330112', 1512646226, 'Nguyễn Thành An', 1, 'Lập trình viên PHP, UX/UI', 9, 3, 1, '13450307_1006073422841131_6687349337396034485_n.jpg', 616438800, 37, '0979823452', 'HH4C Linh Dam, Hoang Mai, Ha Noi', 1, 'I want become a professional php developer in vietnam, and i am php developer  Phân tích doanh số bán từng sản phẩm, lên kế hoạch chọn sản phẩm chạy chương trình khuyến mãi,\r\ntính giá khuyến mãi, theo dõi chỉnh sửa thông tin lên cẩm nang khuyến mãi. ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'facebook.com/wiseman', NULL, 'Resume-Maire-Jacobs-2017.pdf', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member_companies`
--

CREATE TABLE `member_companies` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` int(15) DEFAULT '0',
  `updated` int(15) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `city_id` int(11) DEFAULT NULL,
  `company_size_id` int(11) DEFAULT NULL COMMENT 'mã quy mô công ty',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'mô tả về công ty',
  `logo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'đường dẫn ảnh logo công ty',
  `company_fax` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'người liên hệ (đại diện)',
  `contact_phone` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'sô điện thoại liên hệ',
  `contact_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `actived` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Mã kích hoạt tài khoản'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng lưu thông tin thành viên là công ty';

--
-- Đang đổ dữ liệu cho bảng `member_companies`
--

INSERT INTO `member_companies` (`id`, `email`, `password`, `company_name`, `company_address`, `company_phone`, `website`, `created`, `updated`, `status`, `city_id`, `company_size_id`, `description`, `logo_url`, `company_fax`, `company_contact`, `contact_phone`, `contact_title`, `contact_email`, `actived`) VALUES
(1, 'thanhan1507@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'FPT software', 'Láng hòa lạc, Nam Từ Liêm, Hà Nội', '0979823452', 'dieutriphukhoa.vn', 1510304019, 1512369396, 0, 56, 8, 'Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante im', 'company-logo-big01.jpg', '6979823452', 'Nguyễn Thành An', '0979823452', 'Hành chính nhân sự', 'thanhan1507@gmail.com', NULL),
(2, 'annt@lienketso.vn', '1bd189600d9e9c257c7851b15a9cd037', 'Daian.,jsc', 'Tây Nam Linh Đàm, Hoàng Mai', '0439189898', 'http://dmit.vn', 1510304287, 1512404419, 0, 37, 6, 'Liên Kết Số sử dụng công nghệ thiết kế web chuyên nghiệp, thiết kế web nhanh chỉ trong vài giờ. Website được tối ưu với các công cụ tìm kiếm, Website tương thích với các thiết bị di động… Giao diện sang trọng, tiện dụng…Dễ dàng thay đổi theo phong cách ri', NULL, '0439189898', 'Trần Văn An', '0978523541', 'Phó giám đốc', 'annt@lienketso.vn', NULL),
(3, 'hoahong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Công Ty cổ phần liên kết số TDA', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '0979823452', 'http://lienketso.com.vn', 1511882483, 1512235352, 0, 10, 7, 'Trung tâm sinh trắc vân tay vân tay việt là đơn vị đầu tiên đưa dịch vụ sinh trắc dấu vân tay từ ADRC, trung tâm nghiên cứu dấu vân tay Châu Á về Việt Nam, với hơn 3 năm kinh nghiệm triển khai dịch vụ, Vân tay việt tự hào là đơn vị cung cấp độc quyền dịch', 'company-logo05.jpg', '0979823452', 'Nguyễn Thành An', '0979823452', 'Hành chính nhân sự', 'thanhan1507@gmail.com', NULL),
(9, 'anan@gmail.com', '96e79218965eb72c92a549dd5a330112', 'Vietllot JSC', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '979823452', 'dsfsdfsd', 1513081318, 0, 1, 44, 9, 'dfsdfdsgdsgd', NULL, '', 'Nguyễn Thành An', '979823452', 'Phó giám đốc', 'thanhan1507@gmail.com', '7b3e58c357cbcb6bd91f3b08165648f4'),
(8, 'vtvlks2016@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vietllot JSC', 'HH4C Linh Dam, Hoang Mai, Ha Noi', '979823452', 'dieutriphukhoa.vn', 1513081102, 0, 1, 45, 8, 'dsgsd', NULL, '', 'Nguyễn Thành An', '979823452', 'Phó giám đốc', 'thanhan1507@gmail.com', 'b9500a8633f07a5489ec1f9f023542e7');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
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
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `parent`, `name`, `cat_id`, `category_id`, `link`, `is_order`, `is_online`, `lang_code`) VALUES
(11, 0, 'Tư vấn ứng viên', 0, 0, '', 1, 1, 'vn'),
(12, 0, 'Tư vấn trung tâm', 7, 0, '', 2, 1, 'vn'),
(13, 23, 'Dịch vụ ', 4, 0, '', 3, 1, 'vn'),
(14, 13, 'Dịch vụ đăng tuyển', 0, 0, '', 1, 1, 'vn'),
(15, 13, 'Dịch vụ tìm kiếm hồ sơ', 0, 0, '', 2, 1, 'vn'),
(16, 13, 'Dịch vụ Headhunting', 0, 0, '', 3, 1, 'vn'),
(26, 12, 'Chia sẻ kinh nghiệm Marketing / Pr', 0, 0, '', 1, 1, 'vn'),
(27, 12, 'Chia sẻ kinh nghiệm phát triển thị trường', 0, 0, '', 2, 1, 'vn'),
(28, 12, 'Chia sẻ kinh nghiệm phát triển nhân sự', 6, 0, '', 3, 1, 'vn'),
(29, 12, 'Kinh nghiệm online marketing', 0, 0, '', 4, 1, 'vn'),
(23, 11, 'Tư vấn nghề nghiệp', 0, 0, '', 1, 1, 'vn'),
(24, 11, 'Tư vấn kỹ năng phỏng vấn', 0, 0, '', 2, 1, 'vn'),
(25, 11, 'Tư vẫn kỹ năng giảng dạy', 0, 0, '', 3, 1, 'vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
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
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `cat_id`, `title`, `news_name`, `description`, `content`, `image`, `created`, `updated`, `status`, `view`, `lang_code`) VALUES
(5, 1, 'Ông Trump đặt vòng hoa tại đài tưởng niệm ở Trân Châu Cảng', 'ong-trump-dat-vong-hoa-tai-dai-tuong-niem-o-tran-chau-cang', 'Tổng thống Mỹ ngày 3/11 tới đặt vòng hoa tại đài tưởng niệm USS Arizona ở Trân Châu Cảng, tưởng nhớ các binh sĩ thiệt mạng trong Thế chiến 2.', '<p>Tổng thống Mỹ Donald Trump v&agrave; Đệ nhất phu nh&acirc;n Melania tham gia một buổi lễ đặt v&ograve;ng hoa b&ecirc;n trong đ&agrave;i tưởng niệm USS Arizona,&nbsp;điểm đ&aacute;nh dấu nơi y&ecirc;n nghỉ của hơn 1.000 thuỷ thủ v&agrave; l&iacute;nh thuỷ đ&aacute;nh bộ chết tr&ecirc;n t&agrave;u chiến, trong cuộc tấn c&ocirc;ng bất ngờ của ph&aacute;t x&iacute;t Nhật ng&agrave;y 7/12/1941,&nbsp;<em>ABC News</em>&nbsp;đưa tin.</p>\r\n\r\n<p>Tổng thống Mỹ v&agrave; phu nh&acirc;n sau đ&oacute; n&eacute;m những c&aacute;nh hoa trắng l&ecirc;n x&aacute;c con t&agrave;u đắm USS Arizona. Th&aacute;p tung vợ chồng &ocirc;ng chủ Nh&agrave; Trắng c&ograve;n c&oacute; Đ&ocirc; đốc Harry Harris, Tư lệnh Bộ chỉ huy Th&aacute;i B&igrave;nh Dương (PACOM) của Mỹ.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; lần đầu ti&ecirc;n &ocirc;ng Trump tới thăm Tr&acirc;n Ch&acirc;u Cảng. Trước đ&oacute;, Tổng thống Mỹ cho biết &ocirc;ng &quot;đ&atilde; được đọc, nghe, n&oacute;i v&agrave; học&quot; về Tr&acirc;n Ch&acirc;u Cảng nhưng &quot;chưa bao giờ tận mắt nh&igrave;n thấy&quot;. Tổng thống Trump th&ecirc;m rằng &ocirc;ng tin chuyến thăm sẽ &quot;rất th&uacute; vị&quot;.</p>\r\n\r\n<p>Ng&agrave;y mai, Tổng thống Mỹ sẽ tới Nhật Bản. Đ&acirc;y l&agrave; điểm dừng ch&acirc;n đầu ti&ecirc;n trong chuyến c&ocirc;ng du ch&acirc;u &Aacute; k&eacute;o d&agrave;i 14 ng&agrave;y của &ocirc;ng chủ Nh&agrave; Trắng, đi qua 5 nước gồm Nhật Bản, H&agrave;n Quốc, Trung Quốc, Việt Nam v&agrave; Philippines.</p>\r\n', 'AP-USS1-DC-110417-4x3-992-8169-1509780475.jpg', 1509783609, 1509783622, 1, 27, 'vn'),
(4, 1, 'Triều Tiên kêu gọi chấm dứt \'các lệnh trừng phạt tàn bạo\'', 'trieu-tien-keu-goi-cham-dut-cac-lenh-trung-phat-tan-bao', 'Triều Tiên mô tả các biện pháp trừng phạt nước này là \"tàn bạo, tạo thành tội diệt chủng\", kêu gọi lập tức xóa bỏ chúng.', '<p>&quot;Những lệnh trừng phạt t&agrave;n bạo do Mỹ dẫn đầu v&agrave; &aacute;p lực đối với DPRK cấu th&agrave;nh tội x&acirc;m phạm nh&acirc;n quyền v&agrave; diệt chủng&quot;,&nbsp;<em>Reuters</em>&nbsp;dẫn th&ocirc;ng b&aacute;o từ ph&aacute;i đo&agrave;n Triều Ti&ecirc;n tại Li&ecirc;n Hợp Quốc ng&agrave;y 3/11 cho biết. C&aacute;c lệnh trừng phạt &quot;đe dọa v&agrave; ngăn cản người d&acirc;n DPRK được hưởng nh&acirc;n quyền trong mọi lĩnh vực&quot;.</p>\r\n\r\n<p>DPRK l&agrave; viết tắt của Cộng h&ograve;a D&acirc;n chủ Nh&acirc;n d&acirc;n Triều Ti&ecirc;n.</p>\r\n\r\n<p>&quot;Một số quốc gia v&ocirc; lương t&acirc;m đ&atilde; chặn việc chuyển giao thiết bị y tế c&ugrave;ng thuốc men&quot; cho trẻ em v&agrave; c&aacute;c b&agrave; mẹ ở Triều Ti&ecirc;n, theo th&ocirc;ng b&aacute;o. &quot;Mọi lệnh trừng phạt vi phạm nh&acirc;n quyền, v&ocirc; nh&acirc;n t&iacute;nh nhằm v&agrave;o DPRK cần được x&oacute;a bỏ ho&agrave;n to&agrave;n v&agrave; ngay lập tức&quot;.</p>\r\n\r\n<p>Th&ocirc;ng b&aacute;o tr&ecirc;n được đưa ra trong bối cảnh Tổng thống Mỹ Donald Trump bắt đầu chuyến thăm ch&acirc;u &Aacute;, trong đ&oacute; c&oacute; c&aacute;c nước Trung Quốc, H&agrave;n Quốc v&agrave; Nhật Bản, t&igrave;m kiếm sự hỗ trợ để g&acirc;y &aacute;p lực với Triều Ti&ecirc;n, buộc B&igrave;nh Nhưỡng từ bỏ chương tr&igrave;nh hạt nh&acirc;n.</p>\r\n\r\n<p>Triều Ti&ecirc;n gần đ&acirc;y hứng chịu h&agrave;ng loạt lệnh trừng phạt từ cộng đồng quốc tế, sau khi nước n&agrave;y thử hạt nh&acirc;n lần 6 h&ocirc;m 3/9. Mỹ th&aacute;ng 10 đơn phương trừng phạt 7 c&aacute; nh&acirc;n Triều Ti&ecirc;n v&agrave; ba tổ chức với l&yacute; do &quot;x&acirc;m phạm nh&acirc;n quyền nghi&ecirc;m trọng&quot;.</p>\r\n\r\n<p>Hội đồng Bảo an Li&ecirc;n Hợp Quốc trong th&aacute;ng 9 tăng cường trừng phạt Triều Ti&ecirc;n, bao gồm cấm Triều Ti&ecirc;n xuất khẩu h&agrave;ng may mặc, hạn chế nhập khẩu c&aacute;c sản phẩm từ dầu mỏ, kh&iacute; thi&ecirc;n nhi&ecirc;n h&oacute;a lỏng v&agrave; ngưng tụ, hạn chế thu&ecirc; lao động Triều Ti&ecirc;n tại nước ngo&agrave;i, đ&oacute;ng băng t&agrave;i sản v&agrave; cấm đi lại với một số quan chức.</p>\r\n', 'download-4-4850-1509765596.jpg', 1509767079, 0, 1, 13, 'vn'),
(6, 1, 'Tiền 100 đồng bán với giá cao gấp hàng trăm lần', 'tien-100-dong-ban-voi-gia-cao-gap-hang-tram-lan', 'Mỗi tờ tiền 100 đồng được các điểm đổi tiền lẻ rao bán trên mạng với giá 20.000 đồng, tức cao gấp 200 lần so với mệnh giá. ', '<p>Tờ tiền 100 đồng được in ấn năm 1991&nbsp;c&oacute; mệnh gi&aacute; thấp nhất trong hệ thống tiền tệ đang lưu h&agrave;nh tại Việt Nam. Tuy nhi&ecirc;n, những năm qua, loại tiền 100 đồng gần như rất &iacute;t được người d&acirc;n sử dụng khiến kh&ocirc;ng &iacute;t người trẻ tuổi thậm ch&iacute; kh&ocirc;ng biết c&oacute; sự tồn tại của đồng tiền n&agrave;y trong hệ thống tiền tệ.</p>\r\n\r\n<p>Diệp Phước, sinh vi&ecirc;n một trường đại học cho biết, từ l&uacute;c sinh ra đến giờ, cậu vẫn chưa thấy được tờ 100 đồng. &quot;Sau vụ việc đ&ograve;i thối tờ 100 đồng tại trạm thu ph&iacute; BOT Cai Lậy, t&ocirc;i mới biết l&agrave; Việt Nam vẫn đang c&oacute; tờ 100 đồng c&oacute; gi&aacute; trị thanh to&aacute;n&quot;, Phước chia sẻ.&nbsp;</p>\r\n\r\n<p>Do mức độ lưu th&ocirc;ng thấp n&ecirc;n hiện giờ ngo&agrave;i thị trường rất &iacute;t tờ tiền mệnh gi&aacute; n&agrave;y. V&igrave; vậy, việc t&igrave;m kiếm hay muốn sở hữu đồng 100 đồng cũng kh&ocirc;ng dễ d&agrave;ng.&nbsp;<span style=\"color:rgb(34, 34, 34)\">Anh Nam, một nh&acirc;n vi&ecirc;n c&ocirc;ng nghệ tại quận 10, TP HCM cho biết, anh muốn t&igrave;m tờ 100 đồng để đưa v&agrave;o bộ sưu tầm tiền, nhưng đến một số ng&acirc;n h&agrave;ng thương mại kh&ocirc;ng thể đổi được v&igrave; c&aacute;c nh&acirc;n vi&ecirc;n cho biết từ l&acirc;u nhu cầu sử dụng đồng tiền n&agrave;y trong giao dịch đ&atilde; kh&ocirc;ng c&ograve;n n&ecirc;n ng&acirc;n h&agrave;ng kh&ocirc;ng c&oacute; sẵn.&nbsp;</span></p>\r\n\r\n<p>&ldquo;Kh&ocirc;ng phải năm nay m&agrave; từ nhiều năm trước đ&atilde; kh&ocirc;ng c&oacute; tiền 100 đồng để đổi. Thậm ch&iacute;, nhiều người muốn đổi tiền mệnh gi&aacute; từ 500 đồng, đến 1.000 đồng để d&ugrave;ng lễ ch&ugrave;a dịp Tết nguy&ecirc;n đ&aacute;n cũng kh&oacute; c&oacute; thể đ&aacute;p ứng được, huống chi tờ 100 đồng&quot;, chị Mai, nh&acirc;n vi&ecirc;n chi nh&aacute;nh một ng&acirc;n h&agrave;ng thương mại n&oacute;i v&agrave; cho biết, do lượng tiền mệnh gi&aacute; nhỏ những năm gần đ&acirc;y rất &iacute;t được Ng&acirc;n h&agrave;ng Nh&agrave; nước in mới.&nbsp;</p>\r\n\r\n<p>Do sự khan hiếm của c&aacute;c loại tiền mệnh gi&aacute; nhỏ, đặc biệt l&agrave; tờ 100 đồng n&ecirc;n kh&ocirc;ng &iacute;t điểm thu đổi tiền lẻ đ&atilde; đẩy mức ph&iacute; đổi tiền kh&aacute; cao, c&oacute; nơi l&ecirc;n cao gấp h&agrave;ng trăm lần.&nbsp;</p>\r\n\r\n<p>Theo đ&oacute;, một shop chuy&ecirc;n mua b&aacute;n tiền lẻ tr&ecirc;n mạng v&agrave; c&oacute; địa chỉ tại H&agrave; Nội rao b&aacute;n mỗi tờ tiền giấy mệnh gi&aacute; 100 đồng l&ecirc;n tới 20.000 đồng. Chủ đầu mối đổi tiền lẻ n&agrave;y cho biết, tiền lẻ, đặc biệt l&agrave; tờ 100 đồng hiện nay kh&ocirc;ng c&oacute; nhiều, chủ yếu chỉ xuất hiện rất &iacute;t v&agrave;o c&aacute;c dịp Tết, khi người d&acirc;n đi lễ ch&ugrave;a, được c&aacute;c điểm đổi tiền nhỏ lẻ b&aacute;n với gi&aacute; &quot;cắt cổ&quot;.</p>\r\n\r\n<p>Hiện tại, anh chỉ đổi tiền mệnh gi&aacute; từ 200 đồng trở l&ecirc;n l&agrave; chủ yếu, với mức ph&iacute; đổi dao động từ 80-100% với tiền mệnh gi&aacute; dưới 1.000 đồng v&agrave; 10-20% với tiền lẻ mệnh gi&aacute; dưới 10.000 đồng. C&ograve;n tiền 100 đồng th&igrave; l&acirc;u l&acirc;u mới c&oacute; một &iacute;t v&agrave; được đổi với mức 20.000 đồng mỗi tờ.&nbsp;</p>\r\n\r\n<p>Trao đổi mới đ&acirc;y với&nbsp;<em>VnExpress</em>, Gi&aacute;m đốc Ng&acirc;n h&agrave;ng Nh&agrave; nước Chi nh&aacute;nh Tiền Giang, b&agrave; Nguyễn Thị Đậm khẳng định, c&aacute;c loại tiền mệnh gi&aacute; nhỏ 100, 200 đồng vẫn đang được cung ứng đầy đủ cho nền kinh tế. Nếu doanh nghiệp, c&aacute; nh&acirc;n c&oacute; nhu cầu về loại tiền, mệnh gi&aacute; n&agrave;o th&igrave; cứ đề nghị ng&acirc;n h&agrave;ng thương mại cung ứng. Nếu ng&acirc;n h&agrave;ng thương mại kh&ocirc;ng c&oacute; th&igrave; y&ecirc;u cầu Ng&acirc;n h&agrave;ng Nh&agrave; nước cung ứng.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, b&agrave; Đậm cũng chia sẻ th&ecirc;m, thực tế thời gian qua, mức độ lưu th&ocirc;ng c&aacute;c loại tiền mệnh gi&aacute; nhỏ, đặc biệt l&agrave; 100 đồng rất thấp. V&igrave; nhu cầu về loại tiền 100 đồng tăng cao đột biến, Ng&acirc;n h&agrave;ng Nh&agrave; nước chi nh&aacute;nh Tiền Giang đ&atilde; l&agrave;m văn bản gửi Ng&acirc;n h&agrave;ng Nh&agrave; nước Trung ương xin điều tiết th&ecirc;m lượng tiền mệnh gi&aacute; n&agrave;y về để đ&aacute;p ứng nhu cầu tại địa phương.&nbsp;</p>\r\n\r\n<p>Ph&oacute; gi&aacute;m đốc Ng&acirc;n h&agrave;ng Nh&agrave; nước TP HCM, &ocirc;ng Nguyễn Ho&agrave;ng Minh cũng nh&igrave;n nhận, thời gian qua, tr&ecirc;n địa b&agrave;n th&agrave;nh phố, mức độ lưu th&ocirc;ng của c&aacute;c loại tiền lẻ mệnh gi&aacute; nhỏ 100, 200 đồng kh&aacute; thấp v&igrave; người d&acirc;n &iacute;t sử dụng.&nbsp;</p>\r\n\r\n<p>Ng&agrave;y 30/11,&nbsp;khi cho xe qua trạm thu ph&iacute; BOT Cai Lậy - Tiền Giang,&nbsp;c&aacute;c t&agrave;i xế tiếp tục trả tiền lẻ, đưa 25.100 đồng để mua v&eacute; 25.000 đồng v&agrave; cương quyết đ&ograve;i nh&acirc;n vi&ecirc;n trạm thu ph&iacute; trả lại đ&uacute;ng 100 đồng.&nbsp;<span style=\"color:rgb(34, 34, 34)\">Sau thời gian đ&ocirc;i co v&igrave; kh&ocirc;ng c&oacute; tiền 100 đồng thối cho t&agrave;i xế, nh&acirc;n vi&ecirc;n thu ph&iacute; trạm n&agrave;y đ&agrave;nh phải đ&oacute;ng cửa, bỏ chốt ra ngo&agrave;i.</span></p>\r\n\r\n<p>Hiện nay, cơ cấu tiền đồng của Việt Nam c&oacute; 12 loại mệnh gi&aacute;: 500.000 đồng, 200.000 đồng, 100.000 đồng, 50.000 đồng, 20.000 đồng, 10.000 đồng, 5.000 đồng, 2.000 đồng, 1.000 đồng, 500 đồng, 200 đồng v&agrave; 100 đồng.&nbsp;</p>\r\n\r\n<p>Tờ mệnh gi&aacute; 100 đồng được ph&aacute;t h&agrave;nh năm 1991 với k&iacute;ch thước 120mm x 59mm, in bằng giấy cotton, l&agrave; mệnh gi&aacute; nhỏ nhất vẫn c&ograve;n gi&aacute; trị lưu h&agrave;nh hiện tại, nhưng&nbsp;&iacute;t được sử dụng nhất.&nbsp;</p>\r\n', 'tienle38e5c7dd81cd4f58a29ad9dd-7129-9482-1512291357_500x300.jpg', 1512317335, 0, 1, 6, 'vn'),
(7, 6, 'Dương Triệu Vũ góp vốn mở chuỗi bánh 2 triệu USD', 'duong-trieu-vu-gop-von-mo-chuoi-banh-2-trieu-usd', 'Nam ca sỹ Dương Triệu Vũ vừa quyết định góp tiền mang một thương hiệu bánh Đài Loan về Việt Nam với số vốn dự kiến 2 triệu USD.', '<p>Cho biết c&oacute; sẵn đam m&ecirc; b&aacute;nh b&ocirc;ng lan Castella truyền thống của Đ&agrave;i Loan, nam ca sỹ Dương Triệu Vũ quyết định g&oacute;p vốn c&ugrave;ng một số người bạn để nhận nhượng quyền một thương hiệu chuy&ecirc;n sản xuất d&ograve;ng sản phẩm n&agrave;y về Việt Nam. Cửa h&agrave;ng đầu ti&ecirc;n của anh tr&ecirc;n đường Hồ T&ugrave;ng Mậu, TP HCM vừa đi v&agrave;o hoạt đồng cuối tuần qua. Giữa tuần n&agrave;y, cửa h&agrave;ng tiếp theo sẽ đ&oacute;n kh&aacute;ch tại khu vực phố cổ H&agrave; Nội. Trước mắt, nh&oacute;m anh dự kiến mở tổng cộng 4 cửa h&agrave;ng để đ&aacute;nh gi&aacute; nhu cầu thị trường.</p>\r\n\r\n<p>&ldquo;Vốn đầu tư của ch&uacute;ng t&ocirc;i kh&aacute; lớn, dự kiến sẽ bỏ ra tổng cộng khoảng 2 triệu USD. Ngo&agrave;i ra, với t&ocirc;i c&ograve;n l&agrave; t&acirc;m huyết của cả đội ngũ anh em v&agrave; nh&acirc;n vi&ecirc;n. Điều n&agrave;y th&igrave; kh&ocirc;ng thể đo đếm được&rdquo;, Dương Triệu Vũ cho biết.</p>\r\n', 'duong-trieu-vu-8961-1512326442.jpg', 1512356440, 1513057508, 1, 12, 'vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_list`
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
-- Đang đổ dữ liệu cho bảng `order_list`
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
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Trang bài viết riêng';

--
-- Đang đổ dữ liệu cho bảng `page`
--

INSERT INTO `page` (`id`, `title`, `cat_name`, `content`, `status`) VALUES
(1, 'Quy định bảo mật', 'quy-dinh-bao-mat', '<p>Dữ liệu của bạn sẽ được lưu v&agrave; xử l&yacute; tổng thể hay từng phần ở Việt Nam. Nếu bạn truy cập một Website English center work&nbsp;từ một địa điểm nằm ngo&agrave;i Việt Nam, việc sử dụng site đ&oacute; được hiểu l&agrave; bạn đồng &yacute; chuyển dữ liệu của m&igrave;nh ra ngo&agrave;i phạm vi nước đ&oacute; v&agrave; gửi tới Việt Nam.</p>\r\n\r\n<p>C&aacute;c site của ch&uacute;ng t&ocirc;i chứa c&aacute;c li&ecirc;n kết tới c&aacute;c site kh&aacute;c m&agrave; ch&uacute;ng t&ocirc;i kh&ocirc;ng kiểm so&aacute;t. Navigos Group, Ltd, c&ocirc;ng ty sở hữu v&agrave; điều h&agrave;nh Website English center work, kh&ocirc;ng chịu tr&aacute;ch nhiệm về c&aacute;c ch&iacute;nh s&aacute;ch bảo mật hoặc việc thực hiện ch&uacute;ng của c&aacute;c site m&agrave; bạn kết nối tới từ Website English center work. Ch&uacute;ng t&ocirc;i khuyến kh&iacute;ch bạn xem x&eacute;t c&aacute;c ch&iacute;nh s&aacute;ch bảo mật th&ocirc;ng tin của c&aacute;c site kh&aacute;c đ&oacute; để c&oacute; thể hiểu c&aacute;ch thức họ thu thập, sử dụng v&agrave; chia sẻ th&ocirc;ng tin của bạn. Ch&iacute;nh s&aacute;ch Bảo mật n&agrave;y chỉ &aacute;p dụng cho c&aacute;c th&ocirc;ng tin m&agrave; ch&uacute;ng t&ocirc;i thu thập tr&ecirc;n Website English center work v&agrave; kh&ocirc;ng &aacute;p dụng cho th&ocirc;ng tin m&agrave; ch&uacute;ng t&ocirc;i thu thập được theo c&aacute;ch kh&aacute;c.</p>\r\n\r\n<h2>C&aacute;c th&ocirc;ng tin c&oacute; thể nhận dạng c&aacute; nh&acirc;n n&agrave;o được thu thập từ bạn</h2>\r\n\r\n<div>\r\n<p>Website English center work thu thập th&ocirc;ng tin theo một số c&aacute;ch từ c&aacute;c mục kh&aacute;c nhau tr&ecirc;n website của m&igrave;nh.</p>\r\n\r\n<p>Một số th&ocirc;ng tin c&aacute; nh&acirc;n được tập hợp lại khi bạn đăng k&yacute;. Trong khi đăng k&yacute;, ch&uacute;ng t&ocirc;i hỏi t&ecirc;n v&agrave; địa chỉ email của bạn. Hệ thống cũng c&oacute; thể hỏi địa chỉ đường phố, th&agrave;nh phố, bang/tỉnh, m&atilde; v&ugrave;ng/bưu điện, quốc gia, số điện thoại, th&ocirc;ng tin thanh to&aacute;n v&agrave; địa chỉ m&aacute;y (URL) của website của bạn, mặc d&ugrave; chỉ những trường được đ&aacute;nh dấu sao * tr&ecirc;n phần đăng k&yacute; mới l&agrave; th&ocirc;ng tin bắt buộc. Website English center work cũng thu thập hoặc c&oacute; thể thu thập th&ocirc;ng tin nh&acirc;n khẩu học kh&ocirc;ng chỉ từ ri&ecirc;ng bạn như tuổi t&aacute;c, ưu ti&ecirc;n, giới t&iacute;nh, c&aacute;c mối quan t&acirc;m v&agrave; sở th&iacute;ch. Đ&ocirc;i khi ch&uacute;ng t&ocirc;i thu thập hoặc c&oacute; thể thu thập một kết hợp của hai kiểu th&ocirc;ng tin. Ngay khi bạn đăng k&yacute;, bạn kh&ocirc;ng c&ograve;n v&ocirc; danh với Website English center works nữa, bạn c&oacute; t&ecirc;n truy cập v&agrave; c&oacute; thể khai th&aacute;c đầy đủ c&aacute;c sản phẩm/dịch vụ của Website English center works.</p>\r\n\r\n<p>Ngo&agrave;i th&ocirc;ng tin đăng k&yacute;, đ&ocirc;i khi ch&uacute;ng t&ocirc;i c&oacute; thể hỏi bạn th&ocirc;ng tin c&aacute; nh&acirc;n bao gồm (nhưng kh&ocirc;ng hạn chế) khi bạn đặt đăng quảng c&aacute;o tuyển dụng hoặc khai th&aacute;c c&aacute;c t&iacute;nh năng kh&aacute;c của Website English center works. Nếu bạn li&ecirc;n lạc với ch&uacute;ng t&ocirc;i, ch&uacute;ng t&ocirc;i c&oacute; thể giữ một bản ghi nhớ về sự li&ecirc;n lạc n&agrave;y.</p>\r\n\r\n<p>Mỗi trang trong phạm vi Website English center work đều c&oacute; đường dẫn tới Ch&iacute;nh s&aacute;ch Bảo mật n&agrave;y.</p>\r\n</div>\r\n\r\n<h2>Cookies l&agrave; g&igrave; v&agrave; c&aacute;ch ch&uacute;ng được sử dụng</h2>\r\n\r\n<div>L&agrave; một phần của việc đưa ra v&agrave; cung cấp c&aacute;c dịch vụ c&aacute; nh&acirc;n v&agrave; theo y&ecirc;u cầu kh&aacute;ch h&agrave;ng, Website English center work c&oacute; thể d&ugrave;ng c&aacute;c cookie để lưu v&agrave; đ&ocirc;i khi theo d&otilde;i th&ocirc;ng tin về bạn. Cookie l&agrave; một lượng nhỏ dữ liệu được gửi tới tr&igrave;nh duyệt của bạn từ m&aacute;y chủ web v&agrave; được lưu tr&ecirc;n đĩa cứng m&aacute;y t&iacute;nh của bạn. Một v&agrave;i t&iacute;nh năng của Website Vietnamworks đ&ograve;i hỏi bạn chấp nhận c&aacute;c cookie mới c&oacute; thể sử dụng được. (xem mục &ldquo;Bạn c&oacute; những lựa chọn n&agrave;o khi thu thập, sử dụng v&agrave; ph&acirc;n phối th&ocirc;ng tin của bạn&rdquo; để c&oacute; th&ocirc;ng tin chi tiết hơn về c&aacute;c cookie).\r\n<p>N&oacute;i chung, ch&uacute;ng t&ocirc;i d&ugrave;ng c&aacute;c cookie cho c&aacute;c mục đ&iacute;ch sau đ&acirc;y:</p>\r\n\r\n<p>(1) Nhận dạng v&agrave; gắn nh&atilde;n cho tất cả c&aacute;c c&ocirc;ng việc &ldquo;mới&rdquo; từ lần cuối c&ugrave;ng của bạn gh&eacute; thăm website</p>\r\n\r\n<p>(2) Lưu theo y&ecirc;u cầu hoặc vĩnh viễn t&ecirc;n truy cập v&agrave; mật khẩu l&ecirc;n m&aacute;y của bạn để bạn kh&ocirc;ng phải nhập lại mỗi lần gh&eacute; thăm website của ch&uacute;ng t&ocirc;i</p>\r\n\r\n<p>(3) Cho ph&eacute;p bạn &ldquo;kiểm tra danh s&aacute;ch&rdquo; c&aacute;c c&ocirc;ng việc m&agrave; bạn muốn đ&aacute;nh dấu để giữ lại v&agrave; xem sau n&agrave;y</p>\r\n\r\n<p>C&aacute;c mạng quảng c&aacute;o của c&aacute;c c&ocirc;ng ty đăng việc tr&ecirc;n Website English center works cũng c&oacute; thể d&ugrave;ng c&aacute;c cookie của ri&ecirc;ng họ.</p>\r\n\r\n<p>Website English center work cũng sẽ tập hợp v&agrave; c&oacute; thể tập hợp th&ocirc;ng tin n&agrave;o đ&oacute; về việc sử dụng Website English center work của bạn, chẳng hạn những khu vực bạn gh&eacute; thăm v&agrave; những dịch vụ bạn truy nhập. Ngo&agrave;i ra, Website English center work cũng c&oacute; thể thu thập những th&ocirc;ng tin về phần cứng, phần mềm tr&ecirc;n m&aacute;y t&iacute;nh của bạn. Th&ocirc;ng tin n&agrave;y c&oacute; thể bao gồm những kh&ocirc;ng hạn chế địa chỉ IP, kiểu tr&igrave;nh duyệt, t&ecirc;n miền, c&aacute;c mục bạn truy nhập v&agrave; c&aacute;c địa chỉ website tham chiếu.</p>\r\n</div>\r\n\r\n<h2>Th&ocirc;ng tin của bạn được sử dụng như thế n&agrave;o</h2>\r\n\r\n<div>\r\n<p>Bằng việc cung cấp th&ocirc;ng tin của m&igrave;nh, bạn đồng &yacute; để English center work Website, c&aacute;c c&ocirc;ng ty li&ecirc;n kết, đơn vị trực thuộc v&agrave; c&aacute;c th&agrave;nh vi&ecirc;n trực thuộc Navigos Group c&oacute; thể sử dụng th&ocirc;ng tin của bạn, d&ugrave; đ&oacute; l&agrave; th&ocirc;ng tin c&aacute; nh&acirc;n, nh&acirc;n khẩu học, tập hợp hay kỹ thuật, đều nhằm mục đ&iacute;ch điều h&agrave;nh v&agrave; cải tiến Website English center work, tăng cường tiện &iacute;ch cho người sử dụng hoặc giới thiệu v&agrave; ph&acirc;n phối c&aacute;c sản phẩm v&agrave; dịch vụ của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i cũng c&oacute; thể d&ugrave;ng th&ocirc;ng tin thu thập được để th&ocirc;ng b&aacute;o cho bạn về những sản phẩm v&agrave; dịch vụ do Website English center work hay c&aacute;c c&ocirc;ng ty đối t&aacute;c cung cấp, hoặc để xin &yacute; kiến của bạn về c&aacute;c sản phẩm v&agrave; dịch vụ hiện tại hay những sản phẩm v&agrave; dịch vụ tiềm năng mới.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i cũng c&oacute; thể d&ugrave;ng th&ocirc;ng tin li&ecirc;n lạc của bạn để gửi cho bạn email hoặc c&aacute;c th&ocirc;ng b&aacute;o kh&aacute;c về những cập nhật tại website tuyển dụng của English center work. Nội dung v&agrave; tần suất của những th&ocirc;ng b&aacute;o n&agrave;y sẽ thay đổi tuỳ thuộc v&agrave;o th&ocirc;ng tin m&agrave; ch&uacute;ng t&ocirc;i c&oacute; về bạn. Ngo&agrave;i ra, v&agrave;o l&uacute;c đăng k&yacute;, bạn c&oacute; quyền lựa chọn nhận những th&ocirc;ng tin, th&ocirc;ng b&aacute;o v&agrave; c&aacute;c chương tr&igrave;nh khuyến m&atilde;i bao gồm nhưng kh&ocirc;ng hạn chế c&aacute;c bản tin miễn ph&iacute; từ English center works li&ecirc;n quan đến những chủ đề m&agrave; bạn c&oacute; thể đặc biệt quan t&acirc;m.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i c&oacute; một khu vực để bạn c&oacute; thể li&ecirc;n lạc với ch&uacute;ng t&ocirc;i. Bất kỳ phản hồi n&agrave;o bạn gửi đến cho ch&uacute;ng t&ocirc;i sẽ trở th&agrave;nh t&agrave;i sản của ch&uacute;ng t&ocirc;i v&agrave; ch&uacute;ng t&ocirc;i c&oacute; thể d&ugrave;ng phản hồi đ&oacute; (chẳng hạn c&aacute;c c&acirc;u chuyện th&agrave;nh c&ocirc;ng) cho c&aacute;c mục đ&iacute;ch tiếp thị, hoặc li&ecirc;n hệ với bạn để c&oacute; th&ecirc;m th&ocirc;ng tin.</p>\r\n</div>\r\n\r\n<h2>Ai đang thu thập th&ocirc;ng tin của bạn</h2>\r\n\r\n<div>\r\n<p>Khi được hỏi về c&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n tr&ecirc;n website tuyển dụng của English center work, c&oacute; nghĩa l&agrave; bạn đang chia sẻ th&ocirc;ng tin đ&oacute; với ri&ecirc;ng Website English center work, trừ phi c&oacute; th&ocirc;ng b&aacute;o cụ thể kh&aacute;c. Tuy nhi&ecirc;n, một số hoạt động do đặc trưng của ch&uacute;ng, sẽ dẫn đến việc th&ocirc;ng tin c&aacute; nh&acirc;n của bạn được tiết lộ cho những người sử dụng kh&aacute;c của Website English center work. V&iacute; dụ, khi bạn điền th&ocirc;ng tin c&aacute; nh&acirc;n l&ecirc;n bản đăng quảng c&aacute;o tuyển dụng, th&ocirc;ng tin n&agrave;y n&oacute;i chung sẽ được gộp trong c&ocirc;ng việc của bạn, trừ phi c&oacute; th&ocirc;ng b&aacute;o cụ thể kh&aacute;c.</p>\r\n</div>\r\n\r\n<h2>Th&ocirc;ng tin của bạn c&oacute; thể chia sẻ với ai</h2>\r\n\r\n<div>\r\n<p>Ch&uacute;ng t&ocirc;i kh&ocirc;ng tiết lộ cho b&ecirc;n thứ ba th&ocirc;ng tin c&aacute; nh&acirc;n của bạn, cũng như th&ocirc;ng tin c&aacute; nh&acirc;n v&agrave; nh&acirc;n khẩu học kết hợp, hoặc th&ocirc;ng tin về việc sử dụng Website English center work của bạn (chẳng hạn c&aacute;c khu vực bạn gh&eacute; thăm, hay c&aacute;c dịch vụ m&agrave; bạn truy cập), trừ năm mục sau đ&acirc;y.</p>\r\n\r\n<p>1. Ch&uacute;ng t&ocirc;i c&oacute; thể để lộ th&ocirc;ng tin như vậy cho c&aacute;c nh&oacute;m thứ ba nếu bạn đồng &yacute;. V&iacute; dụ, nếu bạn cho biết bạn muốn nhận th&ocirc;ng tin về c&aacute;c sản phẩm v&agrave; dịch vụ của b&ecirc;n thứ ba khi đăng k&yacute; một t&agrave;i khoản tr&ecirc;n Website English center work, ch&uacute;ng t&ocirc;i c&oacute; thể cung cấp th&ocirc;ng tin li&ecirc;n hệ của bạn cho b&ecirc;n thứ ba đ&oacute;, v&iacute; dụ người sử dụng lao động, c&aacute;c nh&agrave; tuyển dụng, người thu thập dữ liệu, nh&acirc;n vi&ecirc;n thị trường hoặc những người kh&aacute;c với mục đ&iacute;ch gửi email cho bạn hay li&ecirc;n lạc với bạn theo c&aacute;ch kh&aacute;c. Ch&uacute;ng t&ocirc;i c&oacute; thể d&ugrave;ng dữ liệu đ&atilde; c&oacute; về bạn (như c&aacute;c mối quan t&acirc;m hay sở th&iacute;ch m&agrave; bạn đ&atilde; tr&igrave;nh b&agrave;y) để x&aacute;c định xem liệu bạn c&oacute; thể quan t&acirc;m đến c&aacute;c sản phẩm hay dịch vụ của một b&ecirc;n thứ ba cụ thể n&agrave;o kh&ocirc;ng.</p>\r\n\r\n<p>2. Ch&uacute;ng t&ocirc;i c&oacute; thể tiết lộ th&ocirc;ng tin như vậy cho c&aacute;c c&ocirc;ng ty v&agrave; c&aacute; nh&acirc;n m&agrave; ch&uacute;ng t&ocirc;i thu&ecirc; để thay mặt ch&uacute;ng t&ocirc;i thực hiện c&aacute;c chức năng của c&ocirc;ng ty. V&iacute; dụ, việc lưu giữ c&aacute;c m&aacute;y chủ web, ph&acirc;n t&iacute;ch dữ liệu, cung cấp c&aacute;c trợ gi&uacute;p về marketing, xử l&yacute; thẻ t&iacute;n dụng hoặc c&aacute;c h&igrave;nh thức thanh to&aacute;n kh&aacute;c, v&agrave; dịch vụ cho kh&aacute;ch h&agrave;ng. Những c&ocirc;ng ty v&agrave; c&aacute; nh&acirc;n n&agrave;y sẽ truy cập tới th&ocirc;ng tin c&aacute; nh&acirc;n của bạn khi cần để thực hiện c&aacute;c chức năng của họ, nhưng kh&ocirc;ng chia sẻ th&ocirc;ng tin đ&oacute; với bất kỳ b&ecirc;n thứ ba n&agrave;o kh&aacute;c.</p>\r\n\r\n<p>3. Ch&uacute;ng t&ocirc;i c&oacute; thể tiết lộ th&ocirc;ng tin như vậy nếu c&oacute; y&ecirc;u cầu ph&aacute;p l&yacute;, hay từ một cơ quan ch&iacute;nh phủ hoặc nếu ch&uacute;ng t&ocirc;i tin rằng h&agrave;nh động đ&oacute; l&agrave; cần thiết nhằm: (a) tu&acirc;n theo c&aacute;c y&ecirc;u cầu ph&aacute;p l&yacute; hoặc chiếu theo quy tr&igrave;nh của luật ph&aacute;p; (b) bảo vệ c&aacute;c quyền hay t&agrave;i sản của Navigos Group, Ltd, hoặc c&aacute;c c&ocirc;ng ty đối t&aacute;c; (c) ngăn chặn tội phạm hoặc bảo vệ an ninh quốc gia; hoặc (d) bảo vệ an to&agrave;n c&aacute; nh&acirc;n của những người sử dụng hay c&ocirc;ng ch&uacute;ng</p>\r\n\r\n<p>4. Ch&uacute;ng t&ocirc;i c&oacute; thể tiết lộ v&agrave; chuyển th&ocirc;ng tin như vậy tới một nh&oacute;m thứ ba, đối tượng mua lại to&agrave;n bộ hay phần lớn c&ocirc;ng việc kinh doanh của c&ocirc;ng ty Navigos Group, Ltd, bằng c&aacute;ch li&ecirc;n kết, hợp nhất hoặc mua to&agrave;n bộ hay phần lớn c&aacute;c t&agrave;i sản của ch&uacute;ng t&ocirc;i. Ngo&agrave;i ra, trong t&igrave;nh huống Navigos Group, Ltd trở th&agrave;nh đối tượng của một vụ khởi kiện ph&aacute; sản, d&ugrave; tự nguyện hay miễn cưỡng, th&igrave; Navigos Group, Ltd hay người được uỷ th&aacute;c c&oacute; thể b&aacute;n, cho ph&eacute;p hoặc tiết lộ th&ocirc;ng tin như vậy theo c&aacute;ch kh&aacute;c trong qu&aacute; tr&igrave;nh chuyển giao được to&agrave; &aacute;n về ph&aacute; sản đồng &yacute;.</p>\r\n\r\n<p>5. Ch&uacute;ng t&ocirc;i c&oacute; thể d&ugrave;ng t&ecirc;n bạn, t&ecirc;n hay logo của c&ocirc;ng ty bạn, hay th&ocirc;ng tin kh&aacute;c về hoặc từ c&aacute;c quảng c&aacute;o tuyển dụng hoặc t&agrave;i khoản xem hồ sơ ứng vi&ecirc;n của bạn cho bất kỳ hay tất cả c&aacute;c mục đ&iacute;ch tiếp thị của Navigos Group (hay Website English center work). V&iacute; dụ, c&aacute;c t&ecirc;n hay logo c&ocirc;ng ty c&oacute; thể được d&ugrave;ng trong quảng c&aacute;o tr&ecirc;n b&aacute;o, thư gửi trực tiếp, phương tiện b&aacute;n h&agrave;ng, &aacute;p ph&iacute;ch quảng c&aacute;o v&agrave; c&aacute;c t&agrave;i liệu kh&aacute;c li&ecirc;n quan đếnEnglish center work hay c&aacute;c t&agrave;i sản kh&aacute;c của Navigos Group, Ltd.</p>\r\n\r\n<p>Navigos Group, Ltd cũng c&oacute; thể chia sẻ th&ocirc;ng tin v&ocirc; danh về kh&aacute;ch gh&eacute; thăm một trong c&aacute;c Web của c&ocirc;ng ty (v&iacute; dụ, số kh&aacute;ch đến mục &lsquo;T&igrave;m việc&rsquo; của Website English center work) với c&aacute;c kh&aacute;ch h&agrave;ng, đối t&aacute;c v&agrave; b&ecirc;n thứ ba kh&aacute;c để họ c&oacute; thể hiểu về c&aacute;c loại kh&aacute;ch tới thăm website của Website English center work v&agrave; c&aacute;ch họ sử dụng site.</p>\r\n\r\n<p>Navigos Group, Ltd c&oacute; thể hỗ trợ c&ocirc;ng nghệ, lưu trữ Web v&agrave; c&aacute;c dịch vụ li&ecirc;n quan kh&aacute;c cho c&aacute;c c&ocirc;ng ty h&agrave;ng đầu kh&aacute;c để thiết lập mục tuyển dụng tr&ecirc;n website của họ (đ&ocirc;i khi được gọi l&agrave; &ldquo;khu vực tuyển dụng&rdquo;). Th&ocirc;ng tin c&aacute; nh&acirc;n v&agrave;/hoặc c&oacute; t&iacute;nh nh&acirc;n khẩu học do bạn cung cấp trong c&aacute;c khu vực tuyển dụng trở th&agrave;nh một phần của cơ sở dữ liệu của Website English center works, nhưng kh&ocirc;ng ai c&oacute; thể truy cập trừ bạn, Navigos Group, Ltd v&agrave; c&ocirc;ng ty c&oacute; li&ecirc;n quan m&agrave; kh&ocirc;ng c&oacute; sự đồng &yacute; của bạn.</p>\r\n\r\n<p>Th&ocirc;ng tin được thu thập tr&ecirc;n trang thuộc khu vực tuyển dụng, hoặc tr&ecirc;n trang chia sẻ nh&atilde;n hiệu (như trang về một cuộc thi do Website English center works v&agrave; c&ocirc;ng ty kh&aacute;c đồng t&agrave;i trợ) c&oacute; thể trở th&agrave;nh t&agrave;i sản của c&ocirc;ng ty đ&oacute;, hoặc của cả Navigos Group, Ltd v&agrave; c&ocirc;ng ty đ&oacute;. Trong v&iacute; dụ n&agrave;y, việc sử dụng th&ocirc;ng tin như vậy của c&ocirc;ng ty kia c&oacute; thể phụ thuộc v&agrave;o ch&iacute;nh s&aacute;ch bảo mật của c&ocirc;ng ty đ&oacute; v&agrave;, trong trường hợp bất kỳ n&agrave;o, Navigos Group, Ltd kh&ocirc;ng chịu tr&aacute;ch nhiệm về việc c&ocirc;ng ty kia sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n v&agrave; nh&acirc;n khẩu học của bạn.</p>\r\n</div>\r\n\r\n<h2>Những lựa chọn d&agrave;nh cho bạn khi thu thập, sử dụng v&agrave; ph&acirc;n phối th&ocirc;ng tin c&aacute; nh&acirc;n</h2>\r\n\r\n<div>\r\n<p>Nếu bạn chọn kh&ocirc;ng đăng k&yacute; hoặc cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n, bạn sẽ kh&ocirc;ng thể d&ugrave;ng phần lớn website của Website English center work</p>\r\n\r\n<p>Bạn cũng c&oacute; c&aacute;c lựa chọn li&ecirc;n quan tới c&aacute;c cookie. Bằng c&aacute;ch thay đổi c&aacute;c ưu ti&ecirc;n tr&igrave;nh duyệt của m&igrave;nh, bạn c&oacute; thể chọn chấp nhận tất cả c&aacute;c cookie, hay được th&ocirc;ng b&aacute;o khi một cookie được thiết lập, hoặc loại bỏ tất cả c&aacute;c cookie. Nếu bạn chọn loại bỏ tất cả c&aacute;c cookie, bạn sẽ kh&ocirc;ng thể d&ugrave;ng c&aacute;c dịch vụ của Website English center works c&oacute; y&ecirc;u cầu đăng k&yacute; sử dụng. Những dịch vụ n&agrave;y bao gồm việc nhận dạng c&aacute;c c&ocirc;ng việc mới đ&atilde; được đăng l&ecirc;n từ lần gh&eacute; thăm cuối c&ugrave;ng, tự đăng nhập v&agrave; t&iacute;nh năng kiểm tra danh s&aacute;ch. Bạn vẫn c&oacute; thể d&ugrave;ng hầu hết c&aacute;c t&iacute;nh năng của website tuyển dụng English center work ngay cả khi bạn kh&ocirc;ng chấp nhận c&aacute;c cookie.</p>\r\n</div>\r\n\r\n<h2>Bạn c&oacute; thể truy nhập, cập nhật v&agrave; xo&aacute; th&ocirc;ng tin của bạn như thế n&agrave;o</h2>\r\n\r\n<div>\r\n<p>Ch&uacute;ng t&ocirc;i sẽ cung cấp cho bạn c&aacute;c phương tiện đảm bảo th&ocirc;ng tin c&aacute; nh&acirc;n của bạn l&agrave; ch&iacute;nh x&aacute;c v&agrave; cập nhật. Bạn c&oacute; thể hiệu chỉnh hoặc xo&aacute; hồ sơ của bạn bất cứ l&uacute;c n&agrave;o khi nhấn v&agrave;o li&ecirc;n kết &ldquo;My profile&rdquo; hoặc v&agrave;o h&igrave;nh ảnh do hệ thống cung cấp ngay khi bạn đăng nhập v&agrave;o. Khi đăng nhập v&agrave;o hệ thống trong một khoảng thời gian n&agrave;o đ&oacute;, d&ugrave; bạn đang ở đ&acirc;u tr&ecirc;n website tuyển người Website English center work, th&ocirc;ng tin của bạn sẽ được giữ nguy&ecirc;n cho đến khi bạn nhấn chuột v&agrave;o li&ecirc;n kết &ldquo;Logoff&rdquo; l&agrave; li&ecirc;n kết c&oacute; thể truy nhập từ m&agrave;n h&igrave;nh &ldquo;My Profile&rdquo;</p>\r\n\r\n<p>Nếu bạn l&agrave; người sử dụng đ&atilde; đăng k&yacute; v&agrave; qu&ecirc;n mật khẩu, bạn c&oacute; thể nhận lại n&oacute; bằng c&aacute;ch gửi email v&agrave; d&ugrave;ng t&iacute;nh năng &ldquo;Forgot Password&rdquo;. Nhấn ph&iacute;m tr&ecirc;n bất kỳ trang đăng nhập n&agrave;o để y&ecirc;u cầu gửi mật khẩu của bạn cho bạn. Ch&uacute;ng t&ocirc;i kh&ocirc;ng thể cung cấp mật khẩu của bạn theo c&aacute;c c&aacute;ch kh&aacute;c.</p>\r\n\r\n<p>T&agrave;i khoản Website English center work của bạn c&oacute; thể bị xo&aacute;, nhưng l&agrave;m như vậy sẽ dẫn đến việc kh&ocirc;ng thể truy nhập đến bất kỳ t&iacute;nh năng n&agrave;o đ&ograve;i hỏi đăng nhập. Ch&uacute;ng t&ocirc;i sẽ hoặc c&oacute; thể giữ một bản sao lưu trữ về t&agrave;i khoản của bạn song kh&ocirc;ng thể truy nhập tr&ecirc;n Internet.</p>\r\n</div>\r\n\r\n<h2>Những biện ph&aacute;p ph&ograve;ng ngừa an to&agrave;n chống mất m&aacute;t, lạm dụng hoặc thay đổi th&ocirc;ng tin của bạn</h2>\r\n\r\n<div>\r\n<p>Ngo&agrave;i người quản trị Website English center work hoặc c&aacute; nh&acirc;n được uỷ quyền kh&aacute;c của Website English center works ra, bạn l&agrave; người duy nhất được truy nhập đến th&ocirc;ng tin c&aacute; nh&acirc;n của m&igrave;nh. Đăng k&yacute; sử dụng của bạn được bảo vệ bằng mật khẩu để ngăn chặn sự truy nhập tr&aacute;i ph&eacute;p.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i khuyến nghị bạn kh&ocirc;ng để lộ mật khẩu của bạn cho bất kỳ ai. Website English center work kh&ocirc;ng bao giờ hỏi mật khẩu của bạn qua điện thoại hay qua email tự nguyện. Để bảo đảm an to&agrave;n, bạn c&oacute; thể muốn ra khỏi mạng ngay khi sử dụng xong Website English center work. Điều n&agrave;y đảm bảo những người kh&aacute;c kh&ocirc;ng thể truy nhập tới th&ocirc;ng tin v&agrave; thư từ c&aacute; nh&acirc;n của bạn nếu bạn d&ugrave;ng chung m&aacute;y t&iacute;nh với ai đ&oacute; hoặc d&ugrave;ng m&aacute;y t&iacute;nh ở nơi c&ocirc;ng cộng như thư viện hay qu&aacute;n c&agrave; ph&ecirc; Internet.</p>\r\n\r\n<p>Đ&aacute;ng tiếc l&agrave; kh&ocirc;ng c&oacute; dữ liệu n&agrave;o truyền tr&ecirc;n Internet c&oacute; thể bảo đảm an to&agrave;n 100%. Do vậy, mặc d&ugrave; ch&uacute;ng t&ocirc;i cố gắng hết sức bảo vệ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn, Website English center work c&oacute; thể kh&ocirc;ng thể bảo đảm hoặc cam kết về t&iacute;nh an to&agrave;n của th&ocirc;ng tin bất kỳ m&agrave; bạn chuyển tới ch&uacute;ng t&ocirc;i hoặc từ dịch vụ trực tuyến của ch&uacute;ng t&ocirc;i, v&agrave; bạn phải tự chịu rủi ro. Ngay khi ch&uacute;ng t&ocirc;i nhận được th&ocirc;ng tin bạn gửi tới, ch&uacute;ng t&ocirc;i sẽ cố gắng hết sức để bảo đảm an to&agrave;n tr&ecirc;n hệ thống của ch&uacute;ng t&ocirc;i.</p>\r\n</div>\r\n\r\n<h2>C&aacute;ch Website Vietnamworks bảo vệ đời tư của trẻ em.</h2>\r\n\r\n<div>\r\n<p>Website English center work l&agrave; website c&oacute; đối tượng độc giả lớn. Trẻ em sẽ phải xin ph&eacute;p bố mẹ trước khi gửi trực tuyến th&ocirc;ng tin c&aacute; nh&acirc;n tới ai đ&oacute;. Website English center work kh&ocirc;ng thể chia sẻ th&ocirc;ng tin c&aacute; nh&acirc;n về những người sử dụng dưới 13 tuổi với b&ecirc;n thứ ba. Ngo&agrave;i ra, Website English center work sẽ kh&ocirc;ng gửi bất kỳ email trực tiếp n&agrave;o đề nghị người sử dụng th&ocirc;ng b&aacute;o họ dưới 13 tuổi.</p>\r\n</div>\r\n\r\n<h2>Bạn biết g&igrave; nữa về đời tư trực tuyến của bạn</h2>\r\n\r\n<div>\r\n<p>H&atilde;y lu&ocirc;n nhớ rằng bất kỳ l&uacute;c n&agrave;o bạn tự nguyện tiết lộ th&ocirc;ng tin c&aacute; nh&acirc;n của bạn trực tuyến, v&iacute; dụ qua c&ocirc;ng việc bạn đăng l&ecirc;n hay qua email, th&ocirc;ng tin đ&oacute; c&oacute; thể bị người kh&aacute;c thu thập v&agrave; sử dụng, T&oacute;m lại, nếu bạn gửi th&ocirc;ng tin c&aacute; nh&acirc;n trực tuyến c&oacute; thể truy nhập c&ocirc;ng khai, bạn c&oacute; thể nhận sẽ được những th&ocirc;ng b&aacute;o tự nguyện từ những đối t&aacute;c kh&aacute;c.</p>\r\n\r\n<p>Cuối c&ugrave;ng, bạn phải tự chịu tr&aacute;ch nhiệm về việc giữ b&iacute; mật cho mật khẩu v&agrave;/hoặc c&aacute;c th&ocirc;ng tin t&agrave;i khoản bất kỳ. V&igrave; thế, xin h&atilde;y cẩn thận v&agrave; c&oacute; tr&aacute;ch nhiệm khi n&agrave;o bạn ở tr&ecirc;n mạng.</p>\r\n</div>\r\n', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partners`
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
-- Đang đổ dữ liệu cho bảng `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `link`, `is_order`, `status`) VALUES
(1, 'Liên kết số', 'logohome.png', 'http://lienketso.vn', 1, 1),
(2, 'Snaga jobs', 'client-logo01.png', 'http://lienketso.vn', 2, 1),
(4, 'Job talk america', 'client-logo02.png', 'http://lienketso.vn', 4, 1),
(5, 'client 3', 'client-logo03.png', '', 5, 1),
(6, 'client 4', 'client-logo04.png', '', 6, 1),
(7, 'client 5', 'client-logo06.png', '', 7, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
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
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `cat_name`, `price`, `discount`, `intro`, `content`, `image`, `image_list`, `created`, `is_online`, `is_hot`, `view`) VALUES
(1, 6, 'Computer duo core', 'computer-duo-core', 2000000, 0, 'Test mô tả', '<p>Test nội dung</p>\r\n', '21.jpg', NULL, 0, 1, 0, 1),
(2, 6, 'Công tắc ba 1 chiều uten V3.0', 'cong-tac-ba-1-chieu-uten-v30', 67000, 0, 'Test', '', '11.jpg', NULL, 0, 1, 0, 0),
(5, 6, 'Công tắc ba 1 chiều uten V37', 'cong-tac-ba-1-chieu-uten-v37', 2000000, 0, '', '<div><strong>Product Details</strong></div>\r\n\r\n<div>\r\n<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>\r\n\r\n<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>\r\n\r\n<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>\r\n\r\n<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>\r\n</div>\r\n', '1.jpg', '[\"2.jpg\",\"3.jpg\"]', 0, 1, 0, 5),
(11, 6, 'Điều hòa Toshiba 2 chiều', 'dieu-hoa-toshiba-2-chieu', 5000000, 20, '', '', '7.jpg', '[]', 1508301064, 1, 0, 4),
(12, 6, 'Điện thoại vtur dát vàng', 'dien-thoai-vtur-dat-vang', 14000000, 10, 'test', '<p>test</p>\r\n', '31.jpg', '[]', 1509786305, 0, 1, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'slug đường dẫn tiêu đề',
  `content` text COLLATE utf8_unicode_ci COMMENT 'mô tả công việc',
  `literacy_id` int(11) DEFAULT NULL COMMENT 'trình độ học vấn',
  `career_id` int(10) NOT NULL DEFAULT '0',
  `salary_id` int(10) NOT NULL DEFAULT '0',
  `city_id` int(10) NOT NULL DEFAULT '0',
  `level_id` int(11) DEFAULT NULL COMMENT 'cấp bậc',
  `amount` int(255) DEFAULT NULL COMMENT 'số lượng cần tuyển',
  `benefit` text COLLATE utf8_unicode_ci COMMENT 'quyền lợi được hưởng',
  `job_requirement` text COLLATE utf8_unicode_ci COMMENT 'Mô tả yêu cầu công việc',
  `profile` text COLLATE utf8_unicode_ci COMMENT 'Thông tin hồ sơ yêu cầu',
  `language` tinyint(255) DEFAULT NULL COMMENT '1-tiếng việt;2-english;3-cả 2',
  `gender` tinyint(2) NOT NULL DEFAULT '0' COMMENT 'Yêu cầu giới tính',
  `start_date` int(12) DEFAULT '0' COMMENT 'ngày bắt đầu đăng tin',
  `end_date` int(12) DEFAULT '0' COMMENT 'ngày kết thúc đăng tin',
  `require_experience_id` tinyint(255) DEFAULT NULL COMMENT 'trình độ yêu cầu',
  `type_id` int(11) DEFAULT NULL COMMENT 'job_type (loại công việc)',
  `status` tinyint(255) DEFAULT '1',
  `company_id` int(11) DEFAULT NULL COMMENT 'mã nhà tuyển dụng',
  `is_hot` int(2) NOT NULL DEFAULT '0' COMMENT 'Việc làm nổi bật',
  `refresh_date` datetime DEFAULT NULL COMMENT 'ngày làm mới tin tức',
  `view` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='thông tin tuyển dụng';

--
-- Đang đổ dữ liệu cho bảng `recruitment`
--

INSERT INTO `recruitment` (`id`, `title`, `cat_name`, `content`, `literacy_id`, `career_id`, `salary_id`, `city_id`, `level_id`, `amount`, `benefit`, `job_requirement`, `profile`, `language`, `gender`, `start_date`, `end_date`, `require_experience_id`, `type_id`, `status`, `company_id`, `is_hot`, `refresh_date`, `view`) VALUES
(1, 'Giáo viên bản địa dậy tiếng anh tại trung tâm', 'giao-vien-ban-dia-day-tieng-anh-tai-trung-tam', '<p>Giảng dạy chuy&ecirc;n m&ocirc;n Đứng lớp v&agrave; giảng dạy theo nội dung đ&agrave;o tạo của kh&oacute;a học; đảm bảo ho&agrave;n th&agrave;nh khung kiến thức y&ecirc;u cầu của từng kh&oacute;a; Thiết kế hệ thống b&agrave;i giảng, b&agrave;i tập về nh&agrave;, kiến thức bổ trợ cho kh&oacute;a học; Theo d&otilde;i, kiểm so&aacute;t, đ&aacute;nh gi&aacute; chất lượng học vi&ecirc;n, đề ra kế hoạch n&acirc;ng cao chất lượng học vi&ecirc;n v&agrave; đảm bảo đầu ra cam kết; B&aacute;o c&aacute;o cho Trung t&acirc;m về t&igrave;nh h&igrave;nh học tập của học vi&ecirc;n thường xuy&ecirc;n v&agrave; theo đ&uacute;ng lộ tr&igrave;nh. C&ocirc;ng việc bổ trợ Hỗ trợ nghi&ecirc;n cứu ho&agrave;n thiện, cải tiến chất lượng chương tr&igrave;nh đ&agrave;o tạo; Tham gia chương tr&igrave;nh đ&agrave;o tạo, c&aacute;c buổi thỉnh giảng, quan s&aacute;t, chia sẻ để trau dồi kiến thức chuy&ecirc;n m&ocirc;n v&agrave; kỹ năng sư phạm; Tổ chức (&iacute;t nhất 1 buổi/kh&oacute;a) hoạt động ngoại kh&oacute;a cho học vi&ecirc;n (Săn t&acirc;y, Học hỏi c&aacute;c kỹ năng mềm&hellip;).</p>', 1, 7, 8, 42, 9, 4, '<p>Lương hưởng theo lớp nhận v&agrave; theo năng lực: 300.000 &ndash; 500.000/ buổi 1,5h hoặc theo th&aacute;ng; Thưởng theo hiệu quả c&ocirc;ng việc từ 10 &ndash; 15% lương của lớp; L&agrave;m việc trong m&ocirc;i trường trẻ trung, th&acirc;n thiện, năng động, ph&aacute;t triển cực nhanh; khuyến kh&iacute;ch ph&aacute;t triển bản th&acirc;n, khuyến kh&iacute;ch s&aacute;ng tạo v&agrave; đổi mới để c&ugrave;ng chinh phục mục ti&ecirc;u trở th&agrave;nh top 3 Trung t&acirc;m Anh ngữ h&agrave;ng đầu Việt Nam đến năm 2020; Nhiều cơ hội ph&aacute;t triển, thử th&aacute;ch bản th&acirc;n v&agrave; thăng tiến l&ecirc;n c&aacute;c vị tr&iacute; cao c&ugrave;ng sự ph&aacute;t triển của hệ thống như Quản l&yacute;, Gi&aacute;m đốc đ&agrave;o tạo; Được đ&agrave;o tạo hoặc cử đi đ&agrave;o tạo c&aacute;c kỹ năng phục vụ cho c&ocirc;ng việc, ph&aacute;t triển khả năng của bản th&acirc;n, khả năng l&atilde;nh đạo;</p>', '<p>Th&agrave;nh thạo tiếng Anh, n&oacute;i giọng Anh/Mỹ chuẩn; C&oacute; một trong c&aacute;c chứng chỉ tiếng Anh sau: IELTS 7.5, TOEIC 950, TOEFL iBT103, TOEFL paper 620; C&oacute; kinh nghiệm giảng dạy tối thiểu 1 năm; C&oacute; t&acirc;m với nghề, tr&aacute;ch nhiệm, nhiệt t&igrave;nh, c&oacute; đam m&ecirc; v&agrave; muốn ph&aacute;t triển nghề nghiệp trong lĩnh vực gi&aacute;o dục; c&oacute; khả năng truyền lửa, truyền cảm hứng học tiếng Anh; Ưu ti&ecirc;n c&aacute;c ứng vi&ecirc;n tốt nghiệp trường đại học khoa Ngoại ngữ, ứng vi&ecirc;n c&oacute; kinh nghiệm sống, học tập v&agrave; l&agrave;m việc trong m&ocirc;i trường tiếng Anh l&agrave; ng&ocirc;n ngữ ch&iacute;nh;</p>', '<p>- Đơn xin việc.</p><p>- Sơ yếu l&yacute; lịch.</p><p>- Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.</p><p>- C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 1, 2, 0, 1513098000, 4, 1, 1, 3, 0, NULL, 3),
(2, 'Giáo Viên Tiếng Anh Mầm Non', 'giao-vien-tieng-anh-mam-non', '- Dạy trẻ nhỏ học tiếng anh, nói tiếng anh lưu loát.\r\n- Xây dựng giáo án, bài giảng phù hợp với trẻ.\r\n- Chi tiết công việc sẽ trao đổi cụ thể khi phỏng vấn.', 1, 8, 6, 55, 10, 5, '- Lương thỏa thuận\r\n- Hỗ trợ tiền ăn trưa 25,000đ/ngày, tiền gửi xe…\r\n- Xét điều chỉnh lương định kỳ theo quy định của trường.\r\n- Làm việc thứ 2 - thứ 6, từ 7h30 tới 17.30h.\r\n- Sau 1 tháng thử việc, làm 06 tháng được đóng bảo hiểm xã hội, bảo hiểm y tế, các chế độ, thai sản được hưởng theo như luật Lao động Việt Nam, BHXH .\r\n- Được nghỉ hè 1 tuần sau khi làm trên 1 năm ngoài ngày nghỉ phép 10 ngày/năm.\r\n- Cơ hội được đào tạo, làm việc trong môi trường Tiếng Anh, trau dồi Tiếng Anh và phương pháp giáo dục tiên tiến.', '- Tiếng Anh lưu loát.\r\n- Kinh nghiệm 1 năm.\r\n- Tuổi từ 24 đến 35.', '- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.', 2, 1, 0, 1494954000, 5, 5, 1, 3, 0, NULL, 7),
(3, 'Lập trình PHP MVC 4', 'lap-trinh-php-mvc-4', 'test', 1, 8, 8, 46, 10, 3, 'test', 'test', '- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.', 2, 1, 0, 19700101, 4, 1, 1, 3, 0, NULL, 3),
(4, 'Tuyển Cô Giáo Tiếng Anh Cho Bé 5 Tuổi', 'tuyen-co-giao-tieng-anh-cho-be-5-tuoi', '- Nhiệm vụ công việc hàng tuần: Lập kế hoạch giáo dục sinh hoạt cùng mẹ của bé, trao đổi thống nhất trước hình thành thời khóa biểu: ăn, chơi,học ...\r\n- Hàng ngày: thực hiện theo thời khóa biểu', 1, 8, 8, 45, 11, 2, 'Mức lương: tiêu chuẩn 6 - 8 triệu/1 tháng', '- Có kinh nghiệm sư phạm\r\n- Dạy Tiếng Anh, ăn, tắm . Chơi cho trẻ 5 tuổi ( trẻ bình thường sức khỏe tốt)\r\n- Thời gian từ 16h-21h30 hàng ngày ( trừ thứ 7, chủ nhật )', '- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.', 1, 1, 0, 19700101, 4, 1, 1, 3, 0, NULL, 10),
(5, 'Giáo Viên Ielts (fulltime Hoặc Partime )', 'giao-vien-ielts-fulltime-hoac-partime-', '– Thực hiện các công việc giảng dạy tiếng Anh theo ca dạy được phân công.</br>\n– Tham gia các hoạt động được yêu cầu nhằm đảm bảo chất lượng dạy và học tại Trung tâm.\n- Tham gia các buổi đào tạo dành cho giáo viên.\n- Tham gia vào các buổi họp giáo viên định kỳ.\n- Tham gia vào các hoạt động ngoại khóa theo yêu cầu của công Trung tâm.', 1, 8, 7, 44, 12, 6, '- Lương: thỏa thuận, được xét tăng lương dựa vào năng lực và thâm niên làm việc.\r\n- Thưởng: Được thưởng dựa vào tổng số giờ dạy/tháng, kết quả thi của học viên, sẽ trao đổi cụ thể khi phỏng vấn.\r\n- Cơ hội làm việc trong môi trường trẻ trung, năng động và chuyên nghiệp.\r\n- Cơ hội trở thành nhân viên chính thức nếu hoàn thành tốt công việc\r\n- Thời gian làm việc linh hoạt, có thể được tự chọn các ca dạy.', '- Có chứng chỉ Ielts từ 7.0 trở lên\r\n- Có ít nhất 1 năm kinh nghiệm đứng lớp giảng dạy chương trình Ietls\r\n- Khả năng phát âm tiếng Anh chuẩn, thành thạo 4 kĩ năng.\r\n- Có tinh thần trách nhiệm cao trong công việc.\r\n- Nhiệt tình, năng động, chịu khó học hỏi và phát triển bản thân.\r\n- Ưu tiên các ứng viên học chuyên ngành Tiếng Anh, Sư Phạm Ngoại Ngữ.', '- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.', 1, 2, 2147483647, 1514566800, 5, 5, 1, 3, 1, NULL, 87),
(6, 'Tuyển Cô Giáo Tiếng Anh cho trung tâm', 'tuyen-co-giao-tieng-anh-cho-trung-tam', '<p>test</p>', 4, 88, 7, 55, 12, 3, '<p>test</p>', '<p>t&eacute;t</p>', '<p>- Đơn xin việc. - Sơ yếu l&yacute; lịch. - Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe. - C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 2, 1, 1512231922, 1514480400, 5, 5, 1, 3, 1, NULL, 34),
(7, ' Java Developer (all Levels)', 'java-developer-all-levels', '•	Communication directly with key users to analyze requirement and design document.\r\n•	Join in the design of database / system architect.\r\n•	Experience in testing (unit, integration and system)', 1, 1, 8, 54, 9, 10, '13th-month salary', '•	Good at J2EE, Spring, Hibernate, Objected Oriented Design; \r\n•	Experience in front end development skills (AngularJS, Ajax, HTML5/CSS3, Bootstrap JQuery, knockout). \r\n•	Excellent verbal and written English communication skills\r\n•	Customer-focused attitude and desire to interface directly with end-user clients\r\n•	Strong conceptual, analytic, and problem solving skills\r\n•	Motivated to work in a new and growing environment\r\n\r\n********** BENEFITS AND CAREER OPPORTUNITIES:\r\n•	Work in a dynamic and fast growing global company.\r\n•	Pursue advanced career development including oversea training and working opportunity.\r\n•	Health, Social and Unemployment insurance offered during probation.\r\n•	Minimum 16 annual leaves per year.\r\n•	Health insurance for employees and family.\r\n•	Lunch and parking allowances.\r\n•	Join in various team building and sport activities.\r\n•	13th-month salary and annual bonus.\r\n•	Annual performance appraisal.\r\n•	Other benefits will be discussed during the interview.', '- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.', 2, 1, 1512369541, 1514394000, 4, 1, 1, 1, 0, NULL, 12),
(8, ' Sales Manager - For Fresh Graduates', 'sales-manager---for-fresh-graduates', 'Winning feels good. That’s why our Sales team makes sure everyone wins at P&G – our customers, our people, and our company. You’ll work in a diverse, fast-paced environment, getting significant business responsibility from day one – leading in-market strategies across multiple product lines while developing deep expertise in P&G brands and categories.\r\n\r\nWorking in sales at P&G means getting your own multi million pound business & budget to lead from day one. That means working with great brands like Ariel, Downy, Gillette, Pantene, Head & Shoulder, Rejoice, .... You are the key contact for the business with your retailer and are responsible for building and maintaining that relationship. You build and design ideas and strategies using analytics and shopper insights and then use your relationship and understanding of the market to sell, negotiate & execute your ideas.', 1, 4, 6, 37, 10, 5, '13th & 14th Payment\r\nPremium Healthcare plan for self and dependants\r\nDomestics & International training opportunities', 'We are looking for fresh graduate students that leads and make things happen , analytical thinkers and problem solvers, with excellent communications skills, who set priorities, make commitments, work effectively with diverse groups of people and demonstrates creativity, innovation and initiative capacity. Ideal candidate will be: \r\n•	Local Vietnamese.\r\n•	Pursue Bachelor degree in any major background.\r\n•	Have a strong drive to lead, a hunger to learn, a thirst to overcome barriers, a ceaseless passion to win, and an interest in pursuing a career at P&G.\r\n•	Demonstrated leadership skills and strong analytical capability.\r\n•	Excellent communication and interpersonal skills.\r\n•	Strong English & Vietnamese verbal and writing skill.', '- Đơn xin việc.\r\n- Sơ yếu lý lịch.\r\n- Hộ khẩu, chứng minh nhân dân và giấy khám sức khỏe.\r\n- Các bằng cấp có liên quan.', 1, 1, 1512387206, 1514566800, 2, 1, 1, 2, 0, NULL, 10),
(9, 'Nhân Viên Tín Dụng - Làm Việc Tại Văn Phòng.', 'nhan-vien-tin-dung---lam-viec-tai-van-phong', '<p>- Bạn đang t&igrave;m kiếm c&ocirc;ng việc ph&ugrave; hợp?</p><p>- Bạn l&agrave; sinh vi&ecirc;n mới ra trường v&agrave; chưa t&igrave;m được c&ocirc;ng việc c&oacute; thu nhập tốt. Bạn đ&atilde; c&oacute; kinh nghiệm &ldquo;chinh chiến&rdquo; nhưng muốn thay đổi &ldquo;mặt trận&rdquo; v&agrave; vị tr&iacute; &ldquo;chiến đấu&rdquo; mới</p><p>-Tin vui kh&ocirc;ng thể bỏ lỡ: 10 VỊ TR&Iacute; TELEMARKETING CẦN ĐẾN BẠN</p><p>- Tham gia ngay biệt đội chiến đấu ngay th&ocirc;i v&igrave;:</p><p>- Thu nhập = lương cứng + hoa hồng + thưởng, b&igrave;nh qu&acirc;n 5-9 triệu /th&aacute;ng, nếu l&agrave;m tốt hơn c&oacute; thể nhận cao hơn.</p><p>- Thưởng n&oacute;ng cho nh&acirc;n vi&ecirc;n c&oacute; th&agrave;nh t&iacute;ch xuất sắc, cơ hội thăng tiến l&ecirc;n c&aacute;c vị tr&iacute; gi&aacute;m s&aacute;t</p><p>- Danh s&aacute;ch kh&aacute;ch h&agrave;ng lu&ocirc;n c&oacute; sẵn</p><p>- Bạn được đ&agrave;o tạo to&agrave;n diện về kỹ năng v&agrave; nghiệp vụ chuy&ecirc;n s&acirc;u, được hỗ trợ chi ph&iacute; ho&agrave;n to&agrave;n 100%. - M&ocirc;i trường hiện đại: điều h&ograve;a m&aacute;t lạnh, &aacute;nh s&aacute;ng chan h&ograve;a, ph&ograve;ng họp, ph&ograve;ng ăn đầm ấm, vui vẻ. Được tham gia c&aacute;c hoạt động team building, văn h&oacute;a văn nghệ gi&agrave;u bản sắc của c&ocirc;ng ty. HOT: C&Oacute; TUYỂN NH&Acirc;N VI&Ecirc;N L&Agrave;M PART TIME</p>', 5, 8, 7, 46, 9, 20, '<p>- Chế độ đầy đủ, BHXH, BHYT</p><p>- Lương cơ bản + hoa hồng cao</p><p>- Du lịch hằng năm - Thăng tiến nhanh</p>', '<p>- Tuổi từ 18, Tốt nghiệp THPT trở l&ecirc;n.</p><p>- Giọng n&oacute;i dễ nghe, r&otilde; r&agrave;ng, truyền đạt được th&ocirc;ng tin.</p><p>- Nhanh nhẹn, Tr&aacute;ch nhiệm, biết lắng nghe.</p><p>- C&oacute; vẻ bạn đ&atilde; th&iacute;ch th&uacute; rồi phải kh&ocirc;ng? H&atilde;y chọn 1 trong những c&aacute;ch dưới đ&acirc;y để li&ecirc;n hệ với ch&uacute;ng t&ocirc;i nh&eacute;:</p>', '<p>- Đơn xin việc.</p><p>- Sơ yếu l&yacute; lịch.</p><p>- Hộ khẩu, chứng minh nh&acirc;n d&acirc;n v&agrave; giấy kh&aacute;m sức khỏe.</p><p>- C&aacute;c bằng cấp c&oacute; li&ecirc;n quan.</p>', 1, 0, 1512404275, 1513184400, 4, 4, 1, 2, 0, NULL, 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `require_experience`
--

CREATE TABLE `require_experience` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `require_experience`
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
-- Cấu trúc bảng cho bảng `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'tên mức lương',
  `order_list` int(4) NOT NULL DEFAULT '0' COMMENT 'sắp xếp',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT 'tình trạng'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Mức lương ';

--
-- Đang đổ dữ liệu cho bảng `salary`
--

INSERT INTO `salary` (`id`, `name`, `order_list`, `status`) VALUES
(1, 'Cạnh tranh', 1, 1),
(2, 'Thương lượng', 2, 1),
(3, '1 - 3 triệu', 3, 1),
(4, '3 - 5 triệu', 4, 1),
(5, '5 - 7 triệu', 5, 1),
(6, '7 - 10 triệu', 6, 1),
(7, '10 - 12 triệu', 7, 1),
(8, '12 - 15 triệu', 8, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
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
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `title`, `meta_desc`, `meta_keyword`, `email`, `phone`, `address`, `footer`, `image`) VALUES
(1, 'Website liên kết số 4.0', 'Liên kết số là đơn vị thiết kế website số 1 việt nam', 'liên kết số, lienketso, lien ket so, thiet ke website', 'info@lienketso.vn', '0979823452', 'Số 09 nghách 59/21 đường Mễ Trì, Nam Từ Liêm', '<p>Chưa cập nhật</p>\r\n', '15879.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `candidate_id` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skills`
--

INSERT INTO `skills` (`id`, `name`, `candidate_id`, `status`) VALUES
(1, 'PHP', 0, 1),
(2, 'C#', 0, 1),
(3, 'ASP.NET MVC', 0, 1),
(4, 'Thành thạo photoshop', 3, 0),
(7, 'Developer PHP', 3, 0),
(8, 'Mô hình HMVC', 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
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
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`, `content`, `link`, `is_order`, `status`, `lang_code`) VALUES
(2, 'Slide 2', 'product3-1.jpg', 'test', NULL, 1, 1, 'vn'),
(3, 'Dịch vụ ', 'product1.jpg', '', NULL, 3, 0, 'vn'),
(4, 'slide 3', 'product1-1.jpg', '', NULL, 0, 0, 'vn'),
(5, 'slide 4', 'product4.jpg', 'test', 'http://lienketso.vn', 0, 0, 'vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `support`
--

CREATE TABLE `support` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='support người dùng';

--
-- Đang đổ dữ liệu cho bảng `support`
--

INSERT INTO `support` (`id`, `name`, `phone`, `status`) VALUES
(3, 'Hà Văn Thắm', '0975544123', 1),
(4, 'Phan Văn Anh', '0984521364', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tags cloude';

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `link`, `status`) VALUES
(2, 'Job teacher', 'http://lienketso.vn', 1),
(3, 'IELT', 'http://lienketso.vn', 1),
(4, 'TOEICT', 'http://lienketso.vn', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
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
-- Đang đổ dữ liệu cho bảng `transaction`
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
-- Cấu trúc bảng cho bảng `user`
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
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `phone`, `address`, `permission`, `status`, `created`) VALUES
(1, 'Nguyễn Thành An', '123', 'annt@lienketso.vn', '079856541', 'Thái Nguyên', NULL, 1, 0),
(2, 'Trần Văn Toàn', 'e10adc3949ba59abbe56e057f20f883e', 'thanhan1507@gmail.com', '0977556644', 'Thái Nguyên, Đại Từ', NULL, 1, 1509979323);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(11) NOT NULL,
  `position` varchar(150) COLLATE utf8_unicode_ci NOT NULL COMMENT 'chức vụ',
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Tên công ty',
  `description` text COLLATE utf8_unicode_ci COMMENT 'mô tả công việc',
  `from_date` int(12) NOT NULL DEFAULT '0',
  `to_date` int(12) NOT NULL DEFAULT '0',
  `is_current_job` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'là công việc hiện tại?',
  `candidate_id` int(11) NOT NULL COMMENT 'mã ứng viên',
  `level_id` int(11) NOT NULL COMMENT 'cấp bậc công việc',
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `work_experience`
--

INSERT INTO `work_experience` (`id`, `position`, `company_name`, `description`, `from_date`, `to_date`, `is_current_job`, `candidate_id`, `level_id`, `status`) VALUES
(28, 'lập trình php .net', 'Công Ty TNHH Razona Việt Nam / Indochine', 'Primary purpose: Achieve sales revenue assigned by the company by studying market need and trend, closely collaborating with others teams, managing team and resources to propose and deliver value-added solutions to existing and potential clients’ business. \nSupport Producer to identify new business opportunities or new services for clients.\n', 1453136400, 1495126800, 0, 3, 0, 0),
(29, 'Technical Sales Executive', 'Ammeraal Beltech', 'là tập đoàn hàng đầu thế giới với hơn 65 năm kinh nghiệm trong lĩnh vực băng chuyền tải (belting). Sản phẩm và các giải pháp kỹ thuật của công ty được sử dụng rộng rãi trong nhiều ngành công nghiệp sản xuất, kho vận, hàng không, giấy ', 1449507600, 1510074000, 0, 3, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catnews`
--
ALTER TABLE `catnews`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `company_size`
--
ALTER TABLE `company_size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `desired_job`
--
ALTER TABLE `desired_job`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `grade_certificate`
--
ALTER TABLE `grade_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `literacy`
--
ALTER TABLE `literacy`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `map_cadidate_skill`
--
ALTER TABLE `map_cadidate_skill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `map_candidate_recruitment`
--
ALTER TABLE `map_candidate_recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `map_recruitment_careers`
--
ALTER TABLE `map_recruitment_careers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member_candidates`
--
ALTER TABLE `member_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `member_companies`
--
ALTER TABLE `member_companies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `require_experience`
--
ALTER TABLE `require_experience`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT cho bảng `catnews`
--
ALTER TABLE `catnews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT cho bảng `company_size`
--
ALTER TABLE `company_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `desired_job`
--
ALTER TABLE `desired_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `grade_certificate`
--
ALTER TABLE `grade_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `literacy`
--
ALTER TABLE `literacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `map_cadidate_skill`
--
ALTER TABLE `map_cadidate_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `map_candidate_recruitment`
--
ALTER TABLE `map_candidate_recruitment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `map_recruitment_careers`
--
ALTER TABLE `map_recruitment_careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `member_candidates`
--
ALTER TABLE `member_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `member_companies`
--
ALTER TABLE `member_companies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `require_experience`
--
ALTER TABLE `require_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `support`
--
ALTER TABLE `support`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
