-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 07:42 AM
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
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_parent_id` tinyint(4) DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`cate_id`, `cate_name`, `cate_slug`, `cate_parent_id`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(1, 'inox', 'inox', 0, 'inox', 'inox', NULL, NULL),
(2, 'không phải', 'khong-phai', NULL, 'không phải 22', 'không phải 4', '2020-03-21 23:46:47', '2020-03-23 09:06:38');

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
(1, 'App\\User', 3);

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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `post_cate_id` int(10) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_intro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` tinyint(4) NOT NULL,
  `post_featured` tinyint(4) NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content_slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_view` tinyint(4) DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_status`, `post_featured`, `post_content`, `post_content_slug`, `post_view`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(3, 1, 'bài viết chỉnh sửa', 'bai-viet-chinh-sua', 'bài viết for test 2', 'df630b364bf5b0abe9e4.jpg', 0, 0, '<p>b&agrave;i viết for test 2<img alt=\"\" src=\"http://localhost/THP-Trading//public/upload/ckfinder/files/7c19ac37c8547fc295b3cec0029bcc92.jpg\" style=\"height:960px; width:960px\" /></p>', 'pbagravei-viet-for-test-2img-alt-srchttplocalhostthp-tradingpublicuploadckfinderfiles7c19ac37c8547fc295b3cec0029bcc92jpg-styleheight960px-width960px-p', 4, 'bài viết for test 2323232', 'bài viết for test 333', '2020-03-23 01:29:50', '2020-04-10 17:04:35'),
(5, 2, 'bai viet thu 3', 'bai-viet-thu-3', 'bai viet tiep theo', 'icon-vi-tri.png', 1, 1, '<p>cang vay do</p>', NULL, 1, 'meta key thoi ma', 'meta desc thoi ma', '2020-03-24 04:02:02', '2020-04-09 15:27:20'),
(6, 1, 'bài viết lúc 11h', 'bai-viet-luc-11h', 'bài viết tối muộn', 'z1802301312832_301f82c8a6d6f9c7cf3b9b5228fdb9c7.jpg', 1, 0, '<p>b&agrave;i viết tối muộn n&ecirc;n test</p>', NULL, 6, 'bài viết tối muộn nên test thôi mà', 'bài viết tối muộn nên test thôi mà em', '2020-03-27 16:04:46', '2020-04-26 16:40:40'),
(8, 1, 'tiny', 'tiny', 'tiny', 'phong - Copy.jpg', 1, 0, '<p>tiny</p>', NULL, 0, 'tiny', 'tiny', '2020-03-28 17:05:56', '2020-03-28 17:05:56'),
(9, 2, 'tiny', 'tiny', 'tiny', 'phong - Copy.jpg', 1, 0, '<p>tiny</p>', NULL, 0, 'tiny', 'tiny', '2020-03-28 17:06:47', '2020-03-28 17:06:47'),
(11, 1, 'post_title', 'post-title', 'post_title', 'post-title.jpg', 1, 1, '<p>post_titlepost_title&nbsp;</p>', NULL, 3, 'post_title', 'post_titlepost_titlepost_title', '2020-03-29 14:52:34', '2020-04-10 17:03:54'),
(12, 1, 'image Compress', 'image-compress', 'image Compress image Compress', 'image-compress-ephBH4.jpg', 1, 1, '<p>image Compress&nbsp;image Compress</p>', NULL, 9, 'image Compressimage Compressimage Compressimage Compress', 'image Compressimage Compressimage Compressimage Compress', '2020-03-29 15:00:26', '2020-05-01 17:14:06'),
(13, 1, 'Số ca nhiễm nCoV lên 240', 'so-ca-nhiem-ncov-len-240', '18h ngày 4/4, Bộ Y tế ghi nhận một ca dương tính nCoV, là người từ nước ngoài về được cách ly tập trung ngay.', 's-ca-nhim-ncov-ln-240-MrzvAe.jpg', 1, 0, '<p>18h ng&agrave;y 4/4, Bộ Y tế ghi nhận&nbsp;một ca dương t&iacute;nh nCoV, l&agrave; người từ nước ngo&agrave;i về được c&aacute;ch ly tập trung ngay.</p>\r\n\r\n<p>Như vậy h&ocirc;m nay chỉ 3 ca nCoV&nbsp;mới được ghi nhận, trong khi 4 bệnh nh&acirc;n tại TP HCM được tuy&ecirc;n bố khỏi Covid-19. Tổng số bệnh nh&acirc;n tại Việt Nam l&ecirc;n 240, trong đ&oacute; 90 người đ&atilde; khỏi.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/THP-Trading//public/upload/ckfinder/files/7c19ac37c8547fc295b3cec0029bcc92.jpg\" style=\"height:960px; width:960px\" /></p>\r\n\r\n<p><strong>&quot;Bệnh nh&acirc;n 240&quot;</strong>, nữ, 29 tuổi, ở Lục Nam, tỉnh Bắc Giang, l&agrave;m việc tại Bangkok, Th&aacute;i Lan. Ng&agrave;y 19/3, trước khi về Việt Nam, c&ocirc; tham gia buổi li&ecirc;n hoan với gia đ&igrave;nh&nbsp;&quot;bệnh nh&acirc;n 166&quot;. Ng&agrave;y 20/3, c&ocirc; đi chuyến bay VN618, ghế 28B, về H&agrave; Nội, c&aacute;ch ly tập trung tại Lữ đo&agrave;n 241, x&atilde; Quỳnh Lưu, huyện Nho Quan, tỉnh Ninh B&igrave;nh.</p>\r\n\r\n<p>Ng&agrave;y 31/3, c&ocirc; sốt 38,3 độ C, kh&ocirc;ng ho, kh&ocirc;ng kh&oacute; thở, được chuyển khu c&aacute;ch ly đặc biệt v&agrave; lấy mẫu bệnh phẩm. Chiều 1/4, x&eacute;t nghiệm của Bệnh viện Đa khoa tỉnh Ninh B&igrave;nh cho kết quả dương t&iacute;nh, chuyển điều trị tại Khoa Truyền nhiễm của bệnh viện.</p>\r\n\r\n<p>S&aacute;u người ở c&ugrave;ng ph&ograve;ng với bệnh nh&acirc;n tại khu c&aacute;ch ly được lấy mẫu x&eacute;t nghiệm trong đ&ecirc;m 1/4 v&agrave; đều c&oacute; kết quả &acirc;m t&iacute;nh.</p>\r\n\r\n<p><br />\r\nTrừ 90 người đ&atilde; khỏi bệnh ra viện, 150 bệnh nh&acirc;n c&ograve;n lại đang được điều trị tại 21 cơ sở y tế, phần lớn sức khỏe&nbsp;ổn định. Hiện, 21 người x&eacute;t nghiệm&nbsp;&acirc;m t&iacute;nh lần một, 18 người &acirc;m t&iacute;nh lần 2.Trong 240 ca Covid-19 c&oacute; 149 người từ nước ngo&agrave;i về, chiếm 62,1%; 91 người l&acirc;y nhiễm thứ ph&aacute;t.&nbsp;</p>\r\n\r\n<p>7 bệnh nh&acirc;n nặng đang được điều trị tại Bệnh viện Bệnh Nhiệt đới Trung ương, gồm hai&nbsp;người nguy kịch đang thở m&aacute;y, lọc m&aacute;u; một người thở m&aacute;y kh&ocirc;ng x&acirc;m nhập chuyển sang thở oxy; 4 bệnh nh&acirc;n thở oxy.</p>', 'p18h-ngagravey-44-bo-y-te-ghi-nhannbspmot-ca-duong-tiacutenh-ncov-lagrave-nguoi-tu-nuoc-ngoagravei-ve-duoc-caacutech-ly-tap-trung-ngayp-pnhu-vay-hocircm-nay-chi-3-ca-ncovnbspmoi-duoc-ghi-nhan-trong-khi-4-benh-nhacircn-tai-tp-hcm-duoc-tuyecircn-bo-khoi-covid-19-tong-so-benh-nhacircn-tai-viet-nam-lecircn-240-trong-doacute-90-nguoi-datilde-khoip-pimg-alt-srchttplocalhostthp-tradingpublicuploadckfinderfiles7c19ac37c8547fc295b3cec0029bcc92jpg-styleheight960px-width960px-p-pstrongquotbenh-nhacircn-240quotstrong-nu-29-tuoi-o-luc-nam-tinh-bac-giang-lagravem-viec-tai-bangkok-thaacutei-lan-ngagravey-193-truoc-khi-ve-viet-nam-cocirc-tham-gia-buoi-liecircn-hoan-voi-gia-digravenhnbspquotbenh-nhacircn-166quot-ngagravey-203-cocirc-di-chuyen-bay-vn618-ghe-28b-ve-hagrave-noi-caacutech-ly-tap-trung-tai-lu-doagraven-241-xatilde-quynh-luu-huyen-nho-quan-tinh-ninh-bigravenhp-pngagravey-313-cocirc-sot-383-do-c-khocircng-ho-khocircng-khoacute-tho-duoc-chuyen-khu-caacutech-ly-dac-biet-vagrave-lay-mau-benh-pham-chieu-14-xeacutet-nghiem-cua-benh-vien-da-khoa-tinh-ninh-bigravenh-cho-ket-qua-duong-tiacutenh-chuyen-dieu-tri-tai-khoa-truyen-nhiem-cua-benh-vienp-psaacuteu-nguoi-o-cugraveng-phograveng-voi-benh-nhacircn-tai-khu-caacutech-ly-duoc-lay-mau-xeacutet-nghiem-trong-decircm-14-vagrave-deu-coacute-ket-qua-acircm-tiacutenhp-pbr-tru-90-nguoi-datilde-khoi-benh-ra-vien-150-benh-nhacircn-cograven-lai-dang-duoc-dieu-tri-tai-21-co-so-y-te-phan-lon-suc-khoenbspon-dinh-hien-21-nguoi-xeacutet-nghiemnbspacircm-tiacutenh-lan-mot-18-nguoi-acircm-tiacutenh-lan-2trong-240-ca-covid-19-coacute-149-nguoi-tu-nuoc-ngoagravei-ve-chiem-621-91-nguoi-lacircy-nhiem-thu-phaacutetnbspp-p7-benh-nhacircn-nang-dang-duoc-dieu-tri-tai-benh-vien-benh-nhiet-doi-trung-uong-gom-hainbspnguoi-nguy-kich-dang-tho-maacutey-loc-maacuteu-mot-nguoi-tho-maacutey-khocircng-xacircm-nhap-chuyen-sang-tho-oxy-4-benh-nhacircn-tho-oxyp', 8, '7 bệnh nhân nặng đang được điều trị tại Bệnh viện Bệnh Nhiệt đới Trung ương, gồm hai người nguy', 'Trừ 90 người đã khỏi bệnh ra viện, 150 bệnh nhân còn lại đang được điều trị tại 21 cơ sở y tế, phần lớn sức khỏe ổn định. Hiện, 21 người xét', '2020-04-04 16:01:56', '2020-04-27 17:57:35'),
(14, 1, 'Sáng nay không ghi nhận thêm ca nhiễm nCoV', 'sang-nay-khong-ghi-nhan-them-ca-nhiem-ncov', 'oặc nhập cảnh từ vùng dịch đang được theo dõi sức khỏe. Trong đó, hơn 22.000 người cách ly tại nhà hoặc nơi lưu trú. Số còn lại khoảng 45.000 người được cách ly tập trung.', 'sang-nay-khong-ghi-nhan-them-ca-nhiem-ncov-vS6Z40.jpg', 1, 0, '<p>oặc nhập cảnh từ v&ugrave;ng dịch đang được theo d&otilde;i sức khỏe. Trong đ&oacute;, hơn 22.000 người c&aacute;ch ly tại nh&agrave; hoặc&nbsp;nơi lưu tr&uacute;. Số c&ograve;n lại khoảng 45.000 người&nbsp;được c&aacute;ch ly tập trung.</p>\r\n\r\n<p>Trong số bệnh nh&acirc;n nặng, người cao tuổi&nbsp;nhất l&agrave; &quot;bệnh nh&acirc;n 161&quot;, 88 tuổi. B&agrave; bị xuất huyết n&atilde;o, cao huyết &aacute;p, tiểu đường, hở van động mạnh chủ, thể trạng gầy yếu. Hiện b&agrave;&nbsp;vẫn thở m&aacute;y, kh&ocirc;ng sốt, t&igrave;nh trạng l&acirc;m s&agrave;ng tạm ổn định, kh&ocirc;ng c&oacute; suy tạng kh&aacute;c. Bốn bệnh nh&acirc;n nặng đang được điều trị tại Bệnh viện Bệnh Nhiệt đới Trung ương sức khỏe đ&atilde; c&oacute; tiến triển.</p>\r\n\r\n<p>B&aacute;c g&aacute;i &quot;bệnh nh&acirc;n 17&quot;&nbsp;đ&atilde; kết th&uacute;c can thiệp ECMO (hệ thống tuần ho&agrave;n ngo&agrave;i cơ thể), chỉ c&ograve;n thở m&aacute;y, lọc m&aacute;u. B&agrave; c&oacute; bệnh nền l&agrave; rối loạn tiền đ&igrave;nh. Trong qu&aacute; tr&igrave;nh điều trị diễn tiến sức khỏe xấu n&ecirc;n c&aacute;c b&aacute;c sĩ quyết định kết hợp thở m&aacute;y v&agrave; can thiệp ECMO.</p>\r\n\r\n<p>B&agrave; l&agrave; bệnh nh&acirc;n Covid-19 duy nhất ở nước ta đến nay phải can thiệp ECMO. Sau nhiều ng&agrave;y ki&ecirc;n tr&igrave; điều trị, phối hợp hội chẩn&nbsp;của c&aacute;c chuy&ecirc;n gia đầu ng&agrave;nh với c&aacute;c b&aacute;c sĩ Bệnh viện Bệnh Nhiệt đới Trung ương, sức khỏe của b&agrave; đ&atilde; tiến triển.&nbsp;Đặc biệt, b&agrave; đ&atilde; c&oacute; kết quả x&eacute;t nghiệm &acirc;m t&iacute;nh với nCoV li&ecirc;n tục 3 lần v&agrave;o c&aacute;c ng&agrave;y 26/3, 27/3 v&agrave; 29/3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Ba bệnh nh&acirc;n nặng kh&aacute;c đ&atilde; ngưng thở m&aacute;y từ mấy ng&agrave;y qua v&agrave; đang tập thở. Kết quả x&eacute;t nghiệm nCoV &acirc;m t&iacute;nh nhiều lần.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Trong số 240 bệnh nh&acirc;n c&oacute; 149 người từ nước ngo&agrave;i về, chiếm 62,1%; 91 người bị l&acirc;y nhiễm thứ ph&aacute;t bao gồm 61 người thuộc c&aacute;c ổ dịch nội địa như li&ecirc;n quan Bệnh viện Bạch Mai ở H&agrave; Nội, qu&aacute;n bar Buddha tại TP HCM, li&ecirc;n quan&nbsp;&quot;bệnh nh&acirc;n 34&quot;&nbsp;tại B&igrave;nh Thuận...</p>', NULL, 12, 'oặc nhập cảnh từ vùng dịch đang được theo dõi sức khỏe. Trong đó, hơn 22.000 người cách ly tại nhà hoặc nơi lưu trú. Số còn lại khoảng 45.000 người được cách ly tập trung.', 'oặc nhập cảnh từ vùng dịch đang được theo dõi sức khỏe. Trong đó, hơn 22.000 người cách ly tại nhà hoặc nơi lưu trú. Số còn lại khoảng 45.000 người được cách ly tập trung.', '2020-04-05 09:58:14', '2020-05-01 17:09:57');

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
(1, 'Admin', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16');

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
(6, 1),
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
  `level` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thp_user`
--

INSERT INTO `thp_user` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'phuth.site@gmail.com', '$2y$10$YcNGkfaM.5.UMIoMHTtlTO031c8PxrkicE6J6da6P9TGm1MiBZkSu', 1, 'afHwVaFIiGAcCwAgk2cRsDvRfhNGXLNMfo0sjqs8zduASmqSN4Pz4MP5eA2E', NULL, NULL),
(2, NULL, 'tranhuuphu9x@gmail.com', '$2y$10$hF43bFmFHuvb2WeMlDIEPO0m1YnI7NV2N8TDMQ0nfYxQJnLdcMJsm', 1, 'Qv8U72PGbxMccn2e6h2ZWJUK75fIKDyZy5lVP7RYphuFzPQOHpkVhz6eVP3A', '2020-03-30 15:22:44', '2020-03-30 15:22:44'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$TlXJD0egkyXye756DLOMku9f5/irD5M0pOf9LTwvi9vbB2UEO.mI6', NULL, 'foFzpzkjv9QgNWz8xND798PkHjCUUNoksh0xgFHgKjflCIFA7D6ujGFOHvnp', '2020-04-19 06:45:16', '2020-04-19 06:45:16');

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
-- Indexes for table `cate`
--
ALTER TABLE `cate`
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
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_post_cate_id_foreign` (`post_cate_id`);

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
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_post_cate_id_foreign` FOREIGN KEY (`post_cate_id`) REFERENCES `cate` (`cate_id`) ON DELETE CASCADE;

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
