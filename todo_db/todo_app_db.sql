-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 03:17 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_app_db`
--

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
(3, '2021_02_09_123259_create_todos_table', 2);

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
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `todo_date` date DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `todo_date`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '2021-02-10', 'Valentine celebration', 'val', 'Completed', '2021-02-10 04:55:23', '2021-02-10 10:01:47'),
(2, '2021-02-09', 'Host react app update', 'That\'s it! and now you can access your_function() or your_another_function() in any part of your Laravel project. update', 'Pending', '2021-02-10 05:33:51', '2021-02-10 10:03:15'),
(5, '2021-02-25', 'Abidiran Pelumi, Adebayo Oluwatobi Isaac', 'Operatives of the Lagos Zonal Office of the Economic and Financial Crimes Commission, EFCC, have arrested 14 persons following series of intelligence on their alleged fraudulent activities. They were arrested at 1004 Estate, Victoria Island, Lagos on Thursday, February 4, 2021.\r\n\r\nThe suspects are: Akin Abiola Daramola, Stephen Augustine Terungwa, Oluwateru Abiodun Samson, Jeffrey Imariagbe Ehis, Uwajiala Odion Henry, Solomon Abidiran Pelumi, Adebayo Oluwatobi Isaac Olamide and Odunifa Joseph Opomulero.\r\n\r\nOthers are: Adulkarim Samad Olalekan, Anne Davidson, Ibrahim Enakere Emmanuel, Abayomi Oluwagbenga Olowoake, Israel Jigah Sokoamtu, Oluwaseun Olajuwon Ibrahim and Isaiah Effiong', 'Completed', '2021-02-10 07:48:33', '2021-02-10 10:04:00'),
(7, '2021-02-27', 'Ibrahim Enakere Emmanuel', 'Operatives of the Lagos Zonal Office of the Economic and Financial Crimes Commission, EFCC, have arrested 14 persons following series of intelligence on their alleged fraudulent activities. They were arrested at 1004 Estate, Victoria Island, Lagos on Thursday, February 4, 2021.\r\n\r\nThe suspects are: Akin Abiola Daramola, Stephen Augustine Terungwa, Oluwateru Abiodun Samson, Jeffrey Imariagbe Ehis, Uwajiala Odion Henry, Solomon Abidiran Pelumi, Adebayo Oluwatobi Isaac Olamide and Odunifa Joseph Opomulero.\r\n\r\nOthers are: Adulkarim Samad Olalekan, Anne Davidson, Ibrahim Enakere Emmanuel, Abayomi Oluwagbenga Olowoake, Israel Jigah Sokoamtu, Oluwaseun Olajuwon Ibrahim and Isaiah Effiong', 'Pending', '2021-02-10 07:49:14', '2021-02-10 10:04:41'),
(8, '2021-02-02', 'The suspects are: Akin Abiola Daramola, Stephen Augusti', 'Operatives of the Lagos Zonal Office of the Economic and Financial Crimes Commission, EFCC, have arrested 14 persons following series of intelligence on their alleged fraudulent activities. They were arrested at 1004 Estate, Victoria Island, Lagos on Thursday, February 4, 2021.\r\n\r\nThe suspects are: Akin Abiola Daramola, Stephen Augustine Terungwa, Oluwateru Abiodun Samson, Jeffrey Imariagbe Ehis, Uwajiala Odion Henry, Solomon Abidiran Pelumi, Adebayo Oluwatobi Isaac Olamide and Odunifa Joseph Opomulero.\r\n\r\nOthers are: Adulkarim Samad Olalekan, Anne Davidson, Ibrahim Enakere Emmanuel, Abayomi Oluwagbenga Olowoake, Israel Jigah Sokoamtu, Oluwaseun Olajuwon Ibrahim and Isaiah Effiong', 'Pending', '2021-02-10 08:57:43', '2021-02-10 08:57:43'),
(9, '2021-02-10', 'The suspects are: Akin Abiola Daramola, Stephen Augusti', 'Operatives of the Lagos Zonal Office of the Economic and Financial Crimes Commission, EFCC, have arrested 14 persons following series of intelligence on their alleged fraudulent activities. They were arrested at 1004 Estate, Victoria Island, Lagos on Thursday, February 4, 2021.\r\n\r\nThe suspects are: Akin Abiola Daramola, Stephen Augustine Terungwa, Oluwateru Abiodun Samson, Jeffrey Imariagbe Ehis, Uwajiala Odion Henry, Solomon Abidiran Pelumi, Adebayo Oluwatobi Isaac Olamide and Odunifa Joseph Opomulero.\r\n\r\nOthers are: Adulkarim Samad Olalekan, Anne Davidson, Ibrahim Enakere Emmanuel, Abayomi Oluwagbenga Olowoake, Israel Jigah Sokoamtu, Oluwaseun Olajuwon Ibrahim and Isaiah Effiong', 'Pending', '2021-02-10 08:59:49', '2021-02-10 08:59:49'),
(10, '2021-03-03', 'She also shared pictures of the car and a', 'Nollywood actress Didi Ekanem has shared the story of what happened before and after her 2020 car accident, Igbere TV reports.\r\n\r\nThe actress shared the story on Instagram on Tuesday.\r\n\r\nShe also shared pictures of the car and also a part of her body in the hospital.\r\n\r\n“This time last year, the devil tried it. I woke up on the morning of that day feeling very uneasy. As I was about to step out of the house, something told me to pray… then I started praying aggressively for one hour after which I got into my car and left.', 'Pending', '2021-02-10 10:06:31', '2021-02-10 10:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'itaforfrancis@gmail.com', NULL, '$2y$10$TwtqAZbhtmu4TPw9gRAbFepsYBnNRnnONF9Ear493KjoN7Xy7UkwS', NULL, '2021-02-09 20:21:18', '2021-02-09 20:21:18');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `todos`
--
ALTER TABLE `todos`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
