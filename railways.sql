-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2025 at 03:42 AM
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
-- Database: `railways`
--

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_19_071910_create_produks_table', 2),
(5, '2024_11_20_084245_create_slugs_table', 3),
(6, '2024_12_26_015724_create_produk_images_table', 4),
(7, '2024_12_26_032352_create_produk_image_slugs_table', 5),
(8, '2024_12_27_010358_create_produk_image_searchings_table', 6),
(9, '2024_12_27_012856_create_produk_image_searchings_table', 7),
(10, '2025_01_30_061426_create_produk_input_lengkaps_table', 8);

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
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'satu', 'satu deskripsi', NULL, NULL),
(2, 'dua ', 'dua deskripsi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk_images`
--

CREATE TABLE `produk_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_images`
--

INSERT INTO `produk_images` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'BgL9fPD2jQOMLCphhjp7xABcOjre5ACezZj9Lkus.jpg', 'anoaaaaaa edit', '2024-12-25 19:36:58', '2024-12-25 19:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `produk_image_searchings`
--

CREATE TABLE `produk_image_searchings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_image_searchings`
--

INSERT INTO `produk_image_searchings` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'WWgAmfRSFlcPllBSBv7b5t1ErnUz5XVgfLmjrvLJ.jpg', 'glass cleaner compress', '2024-12-26 18:38:26', '2024-12-26 18:38:26'),
(4, 'AifusxgJJbHBBPgX6SwDDrJTjbNwKHiFJZTVlBAe.png', 'glass cleaner 3 edit', '2024-12-26 18:48:29', '2024-12-26 18:49:20'),
(5, 'L8NlJNvg3VX4EudI7MKzQuCqlvswn5fmpUmIToLI.jpg', 'tiga tiga tiga', '2024-12-26 19:13:38', '2024-12-26 19:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `produk_image_slugs`
--

CREATE TABLE `produk_image_slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_image_slugs`
--

INSERT INTO `produk_image_slugs` (`id`, `image`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'QFbT8b2PvIq95RMT5GSFan0uJEzjMqbEiJuMRkRP.png', 'glasssssssssss clean anoa', 'glasssssssssss-clean-anoa', '2024-12-25 20:44:22', '2024-12-25 20:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `produk_input_lengkaps`
--

CREATE TABLE `produk_input_lengkaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_input_lengkaps`
--

INSERT INTO `produk_input_lengkaps` (`id`, `nama`, `category`, `created_at`, `updated_at`) VALUES
(1, 'satu', 'dua', NULL, NULL),
(2, 'tiga', 'empat', NULL, NULL);

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
('bsw9GfUAfSpAilaejRxo5NWcBNlrX3OoyPRoSArA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXdxUlBuWklGQW5Ya09GY0x4eUVvZ3lRZVZsaWY0M1ROeDZjNFhJaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1738222179),
('FP4k4Q67SBgmkTLKSiyfdhQGhc1i8oqFvrP5KUFz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEdZRElMZmhKYlB2UWRIc21MRldoUjlQWjlETmZtbGxQQXNVbEhXSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zbHVnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1735520571),
('l6hZmA9aHVVBjgWqYWgc4irPFWH3VaLuILYKhiBT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXhtY2toN3RvZTRQS1dUU2taNDUzOGdJQ29KMllwRlA2RjhPVkhzTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcnVkaW5wdXRsZW5na2FwL2NyZWF0ZSI7fX0=', 1738305612),
('UEp3Xbee51MAnJJyvBkFzY3HpwnZTGdRg3cMxjwd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0hTZ3F5MlI4alVVOTV1Rkc5S0hjcGZ1QUtiN1gzMHA5cmljVGQ3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1737681601),
('zjYiB4faoKe6p33yD2BGBpW2C7Lkc9j5x71sjrJs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFB6MlV3ekZubG4xUmtzMXp0dm02VHhhWHNKNDNUdU9QTElsT0kxaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcnVkIjt9fQ==', 1738550444);

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `judul`, `slug`, `isi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'empat satu', 'empat-satu', 'empat', '2024-11-20 18:22:46', '2024-12-10 01:09:39', '2024-12-10 01:09:39'),
(2, 'empat satu', 'empat-satu', 'empat', '2024-11-20 18:25:13', '2024-12-10 01:04:14', '2024-12-10 01:04:14'),
(3, 'hari jum\'at', 'hari-jumat', 'hari jum\'at besok liburrrrrr', '2024-11-22 02:05:46', '2024-12-10 00:54:32', '2024-12-10 00:54:32'),
(4, 'empat', 'empat', 'empat isi slug', '2024-12-01 17:47:06', '2024-12-10 00:54:17', '2024-12-10 00:54:17'),
(5, 'empat satu', 'empat-satu', 'empat', '2024-12-10 00:54:47', '2024-12-10 01:04:14', '2024-12-10 01:04:14'),
(6, 'empat satu', 'empat-satu', 'empat', '2024-12-10 00:58:53', '2024-12-10 01:04:13', '2024-12-10 01:04:13'),
(7, 'dua tiga', 'dua-tiga', 'dua', '2024-12-10 01:04:21', '2024-12-10 01:09:39', '2024-12-10 01:09:39'),
(8, 'judul satu', 'judul-satu', 'satu', '2024-12-10 01:09:46', '2024-12-10 01:10:23', NULL),
(9, 'dua dua', 'dua-dua', 'dua', '2024-12-10 01:09:55', '2024-12-10 01:09:55', NULL),
(10, 'judul tiga', 'judul-tiga', 'judul tiga', '2024-12-10 01:10:14', '2024-12-10 01:10:14', NULL),
(11, 'testsatu', 'testsatu', NULL, '2024-12-25 20:40:15', '2024-12-25 20:40:15', NULL),
(12, 'test dua', 'test-dua', NULL, '2024-12-25 20:40:25', '2024-12-25 20:40:25', NULL);

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
(1, 'Sam Kunde', 'durward19@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'lYapoC6aNv', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(2, 'Mr. Ethan Toy', 'gheidenreich@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'wqgPEHnAJB', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(3, 'Ressie Witting Sr.', 'mariam45@example.org', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'sQYvYR7JYV', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(4, 'Mr. Valentin Cassin', 'schaefer.daryl@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', '9LtZpYxoNk', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(5, 'Hilbert Schumm', 'ctromp@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'WX09A9OqJJ', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(6, 'Prof. Jamil Harris DVM', 'cayla.smith@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', '5p5JwasxIn', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(7, 'Libby Volkman', 'kris.nader@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'wtxdUQQidf', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(8, 'Eusebio Veum', 'everett.harris@example.org', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'W3VmUiW5ts', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(9, 'Eve Zulauf Sr.', 'felicita.cormier@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'Aks39wt02Q', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(10, 'Melyssa Kub', 'kellie.bauch@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'BUstJDx50H', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(11, 'Ms. Isabell Marks MD', 'spencer.lafayette@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'AE8opUAdJc', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(12, 'Monica Langosh I', 'adrian49@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'G8jZme5BQx', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(13, 'Jerel Thiel', 'eduardo64@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', '5r6HrJ2iDk', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(14, 'Jace Raynor', 'feest.kaylie@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'NVcq4oIFr3', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(15, 'Dr. Dulce Johnston PhD', 'fnitzsche@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'kl2qAGQDAQ', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(16, 'Prof. Misty Weimann', 'shayna41@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'NYNR5mfcoU', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(17, 'Newell Yundt Jr.', 'amueller@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'rKole5chzf', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(18, 'Delaney Mosciski', 'lziemann@example.net', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'TDLdykxj87', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(19, 'Dr. Araceli Windler DDS', 'janessa21@example.org', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'Kax8nSz3Ag', '2024-12-26 19:47:37', '2024-12-26 19:47:37'),
(20, 'Mr. Paxton Weimann Sr.', 'jones.allan@example.com', '2024-12-26 19:47:37', '$2y$12$Ym0eCKqtpvsXRetIjz/w5u4CP1mbcfIAlYSN9alnp.iG6RHJPqpVm', 'ysUFy8KfgH', '2024-12-26 19:47:37', '2024-12-26 19:47:37');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_images`
--
ALTER TABLE `produk_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_image_searchings`
--
ALTER TABLE `produk_image_searchings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_image_slugs`
--
ALTER TABLE `produk_image_slugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_input_lengkaps`
--
ALTER TABLE `produk_input_lengkaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk_images`
--
ALTER TABLE `produk_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk_image_searchings`
--
ALTER TABLE `produk_image_searchings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk_image_slugs`
--
ALTER TABLE `produk_image_slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk_input_lengkaps`
--
ALTER TABLE `produk_input_lengkaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
