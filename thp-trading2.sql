-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 06:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thp-trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carousel_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `carousel_title`, `carousel_slug`, `carousel_image`, `created_at`, `updated_at`) VALUES
(2, 'Slide Test 1', 'slide-test-1', 'slide-test-1-qYpJJr.png', '2020-04-25 16:21:45', '2020-04-25 16:21:45'),
(3, 'Carousel 2', 'carousel-2', 'carousel-2-MiX7vR.jpg', '2020-04-26 15:02:38', '2020-04-26 15:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `cate2`
--

CREATE TABLE `cate2` (
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_cate_id` int(10) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cate2`
--

INSERT INTO `cate2` (`cate_id`, `cate_name`, `cate_slug`, `parent_cate_id`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'Bán Buôn - Bán Lẻ', 'ban-buon-ban-le', 0, 'Bán Buôn - Bán Lẻ', 'Bán Buôn - Bán Lẻ', '2020-05-30 04:29:07', '2020-05-30 04:29:07'),
(2, 'Bán Buôn', 'ban-buon', 1, 'Bán Buôn', 'Bán Buôn', '2020-05-30 06:32:49', '2020-05-30 06:32:49'),
(3, 'Bán Lẻ', 'ban-le', 1, 'Bán Lẻ', 'Bán Lẻ', '2020-05-30 11:44:13', '2020-05-30 11:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_20_145405_thp_user', 2),
(4, '2020_03_22_052637_cate', 3),
(5, '2020_03_22_130113_t_h_p_post', 4),
(6, '2020_03_28_190118_table_page', 5),
(7, '2020_04_19_114701_create_permission_tables', 6),
(8, '2014_10_12_100000_create_password_resets_table', 7),
(9, '2020_04_25_203926_create_carousel_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_status` tinyint(4) NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `page_slug`, `page_image`, `page_status`, `page_content`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(11, 'trang chu', 'trang-chu', 'trang-chu-5dV5BT.jpg', 1, '<p>trang chu</p>', 'trang chu', 'trang chutrang chu', '2020-04-09 16:49:30', '2020-04-09 16:56:15'),
(24, 'sdfsfdfgdfg', 'sdfsfdfgdfg', 'sdfsf-GFiRLF.jpg', 0, '<p>sdfsf</p>', 'sdf', 'sdf', '2020-04-10 04:06:51', '2020-04-10 04:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(2, 'role-create', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(3, 'role-edit', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(4, 'role-delete', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(5, 'post-list', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(6, 'post-create', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(7, 'post-edit', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(8, 'post-delete', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `post2`
--

CREATE TABLE `post2` (
  `post_id` int(10) NOT NULL,
  `post_cate_id` int(10) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_status` int(4) NOT NULL,
  `post_featured` int(4) NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_view` int(10) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post2`
--

INSERT INTO `post2` (`post_id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_status`, `post_featured`, `post_content`, `post_view`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 3, '[Có thể bạn chưa biết] Điều gì xảy ra với cơ thể khi sử dụng heroin?', 'co-the-ban-chua-biet-dieu-gi-xay-ra-voi-co-the-khi-su-dung-heroin', '[Có thể bạn chưa biết] Điều gì xảy ra với cơ thể khi sử dụng heroin?', 'c-th-bn-cha-bit-iu-g-xy-ra-vi-c-th-khi-s-dng-heroin-n7OI2N.jpg', 1, 1, '<p>Bạn đ&atilde; biết hết những t&aacute;c hại của&nbsp;<a href=\"https://tinhte.vn/tags/heroin/\">heroin</a>&nbsp;chưa? Heroin được sản xuất v&agrave;o năm 1898 ở Đức v&agrave; được b&aacute;n tr&ecirc;n thị trường như một loại thuốc trị bệnh lao. Ch&uacute;ng chiết suất từ nhựa hoa&nbsp;<a href=\"https://tinhte.vn/tags/anh-tuc/\">anh t&uacute;c</a>, pha th&ecirc;m h&oacute;a chất v&agrave; được tinh chế để trở th&agrave;nh heroin. Thường th&igrave; 0,1g heroin c&oacute; gi&aacute; khoảng 15 - 20 $ Mỹ v&agrave; những kẻ&nbsp;<a href=\"https://tinhte.vn/tags/nghien/\">nghiện</a>&nbsp;phải trả đến 150 - 200 $ mỗi ng&agrave;y mới thỏa m&atilde;n được cơn nghiện của m&igrave;nh.</p>\r\n\r\n<p>Heroin l&agrave; một dẫn xuất của Opioid v&agrave; ước t&iacute;nh c&oacute; khoảng 9,2 triệu người tr&ecirc;n thế giới đang sử dụng ch&uacute;ng. Theo b&aacute;o c&aacute;o ở Mỹ th&igrave; độ tuổi từ 18 đến 25 l&agrave; đối tượng thường sử dụng nhất.<br />\r\n<br />\r\nKhi n&oacute;i đến heroin, mọi người ắt hẳn sẽ nghĩ đến kim ti&ecirc;m, nhưng heroin cũng c&oacute; thể h&uacute;t, điều n&agrave;y c&ograve;n t&ugrave;y thuộc v&agrave;o độ tinh khiết của thuốc cũng như sở th&iacute;ch của người d&ugrave;ng. Nếu ti&ecirc;m, ch&uacute;ng sẽ được ti&ecirc;m v&agrave;o tĩnh mạch hoặc cơ. Hầu như người nghiện thường c&oacute; xu hướng ti&ecirc;m tĩnh mạch v&igrave; thuốc sẽ ph&aacute;t huy t&aacute;c dụng nhanh hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sau khi đưa thuốc v&agrave;o cơ thể, họ sẽ c&oacute; cảm gi&aacute;c hưng phấn tức th&igrave;, miệng bắt đầu kh&ocirc; v&agrave; da ửng đỏ. L&uacute;c n&agrave;y thuốc như gi&uacute;p họ giảm đau v&agrave; bớt căng thẳng, tay ch&acirc;n c&oacute; vẻ nặng nề hơn b&igrave;nh thường. Nhiệt độ cơ thể thường tăng v&agrave; họ sẽ thấy buồn n&ocirc;n. Nhịp tim c&oacute; thể chậm hoặc kh&ocirc;ng đều. N&oacute;i c&aacute;ch kh&aacute;c l&agrave; họ đang rơi v&agrave;o trạng th&aacute;i mất &yacute; thức ho&agrave;n to&agrave;n.<br />\r\n<br />\r\nTuy nhi&ecirc;n đ&acirc;y chỉ l&agrave; những biểu hiện do một lượng nhỏ heroin g&acirc;y ra, mức độ nặng nhẹ c&ograve;n t&ugrave;y thuộc v&agrave;o liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng qu&aacute; liều heroin, thuốc c&oacute; thể g&acirc;y n&atilde;o thiếu m&aacute;u v&agrave; khiến hệ h&ocirc; hấp ngưng hoạt động.<br />\r\n&nbsp;</p>', 4, 'Tuy nhiên đây chỉ là những biểu hiện do một lượng nhỏ heroin gây ra, mức độ nặng nhẹ còn tùy thuộc vào liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng quá liều heroin, thuốc có thể gây não thiếu máu và khiến hệ hô hấp ngưng hoạt động.', 'Tuy nhiên đây chỉ là những biểu hiện do một lượng nhỏ heroin gây ra, mức độ nặng nhẹ còn tùy thuộc vào liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng quá liều heroin, thuốc có thể gây não thiếu máu và khiến hệ hô hấp ngưng hoạt động.', '2020-05-27 15:04:38', '2020-06-21 12:02:21'),
(2, 2, 'Bài Viết Nổi Bật', 'bai-viet-noi-bat', 'Bài Viết Nổi Bật', 'bai-viet-noi-bat-YRbcRQ.jpg', 1, 1, '<p>B&agrave;i Viết Nổi Bật</p>', 2, 'Bài Viết Nổi Bật', 'Bài Viết Nổi Bật', '2020-05-30 13:33:41', '2020-06-17 14:48:20'),
(3, 2, 'bai viet test 2', 'bai-viet-test-2', 'lam gi viet day', 'bai-viet-test-2-ygu9h6.png', 1, 1, '<p>lam gi viet day&nbsp;lam gi viet day</p>', 2, 'lam gi viet day', 'lam gi viet day', '2020-06-03 06:24:05', '2020-06-19 15:46:49'),
(4, 3, 'Chính thức “xóa sổ” dịch vụ đòi nợ thuê', 'chinh-thuc-xoa-so-dich-vu-doi-no-thue', 'Chiều nay (17/6), Quốc hội biểu quyết thông qua dự án Luật Đầu tư (sửa đổi),', 'chnh-thc-xa-s-dch-v-i-n-thu-sbMiAv.jpg', 1, 1, '<p>Trước khi bấm n&uacute;t biểu quyết, &ocirc;ng Vũ Hồng Thanh - Chủ nhiệm Ủy ban Kinh tế của Quốc hội - đ&atilde; c&oacute; b&aacute;o c&aacute;o tiếp thu, giải tr&igrave;nh, chỉnh l&yacute; dự &aacute;n Luật n&agrave;y.</p>\r\n\r\n<p><em>Về quy định cấm kinh doanh dịch vụ đ&ograve;i nợ</em>, &ocirc;ng Vũ Hồng Thanh th&ocirc;ng tin: Đa số &yacute; kiến đề nghị cấm &ldquo;kinh doanh dịch vụ đ&ograve;i nợ&rdquo;. Một số &yacute; kiến đề nghị kh&ocirc;ng cấm kinh doanh dịch vụ đ&ograve;i nợ m&agrave; thực hiện theo quy định của Luật hiện h&agrave;nh, đồng thời đổi t&ecirc;n l&agrave; &quot;kinh doanh dịch vụ thu hồi nợ&rdquo;.</p>\r\n\r\n<p>&ldquo;Ủy ban Thường vụ Quốc hội đ&atilde; gửi phiếu xin &yacute; kiến đại biểu Quốc hội v&agrave; xin tiếp thu theo đa số &yacute; kiến đại biểu Quốc hội, quy định &ldquo;cấm kinh doanh dịch vụ đ&ograve;i nợ&rdquo; tại điểm h khoản 1 Điều 6&rdquo; - Chủ nhiệm Ủy ban Kinh tế của Quốc hội cho biết.</p>\r\n\r\n<p>Ri&ecirc;ng với quy định n&agrave;y, Quốc hội đ&atilde; lấy &yacute; kiến đại biểu tại hội trường th&ocirc;ng qua việc bấm n&uacute;t biểu quyết. Kết quả, c&aacute;c đại biểu đều t&aacute;n th&agrave;nh với &ldquo;cấm kinh doanh dịch vụ đ&ograve;i nợ&rdquo;.</p>', 3, 'Riêng với quy định này, Quốc hội đã lấy ý kiến đại biểu tại hội trường thông qua việc bấm nút biểu quyết. Kết quả, các đại biểu đều tán thành với “cấm kinh doanh dịch vụ đòi nợ”.', 'Riêng với quy định này, Quốc hội đã lấy ý kiến đại biểu tại hội trường thông qua việc bấm nút biểu quyết. Kết quả, các đại biểu đều tán thành với “cấm kinh doanh dịch vụ đòi nợ”.', '2020-06-17 14:05:34', '2020-06-20 10:35:15'),
(5, 3, '“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam”', 'cuu-song-phi-cong-nhiem-covid-19-la-niem-tu-hao-cua-viet-nam', '“Tôi thấy bất ngờ khi người bệnh hoàn toàn tỉnh táo, các bác sĩ của chúng ta đã làm nên điều kỳ diệu. Đây là niềm tự hào của thành phố và ngành y tế cả nước với bạn bè quốc tế”.', 'cu-sng-phi-cng-nhim-covid-19-l-nim-t-ho-ca-vit-nam-iNiqNY.jpg', 1, 0, '<p>Đ&oacute; l&agrave; những ph&aacute;t biểu đầy x&uacute;c động của &ocirc;ng Nguyễn Th&agrave;nh Phong, Chủ tịch UBND TP HCM khi tới thăm nam phi c&ocirc;ng người Anh đang điều trị tại Bệnh viện Chợ Rẫy v&agrave;o chiều 17/6.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/1-1592402130341.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 1\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Chiều 17/6, &ocirc;ng Nguyễn Th&agrave;nh Phong, Chủ tịch UBND TPHCM tới thăm nam phi c&ocirc;ng người Anh đang điều trị tại Bệnh viện Chợ Rẫy</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/2-1592402130106.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 2\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>&Ocirc;ng Phong cho rằng c&aacute;c b&aacute;c sĩ đ&atilde; l&agrave;m n&ecirc;n điều kỳ diệu</p>\r\n\r\n<p>&ldquo;Ch&uacute;ng t&ocirc;i theo d&otilde;i thường xuy&ecirc;n, li&ecirc;n tục đối với những diễn tiễn sức khỏe của tất cả c&aacute;c ca bệnh nhiễm Covid-19 được điều trị tr&ecirc;n địa b&agrave;n th&agrave;nh phố, trong đ&oacute; đặc biệt quan t&acirc;m đến trường hợp bệnh nh&acirc;n thứ 91 (nam phi c&ocirc;ng người Anh &ndash; PV). Tưởng chừng, sự sống của người bệnh đ&atilde; đi v&agrave;o bế tắc nhưng đến h&ocirc;m nay, t&ocirc;i v&agrave;o thăm th&igrave; thấy rất bất ngờ khi người bệnh ho&agrave;n to&agrave;n tỉnh t&aacute;o&rdquo;, &ocirc;ng Phong n&oacute;i.</p>\r\n\r\n<p>B&aacute;o c&aacute;o chuy&ecirc;n m&ocirc;n về ca bệnh nhiễm Covid thứ 91, BS Trần Thanh Linh, Ph&oacute; trưởng khoa Hồi sức Cấp cứu, Bệnh viện Chợ Rẫy cho biết, sau khi được điều trị sạch virus, người bệnh được chuyển từ Bệnh viện Bệnh Nhiệt Đới sang Bệnh viện Chợ Rẫy trong t&igrave;nh trạng m&ecirc; s&acirc;u với chỉ định gh&eacute;p phổi. Khi tiếp nhận bệnh nh&acirc;n, ngay cả những b&aacute;c sĩ lạc quan nhất cũng kh&ocirc;ng d&aacute;m nghĩ tới cơ hội b&igrave;nh phục cho người bệnh.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 3\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/3-1592402129840.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 3\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>B&aacute;c sĩ Trần Thanh Linh, Ph&oacute; trưởng khoa Hồi sức Cấp cứu, Bệnh viện Chợ Rẫy</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 4\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/4-1592402127792.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 4\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>H&igrave;nh ảnh nh&acirc;n vi&ecirc;n bệnh viện Chợ Rẫy tiếp nhận bệnh nh&acirc;n 91 từ Bệnh viện Bệnh Nhiệt Đới</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 5\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/5-1592402126981.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 5\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Một đội chuyển bệnh chuy&ecirc;n nghiệp được cử đi l&agrave;m nhiệm vụ</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 6\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/6-1592402124716.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 6\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Một nhiệm vụ kh&ocirc;ng hề đơn giản của c&aacute;c y b&aacute;c sĩ</p>\r\n\r\n<p>Tuy nhi&ecirc;n, dưới sự chỉ đạo về mặt chuy&ecirc;n m&ocirc;n của Tiểu ban Điều trị Covid-19 m&agrave; đứng đầu l&agrave; PGS.TS.BS Nguyễn Trường Sơn, Thứ trưởng Bộ Y tế c&aacute;c cuộc hội chẩn chuy&ecirc;n m&ocirc;n trực tuyến to&agrave;n quốc đ&atilde; li&ecirc;n tiếp được tổ chức.</p>\r\n\r\n<p>&ldquo;Mấu chốt th&agrave;nh c&ocirc;ng của ca 91 l&agrave; sự tập trung tr&iacute; tuệ quốc gia, ng&agrave;nh y tế đ&atilde; huy động được mọi đội ngũ, tập trung to&agrave;n lực cho việc cứu chữa. Với kinh nghiệm điều trị cho c&aacute;c ca bệnh nặng, chuy&ecirc;n gia đầu ng&agrave;nh tr&ecirc;n cả nước đ&atilde; hợp sức định hướng cho bệnh viện Chợ Rẫy, từng bước điều trị gi&uacute;p bệnh nh&acirc;n hồi phục. Sắp tới Bệnh viện Chợ Rẫy sẽ c&oacute; cuộc hội chẩn với tiểu ban điều trị, xin &yacute; kiến Bộ Y tế để c&oacute; định hướng chuẩn bị cho phương &aacute;n khi bệnh nh&acirc;n xuất viện&rdquo; &ndash; BS ưu t&uacute; Nguyễn Tri Thức, Gi&aacute;m đốc Bệnh viện Chợ Rẫy cho biết.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 7\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/7-1592402127702.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 7\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>BS ưu t&uacute; Nguyễn Tri Thức, Gi&aacute;m đốc Bệnh viện Chợ Rẫy</p>\r\n\r\n<p>Ph&aacute;t Video</p>\r\n\r\n<p>Gi&aacute;m đốc Bệnh viện Chợ Rẫy kể về qu&aacute; tr&igrave;nh tiếp nhận bệnh</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 8\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/8-1592402129155.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 8\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Mấu chốt th&agrave;nh c&ocirc;ng của ca 91 l&agrave; sự tập trung tr&iacute; tuệ quốc gia, ng&agrave;nh y tế đ&atilde; huy động được mọi đội ngũ, tập trung to&agrave;n lực cho việc cứu chữa</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 9\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/9-1592402126468.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 9\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Với kinh nghiệm điều trị cho c&aacute;c ca bệnh nặng, chuy&ecirc;n gia đầu ng&agrave;nh tr&ecirc;n cả nước đ&atilde; hợp sức định hướng cho bệnh viện Chợ Rẫy, từng bước điều trị gi&uacute;p bệnh nh&acirc;n hồi phục</p>\r\n\r\n<p>GS.TS.BS Nguyễn Tấn Bỉnh, Gi&aacute;m đốc Sở Y tế: &ldquo;Trong ng&agrave;nh y c&oacute; thể xem việc cứu sống bệnh nh&acirc;n 91 l&agrave; sự kỳ diệu. Ở giai đoạn nặng, tưởng như đ&atilde; tuyệt vọng nhưng sự tập trung của c&aacute;c b&aacute;c sĩ đ&atilde; mang đến th&agrave;nh c&ocirc;ng ngo&agrave;i mong đợi. C&aacute;c giải ph&aacute;p hồi sức, kết hợp vật l&yacute; trị liệu được định hướng đ&uacute;ng đ&atilde; gi&uacute;p người bệnh b&igrave;nh phục&hellip; phổi bệnh nh&acirc;n phục hồi 20% rồi 30% v&agrave; đến h&ocirc;m nay, bệnh nh&acirc;n gần như đ&atilde; trở lại với t&igrave;nh trạng của một người b&igrave;nh thường&rdquo;.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 10\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/10-1592402129887.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 10\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>GS.TS.BS Nguyễn Tấn Bỉnh, Gi&aacute;m đốc Sở Y tế TPHCM</p>\r\n\r\n<p>Trao đổi với &ecirc; k&iacute;p b&aacute;c sĩ trực tiếp điều trị v&agrave; l&atilde;nh đạo c&aacute;c bệnh viện c&ugrave;ng l&atilde;nh đạo Sở Y tế, Chủ tịch th&agrave;nh phố Nguyễn Th&agrave;nh Phong b&agrave;y tỏ: &ldquo;L&agrave; l&atilde;nh đạo địa phương, t&ocirc;i thực sự cảm phục đối với c&aacute;c y b&aacute;c sĩ cả về năng lực chuy&ecirc;n m&ocirc;n, tấm l&ograve;ng của người thầy thuốc trong cuộc chiến chống dịch Covid-19. Đ&acirc;y l&agrave; niềm tự h&agrave;o, niềm vui của th&agrave;nh phố trong những chiến thắng ban đầu đẩy l&ugrave;i đại dịch đang diễn ra tr&ecirc;n to&agrave;n cầu&rdquo;.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 11\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/11-1592402130368.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 11\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>&Ocirc;ng Th&agrave;nh Phong chia sẻ: &ldquo;C&aacute;c b&aacute;c sĩ l&agrave; những chiến sĩ dũng cảm, ti&ecirc;n phong, xuất sắc ho&agrave;n th&agrave;nh nhiệm vụ cứu chữa người bệnh, gi&uacute;p Việt Nam ch&uacute;ng ta đạt được th&agrave;nh quả khiến c&aacute;c quốc gia kh&aacute;c phải khen ngợi. C&aacute;c b&aacute;c sĩ từ bệnh viện trung ương đến bệnh viện cơ sở đ&atilde; cộng t&aacute;c rất tốt tr&ecirc;n tinh thần &ldquo;chống dịch như chống giặc&rdquo; mỗi y b&aacute;c sĩ đ&atilde; trở th&agrave;nh chiến sĩ dũng cảm kh&ocirc;ng chỉ giỏi về năng lực chuy&ecirc;n m&ocirc;n m&agrave; c&ograve;n mang cả tấm l&ograve;ng cứu chữa người bệnh&rdquo;.&nbsp;</p>\r\n\r\n<p>Việt Nam đ&atilde; bước đầu chiến thắng dịch Covid-19, tuy nhi&ecirc;n, dịch bệnh đang tiếp tục diễn biến phức tạp, mất kiểm so&aacute;t tại nhiều quốc gia tr&ecirc;n thế giới, nhiều nước dịch đang b&ugrave;ng ph&aacute;t trở lại.&nbsp;</p>\r\n\r\n<p>Trước t&igrave;nh h&igrave;nh tr&ecirc;n, &ocirc;ng Nguyễn Th&agrave;nh Phong cho rằng: &ldquo;L&agrave;n s&oacute;ng sau bao giờ cũng cao hơn l&agrave;n s&oacute;ng trước, điều kiện điều trị bệnh của ch&uacute;ng ta kh&ocirc;ng thể n&agrave;o so được với c&aacute;c quốc gia ti&ecirc;n tiến tr&ecirc;n thế giới. Ch&uacute;ng ta đ&atilde; chủ động ph&ograve;ng chống tốt, c&oacute; được những kết quả thắng lợi bước đầu. Để tiếp tục bảo vệ những th&agrave;nh quả của cuộc chiến chống dịch, mọi cơ sở y tế, mọi người d&acirc;n kh&ocirc;ng n&ecirc;n chủ quan m&agrave; cần tăng cường hợp nữa c&ocirc;ng t&aacute;c chủ động ph&ograve;ng chống, bảo vệ th&agrave;nh quả đ&atilde; đạt được&rdquo;.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 12\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/12-1592402130673.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 12\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Bệnh viện Bệnh Nhiệt Đới v&agrave; Bệnh viện Chợ Rẫy được nhận bằng khen từ UBND TPHCM</p>\r\n\r\n<p>Ghi nhận những đ&oacute;ng g&oacute;p của Bệnh viện Bệnh Nhiệt Đới v&agrave; Bệnh viện Chợ Rẫy trong cuộc chiến chống dịch Covid-19 n&oacute;i chung v&agrave; trong việc điều trị cho bệnh nh&acirc;n số 91, Chủ tịch UBND TPHCM đ&atilde; k&yacute; quyết định khen tặng v&agrave; thưởng n&oacute;ng cho mỗi bệnh viện số tiền 50 triệu đồng. Theo &ocirc;ng Th&agrave;nh Phong: &ldquo;Đ&acirc;y l&agrave; m&oacute;n qu&agrave; của th&agrave;nh phố, động vi&ecirc;n tinh thần tất c&aacute;c y b&aacute;c sĩ đ&atilde; v&agrave; đang ti&ecirc;n phong trong cuộc chiến đẩy l&ugrave;i dịch Covid-19&rdquo;.&nbsp;</p>', 4, 'Chợ Rẫy trong cuộc chiến chống dịch Covid-19 nói chung và trong việc điều trị cho bệnh nhân số 91, Chủ tịch UBND TPHCM', 'Chợ Rẫy trong cuộc chiến chống dịch Covid-19 nói chung và trong việc điều trị cho bệnh nhân số 91, Chủ tịch UBND TPHCM', '2020-06-17 16:28:56', '2020-06-21 10:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16'),
(2, 'Writer', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thp_user`
--

CREATE TABLE `thp_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thp_user`
--

INSERT INTO `thp_user` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'phuth.site@gmail.com', '$2y$10$YcNGkfaM.5.UMIoMHTtlTO031c8PxrkicE6J6da6P9TGm1MiBZkSu', 'afHwVaFIiGAcCwAgk2cRsDvRfhNGXLNMfo0sjqs8zduASmqSN4Pz4MP5eA2E', NULL, NULL),
(2, 'Phú', 'tranhuuphu9x@gmail.com', '$2y$10$cokE8dutbuhe.QNc40z0A.3JwOZvJJ.b4rU0KR5AwB5ykHdanExwS', 'ZS1cnjmca5ofmAWhuLNqeyhnL4K4tAkfKCYa5X3aldsgmSguaFXreI8OQasB', '2020-03-30 15:22:44', '2020-06-23 16:38:06'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$TlXJD0egkyXye756DLOMku9f5/irD5M0pOf9LTwvi9vbB2UEO.mI6', 'EqqjiHRYXvWzDBtQxFq2CU5TrM1WPut3tTJ3e3KHQwxWFPPmcbVwrJVr9WoU', '2020-04-19 06:45:16', '2020-06-23 16:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate2`
--
ALTER TABLE `cate2`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post2`
--
ALTER TABLE `post2`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `thp_user`
--
ALTER TABLE `thp_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cate2`
--
ALTER TABLE `cate2`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post2`
--
ALTER TABLE `post2`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thp_user`
--
ALTER TABLE `thp_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
