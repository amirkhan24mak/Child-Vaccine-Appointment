-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_apporment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Aamir Khan', 'aamirkhan24a', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Hid` bigint(20) UNSIGNED NOT NULL,
  `Pid` bigint(20) UNSIGNED NOT NULL,
  `Sid` bigint(20) UNSIGNED NOT NULL,
  `Report` tinyint(4) NOT NULL DEFAULT 0,
  `appstatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Id`, `Hid`, `Pid`, `Sid`, `Report`, `appstatus`) VALUES
(1, 5, 3, 1, 2, 1),
(4, 4, 5, 3, 2, 1),
(5, 6, 7, 4, 2, 1),
(6, 4, 9, 2, 2, 1);

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `Hid` bigint(20) UNSIGNED NOT NULL,
  `Hname` varchar(30) NOT NULL,
  `Himg` varchar(255) NOT NULL,
  `Haddress` varchar(80) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Role` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`Hid`, `Hname`, `Himg`, `Haddress`, `Status`, `email`, `password`, `Role`, `created_at`, `updated_at`) VALUES
(4, 'PNS Shifa Hospital', 'hR9aNdmE_logo.jpg', 'R3P2+Q37, Main Korangi Rd، near Kala Pul, Clifton, Karachi, Karachi City, Sindh', 1, 'shifahospital@gmail.com', '12345', NULL, '2023-03-04 01:40:27', '2023-03-04 01:40:27'),
(5, 'Indus Hospital', 'pNL7lbhH_indushosp.jpg', 'Plot C-76, Sector 31/5, Opposite Darussalam Society Korangi Crossing, Karachi', 1, 'indushospital@gmail.com', '12345', NULL, '2023-03-04 01:48:28', '2023-03-04 01:48:28'),
(6, 'HOPE Children Hospital', 'HpRfv_hope_logo.png', 'Soldier Bazaar Catholic Colony, Karachi, Karachi City, Sindh, Pakistan Sindh.', 1, 'agboat@hope-ngo.com', '12345', 0, '2023-03-24 05:57:46', '2023-03-26 13:11:32'),
(7, 'Agah Khan', '4ZPmo5gV_hope_logo.png', 'sadar', 0, 'aghakha@gmail.com', '858585', 0, '2023-03-27 00:42:39', '2023-03-27 00:42:39');

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
(67, '2014_10_12_000000_create_users_table', 1),
(68, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(69, '2019_08_19_000000_create_failed_jobs_table', 1),
(70, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(71, '2023_02_27_044951_create_patients_table', 1),
(72, '2023_02_27_053425_create_hospitals_table', 1),
(73, '2023_02_27_094325_create_schedule_times_table', 1),
(74, '2023_02_27_094942_create_appointments_table', 1),
(75, '2023_03_04_093729_create_admins_table', 2),
(76, '2023_03_04_094814_create_admin_table', 3),
(77, '2023_03_04_113634_create_webcontacts_table', 4);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Pid` bigint(20) UNSIGNED NOT NULL,
  `Pname` varchar(30) NOT NULL,
  `Pphone` int(15) NOT NULL,
  `Pimag` varchar(255) NOT NULL,
  `Paddress` varchar(80) NOT NULL,
  `Pgender` varchar(10) NOT NULL,
  `Page` varchar(10) NOT NULL,
  `Pemail` varchar(30) NOT NULL,
  `Ppassword` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Pid`, `Pname`, `Pphone`, `Pimag`, `Paddress`, `Pgender`, `Page`, `Pemail`, `Ppassword`, `created_at`, `updated_at`) VALUES
(3, 'Ubaid', 315623144, 'Jd7is5zC_file.jpg', 'korangi no 4', 'Boy', '10 Year', 'ubaid@gmail.com', '12345', '2023-03-04 02:21:44', '2023-03-04 02:21:44'),
(5, 'Daniyal', 31222247, 'YlQD0u82_14040212_195097980906227_6301658997969425641_n.jpg', 'Korangi no 6', 'Boy', '12 Year', 'daniyal@gmail.com', '12345678', '2023-03-18 00:13:21', '2023-03-18 00:13:21'),
(7, 'Hassan Rasheed', 312456784, 'v9f8H5Vv_hassa.jpg', 'Korangi Insdusraial Area sector32/A', 'Boy', '12 Year', 'hassan@gmail.com', '123321', '2023-03-26 21:07:49', '2023-03-26 21:07:49'),
(8, 'joel', 913156835, 'AvzKiijS_107960530_136548568086192_453894635328158195_n.jpg', 'KOrangi no3', 'Boy', '6 Year', 'joel@gmail.com', '12348', '2023-03-27 00:30:38', '2023-03-27 00:30:38'),
(9, 'Nabeel', 313515156, 'Z0FN7oYm_107960530_136548568086192_453894635328158195_n.jpg', 'korangi mai karkwt', 'Boy', '7 Year', 'joelbaitti@gmail.com', '1233214', '2023-03-27 00:32:55', '2023-03-27 00:32:55');

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
-- Table structure for table `schedule_times`
--

CREATE TABLE `schedule_times` (
  `Sid` bigint(20) UNSIGNED NOT NULL,
  `Day` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_times`
--

INSERT INTO `schedule_times` (`Sid`, `Day`, `created_at`, `updated_at`) VALUES
(1, 'Monday', '2023-03-02 23:50:42', '2023-03-02 23:50:42'),
(2, 'Tuesday', '2023-03-11 00:22:18', '2023-03-11 00:22:18'),
(3, 'Wednesday', '2023-03-11 00:22:34', '2023-03-11 00:22:34'),
(4, 'Thursday', '2023-03-11 00:22:46', '2023-03-11 00:22:46'),
(5, 'Friday', '2023-03-11 00:22:59', '2023-03-11 00:22:59'),
(6, 'Saturday', '2023-03-11 00:23:56', '2023-03-11 00:23:56');

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

-- --------------------------------------------------------

--
-- Table structure for table `webcontacts`
--

CREATE TABLE `webcontacts` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `massage` varchar(130) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `webcontacts`
--

INSERT INTO `webcontacts` (`Id`, `Name`, `Email`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Nabeel', 'NabeelAhmed@gmail.com', 'I would just like to say a big, big thank you to you all. You guys are the true', '2023-03-15 02:40:24', '2023-03-15 02:40:24'),
(2, 'Anees Raza', 'aneesraza@gmail.com', 'Please You Can sent me Best Hospital Appointment', '2023-03-26 12:08:28', '2023-03-26 12:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `appointments_hid_foreign` (`Hid`),
  ADD KEY `appointments_pid_foreign` (`Pid`),
  ADD KEY `appointments_sid_foreign` (`Sid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`Hid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Pid`),
  ADD UNIQUE KEY `Pemail` (`Pemail`),
  ADD UNIQUE KEY `Ppassword` (`Ppassword`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedule_times`
--
ALTER TABLE `schedule_times`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webcontacts`
--
ALTER TABLE `webcontacts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `Hid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Pid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_times`
--
ALTER TABLE `schedule_times`
  MODIFY `Sid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `webcontacts`
--
ALTER TABLE `webcontacts`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_hid_foreign` FOREIGN KEY (`Hid`) REFERENCES `hospitals` (`Hid`),
  ADD CONSTRAINT `appointments_pid_foreign` FOREIGN KEY (`Pid`) REFERENCES `patients` (`Pid`),
  ADD CONSTRAINT `appointments_sid_foreign` FOREIGN KEY (`Sid`) REFERENCES `schedule_times` (`Sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
