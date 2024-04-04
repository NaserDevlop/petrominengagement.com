-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2024 at 10:07 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u991329282_petromin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `email`, `password`, `created_at`, `updated_at`) VALUES
('Naser', 'aa@aa', '11221122', '0000-00-00', '0000-00-00'),
('Naser', 'aa@aa', '11221122', '0000-00-00', '0000-00-00'),
('Nano', 'n@n', '$2y$10$OBkoDXIuwYldl9wXCdM7a.MXDA5adoDxGTGLXiItNvFH7DOcOmb2G', '2023-08-13', '2023-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial-no` bigint(30) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start-date` date NOT NULL,
  `end-date` date NOT NULL DEFAULT current_timestamp(),
  `info` text NOT NULL,
  `note` text NOT NULL,
  `has_email` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `serial-no`, `month`, `day`, `title`, `start-date`, `end-date`, `info`, `note`, `has_email`, `created_at`, `updated_at`) VALUES
(44, 79674177305585900, 9, 23, 'Saudi National Day', '2023-09-23', '2023-09-23', '23 September', 'Monday', 1, '2023-09-04 20:11:46', '2023-12-31 14:32:08'),
(45, 6502088732536815, 9, 23, 'Saudi National Day Public Holiday', '2024-09-23', '2024-09-23', '23 September', 'Monday', 1, '2023-09-04 20:13:04', '2023-12-31 14:32:19'),
(46, 92396200079503420, 9, 24, 'Saudi National Day Celebration', '2024-09-24', '2024-09-24', '24 September', 'Tuesday', 1, '2023-09-04 20:14:03', '2023-12-31 14:32:35'),
(48, 9525600894626974, 10, 10, 'World Mental Health Day', '2024-10-10', '2024-10-10', '10 October', 'Thursday', 1, '2023-09-04 20:16:03', '2023-12-31 13:00:59'),
(49, 70705069111408080, 10, 1, '1-15 Oct: Quarterly Townhalls – By Business Vertical', '2024-10-01', '2024-10-15', '1-15 Oct: Quarterly Townhall – By Business Vertical', 'No Note', 1, '2023-09-04 20:17:21', '2024-01-08 13:56:03'),
(50, 11079583103436774, 11, 1, 'Men’s Health Awareness Month', '2024-11-01', '2024-11-30', 'November', 'No Note', 1, '2023-09-04 20:18:31', '2023-12-31 14:16:21'),
(51, 21256565737611588, 11, 14, 'World Diabetes Day', '2024-11-14', '2024-11-14', '14 November', 'Thursday', 1, '2023-09-04 20:19:02', '2023-12-31 13:04:25'),
(52, 90720995686577170, 11, 19, 'International Men’s Day', '2024-11-19', '2024-11-19', '19 November', 'Tuesday', 1, '2023-09-04 20:19:41', '2023-12-31 13:05:57'),
(53, 37820255226048104, 11, 1, '1 Nov-10 Dec: *Year-End Offsite Meeting', '2024-11-01', '2024-12-10', '1 Nov-10 Dec: *Year-End', 'No Note', 1, '2023-09-04 20:21:55', '2024-01-01 08:04:06'),
(55, 30172065434623028, 8, 1, '1 Aug-15 Sept: *Career Planning 2- 5:30 PM', '2023-08-01', '2023-09-15', 'No info', 'No Note', 1, '2023-09-04 20:29:20', '2024-01-17 08:41:29'),
(56, 73836420358331760, 8, 31, 'Kids @ Work Day', '2023-08-31', '2023-08-31', 'No info', 'No Note', 1, '2023-09-04 20:30:41', '2023-12-31 14:30:45'),
(57, 25533360799518244, 7, 2, '2-13 Jul: Quarterly Townhalls – By Business Vertical', '2024-07-02', '2024-07-13', '2-13 Jul: Quarterly Townhall – By Business Vertical', 'No Note', 1, '2023-09-04 20:32:11', '2024-01-08 13:57:42'),
(58, 94980145034921140, 7, 31, 'Code Of Conduct Training', '2024-07-31', '2024-07-31', 'No info', 'No Note', 1, '2023-09-04 20:32:52', '2023-12-31 13:10:16'),
(59, 7869195469746737, 6, 1, '1–30 Jun: *Mid-Year Performance Reviews', '2024-06-01', '2024-06-01', '1–30 Jun: *Mid-Year Reviews', 'No Note', 1, '2023-09-04 20:34:40', '2023-12-31 15:03:16'),
(60, 64965037420709600, 6, 5, 'World Environment  Day', '2024-06-05', '2024-06-05', '5 June', 'Wednesday', 1, '2023-09-04 20:35:27', '2023-12-31 13:11:51'),
(62, 21276715863837504, 6, 16, '16–22 Jun: Eid Al Adha Holiday (Resuming work on: 23 June)', '2024-06-16', '2024-06-22', '16– 20 Jun: Eid Al Adha Holiday', 'To be confirmed ONE month in advance', 1, '2023-09-04 20:36:50', '2024-01-09 10:51:08'),
(63, 74213992648447330, 1, 1, '1 Jan-28 Feb: New Year &  *Performance & Development Planning', '2024-01-01', '2024-02-28', 'No info', 'No Note', 1, '2023-09-04 20:39:17', '2023-12-31 13:15:29'),
(64, 883062638426768, 1, 1, '1-31 Jan: Quarterly Townhalls – By Business Vertical', '2024-01-01', '2024-01-31', '1-31 Jan: Quarterly Townhall – By Business Vertical', 'No Note', 1, '2023-09-04 20:40:22', '2024-01-08 13:56:44'),
(65, 72426708294171440, 1, 17, 'International Mentoring Day', '2024-01-17', '2024-01-17', '17 January', 'Wednesday', 1, '2023-09-04 20:42:11', '2023-12-31 13:17:11'),
(66, 57702997223632920, 1, 31, '*Year End Planning', '2024-01-31', '2024-01-31', '31 January', 'Wednesday', 1, '2023-09-04 20:42:43', '2024-01-07 06:45:14'),
(67, 93071994405990160, 2, 4, 'World Cancer Day', '2024-02-04', '2024-02-04', '4 February', 'Sunday', 1, '2023-09-04 20:44:14', '2023-12-31 13:19:05'),
(68, 49869100022505780, 2, 4, '4-29 Feb: *Goal Setting Workshops -  for Managers | Individual Contributors', '2024-02-04', '2024-02-29', 'No info', 'No Note', 1, '2023-09-04 20:44:41', '2024-01-08 13:35:48'),
(69, 21757759095729724, 2, 22, 'Saudi Founding Day Celebration', '2024-02-22', '2024-02-22', '21 February', 'Wednesday', 1, '2023-09-04 20:45:15', '2023-12-31 13:24:02'),
(70, 33251622023203932, 2, 22, 'Saudi Founding Day Public Holiday', '2024-02-22', '2024-02-22', '22 February', 'Thursday', 1, '2023-09-04 20:45:49', '2023-12-31 14:29:02'),
(71, 89284372081451410, 3, 1, '1 - 31 Mar: Women’s History Month', '2024-03-01', '2024-03-31', '1 - 31 Mar: Women’s History Month', 'No Note', 1, '2023-09-04 20:46:40', '2024-01-01 07:10:31'),
(73, 50597515472256680, 3, 7, 'International Women’s Day Event', '2024-03-07', '2024-03-07', '7 Mar', 'Thursday', 1, '2023-09-04 20:47:45', '2024-01-22 07:30:32'),
(74, 76825541749343940, 3, 11, '*Commencement of Holy Month of Ramadan', '2024-03-11', '2024-03-11', '11 March', 'Monday', 1, '2023-09-04 20:48:19', '2023-12-31 13:27:15'),
(75, 99975190332119680, 3, 17, '17- 21 Mar: Corporate Ramadan Iftar Event - 19th Mar. (Jeddah - Venue TBC) Business Verticals are kindly requested to host Iftar Event on a different date', '2024-03-17', '2024-03-21', '17-21: Petromin KSA Ramadan Iftar Event (Jeddah / Riyadh / Dammam)', '17 - 21 Mar', 1, '2023-09-04 20:49:25', '2024-01-22 07:40:59'),
(76, 58990971291580350, 4, 2, '2-13 Apr: Quarterly Townhalls – By Business Vertical', '2024-04-02', '2024-04-13', '2-13 Apr: Quarterly Townhall – By Business Vertical', 'No Note', 1, '2023-09-04 20:50:49', '2024-01-08 13:55:10'),
(77, 71472295581084210, 4, 7, '7–13 Apr: Eid Al-Fitr Holiday (Resuming work on: 14 Apr.)', '2024-04-07', '2024-04-13', '7–11 Apr: Eid Al-Fitr Holiday', 'To be confirmed ONE month in advance', 1, '2023-09-04 20:51:20', '2024-01-09 10:49:08'),
(78, 88245652170625000, 4, 22, 'World Earth Day', '2024-04-22', '2024-04-22', 'World Earth Day', 'Monday', 1, '2023-09-04 20:51:56', '2023-12-31 13:31:53'),
(80, 56933719944524810, 5, 1, '1 – 31 May: Mental Health Awareness Month', '2024-05-01', '2024-05-31', '1 – 31 May : Mental Health Awareness Month', 'No Note', 1, '2023-09-04 20:54:31', '2024-01-01 07:06:33'),
(81, 13457558605089526, 5, 1, '1 – 31 May: Diversity and Inclusion Training Month', '2024-05-01', '2024-05-31', '1 – 31 May : Diversity and Inclusion Training Month', 'No Note', 1, '2023-09-04 20:55:01', '2024-01-01 07:02:36'),
(82, 7920196686950720, 5, 21, 'World Day for Cultural Diversity for Dialogue and Development', '2024-05-21', '2024-05-21', '21 May', 'Tuesday', 1, '2023-09-04 20:55:50', '2023-12-31 13:34:22'),
(84, 81332901831851420, 3, 4, '4-5 Mar: Petromin Career Fair Event - Effat University', '2024-03-04', '2024-03-05', 'Petromin Corporation Career Fair Events', 'Effat', 1, '2023-12-31 13:59:10', '2024-01-16 08:57:33'),
(86, 85235037618994530, 2, 27, '27-29 Feb: Petromin Career Fair Event - UBT University', '2024-02-27', '2024-02-29', 'Petromin Corporation Career Fair Event', 'UBT', 1, '2023-12-31 14:02:42', '2024-01-16 08:59:04'),
(87, 4025641124040336, 9, 17, '17-21 Sep: Petromin Career Fair Event - King Abdulaziz University', '2024-09-17', '2024-09-21', 'Petromin Corporation Career Fair Event', 'King Abdulaziz University', 1, '2023-12-31 14:03:53', '2024-01-08 13:57:14'),
(89, 23071953548602340, 10, 1, '1-31 Oct: Breast Cancer Awareness Month', '2024-10-01', '2024-10-31', 'Breast Cancer Awareness Month', 'Breast Cancer Awareness Month', 0, '2024-01-03 06:36:02', '2024-01-03 06:36:02'),
(90, 47107219329801380, 10, 1, 'World Coffee Day', '2024-10-01', '2024-10-01', 'World Coffee Day', 'World Coffee Day', 0, '2024-01-08 12:04:46', '2024-01-08 12:04:46'),
(91, 70272004937939340, 7, 7, 'World Chocolate Day', '2024-07-07', '2024-07-07', 'World Chocolate Day', 'World Chocolate Day', 0, '2024-01-08 12:07:34', '2024-01-08 12:07:34'),
(92, 65612908300581500, 2, 21, 'Saudi Founding Day Celebration Event', '2024-02-21', '2024-02-21', 'Saudi Foundation Day Celebration', 'Saudi Foundation Day Celebration', 1, '2024-01-08 13:33:09', '2024-01-08 13:54:47'),
(93, 7927196898134214, 5, 15, 'Petromin Health & Well-being Event', '2024-05-15', '2024-05-15', 'Health and Well-being event', 'Health and Well-being event', 1, '2024-01-08 13:50:05', '2024-01-08 13:55:28'),
(94, 1080762338049324, 1, 21, '21-22 Jan: Petromin Corporation New-Hire Orientation Program', '2024-01-21', '2024-01-22', '21-22 Jan Petromin Corporation Orientation Program', '21-22 Jan Petromin Corporation Orientation Program', 1, '2024-01-16 08:40:05', '2024-01-16 08:41:40'),
(95, 62598691451107816, 1, 30, '30 Jan: Road to Better Self-Care | Physical Well Being Event (Coach Peter)', '2024-01-30', '2024-01-30', '30 Jan | Physical Well Being Event (With Coach Peter)', '30 Jan | Physical Well Being Event (With Coach Peter)', 1, '2024-01-22 07:06:12', '2024-01-22 07:10:58'),
(96, 83007857656586510, 2, 28, '28-29 Feb: Petromin Corporation New-Hire Orientation Program', '2024-02-28', '2024-02-29', '28-29 Feb: Petromin Corporation New-Hire Orientation Program', '28-29 Feb: Petromin Corporation New-Hire Orientation Program', 1, '2024-01-23 06:30:35', '2024-02-18 10:26:56'),
(97, 87730524452788180, 3, 23, '23 Mar: Social Responsibility Day', '2024-03-23', '2024-03-23', '23 Mar: Social Responsibility Day', '23 Mar: Social Responsibility Day', 0, '2024-01-24 13:35:20', '2024-01-24 13:35:20'),
(98, 47231136103079944, 4, 23, '23 Apr: World Book Day', '2024-04-23', '2024-04-23', '23 Apr: World Book Day', '23 Apr: World Book Day', 0, '2024-01-25 06:42:49', '2024-01-25 06:42:49'),
(99, 41316308091849384, 3, 1, 'Ramadan tips (Invitations will be communicated)', '2024-03-01', '2024-03-31', 'Ramadan tips (Invitations will be communicated)', 'Ramadan tips (Invitations will be communicated)', 0, '2024-02-15 09:19:48', '2024-02-15 09:19:48'),
(100, 3748561986240251, 4, 1, 'Parkinson (Invitations will be communicated)', '2024-04-01', '2024-04-30', 'Parkinson (Invitations will be communicated)', 'Parkinson (Invitations will be communicated)', 0, '2024-02-15 09:23:10', '2024-02-15 09:23:10'),
(101, 77049899787293360, 5, 1, 'Hypertension (Invitations will be communicated)', '2024-05-01', '2024-05-31', 'Hypertension (Invitations will be communicated)', 'Hypertension (Invitations will be communicated)', 0, '2024-02-15 09:24:26', '2024-02-15 09:24:26'),
(102, 73082420577720050, 6, 1, 'Vitiligo day (Invitations will be communicated)', '2024-06-01', '2024-06-30', 'Vitiligo day (Invitations will be communicated)', 'Vitiligo day (Invitations will be communicated)', 0, '2024-02-15 09:34:06', '2024-02-15 09:34:06'),
(103, 24380282023275580, 7, 1, 'Hepatitis (Invitations will be communicated)', '2024-07-01', '2024-07-31', 'Hepatitis (Invitations will be communicated)', 'Hepatitis (Invitations will be communicated)', 0, '2024-02-15 09:41:07', '2024-02-15 09:41:07'),
(104, 62998312684316260, 8, 1, 'Lung Cancer (Invitations will be communicated)', '2024-08-01', '2024-08-31', 'Lung Cancer (Invitations will be communicated)', 'Lung Cancer (Invitations will be communicated)', 0, '2024-02-15 09:42:04', '2024-02-15 09:42:04'),
(105, 30532877147970396, 9, 1, 'Alzheimer (Invitations will be communicated)', '2024-09-01', '2024-09-30', 'Alzheimer (Invitations will be communicated)', 'Alzheimer (Invitations will be communicated)', 0, '2024-02-15 09:42:51', '2024-02-15 09:42:51'),
(106, 94977915384398500, 10, 1, 'Organ donation (Invitations will be communicated)', '2024-10-01', '2024-10-31', 'Organ donation(Invitations will be communicated)', 'Organ donation(Invitations will be communicated)', 0, '2024-02-15 09:43:31', '2024-02-15 09:43:31'),
(107, 98423887012872130, 11, 1, 'Prostate cancer (Invitations will be communicated)', '2024-11-01', '2024-11-30', 'Prostate cancer(Invitations will be communicated)', 'Prostate cancer(Invitations will be communicated)', 0, '2024-02-15 09:44:41', '2024-02-15 09:44:41'),
(108, 36112809058071930, 12, 1, 'World AIDS Day (Invitations will be communicated)', '2024-12-01', '2024-12-31', 'World AIDS Day (Invitations will be communicated)', 'World AIDS Day (Invitations will be communicated)', 0, '2024-02-15 09:45:34', '2024-02-15 09:45:34'),
(109, 13113913541167510, 3, 30, '30th Mar.: Quarterly Townhalls – By Business Vertical', '2024-03-30', '2024-03-30', '30th Mar.: Quarterly Townhalls – By Business Vertical', '30th Mar.: Quarterly Townhalls – By Business Vertical', 0, '2024-03-27 07:39:31', '2024-03-27 07:39:31');

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
(19, '2014_10_12_000000_create_events_table', 1),
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('qq@qq', '$2y$10$BUI8wAruZkw./lxBOC9/kulQVzPbkJziWYP0Z/zsHDrDJzi2pwHRu', '2023-08-09 23:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nasreddin', 'yemroot@gmail.com', NULL, '$2y$10$ynetbcZR64pS5EYuxHJtp.sRnyQPQ5LLXEwRizYEEgpz4tQ41yhTG', NULL, '2023-07-26 13:17:04', '2023-07-26 13:17:04'),
(10, 'Admin', 'kanari.k@petromin.com', NULL, '$2y$10$GPz08GdcHIlETrgtL9nZzO5jcJr3I9kQA2eFUx.x4rCwy2fWS9alW', NULL, '2023-08-22 13:08:48', '2023-08-22 13:08:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
