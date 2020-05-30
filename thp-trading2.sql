-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 06:26 PM
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
(1, 5, '[Có thể bạn chưa biết] Điều gì xảy ra với cơ thể khi sử dụng heroin?', 'co-the-ban-chua-biet-dieu-gi-xay-ra-voi-co-the-khi-su-dung-heroin', '[Có thể bạn chưa biết] Điều gì xảy ra với cơ thể khi sử dụng heroin?', 'c-th-bn-cha-bit-iu-g-xy-ra-vi-c-th-khi-s-dng-heroin-n7OI2N.jpg', 1, 0, '<p>Bạn đ&atilde; biết hết những t&aacute;c hại của&nbsp;<a href=\"https://tinhte.vn/tags/heroin/\">heroin</a>&nbsp;chưa? Heroin được sản xuất v&agrave;o năm 1898 ở Đức v&agrave; được b&aacute;n tr&ecirc;n thị trường như một loại thuốc trị bệnh lao. Ch&uacute;ng chiết suất từ nhựa hoa&nbsp;<a href=\"https://tinhte.vn/tags/anh-tuc/\">anh t&uacute;c</a>, pha th&ecirc;m h&oacute;a chất v&agrave; được tinh chế để trở th&agrave;nh heroin. Thường th&igrave; 0,1g heroin c&oacute; gi&aacute; khoảng 15 - 20 $ Mỹ v&agrave; những kẻ&nbsp;<a href=\"https://tinhte.vn/tags/nghien/\">nghiện</a>&nbsp;phải trả đến 150 - 200 $ mỗi ng&agrave;y mới thỏa m&atilde;n được cơn nghiện của m&igrave;nh.</p>\r\n\r\n<p>Heroin l&agrave; một dẫn xuất của Opioid v&agrave; ước t&iacute;nh c&oacute; khoảng 9,2 triệu người tr&ecirc;n thế giới đang sử dụng ch&uacute;ng. Theo b&aacute;o c&aacute;o ở Mỹ th&igrave; độ tuổi từ 18 đến 25 l&agrave; đối tượng thường sử dụng nhất.<br />\r\n<br />\r\nKhi n&oacute;i đến heroin, mọi người ắt hẳn sẽ nghĩ đến kim ti&ecirc;m, nhưng heroin cũng c&oacute; thể h&uacute;t, điều n&agrave;y c&ograve;n t&ugrave;y thuộc v&agrave;o độ tinh khiết của thuốc cũng như sở th&iacute;ch của người d&ugrave;ng. Nếu ti&ecirc;m, ch&uacute;ng sẽ được ti&ecirc;m v&agrave;o tĩnh mạch hoặc cơ. Hầu như người nghiện thường c&oacute; xu hướng ti&ecirc;m tĩnh mạch v&igrave; thuốc sẽ ph&aacute;t huy t&aacute;c dụng nhanh hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sau khi đưa thuốc v&agrave;o cơ thể, họ sẽ c&oacute; cảm gi&aacute;c hưng phấn tức th&igrave;, miệng bắt đầu kh&ocirc; v&agrave; da ửng đỏ. L&uacute;c n&agrave;y thuốc như gi&uacute;p họ giảm đau v&agrave; bớt căng thẳng, tay ch&acirc;n c&oacute; vẻ nặng nề hơn b&igrave;nh thường. Nhiệt độ cơ thể thường tăng v&agrave; họ sẽ thấy buồn n&ocirc;n. Nhịp tim c&oacute; thể chậm hoặc kh&ocirc;ng đều. N&oacute;i c&aacute;ch kh&aacute;c l&agrave; họ đang rơi v&agrave;o trạng th&aacute;i mất &yacute; thức ho&agrave;n to&agrave;n.<br />\r\n<br />\r\nTuy nhi&ecirc;n đ&acirc;y chỉ l&agrave; những biểu hiện do một lượng nhỏ heroin g&acirc;y ra, mức độ nặng nhẹ c&ograve;n t&ugrave;y thuộc v&agrave;o liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng qu&aacute; liều heroin, thuốc c&oacute; thể g&acirc;y n&atilde;o thiếu m&aacute;u v&agrave; khiến hệ h&ocirc; hấp ngưng hoạt động.<br />\r\n&nbsp;</p>', 0, 'Tuy nhiên đây chỉ là những biểu hiện do một lượng nhỏ heroin gây ra, mức độ nặng nhẹ còn tùy thuộc vào liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng quá liều heroin, thuốc có thể gây não thiếu máu và khiến hệ hô hấp ngưng hoạt động.', 'Tuy nhiên đây chỉ là những biểu hiện do một lượng nhỏ heroin gây ra, mức độ nặng nhẹ còn tùy thuộc vào liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng quá liều heroin, thuốc có thể gây não thiếu máu và khiến hệ hô hấp ngưng hoạt động.', '2020-05-27 15:04:38', '2020-05-27 15:04:38');

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
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
