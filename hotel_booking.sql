-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 04:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `adults` int(11) NOT NULL,
  `kids` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `booking_date` date NOT NULL,
  `additionalNeed` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalAmount` double NOT NULL,
  `additionalAmount` double DEFAULT NULL,
  `payableAmount` double NOT NULL,
  `stutas` enum('Pending','Accept','Release') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `room_id`, `adults`, `kids`, `check_in`, `check_out`, `booking_date`, `additionalNeed`, `totalAmount`, `additionalAmount`, `payableAmount`, `stutas`, `created_at`, `updated_at`) VALUES
(35, 1, 21, 1, 2, '2023-01-15', '2023-01-17', '2023-01-17', NULL, 800, 0, 800, 'Accept', '2022-11-29 13:08:31', '2023-01-17 09:52:29'),
(36, 1, 22, 2, 1, '2023-01-14', '2023-01-17', '2023-01-17', '{\"room_service\":\"1\",\"telephone_service\":\"1\",\"laundry_service\":\"1\"}', 20427, 3472, 23899, 'Accept', '2023-01-17 09:51:09', '2023-01-17 09:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `cadholder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` bigint(11) NOT NULL,
  `expire_month` int(11) NOT NULL,
  `expire_Year` int(11) NOT NULL,
  `cv_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `customer_id`, `cadholder_name`, `card_number`, `expire_month`, `expire_Year`, `cv_code`, `created_at`, `updated_at`) VALUES
(21, 1, 'name', 1234567812345678, 5, 2022, 765, '2023-01-17 09:53:29', '2023-01-17 09:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stutas` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `c_name`, `address`, `birth`, `phone`, `national`, `nic`, `gender`, `stutas`, `email`, `pass`, `created_at`, `updated_at`) VALUES
(1, 'Customer Customer', 'vavuniya', '2022-08-30', '+940773852546', 'Srilanka', '6788414841v', 'Male', 'Single', 'customer@gmail.com', '$2y$10$iNcp7FZJ4dxMTbxMVf1Tuuhcu5dIIGC0cVjSEc0kJlwsCEMkoFu.a', '2022-09-21 05:29:42', '2022-10-01 17:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_13_215227_create_roles_table', 1),
(8, '2022_08_18_150409_create_permissions_table', 2),
(9, '2022_09_20_140331_create_rooms_table', 2),
(10, '2022_09_21_091050_create_customers_table', 3),
(11, '2022_09_21_115848_create_bookings_table', 4),
(14, '2022_09_21_155635_create_payments_table', 5),
(15, '2022_09_26_154056_create_cards_table', 5);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `paymentType` enum('cashPayment','cardPayment') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cashPayment',
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `paymentType`, `amount`, `created_at`, `updated_at`) VALUES
(58, 35, 'cashPayment', 400, '2023-01-17 09:52:29', '2023-01-17 09:52:29'),
(59, 36, 'cardPayment', 10427, '2023-01-17 09:53:29', '2023-01-17 09:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(4, 1, '{\"room\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"},\"role\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"},\"permission\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"},\"user\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"},\"booking\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"},\"payment\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"},\"customer\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\",\"Delete\":\"1\",\"List\":\"1\"}}', '2022-09-21 15:07:58', '2022-09-21 15:07:58'),
(6, 2, '{\"room\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\"},\"booking\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\"},\"payment\":{\"Add\":\"1\",\"View\":\"1\"},\"customer\":{\"Add\":\"1\",\"Edit\":\"1\",\"View\":\"1\"}}', '2022-11-13 10:02:02', '2023-01-17 10:11:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administration of hotel Reservation he can access All', '2022-08-22 10:17:09', '2022-09-26 05:51:19'),
(2, 'User', 'User Limited Access', '2022-09-18 01:08:08', '2022-09-26 05:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roomView` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roomNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roomType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floorNo` int(11) NOT NULL,
  `adult_price` double NOT NULL,
  `kid_price` double NOT NULL,
  `amenities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomView`, `roomNo`, `roomType`, `floorNo`, `adult_price`, `kid_price`, `amenities`, `created_at`, `updated_at`) VALUES
(18, 'bHXUPgXXXwj84NA2afST9iUHLbLrf2d7KzrUY5qq.jpg', '103', 'superior', 6, 502, 106, '[\"Free Wifi\",\"Free parking\",\"Free Breakfast\",\"Outdoor dining area\",\"Private bathroom\"]', '2022-09-21 03:33:29', '2022-09-29 01:52:57'),
(21, 'PtZWi9YT6tPnfU9vFgMbKnNWCE3hTV4jmOFADF6L.jpg', 'PR-11', 'superior', 6, 200, 100, '[\"Air conditioning\",\"Free Wifi\",\"Free parking\",\"Free Breakfast\",\"Outdoor dining area\",\"Pool View\",\"Private bathroom\"]', '2022-09-22 00:14:17', '2022-09-29 01:53:12'),
(22, 'piFuxEVNVe2YlWfe6swWNbv6mIWcPfGxsvNjfmxr.jpg', 'PR-10', 'superior', 6, 567, 5675, '[\"Air conditioning\",\"Free Wifi\",\"Free parking\",\"Free Breakfast\",\"Outdoor dining area\",\"Panoramic views of ocean\",\"Pool View\",\"Cable Channels\",\"Flatscreen TV\",\"Private bathroom\",\"Bath or Shower\",\"Towels\",\"Clothes rack\",\"Key card access\"]', '2022-09-22 00:15:28', '2022-09-29 01:53:26'),
(23, 'osaWQdM01e1747ng786eKFGFAYPWjzyri5vwWRsQ.jpg', 'Queen-101', 'single', 1, 500, 200, '[\"Air conditioning\",\"Free Wifi\",\"Free parking\",\"Free Breakfast\",\"Outdoor dining area\"]', '2022-09-29 09:07:13', '2022-09-29 09:07:13'),
(24, 'wXn8CL0XeLvcTso9pD1QNvpJpSpuq6UEm3Hq7X0S.jpg', 'King-101', 'double', 2, 500, 300, '[\"Air conditioning\",\"Free Wifi\",\"Free parking\",\"Free Breakfast\",\"Panoramic views of ocean\"]', '2022-09-29 09:08:00', '2022-09-29 09:08:00');

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
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `mobile_number`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kanesh kalaivathanan', 'Admin@gmail.com', NULL, '$2y$10$FWmaJD4XbA05s4XljA514.gswstJKznTYvmxovzCuDFOX/D233kwS', 'Vavuniya,', '0771234567', 1, '1wvBh9r40ACCZH9fneUbZmAF3UFSLAwl8z7FBzaQqBX86SetYKUcqPgDqNYW', NULL, '2023-01-15 05:09:36'),
(4, 'Kanesh Kalaivathanan', 'User@gmail.com', NULL, '$2y$10$X5gyg9Qjd3C0NFgIOzbd7e.MmqCad7nNGBTWBxZOPzXc/vmOcN0oG', 'Vavuniya,', '0771234567', 2, NULL, '2022-09-19 02:29:47', '2023-01-15 05:09:18'),
(6, 'test test1', 'test@test.com', NULL, '$2y$10$DMghVh9K8Ir2e.WoGkBOk.NXc3hQ.L7/7efjkxCXhCG8YVg6KHjYW', 'vavuniya', '0000000000', 2, NULL, '2022-09-21 23:53:07', '2022-11-13 09:59:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_customer_id_foreign` (`customer_id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_nic_unique` (`nic`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_booking_id_foreign` (`booking_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_booking_id_foreign` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
