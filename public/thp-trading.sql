-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 04:28 PM
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
(6, '2020_03_28_190118_table_page', 5);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Page 2', 'page-2', 'scan0002.jpg', 0, '<p>Page 2</p>', 'PagePage', 'PagePagePage', '2020-03-28 13:05:05', '2020-03-28 16:32:59'),
(2, 'Trang Chủ', 'khong-phai-trang-chu', 'scan0001.jpg', 1, '<p>khong phai trang chu</p>', 'khong phai trang chu', 'khong phai trang chu', '2020-03-28 16:33:31', '2020-03-28 16:33:31');

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
  `post_view` tinyint(4) DEFAULT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_status`, `post_featured`, `post_content`, `post_view`, `meta_key`, `meta_desc`, `created_at`, `updated_at`) VALUES
(3, 1, 'bài viết chỉnh sửa', 'bai-viet-chinh-sua', 'bài viết for test 2', 'df630b364bf5b0abe9e4.jpg', 0, 1, '<p>b&agrave;i viết for test 2</p>', 0, 'bài viết for test 2323232', 'bài viết for test 333', '2020-03-23 01:29:50', '2020-03-24 11:11:16'),
(5, 2, 'bai viet thu 3', 'bai-viet-thu-3', 'bai viet tiep theo', 'icon-vi-tri.png', 1, 1, '<p>cang vay do</p>', 0, 'meta key thoi ma', 'meta desc thoi ma', '2020-03-24 04:02:02', '2020-03-24 11:10:43'),
(6, 1, 'bài viết lúc 11h', 'bai-viet-luc-11h', 'bài viết tối muộn', 'z1802301312832_301f82c8a6d6f9c7cf3b9b5228fdb9c7.jpg', 1, 0, '<p>b&agrave;i viết tối muộn n&ecirc;n test</p>', 0, 'bài viết tối muộn nên test thôi mà', 'bài viết tối muộn nên test thôi mà em', '2020-03-27 16:04:46', '2020-03-27 16:04:46'),
(7, 1, 'tiny', 'tiny', 'tiny', 'phong - Copy.jpg', 1, 0, '<p>tiny</p>', 0, 'tiny', 'tiny', '2020-03-28 17:04:58', '2020-03-28 17:04:58'),
(8, 1, 'tiny', 'tiny', 'tiny', 'phong - Copy.jpg', 1, 0, '<p>tiny</p>', 0, 'tiny', 'tiny', '2020-03-28 17:05:56', '2020-03-28 17:05:56'),
(9, 1, 'tiny', 'tiny', 'tiny', 'phong - Copy.jpg', 1, 0, '<p>tiny</p>', 0, 'tiny', 'tiny', '2020-03-28 17:06:47', '2020-03-28 17:06:47'),
(11, 1, 'post_title', 'post-title', 'post_title', 'post-title.jpg', 1, 1, '<p>post_titlepost_title&nbsp;</p>', 0, 'post_title', 'post_titlepost_titlepost_title', '2020-03-29 14:52:34', '2020-03-29 14:52:34'),
(12, 1, 'image Compress', 'image-compress', 'image Compress image Compress', 'image-compress-ephBH4.jpg', 1, 1, '<p>image Compress&nbsp;image Compress</p>', 0, 'image Compressimage Compressimage Compressimage Compress', 'image Compressimage Compressimage Compressimage Compress', '2020-03-29 15:00:26', '2020-03-29 15:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `thp_user`
--

CREATE TABLE `thp_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thp_user`
--

INSERT INTO `thp_user` (`id`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'phuth.site@gmail.com', '$2y$10$YcNGkfaM.5.UMIoMHTtlTO031c8PxrkicE6J6da6P9TGm1MiBZkSu', 1, 'KXzMtJFa2KBo92aFLUM02Qpa7We0VkHh2OtjIbMEgBD1dASrCbO1LeJQ4VcM', NULL, NULL),
(2, 'tranhuuphu9x@gmail.com', '$2y$10$hF43bFmFHuvb2WeMlDIEPO0m1YnI7NV2N8TDMQ0nfYxQJnLdcMJsm', 1, 'Qv8U72PGbxMccn2e6h2ZWJUK75fIKDyZy5lVP7RYphuFzPQOHpkVhz6eVP3A', '2020-03-30 15:22:44', '2020-03-30 15:22:44');

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
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_post_cate_id_foreign` (`post_cate_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `thp_user`
--
ALTER TABLE `thp_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_post_cate_id_foreign` FOREIGN KEY (`post_cate_id`) REFERENCES `cate` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
