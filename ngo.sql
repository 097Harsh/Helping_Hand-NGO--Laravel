-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 02:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'Bapunagar', 4, '2024-06-22 07:03:31', '2024-06-22 07:03:31'),
(2, 'Nikol', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Naroda', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Food-Donation', '2024-06-26 02:02:28', '2024-06-26 06:41:53'),
(3, 'Money-Donation', '2024-06-26 02:30:06', '2024-06-26 02:30:06'),
(4, 'Clothe_Donation', '2024-07-04 07:33:51', '2024-07-04 07:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `created_at`, `updated_at`) VALUES
(4, 'Ahmedabad', 1, '2024-06-22 07:02:43', '2024-06-22 07:02:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `inqurt_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`inqurt_id`, `name`, `email`, `contact`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', 988563214, 'Testing....', '2024-06-29 00:15:10', '2024-06-29 00:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `D_id` bigint(20) UNSIGNED NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `address` text NOT NULL,
  `donation_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `From_time` time NOT NULL,
  `To_Time` time NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_person` bigint(20) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`D_id`, `Title`, `Description`, `address`, `donation_date`, `status`, `From_time`, `To_Time`, `contact_name`, `contact_person`, `city_id`, `area_id`, `user_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Birthday celebration- Testing', 'Testing', 'Gujarat Housing Board,bapuanagar,testing', '2024-07-26', 'Delivered', '12:00:00', '02:00:00', 'Het Shah', 8756941203, 4, 1, 1, 1, '2024-06-29 07:50:41', '2024-07-26 10:56:36'),
(2, 'Ganesh Chaturthi Pooja', 'i want donate some food', 'bapuanagar', '2024-09-07', 'Delivered', '12:01:00', '02:01:00', 'Harsh Shah', 8980368007, 4, 1, 1, 1, '2024-07-25 07:33:17', '2024-07-26 11:00:49'),
(3, 'janmashtami  celebration', 'janmashtami  celebration', 'Hirawadi, R.b.institute of managmement', '2024-08-26', 'Delivered', '12:13:00', '14:13:00', 'Harsh', 8596741230, 4, 1, 1, 1, '2024-08-07 06:13:29', '2024-08-19 08:08:31'),
(4, 'Birthday-celebration', 'Birthday-celebration.....', 'Naroda', '2024-10-01', 'Delivered', '12:30:00', '13:30:00', 'Harsh Prajapati', 9712658293, 4, 1, 1, 1, '2024-09-22 00:30:17', '2024-11-04 07:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` bigint(20) UNSIGNED NOT NULL,
  `rating` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `rating`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Testing....', 1, '2024-06-29 00:49:40', '2024-06-29 00:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000001_create_cache_table', 1),
(10, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_06_19_105607_create__state_table', 1),
(12, '2024_06_22_041843_create_city_table', 1),
(13, '2024_06_22_041851_create_area_table', 1),
(14, '2024_06_22_041929_create_role_table', 1),
(15, '0001_01_01_000000_create_users_table', 2),
(16, '2024_06_26_072800_create_category__table', 3),
(17, '2024_06_29_053440_create__contact_table', 4),
(18, '2024_06_29_061010_create_feedback_table', 5),
(19, '2024_06_29_125824_create__donation_table', 6),
(20, '2024_07_05_122452_create_money_donation_table', 7),
(21, '2024_07_06_162330_create_volunteer_acceptance_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `money_donation`
--

CREATE TABLE `money_donation` (
  `m_id` bigint(20) UNSIGNED NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `amt` bigint(20) NOT NULL,
  `msg` text NOT NULL,
  `d_date` date NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `money_donation`
--

INSERT INTO `money_donation` (`m_id`, `d_name`, `amt`, `msg`, `d_date`, `payment_status`, `user_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 1000, 'Testing...', '2024-07-05', 'Completed', 1, 3, '2024-07-05 07:07:50', '2024-07-05 07:07:50'),
(2, 'Harsh Shah', 1000, 'demo', '2024-09-14', 'Completed', 1, 3, '2024-09-14 09:26:26', '2024-09-14 09:26:26'),
(3, 'HP', 1000, 'Demo testing....', '2024-09-22', 'Completed', 1, 3, '2024-09-22 00:30:36', '2024-09-22 00:30:36'),
(4, 'testing', 100, 'testing', '2024-11-04', 'Completed', 1, 3, '2024-11-04 07:54:09', '2024-11-04 07:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'User', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Volunteer', '2024-06-22 07:04:41', '2024-06-22 07:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OKqWC92Zc49e9HOJO7qXZNPqlqiYlfCK3Nrr4Kyu', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSnNvb0FHc1FmTW83dWt1NFJHZUUyRkdzZjc0QVA1d0J0d3E2UmZ3SiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo3OiJ1c2VyX2lkIjtpOjE7fQ==', 1730726705);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'Gujarat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `contact`, `email_verified_at`, `password`, `address`, `DOB`, `gender`, `image`, `city_id`, `area_id`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harsh Shah', 'harshshah6966@gmail.com', 9712658293, '2024-06-22 01:51:08', '$2y$12$NRpCuXm1gZE1tirTEnE0Ous/CoDvL/1NT4mMzMeuK7fW1ekXa/mS6', 'bapunagar', '2003-07-02', 'Male', 'CodeByHarsh.png', 4, 1, 2, NULL, '2024-06-22 01:51:09', '2024-06-22 01:51:09'),
(2, 'Harsh Prajapati', 'hvprajapati@gmail.com', 9685230147, '2024-06-22 01:54:07', '$2y$12$gzOh8qnWnnb4rRRc5g3Lp.GiX/FpeZcQGIli5j5YZN7hIbGrHfQFO', 'nikol', '2024-06-21', 'Male', 'CodeByHarsh.png', 4, 3, 3, NULL, '2024-06-22 01:54:07', '2024-06-22 01:54:07'),
(3, 'Het Shah', 'het@gmail.com', 8752416309, '2024-06-22 01:56:12', '$2y$12$zYLO5b52IUeWTPvvai3LM.6MORDKkNGfM2s.8laujgCGPJyxrFMD2', 'nikol', '2024-06-20', 'Male', 'CodeByHarsh.png', 4, 1, 2, NULL, '2024-06-22 01:56:12', '2024-06-22 01:56:12'),
(4, 'Diya', 'diya@gmail.com', 5263897410, '2024-06-22 01:58:44', '$2y$12$UYbuH86a1g5zR0hoHOxhBO48o5JKD5EsgN6dxhE5Vg.WhmZsVaGNG', 'vv', '2024-04-02', 'Female', 'CodeByHarsh.png', 4, 1, 2, NULL, '2024-06-22 01:58:44', '2024-06-22 01:58:44'),
(5, 'Smit Panchal', 'smit@gmail.com', 9874563210, '2024-06-22 02:01:42', '$2y$12$74RqkVIdVzvaEwi24gQ7BOlHD4APXaEto3yoNzEgXTHSax3FfCKhe', 'bapunagar', '2024-06-15', 'Male', '1719041502.png', 4, 1, 3, NULL, '2024-06-22 02:01:43', '2024-06-22 02:01:43'),
(6, 'Raj Vora', 'raj@gmail.com', 8475963201, '2024-06-22 23:09:26', '$2y$12$mxxHOcHDY/1zTTs57dv/9u4iFPIHpQuzLuPEn13KWAVKhSh90Gmmu', 'bapunagar', '2024-06-11', 'Male', '1719117566.png', 4, 1, 3, NULL, '2024-06-22 23:09:27', '2024-06-22 23:09:27'),
(7, 'Admin', 'admin@gmail.com', 9712658293, '2024-06-23 06:17:08', '$2y$12$6qBFzzsz.BN9zocnrtTRF.5ObVsVlbehpcyqyZz7D6fD0ruRGoUNe', 'bapunagar', '2024-06-23', 'Male', 'CodeByHarsh.png', 4, 1, 1, '', '2024-06-23 06:17:08', '2024-06-23 06:17:08'),
(8, 'Dhruv Malhotra', 'dhruv@gmail.com', 8574120369, '2024-06-27 05:57:45', '$2y$12$6y4q8bW7w7uIkzIGQq87nOjpdGMCEFawVKoWglv/sJqffUzPWZ57K', 'Bapunagar', '2024-06-05', 'Male', '1719487665.png', 4, 2, 3, NULL, '2024-06-27 05:57:45', '2024-06-27 05:57:45'),
(9, 'Virat Kohli', 'chiku@gmail.com', 9874125630, '2024-06-27 06:36:19', '$2y$12$tk9Cpf16.WLaumV97ZFkneBEbUqxN95UHtRc1ldGEugT.8O5OCtMy', 'Nikol', '2024-06-18', 'Male', '1719489979.jpeg', 4, 1, 3, NULL, '2024-06-27 06:36:19', '2024-06-27 06:36:19'),
(10, 'Rajveer Vaghela', 'rajveer@gmail.com', 8596741203, '2024-06-27 06:38:21', '$2y$12$wAHKNHRspOwI7AWeT/WT5eH8Rwaaj7WkflEn82CNqO2zMzcsNAFUq', 'odhav,bapuanagar', '2024-06-14', 'Male', '1719490101.png', 4, 1, 3, NULL, '2024-06-27 06:38:21', '2024-06-27 06:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_acceptance`
--

CREATE TABLE `volunteer_acceptance` (
  `v_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `D_id` bigint(20) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `received_datetime` datetime DEFAULT NULL,
  `delivery_datetime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteer_acceptance`
--

INSERT INTO `volunteer_acceptance` (`v_id`, `user_id`, `D_id`, `datetime`, `status`, `received_datetime`, `delivery_datetime`, `created_at`, `updated_at`) VALUES
(1, 9, 1, '2024-07-26 13:34:03', 'Delivered', '2024-07-26 16:26:36', '2024-07-26 16:26:36', '2024-07-26 08:04:03', '2024-07-26 10:56:36'),
(2, 9, 2, '2024-07-26 13:37:54', 'Delivered', '2024-07-26 16:30:29', '2024-07-26 16:30:49', '2024-07-26 08:07:54', '2024-07-26 11:00:49'),
(3, 9, 3, '2024-08-19 13:37:49', 'Delivered', '2024-08-19 13:38:22', '2024-08-19 13:38:31', '2024-08-19 08:07:49', '2024-08-19 08:08:31'),
(4, 9, 4, '2024-11-04 13:22:48', 'Delivered', '2024-11-04 13:22:54', '2024-11-04 13:23:00', '2024-11-04 07:52:48', '2024-11-04 07:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `area_city_id_foreign` (`city_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_state_id_foreign` (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`inqurt_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`D_id`),
  ADD KEY `donation_city_id_foreign` (`city_id`),
  ADD KEY `donation_area_id_foreign` (`area_id`),
  ADD KEY `donation_user_id_foreign` (`user_id`),
  ADD KEY `donation_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_donation`
--
ALTER TABLE `money_donation`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `money_donation_user_id_foreign` (`user_id`),
  ADD KEY `money_donation_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_area_id_foreign` (`area_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `volunteer_acceptance`
--
ALTER TABLE `volunteer_acceptance`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `volunteer_acceptance_user_id_foreign` (`user_id`),
  ADD KEY `volunteer_acceptance_d_id_foreign` (`D_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `inqurt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `D_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `money_donation`
--
ALTER TABLE `money_donation`
  MODIFY `m_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `volunteer_acceptance`
--
ALTER TABLE `volunteer_acceptance`
  MODIFY `v_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE;

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `donation_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `donation_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `donation_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `money_donation`
--
ALTER TABLE `money_donation`
  ADD CONSTRAINT `money_donation_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `money_donation_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE;

--
-- Constraints for table `volunteer_acceptance`
--
ALTER TABLE `volunteer_acceptance`
  ADD CONSTRAINT `volunteer_acceptance_d_id_foreign` FOREIGN KEY (`D_id`) REFERENCES `donation` (`D_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `volunteer_acceptance_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
