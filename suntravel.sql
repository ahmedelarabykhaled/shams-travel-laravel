-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 09:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suntravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'ahmed@yahoo.com', '$2y$10$8k.7xFChiXLEP82XDn.9xefQjQ1XixGH9hmMc93SEYSY.zCakfpYi', '2019-03-22 22:16:17', '2019-03-22 22:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `hint`, `url`, `language`, `created_at`, `updated_at`) VALUES
(12, 'lfksdn', ';ldksn', '1555808167.jpg', 'ar', '2019-04-20 22:56:07', '2019-04-20 22:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `en_destinations`
--

CREATE TABLE `en_destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_destinations`
--

INSERT INTO `en_destinations` (`id`, `name`, `hint`, `url`, `language`, `created_at`, `updated_at`) VALUES
(5, 'lf;kdsh', ';lksd', '1555808355.jpg', 'en', '2019-04-20 20:20:05', '2019-04-20 22:59:15'),
(6, 'kldsa;', ';klsh', '1555808209.jpg', 'en', '2019-04-20 20:20:20', '2019-04-20 22:56:49'),
(7, ';lfdash', 'khsdp', '1555798832.jpg', 'en', '2019-04-20 20:20:32', '2019-04-20 20:20:32'),
(8, 'lcksd', 'lksdn', '1555798864.jpg', 'en', '2019-04-20 20:21:04', '2019-04-20 20:21:04'),
(9, ';flds', ';fhdpq', '1555808154.jpg', 'en', '2019-04-20 22:55:54', '2019-04-20 22:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `en_flight_offers`
--

CREATE TABLE `en_flight_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coast` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_flight_offers`
--

INSERT INTO `en_flight_offers` (`id`, `country`, `place`, `duration`, `coast`, `url`, `language`, `created_at`, `updated_at`) VALUES
(7, 'lksd;;', 'fdspfdso', 'fdsmfpo', 'lfdksmpo', '1555795659.jpg', 'en', '2019-04-20 18:11:10', '2019-04-20 19:27:39'),
(8, 'ahmed', 'london', '8 ايام', 'ahmed', '1555794134.jpg', 'en', '2019-04-20 19:02:14', '2019-04-20 19:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `en_main_slider_infos`
--

CREATE TABLE `en_main_slider_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_main_slider_infos`
--

INSERT INTO `en_main_slider_infos` (`id`, `comment`, `hint`, `url`, `language`, `created_at`, `updated_at`) VALUES
(2, 'travel with us all over the world', 'we make a difference...book with us', '1554654441.jpg', 'en', NULL, NULL),
(3, 'the first test for english main slider info', 'the first test for english main slider info', '1555775436.jpg', 'en', '2019-04-20 13:50:36', '2019-04-20 13:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `en_photos`
--

CREATE TABLE `en_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_photos`
--

INSERT INTO `en_photos` (`id`, `url`, `place`, `hint`, `language`, `created_at`, `updated_at`) VALUES
(14, '1555789303.jpg', 'london', 'london', 'en', '2019-04-20 17:40:27', '2019-04-20 17:41:43'),
(15, '1555789241.jpg', 'ahmed', 'LKJFDBS', 'en', '2019-04-20 17:40:41', '2019-04-20 17:40:41'),
(16, '1555789254.jpg', 'kdns', 'test english destination', 'en', '2019-04-20 17:40:54', '2019-04-20 17:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `flight_offers`
--

CREATE TABLE `flight_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coast` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flight_offers`
--

INSERT INTO `flight_offers` (`id`, `country`, `place`, `duration`, `coast`, `url`, `language`, `created_at`, `updated_at`) VALUES
(8, 'ميبتسيخ', 'سيبهحتخبهسي', 'حخيهسا', 'حخيبهسا', '1555791090.jpg', 'ar', '2019-04-20 18:11:30', '2019-04-20 18:11:30'),
(9, 'مكه المكرمه', 'اختبار احتبار', '8 ايام', '200 L.E', '1555796543.jpg', 'ar', '2019-04-20 19:01:50', '2019-04-20 19:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `from`, `date`, `rooms`, `adults`, `kids`, `created_at`, `updated_at`) VALUES
(1, 'ايطاليا', '04/08/2019 - 04/08/2019', '3', '1', '1', '2019-04-07 20:46:13', '2019-04-07 20:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `main_infos`
--

CREATE TABLE `main_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_infos`
--

INSERT INTO `main_infos` (`id`, `info`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'status', '1', '1', NULL, '2019-04-20 13:33:18'),
(2, 'lang', 'en', '1', NULL, '2019-04-20 23:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `main_slider_infos`
--

CREATE TABLE `main_slider_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_slider_infos`
--

INSERT INTO `main_slider_infos` (`id`, `comment`, `hint`, `url`, `language`, `created_at`, `updated_at`) VALUES
(8, 'kldfs', 'l;sd', '1555809259.jpg', 'ar', '2019-04-20 23:14:19', '2019-04-20 23:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_18_025418_create_admins_table', 1),
(4, '2019_03_18_040734_create_destinations_table', 1),
(5, '2019_03_23_000936_create_flight_deals_table', 1),
(6, '2019_03_23_001218_create_images_table', 1),
(7, '2019_03_23_220702_create_flight_offers_table', 2),
(8, '2019_03_23_233811_create_photos_table', 3),
(9, '2019_03_28_123027_create_main_slider_infos_table', 4),
(10, '2019_04_06_230917_create_main_infos_table', 5),
(11, '2019_04_07_220048_create_round_trips_table', 6),
(12, '2019_04_07_221500_create_one_way_trips_table', 7),
(13, '2019_04_07_223100_create_hotels_table', 8),
(14, '2019_04_08_145132_add_user_to_round_trips', 9),
(15, '2019_04_18_171649_create_en__destinations_table', 10),
(16, '2019_04_18_172011_create_en_destinations_table', 11),
(17, '2019_04_18_172100_create_en_flight_offers_table', 12),
(18, '2019_04_18_172351_create_en_main_slider_infos_table', 13),
(19, '2019_04_18_174619_create_en_photos_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `one_way_trips`
--

CREATE TABLE `one_way_trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `babies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `one_way_trips`
--

INSERT INTO `one_way_trips` (`id`, `from`, `to`, `date`, `class`, `adults`, `kids`, `babies`, `created_at`, `updated_at`) VALUES
(1, 'fkj', 'lkj', '01 يناير 2018', 'السياحيه', '7', '7', '7', '2019-04-07 20:28:41', '2019-04-07 20:28:41'),
(2, 'lsk;n', 'kljnf', '01 يناير 2018', 'السياحيه', '22', '3', '3', '2019-04-07 20:29:13', '2019-04-07 20:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `url`, `place`, `hint`, `language`, `created_at`, `updated_at`) VALUES
(16, '1555789273.jpg', 'اختبار احتبار', 'نصنع فرقا في رحلتك ... احجز معنا', 'ar', '2019-04-20 17:41:13', '2019-04-20 17:41:13'),
(17, '1555789288.jpg', 'اختبار احتبار', 'نصنع فرقا في رحلتك ... احجز معنا', 'ar', '2019-04-20 17:41:28', '2019-04-20 17:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `round_trips`
--

CREATE TABLE `round_trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `babies` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `round_trips`
--

INSERT INTO `round_trips` (`id`, `from`, `to`, `date`, `class`, `adults`, `kids`, `babies`, `created_at`, `updated_at`, `user_mail`, `phone`) VALUES
(1, 'kldjs', 'kdjs', '01/01/2018 - 01/15/2018', 'tourism', '3', '4', '4', '2019-04-07 20:09:19', '2019-04-07 20:09:19', '', ''),
(2, 'kaj', ';lkns', '01/01/2018 - 01/15/2018', 'tourism', '7', '7', '7', '2019-04-07 20:11:29', '2019-04-07 20:11:29', '', ''),
(3, 'kjsd', 'kljs', '01/01/2018 - 01/15/2018', 'tourism', '1', '1', '1', '2019-04-07 20:13:46', '2019-04-07 20:13:46', '', ''),
(4, 'ksjn', 'LKBC', '01/01/2018 - 01/15/2018', 'tourism', '1', '1', '1', '2019-04-07 21:01:06', '2019-04-07 21:01:06', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_destinations`
--
ALTER TABLE `en_destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_flight_offers`
--
ALTER TABLE `en_flight_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_main_slider_infos`
--
ALTER TABLE `en_main_slider_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_photos`
--
ALTER TABLE `en_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_offers`
--
ALTER TABLE `flight_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_infos`
--
ALTER TABLE `main_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_slider_infos`
--
ALTER TABLE `main_slider_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `one_way_trips`
--
ALTER TABLE `one_way_trips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `round_trips`
--
ALTER TABLE `round_trips`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `en_destinations`
--
ALTER TABLE `en_destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `en_flight_offers`
--
ALTER TABLE `en_flight_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `en_main_slider_infos`
--
ALTER TABLE `en_main_slider_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en_photos`
--
ALTER TABLE `en_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `flight_offers`
--
ALTER TABLE `flight_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_infos`
--
ALTER TABLE `main_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_slider_infos`
--
ALTER TABLE `main_slider_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `one_way_trips`
--
ALTER TABLE `one_way_trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `round_trips`
--
ALTER TABLE `round_trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
